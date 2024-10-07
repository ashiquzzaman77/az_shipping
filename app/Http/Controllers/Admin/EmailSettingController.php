<?php

namespace App\Http\Controllers\Admin;

use App\Models\EmailSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Admin\EmailSettingRequest;
use Illuminate\Support\Facades\Config;

class EmailSettingController extends Controller
{
    /**
     * The function sets middleware permissions for specific actions in a PHP class constructor.
     */
    public function __construct()
    {
        $this->middleware('permission:view email settings|create email settings|edit email settings|delete email settings|toggle status email settings')->only(['index', 'create', 'edit', 'destroy', 'toggleStatus']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = EmailSetting::latest('id')->get();
            return DataTables::of($data)
                ->addColumn('checkbox', function ($item) {
                    return '<div class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input emailDT-delete" id="manual_entry_' . $item->id . '" name="rowId[]" type="checkbox" value="' . $item->id . '"  />
                </div>';
                })
                ->addColumn('action', function ($row) {
                    $editUrl = route('admin.email-settings.edit', [$row->id]);
                    $deleteUrl = route('admin.email-settings.destroy', [$row->id]);
                    return '<a href="' . $editUrl . '" class="text-primary"><i class="fas fa-pen text-primary"></i></a>' .
                        '<a href="' . $deleteUrl . '" class="text-danger ms-4 delete"><i class="fas fa-trash-alt text-danger"></i></a>';
                })
                ->rawColumns(['action', 'checkbox'])
                ->make(true);
        }
        return view('admin.pages.email-settings.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.email-settings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmailSettingRequest $request)
    {
        EmailSetting::create([
            'mail_mailer'       => $request->mail_mailer,
            'mail_host'         => $request->mail_host,
            'mail_port'         => $request->mail_port,
            'mail_username'     => $request->mail_username,
            'mail_password'     => $request->mail_password,
            'mail_encryption'   => $request->mail_encryption,
            'mail_from_address' => $request->mail_from_address,
            // 'mail_from_name'    => $request->mail_from_name,
            'status'            => $request->status,
        ]);

        return redirect()->back()->with('success', 'Email setting created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // deprecated
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.pages.email-settings.edit', ['emailSetting' => EmailSetting::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmailSettingRequest $request, string $id)
    {
        $emailSetting = EmailSetting::findOrFail($id);

        $emailSetting->update([
            'mail_mailer'       => $request->mail_mailer,
            'mail_host'         => $request->mail_host,
            'mail_port'         => $request->mail_port,
            'mail_username'     => $request->mail_username,
            'mail_password'     => $request->mail_password,
            'mail_encryption'   => $request->mail_encryption,
            'mail_from_address' => $request->mail_from_address,
            'status'            => $request->status,
        ]);

        return redirect()->back()->with('success', 'Email setting updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        EmailSetting::findOrFail($id)->delete();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function toggleStatus(string $id)
    {
        $emailSetting = EmailSetting::findOrFail($id);
        $emailSetting->status = !$emailSetting->status;
        $emailSetting->save();
        return response()->json(['success' => $emailSetting->status]);
    }

    public function activeMailConfiguration()
    {
        return view('admin.pages.email-settings.active-mail-configuration', [
            'activeMailConfig' => EmailSetting::where('status', 1)->first()
        ]);
    }

    public function emailUpdateOrCreate(EmailSettingRequest $request)
    {
        $emailSetting = EmailSetting::where('status', 1)->first();
        if ($emailSetting) {
            $emailSetting->updateOrCreate(
                ['status' => 1],
                [
                    'mail_mailer'       => $request->mail_mailer,
                    'mail_host'         => $request->mail_host,
                    'mail_port'         => $request->mail_port,
                    'mail_username'     => $request->mail_username,
                    'mail_password'     => $request->mail_password,
                    'mail_encryption'   => $request->mail_encryption,
                    'mail_from_address' => $request->mail_from_address,
                    'status'            => $request->status,
                ]
            );

            //update mail configuration values using config facade
            Config::set('mail.mailer', $request->mail_mailer);
            Config::set('mail.host', $request->mail_host);
            Config::set('mail.port', $request->mail_port);
            Config::set('mail.username', $request->mail_username);
            Config::set('mail.password', $request->mail_password);
            Config::set('mail.encryption', $request->mail_encryption);
            Config::set('mail.from.address', $request->mail_from_address);

            //update mail configuration values in .env file
            $env = file_get_contents(base_path('.env'));
            $env = preg_replace('/MAIL_MAILER=(.*)/', 'MAIL_MAILER=' . $request->mail_mailer, $env);
            $env = preg_replace('/MAIL_HOST=(.*)/', 'MAIL_HOST=' . $request->mail_host, $env);
            $env = preg_replace('/MAIL_PORT=(.*)/', 'MAIL_PORT=' . $request->mail_port, $env);
            $env = preg_replace('/MAIL_USERNAME=(.*)/', 'MAIL_USERNAME=' . $request->mail_username, $env);
            $env = preg_replace('/MAIL_PASSWORD=(.*)/', 'MAIL_PASSWORD=' . $request->mail_password, $env);
            $env = preg_replace('/MAIL_ENCRYPTION=(.*)/', 'MAIL_ENCRYPTION=' . $request->mail_encryption, $env);
            $env = preg_replace('/MAIL_FROM_ADDRESS=(.*)/', 'MAIL_FROM_ADDRESS=' . $request->mail_from_address, $env);
            file_put_contents(base_path('.env'), $env);

            return redirect()->back()->with('success', 'Email configuration updated successfully.');
        }
    }

    public function sendTestMail(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns',
        ]);

        $emailSetting = EmailSetting::where('status', 1)->first();

        if (!$emailSetting) {
            return redirect()->back()->with('error', 'Please activate email configuration first.');
        }

        $email   = $request->email;
        $subject = 'Test Mail';
        $body    = 'This is a test mail from ' . config('app.name');

        Mail::raw($body, function ($message) use ($email, $subject, $emailSetting) {
            $message->to($email)
                ->subject($subject)
                ->from($emailSetting->mail_from_address);
        });

        return redirect()->back()->with('success', 'Test mail sent successfully.');
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ApplyPost;
use App\Models\Banner;
use App\Models\Contact;
use App\Models\Job;
use App\Models\Legal;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Mail;
// use Illuminate\Support\Facades\View;
// use Illuminate\Support\Facades\Notification;
// use App\Mail\AdminCourseRegistrationNotification;

// use App\Notifications\UserRegistrationNotification;

class HomeController extends Controller
{
    //Homepage
    public function index()
    {
        $banners = Banner::where('status', 'active')->latest()->get();
        return view('frontend.pages.home', compact('banners'));
    }

    //allTeam
    public function allTeam()
    {
        $teams = Team::where('status', 'active')->orderBy('order_team')->get();
        return view('frontend.pages.team', compact('teams'));
    }

    //legal Papers
    public function legalPapers()
    {
        $legals = Legal::where('status','active')->latest()->get();
        return view('frontend.pages.legal_papers',compact('legals'));
    }

    //allJob
    public function allJob()
    {
        $jobs = Job::where('status', 'active')->latest()->get();
        return view('frontend.pages.job', compact('jobs'));
    }

    public function jobDetails($id)
    {
        $job = Job::findOrfail($id);
        return view('frontend.pages.job_details', compact('job'));
    }

    public function jobApply($id)
    {
        $job = Job::findOrfail($id);
        return view('frontend.pages.job_apply', compact('job'));
    }

    public function dropCv()
    {
        $jobs = Job::latest()->get();
        return view('frontend.pages.drop_cv', compact('jobs'));
    }

    public function jobApplyEmployee(Request $request)
    {
        // Validation rules
        $validator = Validator::make($request->all(), [
            'job_id' => 'required|exists:jobs,id', // Ensure job exists
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'passport_number' => 'nullable|string|max:50', // Adjust as necessary
            'nationality' => 'required|string|max:100',
            'attachment' => 'nullable|file|mimes:pdf,doc,docx|max:2048', // File validation
            'agree' => 'required|accepted', // Ensure terms are accepted
        ]);

        // Check validation
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create a new job application
        $application = new ApplyPost();

        $application->job_id = $request->job_id;
        $application->name = $request->name;
        $application->email = $request->email;
        $application->phone = $request->phone;
        $application->passport_number = $request->passport_number;
        $application->nationality = $request->nationality;
        $application->agree = $request->agree;

        // Handle file upload
        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('attachments', $filename, 'public');
            $application->attachment = $filename;
        }

        // Save the application
        $application->save();

        // Redirect with success message
        return redirect()->route('all.job')->with('success', 'Application submitted successfully!');
    }

    //Contact
    public function contact()
    {
        return view('frontend.pages.contact');
    }

    public function contactStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:150',
            'email' => 'required|email|max:150',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string',
            'message' => 'nullable|string',
            'ip_address' => 'nullable|ip|max:100',
            // 'g-recaptcha-response' => ['required', new Recaptcha],
        ]);

        $typePrefix = ($request->type == 'contact') ? 'MSG' : 'AZS';
        $today = date('dmy');
        $lastCode = Contact::where('code', 'like', $typePrefix . '-' . $today . '%')
            ->orderBy('id', 'desc')
            ->first();

        $newNumber = $lastCode ? (int) explode('-', $lastCode->code)[2] + 1 : 1;
        $code = $typePrefix . '-' . $today . '-' . $newNumber;

        Contact::create([
            'code' => $code,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'ip_address' => request()->ip(),
        ]);

        // success('Thank You. We have received your message. We will contact with you very soon.');
        return redirect()->back()->with('success', 'Thank You. We have received your message. We will contact with you very soon');
    }

}

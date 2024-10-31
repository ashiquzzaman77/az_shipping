<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Job;
use App\Models\Team;
use App\Models\About;
use App\Models\Admin;
use App\Models\Legal;
use App\Models\Banner;
use App\Models\Choose;
use App\Models\Client;
use App\Models\Mision;
use App\Models\Policy;
use App\Models\Vision;
use App\Models\Contact;
use App\Models\Service;
use App\Models\ApplyPost;
use App\Models\Principle;
use App\Models\CeoMessage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactMessageReceived;
use Illuminate\Support\Facades\Mail;
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
        $services = Service::where('status', 'active')->latest()->get();
        $about = About::latest('id')->first();
        $clients = Client::where('status', 'active')->latest()->get();

        return view('frontend.pages.home', compact('banners', 'about', 'services', 'clients'));
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
        $legals = Legal::where('status', 'active')->latest()->get();
        return view('frontend.pages.legal_papers', compact('legals'));
    }

    //vision
    public function vision()
    {
        $missions = Mision::where('status', 'active')->latest()->limit(8)->get();
        $visions = Vision::where('status', 'active')->latest()->limit(8)->get();
        $about = About::latest('id')->first();

        return view('frontend.pages.vision', compact('visions', 'missions', 'about'));
    }

    //ceoMessage
    public function ceoMessage()
    {
        $message = CeoMessage::latest('id')->first();
        return view('frontend.pages.ceo_message', compact('message'));
    }

    //why Choose Us
    public function whyChooseUs()
    {
        $choose = Choose::where('status', 'active')->latest('id')->first();
        return view('frontend.pages.choose', compact('choose'));
    }

    //serviceDetails
    public function serviceDetails($slug)
    {
        $serviceItem = Service::where('slug', $slug)->firstOrFail();
        $services = Service::where('status', 'active')->latest()->get();

        return view('frontend.pages.service_details', compact('serviceItem', 'services'));
    }

    //principleDetails
    public function principleDetails($slug)
    {
        $principleItem = Principle::where('slug', $slug)->firstOrFail();
        $services = Service::where('status', 'active')->latest()->get();

        return view('frontend.pages.principle_details', compact('principleItem', 'services'));
    }

    //about
    public function about()
    {
        $missions = Mision::where('status', 'active')->latest()->limit(8)->get();
        $visions = Vision::where('status', 'active')->latest()->limit(8)->get();
        $about = About::latest('id')->first();

        return view('frontend.pages.about', compact('visions', 'missions', 'about'));
    }

    //allJob
    public function allJob()
    {
        $jobs = Job::where('status', 'active')->latest()->get();
        return view('frontend.pages.job', compact('jobs'));
    }

    //jobDetails
    public function jobDetails($id)
    {
        $job = Job::findOrfail($id);
        return view('frontend.pages.job_details', compact('job'));
    }

    //jobApply
    public function jobApply($id)
    {
        $job = Job::findOrfail($id);
        $policy = Policy::where('status', 'active')->latest('id')->first();

        return view('frontend.pages.job_apply', compact('job', 'policy'));
    }

    //dropCv
    public function dropCv()
    {
        $jobs = Job::latest()->get();
        return view('frontend.pages.drop_cv', compact('jobs'));
    }

    //jobApplyEmployee
    public function jobApplyEmployee(Request $request)
    {
        // Validation rules
        $validator = Validator::make($request->all(), [
            'job_id' => 'required|exists:jobs,id', // Ensure job exists
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'passport_number' => 'required|string|max:50', // Adjust as necessary
            'cdc_number' => 'required|string|max:50', // Adjust as necessary
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
        $application->cdc_number = $request->cdc_number;
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
            'subject' => 'required|string',
            'message' => 'required|string|max:1200',
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

        $contact = Contact::create([
            'code' => $code,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
            'ip_address' => request()->ip(),
        ]);

        $admins = Admin::where('mail_status', 'mail')->get();

        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new ContactMessageReceived($contact));
        }

        return redirect()->back()->with('success', 'Thank You. We have received your message. We will contact with you very soon');
    }
}

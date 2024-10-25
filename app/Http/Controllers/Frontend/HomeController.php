<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ApplyPost;
use App\Models\Banner;
use App\Models\Job;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Mail;
// use Illuminate\Support\Facades\View;
// use App\Models\UserCourseRegistration;
// use Illuminate\Support\Facades\Validator;
// use Illuminate\Support\Facades\Notification;
// use App\Mail\AdminCourseRegistrationNotification;
// use App\Models\Event;
// use App\Models\EventPage;
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

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\CoursePayment;
use App\Models\User;
use App\Models\UserCourseRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    //All Registration
    public function registration()
    {
        $registrations = UserCourseRegistration::with('courseName')->where('payment_type', 'unpaid')->latest()->get();
        return view('admin.pages.registration.registration', compact('registrations'));
    }

    //registration Pending
    public function registrationPending()
    {
        $registrations = UserCourseRegistration::with('courseName')->where('payment_type', 'pending')->latest()->get();
        return view('admin.pages.registration.registration_pending', compact('registrations'));
    }

    //registration Paid
    public function registrationPaid()
    {
        $registrations = UserCourseRegistration::with('courseName')->whereNotNull('amount')->latest()->get();
        return view('admin.pages.registration.registration_paid', compact('registrations'));
    }

    public function DeleteRegistration($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Registration Person Delete Successfully');
    }

    public function registrationUpdate(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'payment_type' => 'required|string',
            'course_amount' => 'required|numeric',
        ]);

        // Find and update the registration
        $registration = UserCourseRegistration::findOrFail($id);

        $registration->update([
            'payment_type' => $request->payment_type,
            'course_amount' => $request->course_amount,
        ]);

        return redirect()->route('admin.all.registration')->with('success', 'Updated successfully');
    }

    public function registrationCoursePaid(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'payment_type' => 'required|string',
        ]);

        // Find and update the registration
        $registration = UserCourseRegistration::findOrFail($id);

        $registration->update([
            'payment_type' => $request->payment_type,
            'updated_at' => now(),
        ]);

        // Prepare data for email
        $data = [
            'name' => $registration->name,
            'email' => $registration->email,
            'payment_type' => $registration->payment_type,
            'amount' => $registration->amount,
            'course_id' => $registration->courseName->name,
        ];

        // Send Mail
        Mail::to($registration->email)->send(new CoursePayment($data));

        return redirect()->back()->with('success', 'Updated successfully');
    }

}

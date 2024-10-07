<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\UserCourseRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseEnrollController extends Controller
{
    
    public function AddToCartCourse(Request $request)
    {
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $courseId = $request->course_id;
            $courseType = $request->course_type;

            // Check if the course is offline and if the user has already added this course to their cart
            if ($courseType === 'offline') {
                $existingRegistration = UserCourseRegistration::where('user_id', $userId)
                    ->where('course_id', $courseId)
                    ->where('course_type', 'offline')
                    ->first();

                if ($existingRegistration) {
                    return response()->json(['error' => 'You have already registered for this course.']);
                }
            }

            // Insert the new course registration
            UserCourseRegistration::create([
                'user_id' => $userId,
                'name' => Auth::user()->name,
                'email' => Auth::user()->email,
                'phone' => Auth::user()->phone,
                'course_section_id' => $request->course_section_id,
                'course_category_id' => $request->course_category_id,
                'course_type' => $courseType,
                'course_amount' => $request->course_amount,
                'course_id' => $courseId,
                'course_register_date' => now(),
            ]);

            return response()->json(['success' => 'Successfully registered for this course']);
        } else {
            return response()->json([
                'error' => 'Please log in first',
                'redirect' => route('login'), // Provide the login route for redirection
            ]);
        }
    }

    

    public function AddToCartOnlineCourse(Request $request)
    {
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $courseId = $request->course_id;
            $courseType = 'online';

            // Check if the user has already added this online course to their cart
            $existingRegistration = UserCourseRegistration::where('user_id', $userId)
                ->where('course_id', $courseId)
                ->where('course_type', $courseType)
                ->first();

            if ($existingRegistration) {
                return response()->json(['error' => 'You have already added this online course to your cart.']);
            }

            // Insert the new course registration
            UserCourseRegistration::create([
                'user_id' => $userId,
                'name' => Auth::user()->name,
                'email' => Auth::user()->email,
                'phone' => Auth::user()->phone,
                'course_section_id' => $request->course_section_id,
                'course_category_id' => $request->course_category_id,
                'course_type' => $courseType,
                'course_amount' => $request->course_amount,
                'course_id' => $courseId,
                'course_register_date' => now(),
            ]);

            return response()->json(['success' => 'Successfully register this course']);
        } else {
            return response()->json([
                'error' => 'Please log in first',
                'redirect' => route('login'), // Provide the login route for redirection
            ]);
        }
    }

}

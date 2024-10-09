<?php

namespace App\Http\Controllers\Frontend;

use id;
// use App\Models\Faq;
// use App\Models\User;
use App\Models\Admin;
// use App\Models\Course;
// use App\Models\AboutUs;
// use App\Models\Contact;
// use App\Models\Service;
// use App\Models\Setting;
// use App\Models\HomePage;
// use App\Models\NewsTrend;
// use App\Models\CourseQuery;
// use App\Models\FaqCategory;
use Illuminate\Support\Str;
use App\Mail\CourseRegister;
use Illuminate\Http\Request;
// use App\Models\CourseOutline;
// use App\Models\CourseProject;
// use App\Models\CourseSection;
// use App\Models\PrivacyPolicy;
// use App\Models\CourseCategory;
// use App\Models\CourseSchedule;
// use App\Models\TermsCondition;
// use App\Models\CourseCurriculum;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Support\Facades\Auth;
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
        $banners = Banner::where('status','active')->latest()->get();
        return view('frontend.pages.home',compact('banners'));
    }
    
}

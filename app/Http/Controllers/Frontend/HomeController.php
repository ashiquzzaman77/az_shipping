<?php

namespace App\Http\Controllers\Frontend;

use id;
use App\Models\Faq;
use App\Models\User;
use App\Models\Admin;
use App\Models\Course;
use App\Models\AboutUs;
use App\Models\Contact;
use App\Models\Service;
use App\Models\Setting;
use App\Models\HomePage;
use App\Models\NewsTrend;
use App\Models\CourseQuery;
use App\Models\FaqCategory;
use Illuminate\Support\Str;
use App\Mail\CourseRegister;
use Illuminate\Http\Request;
use App\Models\CourseOutline;
use App\Models\CourseProject;
use App\Models\CourseSection;
use App\Models\PrivacyPolicy;
use App\Models\CourseCategory;
use App\Models\CourseSchedule;
use App\Models\TermsCondition;
use App\Models\CourseCurriculum;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;
use App\Models\UserCourseRegistration;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;
use App\Mail\AdminCourseRegistrationNotification;
use App\Models\Event;
use App\Models\EventPage;
use App\Notifications\UserRegistrationNotification;

class HomeController extends Controller
{

    //Homepage
    public function index()
    {
        $homePage = HomePage::with('courseOneHomePage', 'courseTwoHomePage', 'courseThreeHomePage')->first();

        $courses = Course::latest()->get();
        $courseCategorys = CourseCategory::latest()->get();

        $courseSections = CourseSection::orderBy('name', 'ASC')->latest()->get();

        // return view('frontend.pages.home', compact('homePage', 'courseCategorys', 'courses'));

        return view('frontend.pages.home', compact('homePage', 'courseCategorys', 'courseSections', 'courses'));
    }

    //All Course
    // public function allCourses()
    // {
    //     $courses = Course::latest()->get();
    //     $courseSections = CourseSection::latest()->get();
    //     $courseCategories = CourseCategory::latest()->get();
    //     return view('frontend.pages.course.allCourses', compact('courses', 'courseSections', 'courseCategories'));
    // }

    //event
    public function event()
    {
        $eventPage = EventPage::latest('id')->first();
        $events = Event::latest()->get();

        return view('frontend.pages.event.allevent',compact('eventPage','events'));
    }

    //eventDetails
    public function eventDetails($slug)
    {
        $event = Event::where('slug' , $slug)->first();
        return view('frontend.pages.event.eventDetails',compact('event'));
    }

    //event Registration
    public function eventRegistration()
    {
        $categorys = CourseCategory::latest()->get();
        return view('frontend.pages.event.eventRegistration',compact('categorys'));
    }

    

    public function allCourses(Request $request)
    {
        $sectionId = $request->input('section');
        $categoryId = $request->input('category');

        // Fetch all courses if no section is specified
        $courses = Course::latest();

        // Apply section filter if section ID is provided
        if ($sectionId) {
            $courses->where('course_section_id', $sectionId);
        }

        if ($categoryId) {
            $courses->where('course_category_id', $categoryId);
        }

        $courses = $courses->get();
        $courseSections = CourseSection::latest()->get();
        $courseCategories = CourseCategory::latest()->get();

        return view('frontend.pages.course.allCourses', compact('courses', 'courseSections', 'courseCategories'));
    }

    //courseDetails
    public function courseDetails($id, $slug)
    {
        $coursedetail = Course::find($id);

        $relatedcourses = Course::latest()->get();

        $courseCurriculams = CourseCurriculum::where('course_id', $coursedetail->id)->get();

        $courseSchedules = CourseSchedule::where('course_id', $coursedetail->id)->get();

        $courseOutlines = CourseOutline::where('course_id', $coursedetail->id)->get();

        $courseProjects = CourseProject::where('course_id', $coursedetail->id)->get();

        return view('frontend.pages.course.allCoursesDetails', compact('relatedcourses', 'coursedetail', 'courseCurriculams', 'courseSchedules', 'courseOutlines', 'courseProjects'));
    }

    //courseSearchAll

    // public function courseSearchAll(Request $request)
    // {
    //     // $request->validate(['course_name_search' => "required"]);

    //     $item = $request->course_name_search;
    //     $itemSection = $request->course_section;
    //     $itemCategory = $request->course_category;

    //     $courses = Course::where('name', 'LIKE', "%$item%")->get();
    //     $courses = CourseSection::where('name', 'LIKE', "%$itemSection%")->get();
    //     $courses = CourseCategory::where('name', 'LIKE', "%$itemCategory%")->get();

    //     return view('frontend.pages.course.course_all_search', compact('courses', 'item','itemSection','itemCategory'));

    // }

    // public function courseSearchAll(Request $request)
    // {
    //     $item = $request->input('course_name_search');

    //     $query = Course::query();

    //     if ($item) {
    //         $query->where('name', 'LIKE', "%$item%");
    //     }

    //     $courses = $query->get();

    //     return view('frontend.pages.course.course_all_search', compact('courses', 'item'));
    // }

    public function searchCourseNAme(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $courses = Course::where('name', 'like', "%{$query}%")
                ->latest()
                ->get();
        } else {
            $courses = Course::latest()->get();
        }

        return view('frontend.pages.course.course_all_search', compact('courses'))->render();
    }

    //All Service
    public function allService()
    {
        $services = Service::latest()->get();
        return view('frontend.pages.service.allService', compact('services'));
    }


    //appointment
    public function appointment()
    {
        // $query= 'counselor';
        // $data = [
        //     'counselors' => Admin::where('role', 'like', "%{$query}%")->get(), // Replace 'role' with the actual column name
        // ];
        return view('frontend.pages.appointment');
    }

    //courseServiceDetails
    public function courseServiceDetails($id, $slug)
    {
        $courseServicedetail = CourseSection::find($id);

        $courseSections = CourseSection::latest()->get();
        $courseCategories = CourseCategory::latest()->get();

        $courses = Course::where('course_section_id', $courseServicedetail->id)->get();
        return view('frontend.pages.service.allCoursesService', compact('courses', 'courseSections', 'courseCategories'));
    }

    // Search Service
    public function search(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $services = Service::where('name', 'like', "%{$query}%")
                ->latest()
                ->get();
        } else {
            $services = Service::latest()->get();
        }

        return view('frontend.pages.service.service_search', compact('services'))->render();
    }

    //searchCategory
    public function searchCategory(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $courses = CourseCategory::where('name', 'like', "%{$query}%")
                ->latest()
                ->get();
        } else {
            $courses = CourseCategory::latest()->get();
        }

        return view('frontend.pages.category.category_search', compact('courses'))->render();
    }

    public function GetRegisterCategory($course_section_id)
    {
        $cat = CourseCategory::where('course_section_id', $course_section_id)->orderBy('name', 'ASC')->get();
        return json_encode($cat);
    }

    public function GetRegisterCourse($course_category_id)
    {
        $course = Course::where('course_category_id', $course_category_id)->orderBy('name', 'ASC')->get();
        return json_encode($course);
    }

    public function courseRegistration()
    {
        $courseSections = CourseSection::latest()->get();
        return view('frontend.pages.course.courseRegistration', compact('courseSections'));
    }

    // Updated `courseRegistrationStore` method
    public function courseRegistrationStore(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:100',
            'phone' => 'required|string|max:15',
            'course_section_id' => 'required|integer',
            'course_category_id' => 'required|integer',
            'course_id' => 'required|integer',
            'course_type' => 'required|string',
            'course_register_date' => 'required|date',
            'address' => 'nullable|string',
            'password' => 'nullable|string|min:8',
        ]);

        // Check if user exists by email
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            // Create a new user if not exists
            $user_id = User::insertGetId([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'password' => Hash::make($request->phone),
                'activation_code' => Str::random(32), // Generate a random activation code
                'created_at' => now(),
            ]);

            $user = User::findOrFail($user_id);
            // $course = Course::findOrFail($request->course_id);
            // Send email for new user creation
            $data = [
                'name' => $user->name,
                'email' => $user->email,
                'phone' => $user->phone,
                // 'course_name' => $course->name,
            ];
            Mail::to($user->email)->send(new CourseRegister($data));
        }

        // Check if the user has already registered for the same course
        $existingRegistration = UserCourseRegistration::where('user_id', $user->id)
            ->where('course_id', $request->course_id)
            ->first();

        if ($existingRegistration) {
            return redirect()->back()->with('error', 'You have already registered for this course.');
        }

        // Create the course registration
        UserCourseRegistration::create([
            'user_id' => $user->id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'call_me' => $request->call_me,
            'course_section_id' => $request->course_section_id,
            'course_category_id' => $request->course_category_id,
            'course_id' => $request->course_id,
            'course_type' => $request->course_type,
            'location' => $request->location,
            'course_register_date' => $request->course_register_date,
            'created_at' => now(),
        ]);

        // Fetch course information
        $course = Course::findOrFail($request->course_id);
        $data = [
            'name' => $user->name,
            'email' => $user->email,
            'phone' => $user->phone,
            'course_name' => $course->name,
        ];
        // Send email after registration
        Mail::to($user->email)->send(new CourseRegister($data));

        //Notification


        $admins = Admin::where('mail_status', 'mail')->get();

        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new AdminCourseRegistrationNotification($user, $course));
        }

        $admin = Admin::where('status', 'active')->get();
        Notification::send($admin, new UserRegistrationNotification($request->name));
        //Notification

        // Redirect with success message
        return redirect()->route('login')->with('success', 'Course Registered Successfully! Please check your email.');
    }

    //courseQueryStore
    public function courseQueryStore(Request $request)
    {
        CourseQuery::insert([

            'course_id' => $request->course_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
            'call' => $request->call,
            'ip_address' => $request->ip(),
            'created_at' => now(),

        ]);

        return redirect()->back()->with('success', 'Message Send Successfully!!');
    }

    //About
    public function about()
    {
        $about = AboutUs::find(1);
        return view('frontend.pages.about', compact('about'));
    }

    //Contact
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    //Contact Store
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
        ], [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'name.max' => 'The name may not be greater than :max characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'The email may not be greater than :max characters.',
            'phone.string' => 'The phone must be a string.',
            'phone.max' => 'The phone may not be greater than :max characters.',
            'phone.regex' => 'The phone field must contain only numeric characters and must be proper number.',
            'subject.string' => 'The subject must be a string.',
            'message.string' => 'The message must be a string.',
            'ip_address.ip' => 'Please enter a valid IP address.',
            'ip_address.max' => 'The IP address may not be greater than :max characters.',
            // 'g-recaptcha-response.required' => 'The reCAPTCHA field is required.',
        ]);

        if ($request->filled('phone')) {
            $validator->sometimes('phone', 'regex:/^[0-9]+$/i', function ($input) {
                return $input->phone;
            });
        }

        // if ($validator->fails()) {
        //     foreach ($validator->messages()->all() as $message) {
        //         Session::flash('error',$message);
        //         // toaster()->error($message, 'Failed', ['timeOut' => 3000]);
        //         // error($message, 'Failed', ['timeOut' => 3000]);

        //     }
        //     return redirect()->back()->withInput();
        // }

        $typePrefix = ($request->type == 'contact') ? 'MSG' : 'SPRT';
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

    public function Support()
    {
        $data['setting'] = Setting::latest()->first();
        return view('frontend.pages.contact.support', $data);
    }

    // Product Seach
    public function courseSearch(Request $request)
    {

        $request->validate(["search" => "required"]);

        $item = $request->search;
        if (Course::where('name', $item)->first()) {
            $data['coursedetail'] = Course::where('name', $item)->first();

            $data['courses'] = Course::latest()->get();

            $data['courseCurriculams'] = CourseCurriculum::where('course_id', $data['coursedetail']->id)->get();

            return view('frontend.pages.course.allCoursesDetails', $data);
        } else {

            return redirect()->back();
        }
    } // end method

    /// Advance Search Options
    public function globalSearch(Request $request)
    {
        $query = $request->get('term', '');
        // $data['products'] = Product::join('brands', 'products.brand_id', '=', 'brands.id')
        //     ->where('products.name', 'LIKE', '%' . $query . '%')
        //     ->where('products.product_status', 'product')
        //     ->where('brands.status', 'active')
        //     ->limit(10)
        //     ->get(['products.id', 'products.name', 'products.slug', 'products.thumbnail', 'products.price', 'products.discount', 'products.rfq', 'products.qty', 'products.stock']);

        // $data['solutions'] = SolutionDetail::where('name', 'LIKE', '%' . $query . '%')->limit(5)->get(['id', 'name']);
        // $data['industries'] = Industry::where('title', 'LIKE', '%' . $query . '%')->limit(5)->get(['id', 'title']);
        $data['blogs'] = NewsTrend::where('title', 'LIKE', '%' . $query . '%')->limit(5)->get(['id', 'title']);
        // $data['categorys'] = Category::where('title', 'LIKE', '%' . $query . '%')->limit(2)->get(['id', 'title', 'slug']);
        // $data['subcategorys'] = SubCategory::where('title', 'LIKE', '%' . $query . '%')->limit(2)->get(['id', 'title', 'slug']);
        // $data['subsubcategorys'] = SubSubCategory::where('title', 'LIKE', '%' . $query . '%')->limit(1)->get(['id', 'title', 'slug']);
        $data['brands'] = Course::where('name', 'LIKE', '%' . $query . '%')->get(['id', 'name', 'slug']);
        // $data['storys'] = NewsTrend::where('title', 'LIKE', '%' . $query . '%')->limit(5)->get(['id', 'title']);
        // $data['tech_glossys'] = NewsTrend::where('title', 'LIKE', '%' . $query . '%')->limit(5)->get(['id', 'title']);

        return response()->json(view('frontend.partials.search', $data)->render());
    } // end method

    public function TechGlossyDetails($id)
    {
        $data['techglossy'] = NewsTrend::where('id', $id)->firstOrFail();
        //$data['industry'] = Industry::where('id',$id)->first();
        //$data['industry_page'] = IndustryPage::where('industry_id', $data['industry']->id)->get();
        $data['storys'] = NewsTrend::inRandomOrder()->limit(7)->get();
        return view('frontend.pages.tech.techglossy_details', $data);
    }

    public function StoryDetails($id)
    {

        $data['blog'] = NewsTrend::where('id', $id)->firstOrFail();
        $data['storys'] = NewsTrend::inRandomOrder()->limit(4)->get();
        return view('frontend.pages.story.story_details', $data);
    }

    public function faq()
    {

        $faqCats = FaqCategory::latest()->get();

        return view('frontend.pages.faq', compact('faqCats'));
    }

    //serviceDetails
    public function serviceDetails($id, $slug)
    {
        $service = Service::with('courses')->find($id);
        $courses = $service->courses;
        $courseSections = CourseCategory::latest('id')->get();
        return view('frontend.pages.service.service', compact('service', 'courses', 'courseSections'));
    }

    // All Category
    public function allCategory()
    {
        $courseSections = CourseSection::latest()->get();
        return view('frontend.pages.category.allCategory', compact('courseSections'));
    }

    //categoryDetails
    public function categoryDetails($id, $slug)
    {
        $category = CourseCategory::with('courses')->find($id);
        $courses = $category->courses;
        $courseSections = CourseCategory::latest('id')->get();

        return view('frontend.pages.category.category', compact('category', 'courses', 'courseSections'));
    }

    public function GetCategory($course_section_id)
    {
        $subCat = CourseCategory::where('course_section_id', $course_section_id)->orderBy('name', 'ASC')->get();
        return json_encode($subCat);
    }

    public function getCourseName(Request $request)
    {
        $course_category_id = $request->course_category_id;
        $courses = Course::whereNotNull('course_category_id')->where('course_category_id', $course_category_id)
            ->orderBy('name', 'ASC')
            ->get();

        // Check if courses are found
        if ($courses->isEmpty()) {
            return response()->json(['error' => 'No courses found for the selected category.']);
        }

        // Render the view with the found courses
        $table_view = View::make('frontend.pages.service.partials.course_table', compact('courses'))->render();

        return response()->json(['table_view' => $table_view]);
    }

    public function GetCourse($course_section_id)
    {
        $course = Course::where('course_section_id', $course_section_id)->get();
        return json_encode($course);
    }

    public function termsCondition()
    {
        $terms = TermsCondition::where('status', 'active')->first();

        return view('frontend.pages.termsCondition', compact('terms'));
    }

    public function privacyPolicy()
    {
        $privacy = PrivacyPolicy::where('status', 'active')->first();
        return view('frontend.pages.privacyPolicy', compact('privacy'));
    }

    //searchCourse
    // public function searchCourse(Request $request)
    // {
    //     // Validate the request
    //     // $request->validate([
    //     //     'course_type' => 'required',
    //     //     'course_section_id' => 'required',
    //     //     'course_category_id' => 'required',
    //     //     'month' => 'required',
    //     //     'year' => 'required',
    //     // ], [
    //     //     'course_type.required' => 'Please select a Course Type.',
    //     //     'course_section_id.required' => 'Please select a Course Section.',
    //     //     'course_category_id.required' => 'Please select a Category.',
    //     //     'month.required' => 'Please select a Month.',
    //     //     'year.required' => 'Please select a Year.',
    //     // ]);

    //     // Retrieve input values
    //     $courseType = $request->input('course_type');
    //     $sectionId = $request->input('course_section_id');
    //     $categoryId = $request->input('course_category_id');
    //     $month = $request->input('month');
    //     $year = $request->input('year');

    //     // Query courses based on the input criteria
    //     $courses = Course::where('course_type', $courseType)
    //         ->where('course_section_id', $sectionId)
    //         ->where('course_category_id', $categoryId)
    //         ->whereMonth('created_at', date('m', strtotime($month)))
    //         ->whereYear('created_at', $year)
    //         ->get();

    //     if ($courses->isEmpty()) {
    //         // return redirect()->back()->with('error', 'No courses found matching the criteria.');
    //         return view('frontend.pages.course.search_course_empty');
    //     }

    //     return view('frontend.pages.course.search_course', compact('courses'));
    // }

    public function searchCourse(Request $request)
    {
        //Validate the request

        // $request->validate([
        //     // 'course_type' => 'required',
        //     // 'course_section_id' => 'required',
        //     'course_category_id' => 'required',
        //     // 'month' => 'required',
        //     // 'year' => 'required',
        // ], [
        //     // 'course_type.required' => 'Please select a Course Type.',
        //     // 'course_section_id.required' => 'Please select a Course Section.',
        //     'course_category_id.required' => 'Please select a Category.',
        //     // 'month.required' => 'Please select a Month.',
        //     // 'year.required' => 'Please select a Year.',
        // ]);

        // Retrieve input values
        $courseType = $request->input('course_type');
        $sectionId = $request->input('course_section_id');
        $categoryId = $request->input('course_category_id');
        $month = $request->input('month');
        $year = $request->input('year');

        // Start building the query
        $query = Course::query();

        // Add filters conditionally
        if ($courseType) {
            $query->where('course_type', $courseType);
        }

        if ($sectionId) {
            $query->where('course_section_id', $sectionId);
        }

        if ($categoryId) {
            $query->where('course_category_id', $categoryId);
        }

        if ($month && $year) {
            $formattedMonth = date('m', strtotime($month));
            $query->whereMonth('created_at', $formattedMonth)
                ->whereYear('created_at', $year);
        } elseif ($month) {
            $formattedMonth = date('m', strtotime($month));
            $query->whereMonth('created_at', $formattedMonth);
        } elseif ($year) {
            $query->whereYear('created_at', $year);
        }

        // Execute the query and get results
        $courses = $query->get();

        // Return view based on the results
        if ($courses->isEmpty()) {
            return view('frontend.pages.course.search_course_empty')->with('message', 'No courses found matching the criteria.');
        }

        return view('frontend.pages.course.search_course', compact('courses'));
    }

    //RegisterCourseList
    public function RegisterCourseList()
    {
        $registerCourse = UserCourseRegistration::with('courseName')->where('user_id', Auth::id())->get();
        return view('user.course.register_course', compact('registerCourse'));
    }

    //RegisterCourseDetails
    public function RegisterCourseDetails($course_id)
    {
        $course = Course::with('courseCurriculams')->where('id', $course_id)->first();
        return view('user.course.register_course_details', compact('course'));
    }

    //Payment Course
    public function PaymentCourse(Request $request, $id)
    {
        // Validate the input
        $request->validate([
            'payment_method' => 'required|string',
            'amount' => 'required|string',
            'transcation_id' => 'required|string',
            'note' => 'nullable|string',
        ]);

        // Find the registration by ID
        $registration = UserCourseRegistration::findOrFail($id);

        // Update the registration details
        $registration->update([
            'payment_method' => $request->payment_method,
            'amount' => $request->amount,
            'transcation_id' => $request->transcation_id,
            'note' => $request->note,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Payment details have been submitted successfully.');
    }

    public function verifyEmail($activation_code)
    {
        $user = User::where('activation_code', $activation_code)->first();

        if (!$user) {
            return redirect('/login')->with('error', 'Invalid activation code.');
        }

        $user->email_verified_at = now();
        $user->activation_code = null;
        $user->save();

        return redirect('/login')->with('success', 'Email verified successfully. You can now login.');
    }

    
}

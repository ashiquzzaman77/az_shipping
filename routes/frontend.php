<?php

use App\Http\Controllers\Admin\NewsLetterController;
use App\Http\Controllers\Frontend\CourseEnrollController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

//Homepage
Route::get('/', [HomeController::class, 'index'])->name('homepage');

//Training
Route::get('/training', [HomeController::class, 'training'])->name('training');

//Course All & Deatils Start
Route::get('/all-courses', [HomeController::class, 'allCourses'])->name('courses.all');
Route::get('/course/{id}/{slug}', [HomeController::class, 'courseDetails']);

// Route::post('/course-search', [HomeController::class, 'courseSearchAll'])->name('courses.all.search');
Route::get('/courses/search', [HomeController::class, 'searchCourseNAme'])->name('courses.search');

//courseService
Route::get('/service', [HomeController::class, 'allService'])->name('service.all');
Route::get('/course-service/{id}/{slug}', [HomeController::class, 'courseServiceDetails']);
Route::get('/services/search', [HomeController::class, 'search'])->name('services.search');

//courseCategoryDetails
// Route::get('/course/category/{id}/{slug}', [HomeController::class, 'courseCategoryDetails']);


// Course Registration Start
Route::get('/course-registration', [HomeController::class, 'courseRegistration'])->name('course.registration');
Route::post('/course-registration/store', [HomeController::class, 'courseRegistrationStore'])->name('course.registration.store');
Route::controller(HomeController::class)->group(function () {

    Route::get('/category-register/ajax/{course_section_id}', 'GetRegisterCategory');
    Route::get('/course-get/ajax/{course_category_id}', 'GetRegisterCourse');

});
// Course Registration End

//Course Query
Route::post('/course-query', [HomeController::class, 'courseQueryStore'])->name('course.query.store');

Route::post('/contact_us', [HomeController::class, 'contactStore'])->name('contact.store');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/appointment', [HomeController::class, 'appointment'])->name('appointment');

Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
// Route::get('/event', [HomeController::class, 'event'])->name('event');


//serviceDetails
Route::get('/services/details/{id}/{slug}', [HomeController::class, 'serviceDetails']);

//categoryDetails
Route::get('/category', [HomeController::class, 'allCategory'])->name('all.category');
Route::get('/category/details/{id}/{slug}', [HomeController::class, 'categoryDetails']);
Route::get('/category/search', [HomeController::class, 'searchCategory'])->name('category.search');

Route::get('/category/ajax/{course_section_id}', [HomeController::class, 'GetCategory']);
Route::get('/course/ajax', [HomeController::class, 'getCourseName']);

Route::get('/course-get/ajax/{course_section_id}', [HomeController::class, 'GetCourse']);

Route::get('/terms-and-condition', [HomeController::class, 'termsCondition'])->name('termsCondition');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('privacyPolicy');

Route::get('/contact/location', [HomeController::class, 'location'])->name('location');
Route::get('support', [HomeController::class, 'Support'])->name('support');

// Route::get('/newsletter', [NewsletterController::class, 'newsletter']);
// Route::post('/newsletter/store', [NewsLetterController::class, 'store'])->name('newsletter.store');

//About
Route::get('/about-us', [HomeController::class, 'about'])->name('about');

//Event
Route::get('/events', [HomeController::class, 'event'])->name('event');
Route::get('/events/{id}', [HomeController::class, 'eventDetails'])->name('event.details');
Route::get('/event/registration', [HomeController::class, 'eventRegistration'])->name('event.registration');


//Course Enroll
Route::controller(CourseEnrollController::class)->group(function () {
    Route::post('/cart-store', 'AddToCartCourse');
    Route::post('/cart-store/online-price', 'AddToCartOnlineCourse');
});

//Course Search By Home Page
Route::post('/search-course', [HomeController::class, 'SearchCourse'])->name('search.course');

// User Register Course List
Route::middleware('auth')->group(function () {
    Route::get('/user/register/course/list', [HomeController::class, 'RegisterCourseList'])->name('user.register.course.list');
    Route::get('/user/register/course/details/{course_id}', [HomeController::class, 'RegisterCourseDetails'])->name('register.course.details');

    // Payment
    Route::post('/course/payment/{id}', [HomeController::class, 'PaymentCourse'])->name('course.payment');


});

Route::get('/verify/{activation_code}', [HomeController::class, 'verifyEmail'])
    ->name('verification.verify');

// Route::get('/verify/{activation_code}', 'App\Http\Controllers\Auth\VerificationController@verify')->name('verification.verify');
// In routes/web.php or routes/api.php




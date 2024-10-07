<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseQuery;
use Illuminate\Http\Request;

class CourseQueryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $querys = CourseQuery::latest()->get();
        return view('admin.pages.course_query.index', compact('querys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::latest()->get();
        return view('admin.pages.course_query.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        CourseQuery::insert([

            'course_id' => $request->course_id,

            'name' => $request->name,
            'email' => $request->email,

            'phone' => $request->phone,
            'offer_price' => $request->offer_price,
            'message' => $request->message,
            'address' => $request->address,

            'call' => $request->call,
            'ip_address' => $request->ip(),

            'created_at' => now(),

        ]);

        return redirect()->route('admin.course_query.index')->with('success', 'Course Query Inserted Successfully!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CourseQuery::findOrFail($id)->delete();
    }
}

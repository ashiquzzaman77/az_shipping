<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseSchedule;
use Illuminate\Http\Request;

class CourseScheduleController extends Controller
{
    public function index()
    {
        $items = CourseSchedule::latest()->get();
        return view('admin.pages.course_schedule.index', compact('items'));
    }

    public function create()
    {
        $courses = Course::latest()->get();
        return view('admin.pages.course_schedule.create', compact('courses'));
    }

    public function store(Request $request)
    {
        CourseSchedule::insert([

            'course_id' => $request->course_id,
            'venue' => $request->venue,
            'country' => $request->country,
            'starting_date' => $request->starting_date,
            'duration' => $request->duration,
            'fees' => $request->fees,
        ]);

        return redirect()->route('admin.course_schedule.index')->with('success', 'Data Inserted Successfully!!');
    }

    public function edit(Request $request, $id)
    {
        $item = CourseSchedule::find($id);
        $courses = Course::latest()->get();

        return view('admin.pages.course_schedule.edit', compact('courses', 'item'));
    }

    public function update(Request $request, $id)
    {
        $courseSchedule = CourseSchedule::findOrFail($id);

        $courseSchedule->update([

            'course_id' => $request->course_id,
            'venue' => $request->venue,
            'country' => $request->country,
            'starting_date' => $request->starting_date,
            'duration' => $request->duration,
            'fees' => $request->fees,

        ]);

        return redirect()->route('admin.course_schedule.index')->with('success', 'Data Update Successfully!!');
    }

    public function destroy($id)
    {
        $course = CourseSchedule::findOrFail($id);
        $course->delete();
    }
}

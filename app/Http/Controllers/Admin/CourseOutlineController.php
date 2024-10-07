<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseOutline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CourseOutlineController extends Controller
{
    public function index()
    {
        $items = CourseOutline::latest()->get();
        return view('admin.pages.course_outline.index', compact('items'));
    }

    public function create()
    {
        $courses = Course::latest()->get();
        return view('admin.pages.course_outline.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $mainFile = $request->file('icon');
        $imgPath = storage_path('app/public/course_outline/');


        if (empty($mainFile)) {

            CourseOutline::insert([

                'course_id' => $request->course_id,

                'title' => $request->title,
                'created_at' => now(),

            ]);
        } else {

            $globalFunImg = customUpload($mainFile, $imgPath);

            if ($globalFunImg['status'] == 1) {

                CourseOutline::insert([

                    'course_id' => $request->course_id,

                    'title' => $request->title,
                    'icon' => $globalFunImg['file_name'],

                    'created_at' => now(),

                ]);
            } else {
                return redirect()->back()->withInput()->with('error', 'Image upload failed! plz try again');
            }
        }

        return redirect()->route('admin.course_outline.index')->with('success', 'Course Outline Inserted Successfully!!');
    }

    public function edit(Request $request, $id)
    {
        $item = CourseOutline::find($id);
        $courses = Course::latest()->get();
        return view('admin.pages.course_outline.edit', compact('courses', 'item'));
    }

    public function update(Request $request, $id)
    {
        $course = CourseOutline::findOrFail($id);

        $mainFile = $request->file('icon');
        $uploadPath = storage_path('app/public/course_outline/');

        if (isset($mainFile)) {
            $globalFunImg = customUpload($mainFile, $uploadPath);
        } else {
            $globalFunImg['status'] = 0;
        }

        if (!empty($course)) {

            if ($globalFunImg['status'] == 1) {
                if (File::exists(public_path('storage/course_outline/requestImg/') . $course->icon)) {
                    File::delete(public_path('storage/course_outline/requestImg/') . $course->icon);
                }
                if (File::exists(public_path('storage/course_outline/') . $course->icon)) {
                    File::delete(public_path('storage/course_outline/') . $course->icon);
                }
            }


            $course->update([

                'course_id' => $request->course_id,

                'title' => $request->title,

                'icon' => $globalFunImg['status'] == 1 ? $globalFunImg['file_name'] : $course->icon,
            ]);
        }

        return redirect()->route('admin.course_outline.index')->with('success', 'Course Outline Update Successfully!!');
    }

    public function destroy($id)
    {
        $course = CourseOutline::findOrFail($id);

        if (File::exists(public_path('storage/course_outline/requestImg/') . $course->icon)) {
            File::delete(public_path('storage/course_outline/requestImg/') . $course->icon);
        }

        if (File::exists(public_path('storage/course_outline/') . $course->icon)) {
            File::delete(public_path('storage/course_outline/') . $course->icon);
        }

        $course->delete();
    }
}

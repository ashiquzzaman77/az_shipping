<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CourseContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courseContents = CourseContent::latest()->get();
        return view('admin.pages.course_content.index', compact('courseContents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::latest()->get();
        return view('admin.pages.course_content.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mainFile = $request->file('attachment');
        $imgPath = storage_path('app/public/course_content/');

        if (empty($mainFile)) {

            CourseContent::insert([

                'course_id' => $request->course_id,
                'created_at' => now(),

            ]);
        } else {

            $globalFunImg = customUpload($mainFile, $imgPath);

            if ($globalFunImg['status'] == 1) {

                CourseContent::insert([

                    'course_id' => $request->course_id,
                    'attachment' => $globalFunImg['file_name'],

                    'created_at' => now(),

                ]);
            } else {
                return redirect()->back()->withInput()->with('error', 'Upload failed! plz try again');
            }
        }

        // flash()->success('');

        return redirect()->route('admin.course_content.index')->with('success', 'Course Content Inserted Successfully!!');
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
    public function edit(Request $request, $id)
    {
        $courseContent= CourseContent::find($id);
        $courses = Course::latest()->get();

        return view('admin.pages.course_content.edit', compact('courseContent', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $course = CourseContent::findOrFail($id);

        $mainFile = $request->file('attachment');
        $uploadPath = storage_path('app/public/course_content/');

        if (isset($mainFile)) {
            $globalFunImg = customUpload($mainFile, $uploadPath);
        } else {
            $globalFunImg['status'] = 0;
        }

        if (!empty($course)) {

            if ($globalFunImg['status'] == 1) {
                if (File::exists(public_path('storage/course_content/requestImg/') . $course->attachment)) {
                    File::delete(public_path('storage/course_content/requestImg/') . $course->attachment);
                }
                if (File::exists(public_path('storage/course_content/') . $course->attachment)) {
                    File::delete(public_path('storage/course_content/') . $course->attachment);
                }

                if (File::exists(public_path('storage/files/') . $course->attachment)) {
                    File::delete(public_path('storage/files/') . $course->attachment);
                }
            }

            $course->update([

                'course_id' => $request->course_id,

                'attachment' => $globalFunImg['status'] == 1 ? $globalFunImg['file_name'] : $course->attachment,

            ]);
        }

        return redirect()->route('admin.course_content.index')->with('success', 'Course Content Update Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $course = CourseContent::findOrFail($id);

        if (File::exists(public_path('storage/course/requestImg/') . $course->attachment)) {
            File::delete(public_path('storage/course/requestImg/') . $course->attachment);
        }

        if (File::exists(public_path('storage/course/') . $course->attachment)) {
            File::delete(public_path('storage/course/') . $course->attachment);
        }

        if (File::exists(public_path('storage/files/') . $course->attachment)) {
            File::delete(public_path('storage/files/') . $course->attachment);
        }

        $course->delete();
    }
}

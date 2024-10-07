<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CourseProjectController extends Controller
{
    public function index()
    {
        $items = CourseProject::latest()->get();
        return view('admin.pages.course_project.index', compact('items'));
    }

    public function create()
    {
        $courses = Course::latest()->get();
        return view('admin.pages.course_project.create', compact('courses'));
    }

    public function store(Request $request)
    {
        $mainFile = $request->file('image');
        $imgPath = storage_path('app/public/course_project/');

        $iconmainFile = $request->file('banner_image'); ///////
        $iconimgPath = storage_path('app/public/course_project'); //////

        ////////
        if (empty($iconmainFile)) {

            $globalFunIconImg['file_name'] = '';

        } else {
            $globalFunIconImg = customUpload($iconmainFile, $iconimgPath);
            $globalFunIconImg['file_name'] = $globalFunIconImg['file_name'];
        }
        /////////////////////

        if (empty($mainFile)) {

            CourseProject::insert([

                'course_id' => $request->course_id,

                'title' => $request->title,

                'short_description' => $request->short_description,
                'description' => $request->description,

                'created_at' => now(),

            ]);
        } else {

            $globalFunImg = customUpload($mainFile, $imgPath);

            if ($globalFunImg['status'] == 1) {

                CourseProject::insert([

                    'course_id' => $request->course_id,

                    'title' => $request->title,

                    'short_description' => $request->short_description,
                    'description' => $request->description,

                    'image' => $globalFunImg['file_name'],
                    'banner_image' => $globalFunIconImg['file_name'], ////////

                    'created_at' => now(),

                ]);
            } else {
                return redirect()->back()->withInput()->with('error', 'Image upload failed! plz try again');
            }
        }

        return redirect()->route('admin.course_project.index')->with('success', 'Course Project Inserted Successfully!!');
    }

    public function edit(Request $request, $id)
    {
        $item = CourseProject::find($id);
        $courses = Course::latest()->get();
        return view('admin.pages.course_project.edit', compact('courses', 'item'));
    }

    public function update(Request $request, $id)
    {
        $course = CourseProject::findOrFail($id);

        $mainFile = $request->file('image');
        $uploadPath = storage_path('app/public/course_project/');

        if (isset($mainFile)) {
            $globalFunImg = customUpload($mainFile, $uploadPath);
        } else {
            $globalFunImg['status'] = 0;
        }

        $iconmainFile = $request->file('banner_image'); ///////
        $iconimgPath = storage_path('app/public/course_project'); //////

        ////////////
        if (isset($iconmainFile)) {
            $globalFunIconImg = customUpload($iconmainFile, $iconimgPath);
        } else {
            $globalFunIconImg['status'] = 0;
        }
        /////////////

        if (!empty($course)) {

            if ($globalFunImg['status'] == 1) {
                if (File::exists(public_path('storage/course_project/requestImg/') . $course->image)) {
                    File::delete(public_path('storage/course_project/requestImg/') . $course->image);
                }
                if (File::exists(public_path('storage/course_project/') . $course->image)) {
                    File::delete(public_path('storage/course_project/') . $course->image);
                }
            }

            ///////////

            if ($globalFunIconImg['status'] == 1) {
                if (File::exists(public_path('storage/course_project/requestImg/') . $course->banner_image)) {
                    File::delete(public_path('storage/course_project/requestImg/') . $course->banner_image);
                }
                if (File::exists(public_path('storage/course_project/') . $course->banner_image)) {
                    File::delete(public_path('storage/course_project/') . $course->banner_image);
                }
            }

            ////////

            $course->update([

                'course_id' => $request->course_id,

                'title' => $request->title,

                'short_description' => $request->short_description,
                'description' => $request->description,

                'image' => $globalFunImg['status'] == 1 ? $globalFunImg['file_name'] : $course->image,
                'banner_image' => $globalFunIconImg['status'] == 1 ? $globalFunIconImg['file_name'] : $course->banner_image, ////

            ]);
        }

        return redirect()->route('admin.course_project.index')->with('success', 'Course Project Update Successfully!!');
    }

    public function destroy($id)
    {
        $course = CourseProject::findOrFail($id);

        if (File::exists(public_path('storage/course_project/requestImg/') . $course->image)) {
            File::delete(public_path('storage/course_project/requestImg/') . $course->image);
        }

        if (File::exists(public_path('storage/course_project/') . $course->image)) {
            File::delete(public_path('storage/course_project/') . $course->image);
        }

        if (File::exists(public_path('storage/course_project/requestImg/') . $course->banner_image)) {
            File::delete(public_path('storage/course_project/requestImg/') . $course->banner_image);
        }

        if (File::exists(public_path('storage/course_project/') . $course->banner_image)) {
            File::delete(public_path('storage/course_project/') . $course->banner_image);
        }

        $course->delete();
    }
}

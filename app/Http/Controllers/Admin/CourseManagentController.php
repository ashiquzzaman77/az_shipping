<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseManagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CourseManagentController extends Controller
{
    public function index()
    {
        $items = CourseManagement::latest()->get();
        return view('admin.pages.course_management.index', compact('items'));
    }

    public function create()
    {
        return view('admin.pages.course_management.create');
    }

    public function store(Request $request)
    {
        $mainFile = $request->file('image');
        $imgPath = storage_path('app/public/course_mgt/');

        if (empty($mainFile)) {

            CourseManagement::insert([

                'title' => $request->title,
                'slug' => Str::slug($request->title, "-"),

                'type' => $request->type,
                'description' => $request->description,
                'features' => $request->features,

                'created_at' => now(),

            ]);
        } else {

            $globalFunImg = customUpload($mainFile, $imgPath);

            if ($globalFunImg['status'] == 1) {

                CourseManagement::insert([

                    'title' => $request->title,
                    'slug' => Str::slug($request->title, "-"),

                    'type' => $request->type,
                    'description' => $request->description,
                    'features' => $request->features,

                    'image' => $globalFunImg['file_name'],

                    'created_at' => now(),

                ]);
            } else {
                return redirect()->back()->withInput()->with('error', 'Image upload failed! plz try again');
            }
        }

        // flash()->success('');

        return redirect()->route('admin.course_management.index')->with('success', 'Course Management Inserted Successfully!!');
    }

    public function edit(Request $request, $id)
    {
        $course = CourseManagement::find($id);
        return view('admin.pages.course.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $course = CourseManagement::findOrFail($id);

        $mainFile = $request->file('image');
        $uploadPath = storage_path('app/public/course_mgt/');

        if (isset($mainFile)) {
            $globalFunImg = customUpload($mainFile, $uploadPath);
        } else {
            $globalFunImg['status'] = 0;
        }

        if (!empty($course)) {

            if ($globalFunImg['status'] == 1) {
                if (File::exists(public_path('storage/course_mgt/requestImg/') . $course->image)) {
                    File::delete(public_path('storage/course_mgt/requestImg/') . $course->image);
                }
                if (File::exists(public_path('storage/course_mgt/') . $course->image)) {
                    File::delete(public_path('storage/course_mgt/') . $course->image);
                }
            }

            $course->update([

                'title' => $request->title,
                'slug' => Str::slug($request->title, "-"),

                'type' => $request->type,
                'description' => $request->description,
                'features' => $request->features,

                'image' => $globalFunImg['status'] == 1 ? $globalFunImg['file_name'] : $course->image,

            ]);
        }

        return redirect()->route('admin.course_management.index')->with('success', 'Course Management Update Successfully!!');
    }

    public function destroy($id)
    {
        $course = CourseManagement::findOrFail($id);

        if (File::exists(public_path('storage/course_mgt/requestImg/') . $course->image)) {
            File::delete(public_path('storage/course_mgt/requestImg/') . $course->image);
        }

        if (File::exists(public_path('storage/course_mgt/') . $course->image)) {
            File::delete(public_path('storage/course_mgt/') . $course->image);
        }

        $course->delete();
    }
}

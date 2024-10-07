<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutUsController extends Controller
{
    public function index()
    {
        $items = AboutUs::latest()->get();
        return view('admin.pages.about.index', compact('items'));
    }

    public function edit(Request $request, $id)
    {
        $about = AboutUs::find($id);
        return view('admin.pages.about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        // $uid = $request->id;
        // $abouts = AboutUs::findOrFail($uid);

        $abouts = AboutUs::findOrFail($id);

        //banner_image
        if (!empty($request->file('banner_image'))) {
            $file = $request->file('banner_image');

            @unlink(public_path('upload/about/' . $abouts->banner_image));

            $fileName = time() . $file->getClientOriginalName();
            $file->move(public_path('upload/about/'), $fileName);
            $banner_image = $fileName;
        }

        //ceo_section_image
        if (!empty($request->file('ceo_section_image'))) {

            $file = $request->file('ceo_section_image');

            @unlink(public_path('upload/about/' . $abouts->ceo_section_image));

            $fileName = time() . $file->getClientOriginalName();
            $file->move(public_path('upload/about/'), $fileName);
            $ceo_section_image = $fileName;
        }

        //ceo_section_signature
        if (!empty($request->file('ceo_section_signature'))) {

            $file = $request->file('ceo_section_signature');

            @unlink(public_path('upload/about/' . $abouts->ceo_section_signature));

            $fileName = time() . $file->getClientOriginalName();
            $file->move(public_path('upload/about/'), $fileName);
            $ceo_section_signature = $fileName;
        }

        //row_two_image
        if (!empty($request->file('row_two_image'))) {

            $file = $request->file('row_two_image');

            @unlink(public_path('upload/about/' . $abouts->row_two_image));

            $fileName = time() . $file->getClientOriginalName();
            $file->move(public_path('upload/about/'), $fileName);
            $row_two_image = $fileName;
        }

        //row_three_column_one_image
        if (!empty($request->file('row_three_column_one_image'))) {

            $file = $request->file('row_three_column_one_image');

            @unlink(public_path('upload/about/' . $abouts->row_three_column_one_image));

            $fileName = time() . $file->getClientOriginalName();
            $file->move(public_path('upload/about/'), $fileName);
            $row_three_column_one_image = $fileName;
        }

        //row_three_column_two_image
        if (!empty($request->file('row_three_column_two_image'))) {

            $file = $request->file('row_three_column_two_image');

            @unlink(public_path('upload/about/' . $abouts->row_three_column_two_image));

            $fileName = time() . $file->getClientOriginalName();
            $file->move(public_path('upload/about/'), $fileName);
            $row_three_column_two_image = $fileName;
        }

        //row_three_column_three_image
        if (!empty($request->file('row_three_column_three_image'))) {

            $file = $request->file('row_three_column_three_image');

            @unlink(public_path('upload/about/' . $abouts->row_three_column_three_image));

            $fileName = time() . $file->getClientOriginalName();
            $file->move(public_path('upload/about/'), $fileName);
            $row_three_column_three_image = $fileName;
        }

        $abouts->update([

            'ceo_section_badge' => $request->ceo_section_badge,
            'ceo_section_title' => $request->ceo_section_title,
            'ceo_section_description' => $request->ceo_section_description,
            'ceo_name' => $request->ceo_name,
            'ceo_designation' => $request->ceo_designation,

            'row_two_badge' => $request->row_two_badge,
            'row_two_title' => $request->row_two_title,
            'row_two_description' => $request->row_two_description,

            'row_three_section_title' => $request->row_three_section_title,

            'row_three_column_one' => $request->row_three_column_one,
            'row_three_column_one_title' => $request->row_three_column_one_title,
            'row_three_column_one_description' => $request->row_three_column_one_description,
            'row_three_column_one_url' => $request->row_three_column_one_url,

            'row_three_column_two' => $request->row_three_column_two,
            'row_three_column_two_title' => $request->row_three_column_two_title,
            'row_three_column_two_description' => $request->row_three_column_two_description,
            'row_three_column_two_url' => $request->row_three_column_two_url,

            'row_three_column_three' => $request->row_three_column_three,
            'row_three_column_three_title' => $request->row_three_column_three_title,
            'row_three_column_three_description' => $request->row_three_column_three_description,
            'row_three_column_three_url' => $request->row_three_column_three_url,

            'row_four_column_one_title' => $request->row_four_column_one_title,
            'row_four_column_one_header' => $request->row_four_column_one_header,
            'row_four_column_one_description' => $request->row_four_column_one_description,

            'row_four_column_two_title' => $request->row_four_column_two_title,
            'row_four_column_two_header' => $request->row_four_column_two_header,
            'row_four_column_two_description' => $request->row_four_column_two_description,

            'banner_image' => (!empty($banner_image) ? $banner_image : $abouts->banner_image),

            'ceo_section_image' => (!empty($ceo_section_image) ? $ceo_section_image : $abouts->ceo_section_image),

            'ceo_section_signature' => (!empty($ceo_section_signature) ? $ceo_section_signature : $abouts->ceo_section_signature),

            'row_two_image' => (!empty($row_two_image) ? $row_two_image : $abouts->row_two_image),

            'row_three_column_one_image' => (!empty($row_three_column_one_image) ? $row_three_column_one_image : $abouts->row_three_column_one_image),

            'row_three_column_two_image' => (!empty($row_three_column_two_image) ? $row_three_column_two_image : $abouts->row_three_column_two_image),

            'row_three_column_three_image' => (!empty($row_three_column_three_image) ? $row_three_column_three_image : $abouts->row_three_column_three_image),

        ]);

        return redirect()->route('admin.about.index')->with('success', 'About Update Successfully!!');
    }

    // public function edit(Request $request, $id)
    // {
    //     $course = CourseManagement::find($id);
    //     return view('admin.pages.course.edit', compact('course'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $course = CourseManagement::findOrFail($id);

    //     $mainFile = $request->file('image');
    //     $uploadPath = storage_path('app/public/course_mgt/');

    //     if (isset($mainFile)) {
    //         $globalFunImg = customUpload($mainFile, $uploadPath);
    //     } else {
    //         $globalFunImg['status'] = 0;
    //     }

    //     if (!empty($course)) {

    //         if ($globalFunImg['status'] == 1) {
    //             if (File::exists(public_path('storage/course_mgt/requestImg/') . $course->image)) {
    //                 File::delete(public_path('storage/course_mgt/requestImg/') . $course->image);
    //             }
    //             if (File::exists(public_path('storage/course_mgt/') . $course->image)) {
    //                 File::delete(public_path('storage/course_mgt/') . $course->image);
    //             }
    //         }

    //         $course->update([

    //             'title' => $request->title,
    //             'slug' => Str::slug($request->title, "-"),

    //             'type' => $request->type,
    //             'description' => $request->description,
    //             'features' => $request->features,

    //             'image' => $globalFunImg['status'] == 1 ? $globalFunImg['file_name'] : $course->image,

    //         ]);
    //     }

    //     return redirect()->route('admin.course_management.index')->with('success', 'Course Management Update Successfully!!');
    // }

    // public function destroy($id)
    // {
    //     $course = CourseManagement::findOrFail($id);

    //     if (File::exists(public_path('storage/course_mgt/requestImg/') . $course->image)) {
    //         File::delete(public_path('storage/course_mgt/requestImg/') . $course->image);
    //     }

    //     if (File::exists(public_path('storage/course_mgt/') . $course->image)) {
    //         File::delete(public_path('storage/course_mgt/') . $course->image);
    //     }

    //     $course->delete();
    // }
}

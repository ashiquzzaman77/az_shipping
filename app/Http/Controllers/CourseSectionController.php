<?php

namespace App\Http\Controllers;

use App\Models\CourseSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CourseSectionController extends Controller
{
    public function index()
    {
        $items = CourseSection::latest()->get();
        return view('admin.pages.course_section.index', compact('items'));
    }

    public function create()
    {
        return view('admin.pages.course_section.create');
    }

    public function store(Request $request)
    {
        // // Validation rules
        // $rules = [
        //     'description' => 'required', // Add validation for the description field
        // ];

        // // Custom error messages
        // $messages = [
        //     'description.required' => 'The description field is required.',
        // ];

        // // Validate the request
        // $validator = Validator::make($request->all(), $rules, $messages);

        // // Check if the validation fails
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        // // Your existing code for file handling and storing course category

        $files = [
            'logo', 'banner_image', 'thumbnail_image',
        ];

        $storagePath = storage_path('app/public/course_section/');
        $publicPath = public_path('images/course_section/');
        $filePaths = [];

        foreach ($files as $file) {
            $uploadedFile = $request->file($file);

            if (!empty($uploadedFile)) {
                // Generate unique filename for storage
                $storageFileName = customUpload($uploadedFile, $storagePath);

                if ($storageFileName['status'] == 1) {
                    // Move the file to the public folder with a different name
                    $uploadedFile->move($publicPath, $storageFileName['file_name']);

                    // Store the public folder name in the database
                    $filePaths[$file] = $storageFileName['file_name'];
                } else {
                    // Handle error if file upload fails
                    $filePaths[$file] = null;
                }
            } else {
                $filePaths[$file] = null;
            }
        }

        // Create course category with file paths
        CourseSection::create([
            'name' => $request->name,
            'header' => $request->header,
            'description' => $request->description,
        ] + $filePaths);

        return redirect()->route('admin.course_section.index')->with('success', 'Data Inserted Successfully!!');
    }

    public function edit(Request $request, $id)
    {
        $item = CourseSection::find($id);
        return view('admin.pages.course_section.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        // // Validation rules
        // $rules = [
        //     'description' => 'required', // Add validation for the description field
        // ];

        // // Custom error messages
        // $messages = [
        //     'description.required' => 'The description field is required.',
        // ];

        // // Validate the request
        // $validator = Validator::make($request->all(), $rules, $messages);

        // // Check if the validation fails
        // if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        // }

        // Find the existing course category
        $courseService = CourseSection::findOrFail($id);

        // Update course category attributes
        $courseService->name = $request->name;
        $courseService->header = $request->header;
        $courseService->description = $request->description;

        // Check if new images are provided and update file paths accordingly
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoFileName = customUpload($logo, storage_path('app/public/course_section/'));
            $courseService->logo = $logoFileName['status'] == 1 ? $logoFileName['file_name'] : null;
        }

        if ($request->hasFile('banner_image')) {
            $bannerImage = $request->file('banner_image');
            $bannerImageFileName = customUpload($bannerImage, storage_path('app/public/course_section/'));
            $courseService->banner_image = $bannerImageFileName['status'] == 1 ? $bannerImageFileName['file_name'] : null;
        }

        if ($request->hasFile('thumbnail_image')) {
            $thumbnailImage = $request->file('thumbnail_image');
            $thumbnailImageFileName = customUpload($thumbnailImage, storage_path('app/public/course_section/'));
            $courseService->thumbnail_image = $thumbnailImageFileName['status'] == 1 ? $thumbnailImageFileName['file_name'] : null;
        }

        // Save the changes to the database
        $courseService->save();

        // If everything is successful
        return redirect()->route('admin.course_section.index')->with('success', 'Data Updated Successfully!!');
    }

    public function destroy($id)
    {
        $course = CourseSection::findOrFail($id);

        if (File::exists(public_path('storage/course_section/requestImg/') . $course->thumbnail_image)) {
            File::delete(public_path('storage/course_section/requestImg/') . $course->thumbnail_image);
        }

        if (File::exists(public_path('storage/course_section/') . $course->thumbnail_image)) {
            File::delete(public_path('storage/course_section/') . $course->thumbnail_image);
        }

        if (File::exists(public_path('storage/course_section/requestImg/') . $course->banner_image)) {
            File::delete(public_path('storage/course_section/requestImg/') . $course->banner_image);
        }

        if (File::exists(public_path('storage/course_section/') . $course->banner_image)) {
            File::delete(public_path('storage/course_section/') . $course->banner_image);
        }

        if (File::exists(public_path('storage/course_section/requestImg/') . $course->logo)) {
            File::delete(public_path('storage/course_section/requestImg/') . $course->logo);
        }

        if (File::exists(public_path('storage/course_section/') . $course->logo)) {
            File::delete(public_path('storage/course_section/') . $course->logo);
        }

        $course->delete();
    }
}

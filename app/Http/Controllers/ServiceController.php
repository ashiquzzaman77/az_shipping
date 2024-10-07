<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.pages.service.index', compact('services'));
    }

    public function create()
    {
        return view('admin.pages.service.create');
    }

    public function store(Request $request)
    {
        // Validation rules
        $rules = [
            'description' => 'required', // Add validation for the description field
        ];

        // Custom error messages
        $messages = [
            'description.required' => 'The description field is required.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if the validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Your existing code for file handling and storing course category

        $files = [
            'logo', 'banner_image', 'thumbnail_image',
        ];

        $storagePath = storage_path('app/public/service/');
        $publicPath = public_path('images/service/'); // Assuming this is your public folder path for storing images
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
        Service::create([
            'name' => $request->name,
            'header' => $request->header,
            'description' => $request->description,
        ] + $filePaths);

        // If everything is successful
        return redirect()->route('admin.service.index')->with('success', 'Course Service Inserted Successfully!!');
    }

    public function edit(Request $request, $id)
    {
        $service = Service::find($id);
        return view('admin.pages.service.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        // Validation rules
        $rules = [
            'description' => 'required', // Add validation for the description field
        ];

        // Custom error messages
        $messages = [
            'description.required' => 'The description field is required.',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules, $messages);

        // Check if the validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Find the existing course category
        $courseService = Service::findOrFail($id);

        // Update course category attributes
        $courseService->name = $request->name;
        $courseService->header = $request->header;
        $courseService->description = $request->description;

        // Check if new images are provided and update file paths accordingly
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoFileName = customUpload($logo, storage_path('app/public/service/'));
            $courseService->logo = $logoFileName['status'] == 1 ? $logoFileName['file_name'] : null;
        }

        if ($request->hasFile('banner_image')) {
            $bannerImage = $request->file('banner_image');
            $bannerImageFileName = customUpload($bannerImage, storage_path('app/public/service/'));
            $courseService->banner_image = $bannerImageFileName['status'] == 1 ? $bannerImageFileName['file_name'] : null;
        }

        if ($request->hasFile('thumbnail_image')) {
            $thumbnailImage = $request->file('thumbnail_image');
            $thumbnailImageFileName = customUpload($thumbnailImage, storage_path('app/public/service/'));
            $courseService->thumbnail_image = $thumbnailImageFileName['status'] == 1 ? $thumbnailImageFileName['file_name'] : null;
        }

        // Save the changes to the database
        $courseService->save();

        // If everything is successful
        return redirect()->route('admin.service.index')->with('success', 'Course Service Updated Successfully!!');
    }

    public function destroy($id)
    {
        $course = Service::findOrFail($id);

        if (File::exists(public_path('storage/service/requestImg/') . $course->thumbnail_image)) {
            File::delete(public_path('storage/service/requestImg/') . $course->thumbnail_image);
        }

        if (File::exists(public_path('storage/service/') . $course->thumbnail_image)) {
            File::delete(public_path('storage/service/') . $course->thumbnail_image);
        }

        if (File::exists(public_path('storage/service/requestImg/') . $course->banner_image)) {
            File::delete(public_path('storage/service/requestImg/') . $course->banner_image);
        }

        if (File::exists(public_path('storage/service/') . $course->banner_image)) {
            File::delete(public_path('storage/service/') . $course->banner_image);
        }

        if (File::exists(public_path('storage/service/requestImg/') . $course->logo)) {
            File::delete(public_path('storage/service/requestImg/') . $course->logo);
        }

        if (File::exists(public_path('storage/service/') . $course->logo)) {
            File::delete(public_path('storage/service/') . $course->logo);
        }

        $course->delete();
    }
}

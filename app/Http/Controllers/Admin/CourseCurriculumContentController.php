<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CourseCurriculum;
use App\Models\CourseCurriculumContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseCurriculumContentController extends Controller
{

    // public function index()
    // {
    //     $courseContents = CourseCurriculumContent::latest()->get();
    //     return view('admin.pages.course_curriculum_content.index', compact('courseContents'));
    // }

    // public function index()
    // {
    //     $courseContents = CourseCurriculumContent::latest()->get();
    //     $groupedCourseContents = $courseContents->groupBy('course_curriculum_id');
    //     return view('admin.pages.course_curriculum_content.index', compact('groupedCourseContents'));
    // }

    // public function create()
    // {
    //     $courseCurriculums = CourseCurriculum::latest()->get();
    //     return view('admin.pages.course_curriculum_content.create', compact('courseCurriculums'));
    // }

    // public function store(Request $request)
    // {
    //     // Validate the request
    //     $request->validate([
    //         'course_curriculum_id' => 'required|integer',
    //         'course_file' => 'nullable|file|mimes:pdf,doc,docx|max:2048', // File size in kilobytes
    //         'course_video' => 'nullable|file|mimes:mp4,mov,avi|max:102592400', // File size in kilobytes (100 MB)
    //     ]);

    //     // Initialize variables
    //     $fileName = null;
    //     $videoName = null;

    //     try {
    //         // Process the course file upload
    //         if ($request->hasFile('course_file')) {
    //             $courseFile = $request->file('course_file');
    //             $fileName = $courseFile->store('files', 'public'); // Store file in public disk
    //         }

    //         // Process the course video upload
    //         if ($request->hasFile('course_video')) {
    //             $courseVideo = $request->file('course_video');
    //             $videoName = $courseVideo->store('videos', 'public'); // Store file in public disk
    //         }

    //         // Create a new record
    //         CourseCurriculumContent::create([
    //             'course_curriculum_id' => $request->course_curriculum_id,
    //             'course_file' => $fileName,
    //             'course_video' => $videoName,
    //         ]);

    //         return redirect()->route('admin.course_curriculum_content.index')
    //             ->with('success', 'Course Curriculum Content Inserted Successfully!');

    //     } catch (\Exception $e) {
    //         // Handle exceptions and errors
    //         return back()->withErrors(['error' => 'An error occurred while processing your request.'])
    //             ->withInput();
    //     }
    // }

    // public function edit(Request $request, $id)
    // {
    //     $courseContent = CourseCurriculumContent::find($id);
    //     $courseCurriculums = CourseCurriculum::latest()->get();

    //     return view('admin.pages.course_curriculum_content.edit', compact('courseContent', 'courseCurriculums'));
    // }

    // public function update(Request $request, $id)
    // {
    //     // Find the course curriculum content by ID, or fail with a 404 error
    //     $course = CourseCurriculumContent::findOrFail($id);

    //     // Initialize the file name variable
    //     $fileName = $course->course_file; // Default to current file if no new file is uploaded

    //     // Process the course file upload if a file is provided
    //     if ($request->hasFile('course_file')) {
    //         $courseFile = $request->file('course_file');

    //         // Validate the uploaded file (optional but recommended)
    //         $request->validate([
    //             'course_file' => 'file|mimes:pdf,doc,docx|max:2048', // Adjust validation rules as needed
    //         ]);

    //         // Store the new file and get the new file name
    //         $fileName = $courseFile->store('files', 'public'); // Store file in public disk

    //         // Optionally, delete the old file from storage if necessary
    //         if ($course->course_file && Storage::disk('public')->exists($course->course_file)) {
    //             Storage::disk('public')->delete($course->course_file);
    //         }
    //     }

    //     // Update the course with the new data
    //     $course->update([
    //         'course_curriculum_id' => $request->course_curriculum_id,
    //         'course_file' => $fileName,
    //     ]);

    //     return redirect()->route('admin.course_curriculum_content.index')->with('success', 'Course Curriculum Content updated successfully!');
    // }

    // public function UpdateVideo(Request $request)
    // {
    //     // Validate the request
    //     $request->validate([
    //         'course_video' => 'nullable|file|mimes:mp4,mov,avi|max:1048576000', // Adjust size as needed
    //     ]);

    //     // Retrieve the course content record or fail with 404
    //     $courseContent = CourseCurriculumContent::findOrFail($request->id);

    //     // Initialize variable for the new video file path
    //     $newVideoPath = $courseContent->course_video; // Default to existing video if no new file is uploaded

    //     // Process the video upload
    //     if ($request->hasFile('course_video')) {
    //         $video = $request->file('course_video');
    //         if ($video->isValid()) {
    //             // Store the new video file
    //             $newVideoPath = $video->store('videos', 'public');

    //             // Optionally, delete the old video if it exists
    //             if ($courseContent->course_video && Storage::disk('public')->exists($courseContent->course_video)) {
    //                 Storage::disk('public')->delete($courseContent->course_video);
    //             }
    //         }
    //     }

    //     // Update the record with the new video path
    //     $courseContent->update([
    //         'course_video' => $newVideoPath,
    //     ]);

    //     // Redirect back with a success message
    //     return redirect()->route('admin.course_curriculum_content.index')->with('success', 'Class Video updated successfully!');
    // }

    // public function DeleteVideo(Request $request, $id)
    // {
    //     // Find the course curriculum content record
    //     $courseContent = CourseCurriculumContent::findOrFail($id);

    //     // Check if the video exists and delete it from storage
    //     if ($courseContent->course_video) {
    //         Storage::disk('public')->delete($courseContent->course_video);
    //     }

    //     // Optionally, you can also set the video field to null if needed
    //     $courseContent->course_video = null;
    //     $courseContent->save();

    //     // Redirect or respond with success message
    //     return redirect()->route('admin.course_curriculum_content.index')
    //         ->with('success', 'Video deleted successfully!');
    // }

    // public function destroy($id)
    // {
    //     // Find the course curriculum content by ID or fail with a 404 error
    //     $course = CourseCurriculumContent::findOrFail($id);

    //     // Delete the course file if it exists
    //     if ($course->course_file && Storage::disk('public')->exists($course->course_file)) {
    //         Storage::disk('public')->delete($course->course_file);
    //     }

    //     if ($course->course_video && Storage::disk('public')->exists($course->course_video)) {
    //         Storage::disk('public')->delete($course->course_video);
    //     }

    //     // Delete the record from the database
    //     $course->delete();

    // }

}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCurriculum;
use App\Models\CourseCurriculumContent;
use App\Models\CourseCurriculumFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseCurriculamController extends Controller
{

    public function index()
    {
        $courseCurriculams = CourseCurriculum::latest()->get();
        return view('admin.pages.course_curriculam.index', compact('courseCurriculams'));
    }

    public function create()
    {
        $courses = Course::latest()->get();
        return view('admin.pages.course_curriculam.create', compact('courses'));
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            // 'course_file' => 'nullable|array', // Expecting an array of files
            'course_file.*' => 'file|mimes:pdf,doc,docx|max:2048', // 2 MB per file
            // 'course_video' => 'nullable|array', // Expecting multiple files
            'course_video.*' => 'file|mimes:mp4,mov,avi|max:102400', // 100 MB per video
        ]);

        // Insert course curriculum and get ID
        $course_curriculum_id = CourseCurriculum::insertGetId([
            'course_id' => $request->course_id,
            'badge' => $request->badge,
            'title' => $request->title,
            'duration' => $request->duration,
            'description' => $request->description,
            'class_number' => $request->class_number,
            'created_at' => now(),
        ]);

        // Handle course file uploads
        if ($request->hasFile('course_file')) {
            foreach ($request->file('course_file') as $file) {
                $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
                $destinationPath = 'content/files/';
                $file->storeAs($destinationPath, $fileName, 'public');
                $filePath = $destinationPath . $fileName;

                // Insert into CourseCurriculumFile
                CourseCurriculumFile::create([
                    'course_curriculum_id' => $course_curriculum_id,
                    'course_file' => $filePath,
                ]);
            }
        }

        // Handle course video uploads
        if ($request->hasFile('course_video')) {
            foreach ($request->file('course_video') as $video) {
                $fileName = hexdec(uniqid()) . '.' . $video->getClientOriginalExtension();
                $destinationPath = 'content/videos/';
                $video->storeAs($destinationPath, $fileName, 'public');
                $videoPath = $destinationPath . $fileName;

                // Insert into CourseCurriculumContent
                CourseCurriculumContent::create([
                    'course_curriculum_id' => $course_curriculum_id,
                    'course_video' => $videoPath,
                ]);
            }
        }

        return redirect()->route('admin.course_curriculam.index')->with('success', 'Course Curriculum Inserted Successfully!');
    }

    public function edit(Request $request, $id)
    {
        $courseCurriculam = CourseCurriculum::find($id);
        $courses = Course::latest()->get();

        $multivideo = CourseCurriculumContent::where('course_curriculum_id', $id)->latest()->get();
        $multifile = CourseCurriculumFile::where('course_curriculum_id', $id)->latest()->get();

        return view('admin.pages.course_curriculam.edit', compact('courseCurriculam', 'courses', 'multivideo', 'multifile'));
    }

    public function update(Request $request, $id)
    {
        $course = CourseCurriculum::findOrFail($id);

        $course->update([

            'course_id' => $request->course_id,

            'badge' => $request->badge,
            'title' => $request->title,

            'duration' => $request->duration,
            'description' => $request->description,
            'class_number' => $request->class_number,

        ]);

        return redirect()->route('admin.course_curriculam.index')->with('success', 'Course Curriculam Update Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CourseCurriculum::findOrFail($id)->delete();
    }

    public function UpdateVideoCurriculum(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'course_video.*' => 'file|mimes:mp4,mov,avi|max:102400',
        ]);

        // Loop through each uploaded video file
        if ($request->hasFile('course_video')) {
            foreach ($request->file('course_video') as $videoId => $video) {
                // Validate that the video ID is a valid integer
                $videoId = intval($videoId);

                // Find the existing record
                $existingVideo = CourseCurriculumContent::where('id', $videoId)->first();
                if ($existingVideo) {
                    // Delete the old video file from storage
                    if (Storage::disk('public')->exists($existingVideo->course_video)) {
                        Storage::disk('public')->delete($existingVideo->course_video);
                    }

                    // Store the new video file
                    $fileName = hexdec(uniqid()) . '.' . $video->getClientOriginalExtension();
                    $destinationPath = 'content/videos/';
                    $video->storeAs($destinationPath, $fileName, 'public');
                    $videoPath = $destinationPath . $fileName;

                    // Update the record with the new video path
                    $existingVideo->update([
                        'course_video' => $videoPath,
                    ]);
                }
            }
        }

        return redirect()->route('admin.course_curriculam.index')->with('success', 'Course Videos Updated Successfully!');
    }

    //Delete Multimage
    public function DeleteVideoCurriculum($id)
    {
        // Find the video record in the database
        $video = CourseCurriculumContent::find($id);

        // Check if the record exists
        if ($video) {
            // Delete the video file from storage
            if (Storage::disk('public')->exists($video->course_video)) {
                Storage::disk('public')->delete($video->course_video);
            }

            // Delete the record from the database
            $video->delete();

            // Return a success response
            return redirect()->back()->with('success', 'Video deleted successfully!');
        }

        // If the record does not exist, return an error response
        return redirect()->route('admin.course_curriculam.index')->with('error', 'Video not found!');
    }

    public function StoreVideoCurriculum(Request $request)
    {

        // Retrieve the course curriculum ID from the request
        $courseCurriculumId = $request->input('videoid');

        // Handle the video file upload
        if ($request->hasFile('course_video')) {
            // Get the uploaded file
            $video = $request->file('course_video');

            // Generate a unique file name
            $fileName = hexdec(uniqid()) . '.' . $video->getClientOriginalExtension();

            // Define the destination path
            $destinationPath = 'content/videos/';

            // Store the file
            $video->storeAs($destinationPath, $fileName, 'public');

            // Generate the file path
            $videoPath = $destinationPath . $fileName;

            // Insert the new video record into the database
            CourseCurriculumContent::create([
                'course_curriculum_id' => $courseCurriculumId,
                'course_video' => $videoPath,
            ]);

            // Redirect with success message
            return redirect()->back()->with('success', 'Video uploaded successfully!');
        }

        // Redirect with an error message if no file was uploaded
        return redirect()->route('admin.course_curriculam.index')->with('error', 'No video file uploaded.');
    }

    public function UpdateFileCurriculum(Request $request)
    {
        // Validate the incoming request
        // $request->validate([
        //     'course_video.*' => 'file|mimes:mp4,mov,avi|max:102400',
        // ]);

        // Loop through each uploaded video file
        if ($request->hasFile('course_file')) {
            foreach ($request->file('course_file') as $fileId => $file) {
                // Validate that the file ID is a valid integer
                $fileId = intval($fileId);

                // Find the existing record
                $existingFile = CourseCurriculumFile::where('id', $fileId)->first();
                if ($existingFile) {
                    // Delete the old file file from storage
                    if (Storage::disk('public')->exists($existingFile->course_file)) {
                        Storage::disk('public')->delete($existingFile->course_file);
                    }

                    // Store the new file file
                    $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();
                    $destinationPath = 'content/files/';
                    $file->storeAs($destinationPath, $fileName, 'public');
                    $filePath = $destinationPath . $fileName;

                    // Update the record with the new file path
                    $existingFile->update([
                        'course_file' => $filePath,
                    ]);
                }
            }
        }

        return redirect()->back()->with('success', 'Course Videos Updated Successfully!');
    }

    //Delete Multimage
    public function DeleteFileCurriculum($id)
    {
        // Find the video record in the database
        $file = CourseCurriculumFile::find($id);

        // Check if the record exists
        if ($file) {
            // Delete the file file from storage
            if (Storage::disk('public')->exists($file->course_file)) {
                Storage::disk('public')->delete($file->course_file);
            }

            // Delete the record from the database
            $file->delete();

            // Return a success response
            return redirect()->back()->with('success', 'File deleted successfully!');
        }

        // If the record does not exist, return an error response
        return redirect()->route('admin.course_curriculam.index')->with('error', 'Video not found!');
    }

    public function StoreFileCurriculum(Request $request)
    {

        // Retrieve the course curriculum ID from the request
        $courseCurriculumId = $request->input('fileid');

        // Handle the video file upload
        if ($request->hasFile('course_file')) {
            // Get the uploaded file
            $file = $request->file('course_file');

            // Generate a unique file name
            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalExtension();

            // Define the destination path
            $destinationPath = 'content/files/';

            // Store the file
            $file->storeAs($destinationPath, $fileName, 'public');

            // Generate the file path
            $filePath = $destinationPath . $fileName;

            // Insert the new file record into the database
            CourseCurriculumFile::create([
                'course_curriculum_id' => $courseCurriculumId,
                'course_file' => $filePath,
            ]);

            // Redirect with success message
            return redirect()->back()->with('success', 'File uploaded successfully!');
        }

        // Redirect with an error message if no file was uploaded
        return redirect()->route('admin.course_curriculam.index')->with('error', 'No file file uploaded.');
    }

}

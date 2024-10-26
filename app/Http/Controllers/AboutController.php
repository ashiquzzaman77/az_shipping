<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = About::latest()->get();
        return view('admin.pages.about.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'short_descp' => 'required|string',
            'long_descp' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,avif,bmp,tiff|max:5048',
            'image_one' => 'nullable|image|mimes:jpeg,png,jpg,gif,avif,bmp,tiff|max:5048',
            'image_two' => 'nullable|image|mimes:jpeg,png,jpg,gif,avif,bmp,tiff|max:5048',
        ], [
            'title.required' => 'The title field is required.',
            'short_descp.required' => 'A short description is required.',
            'long_descp.required' => 'A long description is required.',
            'image.image' => 'The uploaded file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, avif, bmp, tiff.',
            'image.max' => 'The image must not be greater than 5 MB.',
            'image_one.image' => 'The uploaded file for Image One must be an image.',
            'image_one.mimes' => 'Image One must be a file of type: jpeg, png, jpg, gif, avif, bmp, tiff.',
            'image_one.max' => 'Image One must not be greater than 5 MB.',
            'image_two.image' => 'The uploaded file for Image Two must be an image.',
            'image_two.mimes' => 'Image Two must be a file of type: jpeg, png, jpg, gif, avif, bmp, tiff.',
            'image_two.max' => 'Image Two must not be greater than 5 MB.',
        ]);

        // Create a new About instance
        $about = new About();
        $about->title = $request->title;
        $about->short_descp = $request->short_descp;
        $about->long_descp = $request->long_descp;

        // Handle file uploads
        if ($request->hasFile('image')) {
            $about->image = $request->file('image')->store('about', 'public');
        }
        if ($request->hasFile('image_one')) {
            $about->image_one = $request->file('image_one')->store('about', 'public');
        }
        if ($request->hasFile('image_two')) {
            $about->image_two = $request->file('image_two')->store('about', 'public');
        }

        // Save the About instance to the database
        $about->save();

        // Redirect or return a response
        return redirect()->route('admin.about.index')->with('success', 'About section created successfully.');
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
    public function edit(string $id)
    {
        $about = About::find($id);

        return view('admin.pages.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the existing record
        $about = About::findOrFail($id);

        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'short_descp' => 'required|string',
            'long_descp' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,avif,bmp,tiff|max:5048',
            'image_one' => 'nullable|image|mimes:jpeg,png,jpg,gif,avif,bmp,tiff|max:5048',
            'image_two' => 'nullable|image|mimes:jpeg,png,jpg,gif,avif,bmp,tiff|max:5048',
        ]);

        // Update the fields
        $about->title = $request->title;
        $about->short_descp = $request->short_descp;
        $about->long_descp = $request->long_descp;

        // Handle file uploads
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($about->image) {
                Storage::disk('public')->delete($about->image);
            }
            // Store the new image
            $about->image = $request->file('image')->store('about-images', 'public');
        }

        if ($request->hasFile('image_one')) {
            // Delete the old image_one if it exists
            if ($about->image_one) {
                Storage::disk('public')->delete($about->image_one);
            }
            // Store the new image_one
            $about->image_one = $request->file('image_one')->store('about-images', 'public');
        }

        if ($request->hasFile('image_two')) {
            // Delete the old image_two if it exists
            if ($about->image_two) {
                Storage::disk('public')->delete($about->image_two);
            }
            // Store the new image_two
            $about->image_two = $request->file('image_two')->store('about-images', 'public');
        }

        $about->save();
        return redirect()->route('admin.about.index')->with('success', 'About Section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the existing record
        $about = About::findOrFail($id);

        // Delete associated images if they exist
        if ($about->image) {
            Storage::disk('public')->delete($about->image);
        }

        if ($about->image_one) {
            Storage::disk('public')->delete($about->image_one);
        }

        if ($about->image_two) {
            Storage::disk('public')->delete($about->image_two);
        }

        $about->delete();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Principle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrincipleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Principle::latest()->get();
        return view('admin.pages.principle.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.principle.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'status' => 'required|in:active,inactive',
            'name' => 'required|string|max:255',
            'short_descp' => 'required|string|max:800',
            'thumbnail_image' => 'required|image|max:1048', // Max size 2MB
            'banner_top_image' => 'required|image|max:2048', // Max size 2MB
            'banner_center_image' => 'nullable|image|max:2048', // Max size 2MB
        ]);

        // Create a new About instance
        $principle = new Principle();
        $principle->name = $request->name;
        $principle->short_descp = $request->short_descp;
        $principle->description = $request->description;
        $principle->status = $request->status;

        // Handle file uploads
        if ($request->hasFile('thumbnail_image')) {
            $principle->thumbnail_image = $request->file('thumbnail_image')->store('principle', 'public');
        }

        if ($request->hasFile('banner_top_image')) {
            $principle->banner_top_image = $request->file('banner_top_image')->store('principle', 'public');
        }

        if ($request->hasFile('banner_center_image')) {
            $principle->banner_center_image = $request->file('banner_center_image')->store('principle', 'public');
        }

        // Save the About instance to the database
        $principle->save();

        // Redirect or return a response
        return redirect()->route('admin.principle.index')->with('success', 'Principle Created successfully.');
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
        $principle = Principle::find($id);

        return view('admin.pages.principle.edit', compact('principle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $principle = Principle::findOrFail($id);

        // Validate the incoming request data
        $request->validate([
            'status' => 'required|in:active,inactive',
            'name' => 'required|string|max:255',
            'short_descp' => 'required|string|max:800',
            'thumbnail_image' => 'nullable|image|max:1048',
            'banner_top_image' => 'nullable|image|max:2048', // Max size 2MB
            'banner_center_image' => 'nullable|image|max:2048', // Max size 2MB // Allow null for updating
        ]);

        // Update the fields
        $principle->name = $request->name;
        $principle->short_descp = $request->short_descp;
        $principle->description = $request->description;
        $principle->status = $request->status;

        // Handle file uploads
        if ($request->hasFile('thumbnail_image')) {
            // Delete the old thumbnail_image if it exists
            if ($principle->thumbnail_image) {
                Storage::disk('public')->delete($principle->thumbnail_image);
            }
            // Store the new image
            $principle->thumbnail_image = $request->file('thumbnail_image')->store('principle', 'public');
        }

        if ($request->hasFile('banner_top_image')) {
            // Delete the old banner_top_image if it exists
            if ($principle->banner_top_image) {
                Storage::disk('public')->delete($principle->banner_top_image);
            }
            // Store the new image
            $principle->banner_top_image = $request->file('banner_top_image')->store('principle', 'public');
        }

        if ($request->hasFile('banner_center_image')) {
            // Delete the old banner_center_image if it exists
            if ($principle->banner_center_image) {
                Storage::disk('public')->delete($principle->banner_center_image);
            }
            // Store the new image
            $principle->banner_center_image = $request->file('banner_center_image')->store('principle', 'public');
        }

        $principle->save();
        return redirect()->route('admin.principle.index')->with('success', 'Principle Section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the existing record
        $principle = Principle::findOrFail($id);

        // Delete associated images if they exist
        if ($principle->thumbnail_image) {
            Storage::disk('public')->delete($principle->thumbnail_image);
        }
        if ($principle->banner_top_image) {
            Storage::disk('public')->delete($principle->banner_top_image);
        }
        if ($principle->banner_center_image) {
            Storage::disk('public')->delete($principle->banner_center_image);
        }

        $principle->delete();
    }

    public function updateStatusPrinciple(Request $request, $id)
    {
        $offer = Principle::findOrFail($id);
        $offer->status = $request->input('status');
        $offer->save();

        return response()->json(['success' => true]);
    }
}

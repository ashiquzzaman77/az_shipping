<?php

namespace App\Http\Controllers;

use App\Models\Vision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class VisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Vision::latest()->get();
        return view('admin.pages.vision.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.vision.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'vision' => 'required|string', // Adjust max length as needed
            'status' => 'required|in:active,inactive', // Assuming status can only be 'active' or 'inactive'
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Insert the vision
        Vision::insert([
            'vision' => $request->vision,
            'status' => $request->status,
            'added_by' => Auth::guard('admin')->user()->id,
            'created_at' => now(),
        ]);

        // Redirect or return a response
        return redirect()->route('admin.vision.index')->with('success', 'Vision Inserted Successfully!!');
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
        $vision = Vision::find($id);

        return view('admin.pages.vision.edit', compact('vision'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'vision' => 'required|string', // Adjust max length as needed
            'status' => 'required|in:active,inactive', // Assuming status can only be 'active' or 'inactive'
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $vision = Vision::findOrFail($id); // Find the vision by ID

        $vision->update([
            'vision' => $request->vision,
            'status' => $request->status,
            'updated_by' => Auth::guard('admin')->user()->id,
        ]);

        return redirect()->route('admin.vision.index')->with('success', 'Vision section Update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vision = Vision::findOrFail($id); // Find the vision by ID
        $vision->delete();
    }

    public function updateStatusVision(Request $request, $id)
    {
        $offer = Vision::findOrFail($id);
        $offer->status = $request->input('status');
        $offer->save();

        return response()->json(['success' => true]);
    }
}

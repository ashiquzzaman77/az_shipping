<?php

namespace App\Http\Controllers;

use App\Models\CeoMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CeoMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = CeoMessage::latest()->get();
        return view('admin.pages.ceo_message.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.ceo_message.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required|in:active,inactive',
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'ceo_short_msg' => 'nullable|string|max:50',
            'message' => 'required|string',
            'ceo_image' => 'required|image|max:2048', // Max size 2MB
            'image' => 'nullable|image|max:5048', // Banner image
        ]);

        // Create a new About instance
        $ceoMessage = new CeoMessage();
        $ceoMessage->status = $request->status;
        $ceoMessage->name = $request->name;
        $ceoMessage->position = $request->position;
        $ceoMessage->ceo_short_msg = $request->ceo_short_msg;
        $ceoMessage->message = $request->message;

        // Handle file uploads
        if ($request->hasFile('ceo_image')) {
            $ceoMessage->ceo_image = $request->file('ceo_image')->store('ceo', 'public');
        }

        if ($request->hasFile('image')) {
            $ceoMessage->image = $request->file('image')->store('ceo', 'public');
        }

        // Save the About instance to the database
        $ceoMessage->save();

        return redirect()->route('admin.ceo_message.index')->with('success', 'CEO Message created successfully.');
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
        $ceo = CeoMessage::find($id);

        return view('admin.pages.ceo_message.edit', compact('ceo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'status' => 'required|in:active,inactive',
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'ceo_short_msg' => 'nullable|string|max:50',
            'message' => 'required|string',
            'ceo_image' => 'nullable|image|max:2048', // Max size 2MB
            'image' => 'nullable|image|max:5048', // Banner image
        ]);

        $ceoMessage = CeoMessage::findOrFail($id);

        $ceoMessage->status = $request->status;
        $ceoMessage->name = $request->name;
        $ceoMessage->position = $request->position;
        $ceoMessage->ceo_short_msg = $request->ceo_short_msg;
        $ceoMessage->message = $request->message;

        // Handle file uploads
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($ceoMessage->image) {
                Storage::disk('public')->delete($ceoMessage->image);
            }
            // Store the new image
            $ceoMessage->image = $request->file('image')->store('ceo', 'public');
        }

        if ($request->hasFile('ceo_image')) {
            // Delete the old ceo_image if it exists
            if ($ceoMessage->ceo_image) {
                Storage::disk('public')->delete($ceoMessage->ceo_image);
            }
            // Store the new ceo_image
            $ceoMessage->ceo_image = $request->file('ceo_image')->store('ceo', 'public');
        }

        $ceoMessage->save();

        return redirect()->route('admin.ceo_message.index')->with('success', 'Messge Updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the existing record
        $about = CeoMessage::findOrFail($id);

        $about->delete();
    }

    public function updateStatusCEO(Request $request, $id)
    {
        $offer = CeoMessage::findOrFail($id);
        $offer->status = $request->input('status');
        $offer->save();

        return response()->json(['success' => true]);
    }
}

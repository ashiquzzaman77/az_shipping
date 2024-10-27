<?php

namespace App\Http\Controllers;

use App\Models\Legal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LegalController extends Controller
{
    public function updateStatusLegal(Request $request, $id)
    {
        $offer = Legal::findOrFail($id);
        $offer->status = $request->input('status');
        $offer->save();

        return response()->json(['success' => true]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Legal::latest()->get();
        return view('admin.pages.legal.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.legal.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Create a new About instance
        $legal = new Legal();
        $legal->status = $request->status;

        $legal->added_by = Auth::guard('admin')->user()->id;

        // Handle file uploads
        if ($request->hasFile('image')) {
            $legal->image = $request->file('image')->store('legal', 'public');
        }

        // Save the About instance to the database
        $legal->save();

        // Redirect or return a response
        return redirect()->route('admin.legal.index')->with('success', 'Legal section created successfully.');
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
        $legal = Legal::find($id);
        return view('admin.pages.legal.edit', compact('legal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the existing record
        $legal = Legal::findOrFail($id);
        $legal->updated_by = Auth::guard('admin')->user()->id;
        $legal->status = $request->status;


        // Handle file uploads
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($legal->image) {
                Storage::disk('public')->delete($legal->image);
            }
            // Store the new image
            $legal->image = $request->file('image')->store('legal', 'public');
        }

        $legal->save();

        return redirect()->route('admin.legal.index')->with('success', 'Legal Section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $legal = Legal::findOrFail($id);
        if ($legal->image) {
            Storage::disk('public')->delete($legal->image);
        }

        $legal->delete();
    }
}

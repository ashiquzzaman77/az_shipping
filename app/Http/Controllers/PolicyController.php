<?php

namespace App\Http\Controllers;

use App\Models\Policy;
use App\Models\TermsCondition;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Policy::latest()->get();
        return view('admin.pages.policy.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.policy.create');
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
            'effective_date' => 'required|date|after_or_equal:today',
            'expiration_date' => 'required|date|after:effective_date',
            'version' => 'nullable|string|max:50',
            'content' => 'required|string',
        ]);

        // Create a new policy record in the database
        Policy::create([
            'status' => $request->status,
            'name' => $request->name,
            'effective_date' => $request->effective_date,
            'expiration_date' => $request->expiration_date,
            'version' => $request->version,
            'content' => $request->content,
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.policy.index')->with('success', 'Policy created successfully.');
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
        $policy = Policy::find($id);

        return view('admin.pages.policy.edit', compact('policy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $request->validate([
            'status' => 'required|in:active,inactive',
            'name' => 'required|string|max:255',
            'effective_date' => 'required|date|after_or_equal:today',
            'expiration_date' => 'required|date|after:effective_date',
            'version' => 'nullable|string|max:50',
            'content' => 'required|string',
        ]);

        // Find the existing policy by ID
        $policy = Policy::findOrFail($id);

        // Update the policy record with new data
        $policy->update([
            'status' => $request->status,
            'name' => $request->name,
            'effective_date' => $request->effective_date,
            'expiration_date' => $request->expiration_date,
            'version' => $request->version,
            'content' => $request->content,
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.policy.index')->with('success', 'Policy updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Policy::findOrFail($id);

        $item->delete();
    }

    public function updateStatusPolicy(Request $request, $id)
    {
        $offer = Policy::findOrFail($id);
        $offer->status = $request->input('status');
        $offer->save();

        return response()->json(['success' => true]);
    }
}

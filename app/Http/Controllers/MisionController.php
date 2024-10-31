<?php

namespace App\Http\Controllers;

use App\Models\Mision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Mision::latest()->get();
        return view('admin.pages.mision.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.mision.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Validate the request
        $validator = Validator::make($request->all(), [
            'mision' => 'required|string', // Adjust max length as needed
            'status' => 'required', // Assuming status is a boolean
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Insert the mission
        Mision::insert([
            'mision' => $request->mision,
            'status' => $request->status,
            'added_by' => Auth::guard('admin')->user()->id,
            'created_at' => now(),
        ]);

        // Redirect or return a response
        return redirect()->route('admin.mision.index')->with('success', 'Mission section created successfully.');
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
        $mision = Mision::find($id);

        return view('admin.pages.mision.edit', compact('mision'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // Validate the request
        $validator = Validator::make($request->all(), [
            'mision' => 'required|string', // Adjust max length as needed
            'status' => 'required', // Assuming status is a boolean
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $mision = Mision::findOrFail($id); // Find the vision by ID

        $mision->update([
            'mision' => $request->mision,
            'status' => $request->status,
            'updated_by' => Auth::guard('admin')->user()->id,
        ]);

        // Redirect or return a response
        return redirect()->route('admin.mision.index')->with('success', 'Mission section created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mision = Mision::findOrFail($id); // Find the vision by ID
        $mision->delete();
    }

    public function updateStatusMision(Request $request, $id)
    {
        $offer = Mision::findOrFail($id);
        $offer->status = $request->input('status');
        $offer->save();

        return response()->json(['success' => true]);
    }
}

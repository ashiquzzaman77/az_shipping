<?php

namespace App\Http\Controllers;

use App\Models\Officer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OfficersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Officer::latest()->get();
        return view('admin.pages.office.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.office.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'rank' => 'nullable|string|max:255',
            'cdc_no' => 'nullable|string|max:255',
            'contact' => 'nullable|string|max:255',
            'academy' => 'nullable|string|max:255',
            'batch' => 'nullable|string|max:255',
            'cdc' => 'nullable|string|max:255',
            'coc' => 'nullable|string|max:255',
            'goc' => 'nullable|string|max:255',
            'sid' => 'nullable|string|max:255',
            'ph' => 'nullable|string|max:255',
            'pst' => 'nullable|string|max:255',
            'fpff' => 'nullable|string|max:255',
            'efa' => 'nullable|string|max:255',
            'pssr' => 'nullable|string|max:255',
            'sat' => 'nullable|string|max:255',
            'dsd' => 'nullable|string|max:255',
            'pscrb' => 'nullable|string|max:255',
            'edh' => 'nullable|string|max:255',
            'radar_navigation' => 'nullable|string|max:255',
            'aff' => 'nullable|string|max:255',
            'mfa' => 'nullable|string|max:255',
            'madical_care' => 'nullable|string|max:255',
            'ens' => 'nullable|string|max:255',
            'sso' => 'nullable|string|max:255',
            'brm' => 'nullable|string|max:255',
            'hvs' => 'nullable|string|max:255',
            'ship_simulation' => 'nullable|string|max:255',
            'ecdis' => 'nullable|string|max:255',
            'atoto' => 'nullable|string|max:255',
            'cor' => 'nullable|string|max:255',
            'covid' => 'nullable|string|max:255',
            'current_status' => 'nullable|string|max:255',
            'discharge_date' => 'nullable|date',
            'end_of_contract' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create the officer record
        Officer::create($request->all());

        // Redirect with success message
        return redirect()->route('admin.officer.index')->with('success', 'Officer created successfully.');
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
        $officer = Officer::find($id);

        return view('admin.pages.office.edit', compact('officer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the officer by ID
        $officer = Officer::findOrFail($id);

        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'rank' => 'nullable|string|max:255',
            'cdc_no' => 'nullable|string|max:255',
            'contact' => 'required|string|max:25', // Adjust the max length as necessary
            'academy' => 'nullable|string|max:255',
            'batch' => 'nullable|string|max:255',
            'cdc' => 'nullable|string|max:255',
            'coc' => 'nullable|string|max:255',
            'goc' => 'nullable|string|max:255',
            'sid' => 'nullable|string|max:255',
            'ph' => 'nullable|string|max:255',
            'pst' => 'nullable|string|max:255',
            'fpff' => 'nullable|string|max:255',
            'efa' => 'nullable|string|max:255',
            'pssr' => 'nullable|string|max:255',
            'sat' => 'nullable|string|max:255',
            'dsd' => 'nullable|string|max:255',
            'pscrb' => 'nullable|string|max:255',
            'edh' => 'nullable|string|max:255',
            'radar_navigation' => 'nullable|string|max:255',
            'aff' => 'nullable|string|max:255',
            'mfa' => 'nullable|string|max:255',
            'madical_care' => 'nullable|string|max:255',
            'ens' => 'nullable|string|max:255',
            'sso' => 'nullable|string|max:255',
            'brm' => 'nullable|string|max:255',
            'hvs' => 'nullable|string|max:255',
            'ship_simulation' => 'nullable|string|max:255',
            'ecdis' => 'nullable|string|max:255',
            'atoto' => 'nullable|string|max:255',
            'cor' => 'nullable|string|max:255',
            'covid' => 'nullable|string|max:255',
            'current_status' => 'nullable|string|max:255',
            'discharge_date' => 'nullable|date',
            'end_of_contract' => 'nullable|date',
        ]);

        // Update the officer's attributes
        $officer->update($validatedData);

        // Optionally flash a success message to the session
        return redirect()->route('admin.officer.index')->with('success', 'Officer updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Officer::findOrFail($id);

        $item->delete();
    }
}

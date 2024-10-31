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
        // Validate the request data
        $validator = Validator::make($request->all(), [
            'officer_type' => 'required|string',
            'name' => 'required|string|max:255',
            'rank' => 'required|string|max:255',
            'cdc_no' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'academy' => 'required|string|max:255',
            'batch' => 'required|string|max:255',
            'passport_number' => 'required|string|max:255',
            'status' => 'required|string',
            'ship_name' => 'nullable|string|max:255',

            'cdc' => 'nullable|date',
            'coc' => 'nullable|date',
            'goc' => 'nullable|date',
            'sid' => 'nullable|date',
            'ph' => 'nullable|date',
            'pst' => 'nullable|date',
            'fpff' => 'nullable|date',
            'efa' => 'nullable|date',
            'pssr' => 'nullable|date',
            'sat' => 'nullable|date',
            'dsd' => 'nullable|date',
            'pscrb' => 'nullable|date',
            'edh' => 'nullable|date',
            'passport' => 'nullable|date',
            'radar_navigation' => 'nullable|date',
            'aff' => 'nullable|date',
            'mfa' => 'nullable|date',
            'madical_care' => 'nullable|date',
            'ens' => 'nullable|date',
            'sso' => 'nullable|date',
            'brm' => 'nullable|date',
            'hvs' => 'nullable|date',
            'readiness' => 'nullable|date',
            'ship_simulation' => 'nullable|date',
            'ecdis' => 'nullable|date',
            'atoto' => 'nullable|date',
            'cor' => 'nullable|date',
            'covid' => 'nullable|string|max:255',
            'discharge_date' => 'nullable|date',
            'end_of_contract' => 'nullable|date',
            'other_one' => 'nullable|date',
            'other_two' => 'nullable|date',
            'other_three' => 'nullable|date',
            'other_four' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create the officer record
        Officer::create([
            'officer_type' => $request->officer_type,
            'name' => $request->name,
            'rank' => $request->rank,
            'cdc_no' => $request->cdc_no,
            'contact' => $request->contact,
            'academy' => $request->academy,
            'batch' => $request->batch,
            'passport_number' => $request->passport_number,
            'status' => $request->status,
            'ship_name' => $request->ship_name,
            'cdc' => $request->cdc,
            'coc' => $request->coc,
            'goc' => $request->goc,
            'sid' => $request->sid,
            'ph' => $request->ph,
            'pst' => $request->pst,
            'fpff' => $request->fpff,
            'efa' => $request->efa,
            'pssr' => $request->pssr,
            'readiness' => $request->readiness,
            'sat' => $request->sat,
            'dsd' => $request->dsd,
            'pscrb' => $request->pscrb,
            'edh' => $request->edh,
            'passport' => $request->passport,
            'radar_navigation' => $request->radar_navigation,
            'aff' => $request->aff,
            'mfa' => $request->mfa,
            'madical_care' => $request->madical_care,
            'ens' => $request->ens,
            'sso' => $request->sso,
            'brm' => $request->brm,
            'hvs' => $request->hvs,
            'ship_simulation' => $request->ship_simulation,
            'ecdis' => $request->ecdis,
            'atoto' => $request->atoto,
            'cor' => $request->cor,
            'covid' => $request->covid,
            'discharge_date' => $request->discharge_date,
            'end_of_contract' => $request->end_of_contract,
            'other_one' => $request->other_one,
            'other_two' => $request->other_two,
            'other_three' => $request->other_three,
            'other_four' => $request->other_four,
        ]);

        return redirect()->route('admin.officer.index')->with('success', 'Officer created successfully!');
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
            'officer_type' => 'required|string',
            'rank' => 'required|string|max:255',
            'cdc_no' => 'required|string|max:255',
            'contact' => 'required|string|max:255',
            'academy' => 'required|string|max:255',
            'batch' => 'required|string|max:255',
            'passport_number' => 'required|string|max:255',
            'status' => 'required|string',
            'ship_name' => 'nullable|string|max:255',

            'cdc' => 'nullable|date',
            'readiness' => 'nullable|date',
            'coc' => 'nullable|date',
            'goc' => 'nullable|date',
            'sid' => 'nullable|date',
            'ph' => 'nullable|date',
            'pst' => 'nullable|date',
            'fpff' => 'nullable|date',
            'efa' => 'nullable|date',
            'pssr' => 'nullable|date',
            'sat' => 'nullable|date',
            'dsd' => 'nullable|date',
            'pscrb' => 'nullable|date',
            'edh' => 'nullable|date',
            'passport' => 'nullable|date',
            'radar_navigation' => 'nullable|date',
            'aff' => 'nullable|date',
            'mfa' => 'nullable|date',
            'madical_care' => 'nullable|date',
            'ens' => 'nullable|date',
            'sso' => 'nullable|date',
            'brm' => 'nullable|date',
            'hvs' => 'nullable|date',
            'ship_simulation' => 'nullable|date',
            'ecdis' => 'nullable|date',
            'atoto' => 'nullable|date',
            'cor' => 'nullable|date',
            'covid' => 'nullable|string|max:255',
            'discharge_date' => 'nullable|date',
            'end_of_contract' => 'nullable|date',
            'other_one' => 'nullable|date',
            'other_two' => 'nullable|date',
            'other_three' => 'nullable|date',
            'other_four' => 'nullable|date',
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

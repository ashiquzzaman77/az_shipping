<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Rating::latest()->get();
        return view('admin.pages.rating.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.rating.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'nullable|string|max:255',
            'rank' => 'nullable|string|max:255',
            'cdc_no' => 'nullable|string|max:255',
            'contact' => 'nullable|string|max:255',
            'academy' => 'nullable|string|max:255',
            'status' => 'nullable|string',
            'ship_name' => 'nullable|string',

            'batch' => 'nullable|string|max:255',
            'cdc' => 'nullable|string|max:255',
            'passport' => 'nullable|string|max:255',
            'sid' => 'nullable|string|max:255',
            'ph' => 'nullable|string|max:255',
            'pst' => 'nullable|string|max:255',
            'aff' => 'nullable|string|max:255',
            'atoto' => 'nullable|string|max:255',
            'fpff' => 'nullable|string|max:255',
            'efa' => 'nullable|string|max:255',
            'pssr' => 'nullable|string|max:255',
            'sat' => 'nullable|string|max:255',
            'dsd' => 'nullable|string|max:255',
            'pscrb' => 'nullable|string|max:255',
            'nwr' => 'nullable|string|max:255',
            'rasd' => 'nullable|string|max:255',
            'covid' => 'nullable|string|max:255',
            'discharge_date' => 'nullable|date',
            'end_of_contract' => 'nullable|date',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create a new Rating instance and fill it with request data
        $rating = new Rating();
        $rating->name = $request->name;
        $rating->rank = $request->rank;
        $rating->cdc_no = $request->cdc_no;
        $rating->contact = $request->contact;
        $rating->academy = $request->academy;
        $rating->status = $request->status;
        $rating->ship_name = $request->ship_name;

        $rating->batch = $request->batch;
        $rating->cdc = $request->cdc;
        $rating->passport = $request->passport;
        $rating->sid = $request->sid;
        $rating->ph = $request->ph;
        $rating->pst = $request->pst;
        $rating->aff = $request->aff;
        $rating->fpff = $request->fpff;
        $rating->atoto = $request->atoto;
        $rating->efa = $request->efa;
        $rating->pssr = $request->pssr;
        $rating->sat = $request->sat;
        $rating->dsd = $request->dsd;
        $rating->pscrb = $request->pscrb;
        $rating->nwr = $request->nwr;
        $rating->rasd = $request->rasd;
        $rating->covid = $request->covid;
        $rating->discharge_date = $request->discharge_date;
        $rating->end_of_contract = $request->end_of_contract;

        // Save the new rating to the database
        $rating->save();

        // Redirect or respond with a success message
        return redirect()->route('admin.rating.index')->with('success', 'Rating saved successfully!');
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
        $rating = Rating::find($id);

        return view('admin.pages.rating.edit', compact('rating'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'nullable|string|max:255',
            'rank' => 'nullable|string|max:255',
            'cdc_no' => 'nullable|string|max:255',
            'contact' => 'nullable|string|max:255',
            'academy' => 'nullable|string|max:255',
            'status' => 'nullable|string',

            'ship_name' => 'nullable|string',
            'batch' => 'nullable|string|max:255',
            'cdc' => 'nullable|string|max:255',
            'passport' => 'nullable|string|max:255',
            'sid' => 'nullable|string|max:255',
            'ph' => 'nullable|string|max:255',
            'pst' => 'nullable|string|max:255',
            'aff' => 'nullable|string|max:255',
            'fpff' => 'nullable|string|max:255',
            'atoto' => 'nullable|string|max:255',
            'efa' => 'nullable|string|max:255',
            'pssr' => 'nullable|string|max:255',
            'sat' => 'nullable|string|max:255',
            'dsd' => 'nullable|string|max:255',
            'pscrb' => 'nullable|string|max:255',
            'nwr' => 'nullable|string|max:255',
            'rasd' => 'nullable|string|max:255',
            'covid' => 'nullable|string|max:255',
            'discharge_date' => 'nullable|date',
            'end_of_contract' => 'nullable|date',
        ]);

        // Find the rating by ID and update it
        $rating = Rating::findOrFail($id);
        $rating->update($validatedData);

        // Redirect back to the edit form with success message
        return redirect()->route('admin.rating.index', $rating->id)
                         ->with('success', 'Rating updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Rating::findOrFail($id);
        $item->delete();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Choose;
use Illuminate\Http\Request;

class ChooseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Choose::latest()->get();
        return view('admin.pages.choose.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.choose.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'status' => 'required|in:active,inactive',
            'row_one_title' => 'required|string|max:255',
            'row_one_subtitle' => 'required|string|max:255',
            'row_one_icon' => 'nullable|string|max:255',

            'row_two_title' => 'required|string|max:255',
            'row_two_subtitle' => 'required|string|max:255',
            'row_two_icon' => 'nullable|string|max:255',

            'row_three_title' => 'required|string|max:255',
            'row_three_subtitle' => 'required|string|max:255',
            'row_three_icon' => 'nullable|string|max:255',

            'row_four_title' => 'required|string|max:255',
            'row_four_subtitle' => 'required|string|max:255',
            'row_four_icon' => 'nullable|string|max:255',

            'main_title' => 'required|string|max:255',
            'long_descp' => 'required|string',
        ]);

        Choose::create([
            'status' => $request->input('status'), // e.g., 'active' or 'inactive'
            'row_one_title' => $request->input('row_one_title'),
            'row_one_subtitle' => $request->input('row_one_subtitle'),
            'row_one_icon' => $request->input('row_one_icon'),
            'row_two_title' => $request->input('row_two_title'),
            'row_two_subtitle' => $request->input('row_two_subtitle'),
            'row_two_icon' => $request->input('row_two_icon'),
            'row_three_title' => $request->input('row_three_title'),
            'row_three_subtitle' => $request->input('row_three_subtitle'),
            'row_three_icon' => $request->input('row_three_icon'),
            'row_four_title' => $request->input('row_four_title'),
            'row_four_subtitle' => $request->input('row_four_subtitle'),
            'row_four_icon' => $request->input('row_four_icon'),
            'main_title' => $request->input('main_title'),
            'long_descp' => $request->input('long_descp'),
        ]);

        return redirect()->route('admin.choose.index')->with('success', 'Data Inserted Successfully!!');
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
        $choose = Choose::find($id);

        return view('admin.pages.choose.edit', compact('choose'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'status' => 'required|in:active,inactive',
            'row_one_title' => 'required|string|max:255',
            'row_one_subtitle' => 'required|string|max:255',

            'row_one_icon' => 'nullable|string|max:255',
            'row_two_title' => 'required|string|max:255',
            'row_two_subtitle' => 'required|string|max:255',

            'row_two_icon' => 'nullable|string|max:255',
            'row_three_title' => 'required|string|max:255',
            'row_three_subtitle' => 'required|string|max:255',
            
            'row_three_icon' => 'nullable|string|max:255',
            'row_four_title' => 'required|string|max:255',
            'row_four_subtitle' => 'required|string|max:255',
            'row_four_icon' => 'nullable|string|max:255',
            'main_title' => 'required|string|max:255',
            'long_descp' => 'required|string',
        ]);

        $choose = Choose::findOrFail($id);

        // Prepare the data for update
        $data = $request->all();

        // Update the record
        $choose->update($data);

        return redirect()->route('admin.choose.index')->with('success', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Choose::findOrFail($id);

        $item->delete();
    }

    public function updateStatusChoose(Request $request, $id)
    {
        $offer = Choose::findOrFail($id);
        $offer->status = $request->input('status');
        $offer->save();

        return response()->json(['success' => true]);
    }
}

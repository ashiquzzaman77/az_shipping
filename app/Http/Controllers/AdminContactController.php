<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Contact::latest()->get();
        return view('admin.pages.contact.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Contact::findOrFail($id);

        $item->delete();
    }

    public function bulkDelete(Request $request)
    {
        $ids = json_decode($request->input('ids'), true);

        // Validate that IDs are provided
        if (empty($ids)) {
            return redirect()->back()->with('error', 'No items selected for deletion.');
        }

        // Perform the deletion
        Contact::whereIn('id', $ids)->delete();

        return redirect()->back()->with('success', 'Selected items deleted successfully.');
    }

}

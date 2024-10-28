<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Client::latest()->get();
        return view('admin.pages.client.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string',
            'message' => 'required|string',
            'star' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,avif,bmp,tiff|max:5048',
        ]);

        // Create a new About instance
        $client = new Client();
        $client->name = $request->name;
        $client->position = $request->position;
        $client->star = $request->star;
        $client->message = $request->message;
        $client->status = $request->status;

        // Handle file uploads
        if ($request->hasFile('image')) {
            $client->image = $request->file('image')->store('client', 'public');
        }

        // Save the About instance to the database
        $client->save();

        // Redirect or return a response
        return redirect()->route('admin.client.index')->with('success', 'Data Created successfully.');
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
        $client = Client::find($id);

        return view('admin.pages.client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the existing record
        $client = Client::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string',
            'message' => 'required|string',
            'star' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,avif,bmp,tiff|max:5048',
        ]);

        // Update the fields
        $client->name = $request->name;
        $client->position = $request->position;
        $client->star = $request->star;
        $client->message = $request->message;
        $client->status = $request->status;

        // Handle file uploads
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($client->image) {
                Storage::disk('public')->delete($client->image);
            }
            // Store the new image
            $client->image = $request->file('image')->store('client', 'public');
        }

        $client->save();
        return redirect()->route('admin.client.index')->with('success', 'Client Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the existing record
        $client = Client::findOrFail($id);

        // Delete associated images if they exist
        if ($client->image) {
            Storage::disk('public')->delete($client->image);
        }

        $client->delete();
    }

    public function updateStatusClient(Request $request, $id)
    {
        $offer = Client::findOrFail($id);
        $offer->status = $request->input('status');
        $offer->save();

        return response()->json(['success' => true]);
    }
}

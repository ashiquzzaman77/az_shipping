<?php

namespace App\Http\Controllers\Api;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class TeamApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['data' => Team::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable',
            'phone' => 'nullable|string|max:15',
            'status' => 'nullable',
            // 'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        ]);

        $data = $request->only([
            'name',
            'email',
            'phone',
            'status'
        ]);

        // Handle image upload if present
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('team', 'public'); // Store image in storage/app/public/team
            $data['image'] = $imagePath;
        }

        // Insert team data into database
        $teamApi = Team::create($data);

        return response()->json(['data' => $teamApi], 201); // 201 Created status code
        // return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the team by ID
        $team = Team::find($id);

        // Check if team exists
        if (!$team) {
            return response()->json(['error' => 'Team not found'], 404);
        }

        return response()->json(['data' => $team]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the team or fail
        $team = Team::findOrFail($id);

        // Validate incoming request data
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|max:255|email|unique:teams,email,' . $team->id,
            'position' => 'sometimes|required|string|max:255',
            'order_team' => 'sometimes|required|integer',
            'short_descp' => 'nullable|string',
            'facebook' => 'nullable|url|max:255',
            'whatup' => 'nullable|string|max:15',
            'phone' => 'nullable|string|max:15',
            'status' => 'sometimes|required|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        ]);

        // Prepare the updated data
        $data = $request->only([
            'name',
            'email',
            'position',
            'order_team',
            'short_descp',
            'facebook',
            'whatup',
            'phone',
            'status'
        ]);

        // Handle image upload if present
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($team->image && Storage::exists('public/team/' . $team->image)) {
                Storage::delete('public/team/' . $team->image);
            }

            // Store the new image
            $image = $request->file('image');
            $imagePath = $image->store('team', 'public');
            $data['image'] = $imagePath;
        }

        // Update the team
        $team->update($data);

        return response()->json(['data' => $team]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the team by ID
        $team = Team::find($id);

        // Check if team exists
        if (!$team) {
            return response()->json(['error' => 'Team not found'], 404);
        }

        // Delete the image if it exists
        if ($team->image && Storage::exists('public/team/' . $team->image)) {
            Storage::delete('public/team/' . $team->image);
        }

        // Delete the team
        $team->delete();

        return response()->json(['message' => 'Team deleted successfully'], 200);
    }
}

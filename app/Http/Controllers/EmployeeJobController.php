<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeJobController extends Controller
{
    public function updateStatusJob(Request $request, $id)
    {
        $offer = Job::findOrFail($id);
        $offer->status = $request->input('status');
        $offer->save();

        return response()->json(['success' => true]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Job::latest()->get();
        return view('admin.pages.job.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.job.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation rules
        $validator = Validator::make($request->all(), [
            'status' => 'required|string',
            'rank' => 'required|string|max:255',
            'deadline' => 'required|date',
            'contract_duration' => 'nullable|string|max:255',
            'experienced' => 'nullable|string|max:255',
            'salary' => 'nullable|string|max:255',
            'dwt' => 'nullable|string|max:255',
            'total_needed' => 'nullable|integer',
            'ship_particulars' => 'nullable|string|max:255',
            'long_descp' => 'nullable|string',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Create a new job entry
        Job::create([
            'status' => $request->status,
            'rank' => $request->rank,
            'deadline' => $request->deadline,
            'contract_duration' => $request->contract_duration,
            'experienced' => $request->experienced,
            'salary' => $request->salary,
            'dwt' => $request->dwt,
            'total_needed' => $request->total_needed,
            'ship_particulars' => $request->ship_particulars,
            'long_descp' => $request->long_descp,
        ]);

        // Redirect or return response
        return redirect()->route('admin.job.index')->with('success', 'Job created successfully!');
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
        $job = Job::find($id);

        return view('admin.pages.job.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the job by ID
        $job = Job::findOrFail($id);

        // Validation rules
        $validator = Validator::make($request->all(), [
            'status' => 'required|string',
            'rank' => 'required|string|max:255',
            'deadline' => 'required|date',
            'contract_duration' => 'nullable|string|max:255',
            'experienced' => 'nullable|string|max:255',
            'salary' => 'nullable|string|max:255',
            'dwt' => 'nullable|string|max:255',
            'total_needed' => 'nullable|integer',
            'ship_particulars' => 'nullable|string|max:255',
            'long_descp' => 'nullable|string',
        ]);

        // Check for validation errors
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Update the job entry
        $job->update([
            'status' => $request->status,
            'rank' => $request->rank,
            'deadline' => $request->deadline, // Store as is; format when displaying
            'contract_duration' => $request->contract_duration,
            'experienced' => $request->experienced,
            'salary' => $request->salary,
            'dwt' => $request->dwt,
            'total_needed' => $request->total_needed,
            'ship_particulars' => $request->ship_particulars,
            'long_descp' => $request->long_descp,
        ]);

        // Redirect or return response
        return redirect()->route('admin.job.index')->with('success', 'Job updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Job::findOrFail($id);

        $item->delete();
    }
}

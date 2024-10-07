<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\AppointmentSlot;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class AppointmentSlotController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'admins' => Admin::latest()->get(),
            'items' => AppointmentSlot::latest()->get(),
        ];
        return view('admin.pages.appointmentSlot.index', $data);
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
        // Validate the incoming request data
        $request->validate([
            'counselor_id' => 'required|exists:admins,id',
            'start_time'   => 'required|date_format:H:i',
            'end_time'     => 'required|date_format:H:i|after:start_time',
            'date'         => 'required|date',
            'added_by'     => 'nullable|exists:admins,id', // Optional field
        ]);

        // Create a new appointment slot
        $appointmentSlot = AppointmentSlot::create([
            'counselor_id' => $request->counselor_id,
            'start_time'   => $request->start_time,
            'end_time'     => $request->end_time,
            'date'         => $request->date,
            'added_by'     => Auth::guard('admin')->user()->id, // Track who added it
            'updated_by'   => Auth::guard('admin')->user()->id, // Track who updated it
        ]);

        // Session::flash('success', 'Slot updated Successfully');
        return redirect()->back();
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
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $validator = Validator::make($request->all(), [
            'counselor_id' => 'required|exists:admins,id', // Ensure the selected counselor exists
            'start_time' => 'required|date_format:H:i', // Validate time format
            'end_time' => 'required|date_format:H:i|after:start_time', // Ensure end time is after start time
            'date' => 'required|date',
        ]);

        // If validation fails, redirect back with errors
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Find the appointment slot and update it
        $appointmentSlot = AppointmentSlot::findOrFail($id);
        $appointmentSlot->update([
            'counselor_id' => $request->input('counselor_id'),
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),
            'date' => $request->input('date'),

            'added_by'     => Auth::guard('admin')->user()->id,
            'updated_by'   => Auth::guard('admin')->user()->id,
        ]);

        // Redirect back with a success message
        return redirect()->route('admin.appointment-slot.index') // Adjust the route as necessary
            ->with('success', 'Appointment slot updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $appointmentSlot = AppointmentSlot::findOrFail($id);
        $appointmentSlot->delete();
    }
}

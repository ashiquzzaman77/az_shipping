<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\SentMessage;
use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SentMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = SentMessage::latest()->get();
        return view('admin.pages.sent_message.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.sent_message.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Step 1: Validate the incoming request
        $validated = $request->validate([
            'status' => 'required|in:active,inactive',  // Ensure status is either active or inactive
            'time' => 'nullable|date',                  // Ensure datetime is a valid date
            'subject' => 'required|string|max:255',     // Subject should be required and a string
            'message' => 'required|string',             // Message should be required and a string
        ]);

        // Step 2: Store the validated data in the database
        $item = SentMessage::create([
            'status' => $validated['status'],
            'time' => $validated['time'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
        ]);

        // Step 3: Send emails to active teams
        try {
            $teams = Team::where('status', 'active')->get();

            $emailSentCount = 0; // To track how many emails were sent
            $invalidEmailCount = 0; // To track how many teams had invalid email addresses

            foreach ($teams as $team) {
                // Check if the team has a valid email address
                if (!empty($team->email) && filter_var($team->email, FILTER_VALIDATE_EMAIL)) {
                    // Send email to the team with a valid email address
                    Mail::to($team->email)->send(new MessageReceived($item, $team));
                    $emailSentCount++;
                } else {
                    // Log invalid email address (optional)
                    Log::warning('Invalid email address for team: ' . $team->id);
                    $invalidEmailCount++;
                }
            }

            // Step 4: Return success response if emails sent successfully
            if ($emailSentCount > 0) {
                return redirect()->route('admin.sent-message.index')  // Assuming you have an index route for viewing messages
                    ->with('success', $emailSentCount . ' email(s) sent successfully!');
            } else {
                // In case no valid emails were found
                return redirect()->route('admin.sent-message.index')
                    ->with('error', 'No valid email addresses found for active teams.');
            }
        } catch (\Exception $e) {
            // Step 5: Catch any exception during the email sending process
            Log::error('Error sending email: ' . $e->getMessage());

            // Return a failure response with the error message
            return redirect()->route('admin.sent-message.index')
                ->with('error', 'Failed to send the message. Please try again later.');
        }
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
        $item = SentMessage::findOrFail($id);

        $item->delete();
    }

    public function updateStatusSentMessage(Request $request, $id)
    {
        $offer = SentMessage::findOrFail($id);
        $offer->status = $request->input('status');
        $offer->save();

        return response()->json(['success' => true]);
    }
}

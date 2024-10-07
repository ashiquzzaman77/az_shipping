<?php

namespace App\Listeners;

use App\Events\ActivityLogged;
use App\Models\ActivityLog;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ActivityLogCreated
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ActivityLogged $event): void
    {
        ActivityLog::create([
            'description' => $event->description,
            'subject_type' => get_class($event->subject),
            'subject_id' => $event->subject->id,
            'user_type' => auth()->user() ? get_class(auth()->user()) : null,
            'user_id' => auth()->user() ? auth()->user()->id : null,
        ]);
    }
}
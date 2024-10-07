<?php

namespace App\Http\Controllers\Admin;

use App\Models\ActivityLog;
use App\Http\Controllers\Controller;

class ActivityLogController extends Controller
{
    /**
     * The constructor function sets middleware permissions for specific actions in a PHP class.
     */
    public function __construct()
    {
        $this->middleware('permission:view activity logs|show activity logs|delete activity logs')->only(['index', 'show', 'destroy']);
    }

    public function index()
    {
        return view('admin.pages.activity_logs.index', ['activityLogs' => ActivityLog::all()]);
    }

    public function show(ActivityLog $activityLog)
    {
        return view('admin.pages.activity_logs.show', compact('activityLog'));
    }

    public function destroy(ActivityLog $activity_log)
    {
        $activity_log->delete();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Event::latest()->get();
        return view('admin.pages.event.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $mainFile = $request->file('banner_image');
        $imgPath = storage_path('app/public/event/');

        $iconmainFile = $request->file('row_one_image'); ///////
        $iconimgPath = storage_path('app/public/event/'); //////

        ////////
        if (empty($iconmainFile)) {

            $globalFunIconImg['file_name'] = '';
        } else {
            $globalFunIconImg = customUpload($iconmainFile, $iconimgPath);
            $globalFunIconImg['file_name'] = $globalFunIconImg['file_name'];
        }
        /////////////////////

        if (empty($mainFile)) {

            Event::create([

                'event_name' => $request->event_name,
                'start_date' => $request->start_date,
                'start_time' => $request->start_time,
                'end_date' => $request->end_date,
                'end_time' => $request->end_time,

                'event_short_descp' => $request->event_short_descp,

                'max_attendees' => $request->max_attendees,
                'current_attendees' => $request->current_attendees,

                'banner_badge' => $request->banner_badge,
                'banner_sub_title' => $request->banner_sub_title,
                'banner_title' => $request->banner_title,
                'organizer_text' => $request->organizer_text,

                'map_link' => $request->map_link,
                'website_link' => $request->website_link,
                'whatsapp_link' => $request->whatsapp_link,
                'other_link' => $request->other_link,

                'row_one_title' => $request->row_one_title,
                'row_one_description' => $request->row_one_description,

                'row_two_title' => $request->row_two_title,
                'row_two_description' => $request->row_two_description,

                'row_three_badge' => $request->row_three_badge,
                'row_three_title' => $request->row_three_title,
                'row_three_description' => $request->row_three_description,

                'status' => $request->status,
                'event_type' => $request->event_type,

                'location' => $request->location,
                'contact' => $request->contact,

                'added_by' => Auth::guard('admin')->user()->id,
                'updated_by' => Auth::guard('admin')->user()->id,

                'created_at' => now(),

            ]);
        } else {

            $globalFunImg = customUpload($mainFile, $imgPath);

            if ($globalFunImg['status'] == 1) {

                Event::create([

                    'event_name' => $request->event_name,
                    'start_date' => $request->start_date,
                    'start_time' => $request->start_time,
                    'end_date' => $request->end_date,
                    'end_time' => $request->end_time,

                    'event_short_descp' => $request->event_short_descp,

                    'max_attendees' => $request->max_attendees,
                    'current_attendees' => $request->current_attendees,

                    'banner_badge' => $request->banner_badge,
                    'banner_sub_title' => $request->banner_sub_title,
                    'banner_title' => $request->banner_title,
                    'organizer_text' => $request->organizer_text,

                    'map_link' => $request->map_link,
                    'website_link' => $request->website_link,
                    'whatsapp_link' => $request->whatsapp_link,
                    'other_link' => $request->other_link,

                    'row_one_title' => $request->row_one_title,
                    'row_one_description' => $request->row_one_description,

                    'row_two_title' => $request->row_two_title,
                    'row_two_description' => $request->row_two_description,

                    'row_three_badge' => $request->row_three_badge,
                    'row_three_title' => $request->row_three_title,
                    'row_three_description' => $request->row_three_description,

                    'status' => $request->status,
                    'event_type' => $request->event_type,

                    'added_by' => Auth::guard('admin')->user()->id,
                    'updated_by' => Auth::guard('admin')->user()->id,

                    'location' => $request->location,
                    'contact' => $request->contact,

                    'banner_image' => $globalFunImg['file_name'],
                    'row_one_image' => $globalFunIconImg['file_name'], ////////

                    'created_at' => now(),

                ]);
            } else {
                return redirect()->back()->withInput()->with('error', 'Image upload failed! plz try again');
            }
        }

        return redirect()->route('admin.event.index')->with('success', 'Data Inserted Successfully!!');
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
        $item = Event::find($id);

        return view('admin.pages.event.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = Event::findOrFail($id);

        // Define upload paths
        $uploadPath = storage_path('app/public/event/');

        // Handle banner image upload
        $mainFile = $request->file('banner_image');
        $globalFunImg = ['status' => 0, 'file_name' => null];

        if ($mainFile) {
            $globalFunImg = customUpload($mainFile, $uploadPath);
            // Delete the old banner image if a new one was successfully uploaded
            if ($globalFunImg['status'] == 1 && $item->banner_image) {
                $oldBannerImagePath = public_path('storage/event-page/') . $item->banner_image;
                if (File::exists($oldBannerImagePath)) {
                    File::delete($oldBannerImagePath);
                }
            }
        }

        // Handle row one image upload
        $iconmainFile = $request->file('row_one_image');
        $globalFunIconImg = ['status' => 0, 'file_name' => null];

        if ($iconmainFile) {
            $globalFunIconImg = customUpload($iconmainFile, $uploadPath);
            // Delete the old row one image if a new one was successfully uploaded
            if ($globalFunIconImg['status'] == 1 && $item->row_one_image) {
                $oldRowOneImagePath = public_path('storage/event-page/') . $item->row_one_image;
                if (File::exists($oldRowOneImagePath)) {
                    File::delete($oldRowOneImagePath);
                }
            }
        }

        // Update the item with new values
        $item->update([

            'event_name' => $request->event_name,
            'start_date' => $request->start_date,
            'start_time' => $request->start_time,
            'end_date' => $request->end_date,
            'end_time' => $request->end_time,

            'event_short_descp' => $request->event_short_descp,

            'max_attendees' => $request->max_attendees,
            'current_attendees' => $request->current_attendees,

            'banner_badge' => $request->banner_badge,
            'banner_sub_title' => $request->banner_sub_title,
            'banner_title' => $request->banner_title,
            'organizer_text' => $request->organizer_text,

            'map_link' => $request->map_link,
            'website_link' => $request->website_link,
            'whatsapp_link' => $request->whatsapp_link,
            'other_link' => $request->other_link,

            'row_one_title' => $request->row_one_title,
            'row_one_description' => $request->row_one_description,

            'row_two_title' => $request->row_two_title,
            'row_two_description' => $request->row_two_description,

            'row_three_badge' => $request->row_three_badge,
            'row_three_title' => $request->row_three_title,
            'row_three_description' => $request->row_three_description,

            'status' => $request->status,
            'event_type' => $request->event_type,

            'location' => $request->location,
            'contact' => $request->contact,

            'added_by' => Auth::guard('admin')->user()->id,
            'updated_by' => Auth::guard('admin')->user()->id,

            'banner_image' => $globalFunImg['status'] == 1 ? $globalFunImg['file_name'] : $item->banner_image,
            'row_one_image' => $globalFunIconImg['status'] == 1 ? $globalFunIconImg['file_name'] : $item->row_one_image,
        ]);

        return redirect()->route('admin.event.index')->with('success', 'Data Updated Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Event::findOrFail($id);
        $item->delete();
    }
}

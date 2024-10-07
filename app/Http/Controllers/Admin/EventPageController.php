<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EventPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class EventPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = EventPage::latest()->get();
        return view('admin.pages.event-page.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.event-page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $mainFile = $request->file('banner_image');
        $imgPath = storage_path('app/public/event-page/');

        $iconmainFile = $request->file('row_one_image'); ///////
        $iconimgPath = storage_path('app/public/event-page/'); //////

        ////////
        if (empty($iconmainFile)) {

            $globalFunIconImg['file_name'] = '';

        } else {
            $globalFunIconImg = customUpload($iconmainFile, $iconimgPath);
            $globalFunIconImg['file_name'] = $globalFunIconImg['file_name'];
        }
        /////////////////////

        if (empty($mainFile)) {

            EventPage::insert([

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

                'added_by' => Auth::guard('admin')->user()->id,
                'updated_by' => Auth::guard('admin')->user()->id,

                'created_at' => now(),

            ]);
        } else {

            $globalFunImg = customUpload($mainFile, $imgPath);

            if ($globalFunImg['status'] == 1) {

                EventPage::insert([

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

                    'added_by' => Auth::guard('admin')->user()->id,
                    'updated_by' => Auth::guard('admin')->user()->id,

                    'banner_image' => $globalFunImg['file_name'],
                    'row_one_image' => $globalFunIconImg['file_name'], ////////

                    'created_at' => now(),

                ]);
            } else {
                return redirect()->back()->withInput()->with('error', 'Image upload failed! plz try again');
            }
        }

        return redirect()->route('admin.event-page.index')->with('success', 'Data Inserted Successfully!!');
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
        $item = EventPage::find($id);

        return view('admin.pages.event-page.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = EventPage::findOrFail($id);

        // Define upload paths
        $uploadPath = storage_path('app/public/event-page/');

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
            'added_by' => Auth::guard('admin')->user()->id,
            'updated_by' => Auth::guard('admin')->user()->id,
            'banner_image' => $globalFunImg['status'] == 1 ? $globalFunImg['file_name'] : $item->banner_image,
            'row_one_image' => $globalFunIconImg['status'] == 1 ? $globalFunIconImg['file_name'] : $item->row_one_image,
        ]);

        return redirect()->route('admin.event-page.index')->with('success', 'Data Updated Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = EventPage::findOrFail($id);
        $item->delete();
    }
}

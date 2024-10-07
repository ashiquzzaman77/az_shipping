<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Banner::latest()->get();
        return view('admin.pages.banner.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mainFile = $request->file('image');
        $imgPath = storage_path('app/public/banner/');

        if (empty($mainFile)) {

            Banner::insert([

                'badge' => $request->badge,
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'contact' => $request->contact,
                'status' => $request->status,
                'added_by' => Auth::guard('admin')->user()->id,

                'created_at' => now(),

            ]);
        } else {

            $globalFunImg = customUpload($mainFile, $imgPath);

            if ($globalFunImg['status'] == 1) {

                Banner::insert([

                    'badge' => $request->badge,
                    'title' => $request->title,
                    'sub_title' => $request->sub_title,
                    'contact' => $request->contact,
                    'status' => $request->status,
                    'added_by' => Auth::guard('admin')->user()->id,

                    'image' => $globalFunImg['file_name'],

                    'created_at' => now(),

                ]);
            } else {
                return redirect()->back()->withInput()->with('error', 'Upload failed! plz try again');
            }
        }

        // flash()->success('');

        return redirect()->route('admin.banner.index')->with('success', 'Data Inserted Successfully!!');
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
        $banner = Banner::find($id);

        return view('admin.pages.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $banner = Banner::findOrFail($id);

        $mainFile = $request->file('image');
        $uploadPath = storage_path('app/public/banner/');

        if (isset($mainFile)) {
            $globalFunImg = customUpload($mainFile, $uploadPath);
        } else {
            $globalFunImg['status'] = 0;
        }

        if (!empty($banner)) {

            if ($globalFunImg['status'] == 1) {
                if (File::exists(public_path('storage/banner/requestImg/') . $banner->image)) {
                    File::delete(public_path('storage/banner/requestImg/') . $banner->image);
                }
                if (File::exists(public_path('storage/banner/') . $banner->image)) {
                    File::delete(public_path('storage/banner/') . $banner->image);
                }

                if (File::exists(public_path('storage/files/') . $banner->image)) {
                    File::delete(public_path('storage/files/') . $banner->image);
                }
            }

            $banner->update([

                'badge' => $request->badge,
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'contact' => $request->contact,
                'status' => $request->status,
                'added_by' => Auth::guard('admin')->user()->id,

                'image' => $globalFunImg['status'] == 1 ? $globalFunImg['file_name'] : $banner->image,

            ]);
        }

        return redirect()->route('admin.banner.index')->with('success', 'Data Update Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Banner::findOrFail($id);

        if (File::exists(public_path('storage/banner/requestImg/') . $item->image)) {
            File::delete(public_path('storage/banner/requestImg/') . $item->image);
        }

        if (File::exists(public_path('storage/banner/') . $item->image)) {
            File::delete(public_path('storage/banner/') . $item->image);
        }

        if (File::exists(public_path('storage/files/') . $item->image)) {
            File::delete(public_path('storage/files/') . $item->image);
        }

        $item->delete();
    }

    public function updateStatusBanner(Request $request, $id)
    {
        $offer = Banner::findOrFail($id);
        $offer->status = $request->input('status');
        $offer->save();

        return response()->json(['success' => true]);
    }
}

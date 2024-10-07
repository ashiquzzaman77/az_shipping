<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\NewsTrendRequest;
use App\Models\Course;
use App\Models\NewsTrend;
use Illuminate\Support\Facades\Session;

class NewsTrendController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.newsTrend.index', [
            'newsTrends' => NewsTrend::latest('id')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.newsTrend.create', [
            'courses' => Course::latest('id')->get(['name','id']),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsTrendRequest $request)
    {
        $bannerFile    = $request->file('banner_image');
        $thumbnailFile = $request->file('thumbnail_image');
        $logoFile      = $request->file('logo_image');
        $filePath      = storage_path('app/public/');
        if (!empty($bannerFile)) {
            $globalFunBanner = customUpload($bannerFile, $filePath);
        } else {
            $globalFunBanner = ['status' => 0];
        }
        if (!empty($logoFile)) {
            $globalFunlogo = customUpload($logoFile, $filePath);
        } else {
            $globalFunlogo = ['status' => 0];
        }
        if (!empty($thumbnailFile)) {
            $globalFunThumbnail = customUpload($thumbnailFile, $filePath);
        } else {
            $globalFunThumbnail = ['status' => 0];
        }

        NewsTrend::create([
            'course_id'       => json_encode($request->course_id),
            'featured'        => $request->featured,
            'type'            => $request->type,
            'badge'           => $request->badge,
            'title'           => $request->title,
            'header'          => $request->header,
            'short_des'       => $request->short_des,
            'long_des'        => $request->long_des,
            'author'          => $request->author,
            'address'         => $request->address,
            'tags'            => json_encode($request->tags),
            'banner_image'    => $globalFunBanner['status']    == 1 ? $globalFunBanner['file_name']   : null,
            'thumbnail_image' => $globalFunThumbnail['status'] == 1 ? $globalFunThumbnail['file_name'] : null,
            'logo_image'      => $globalFunlogo['status'] == 1 ? $globalFunlogo['file_name'] : null,
            'additional_url'  => $request->additional_url,
            'footer'          => $request->footer,
        ]);

        toastr()->success('Data has been saved successfully!');
        return redirect()->back()->withInput()->with('success','Data has been saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.newsTrend.edit', [
            'newsTrend' =>  NewsTrend::find($id),
            'courses'    => Course::latest('id')->get(['name','id']),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsTrendRequest $request, $id)
    {
        $newsTrend =  NewsTrend::find($id);

        $bannerFile = $request->file('banner_image');
        $thumbnailFile = $request->file('thumbnail_image');
        $logoFile = $request->file('logo_image');
        $filePath = storage_path('app/public/');

        if (!empty($bannerFile)) {
            $globalFunBanner = customUpload($bannerFile, $filePath);
            $paths = [
                storage_path("app/public/{$newsTrend->banner_image}"),
                storage_path("app/public/requestImg/{$newsTrend->banner_image}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunBanner = ['status' => 0];
        }

        if (!empty($thumbnailFile)) {
            $globalFunThumbnail = customUpload($thumbnailFile, $filePath, 44, 44);
            $paths = [
                storage_path("app/public/{$newsTrend->thumbnail_image}"),
                storage_path("app/public/requestImg/{$newsTrend->thumbnail_image}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunThumbnail = ['status' => 0];
        }

        if (!empty($logoFile)) {
            $globalFunlogo = customUpload($logoFile, $filePath, 44, 44);
            $paths = [
                storage_path("app/public/{$newsTrend->logo_image}"),
                storage_path("app/public/requestImg/{$newsTrend->logo_image}")
            ];
            foreach ($paths as $path) {
                if (File::exists($path)) {
                    File::delete($path);
                }
            }
        } else {
            $globalFunlogo = ['status' => 0];
        }

        $newsTrend->update([
            'course_id'       => json_encode($request->course_id),
            'featured'        => $request->featured,
            'type'            => $request->type,
            'badge'           => $request->badge,
            'title'           => $request->title,
            'header'          => $request->header,
            'short_des'       => $request->short_des,
            'long_des'        => $request->long_des,
            'author'          => $request->author,
            'address'         => $request->address,
            'tags'            => json_encode($request->tags),
            'banner_image'    => $globalFunBanner['status']    == 1 ? $globalFunBanner['file_name']   : $newsTrend->banner_image,
            'thumbnail_image' => $globalFunThumbnail['status'] == 1 ? $globalFunThumbnail['file_name'] : $newsTrend->thumbnail_image,
            'logo_image'      => $globalFunlogo['status'] == 1 ? $globalFunlogo['file_name'] : $newsTrend->logo_image,
            'additional_url'  => $request->additional_url,
            'footer'          => $request->footer,
        ]);

        Session::flash('success','Data has been updated successfully!');
        // toastr()->success('Data has been updated successfully!');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newsTrend =  NewsTrend::find($id);

        $paths = [
            storage_path('app/public/') . $newsTrend->banner_image,
            storage_path('app/public/') . $newsTrend->logo_image,
            storage_path('app/public/') . $newsTrend->thumbnail_image,
            storage_path('app/public/requestImg/') . $newsTrend->thumbnail_image,
        ];

        foreach ($paths as $path) {
            if (File::exists($path)) {
                File::delete($path);
            }
        }
        $newsTrend->delete();
    }
}

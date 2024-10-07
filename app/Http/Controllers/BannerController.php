<?php

namespace App\Http\Controllers;

use App\Models\CommonBanner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    //All About
    public function index()
    {
        $items = CommonBanner::all();
        return view('admin.pages.common_banner.index', compact('items'));
    }

    //Edit About
    public function edit($id)
    {
        $item = CommonBanner::findOrFail($id);
        return view('admin.pages.common_banner.edit', compact('item'));
    }

    //Update About
    public function update(Request $request, $id)
    {
        $item = CommonBanner::findOrFail($id);

        //faq_banner
        if (!empty($request->file('faq_banner'))) {
            $file = $request->file('faq_banner');

            @unlink(storage_path('app/public/common_banner/' . $item->faq_banner));

            $fileName = time() . $file->getClientOriginalName();
            $file->move(storage_path('app/public/common_banner/'), $fileName);
            $faq_banner = $fileName;
        }

        //term_banner
        if (!empty($request->file('term_banner'))) {
            $file = $request->file('term_banner');

            @unlink(storage_path('app/public/common_banner/' . $item->term_banner));

            $fileName = time() . $file->getClientOriginalName();
            $file->move(storage_path('app/public/common_banner/'), $fileName);
            $term_banner = $fileName;
        }

        //privacy_banner
        if (!empty($request->file('privacy_banner'))) {
            $file = $request->file('privacy_banner');

            @unlink(storage_path('app/public/common_banner/' . $item->privacy_banner));

            $fileName = time() . $file->getClientOriginalName();
            $file->move(storage_path('app/public/common_banner/'), $fileName);
            $privacy_banner = $fileName;
        }

        //course_banner
        if (!empty($request->file('course_banner'))) {
            $file = $request->file('course_banner');

            @unlink(storage_path('app/public/common_banner/' . $item->course_banner));

            $fileName = time() . $file->getClientOriginalName();
            $file->move(storage_path('app/public/common_banner/'), $fileName);
            $course_banner = $fileName;
        }

        //service_banner
        if (!empty($request->file('service_banner'))) {
            $file = $request->file('service_banner');

            @unlink(storage_path('app/public/common_banner/' . $item->service_banner));

            $fileName = time() . $file->getClientOriginalName();
            $file->move(storage_path('app/public/common_banner/'), $fileName);
            $service_banner = $fileName;
        }

        //course_registration_banner
        if (!empty($request->file('course_registration_banner'))) {
            $file = $request->file('course_registration_banner');

            @unlink(storage_path('app/public/common_banner/' . $item->course_registration_banner));

            $fileName = time() . $file->getClientOriginalName();
            $file->move(storage_path('app/public/common_banner/'), $fileName);
            $course_registration_banner = $fileName;
        }

        //course_login_banner
        if (!empty($request->file('course_login_banner'))) {
            $file = $request->file('course_login_banner');

            @unlink(storage_path('app/public/common_banner/' . $item->course_login_banner));

            $fileName = time() . $file->getClientOriginalName();
            $file->move(storage_path('app/public/common_banner/'), $fileName);
            $course_login_banner = $fileName;
        }

        //contact_banner
        if (!empty($request->file('contact_banner'))) {
            $file = $request->file('contact_banner');

            @unlink(storage_path('app/public/common_banner/' . $item->contact_banner));

            $fileName = time() . $file->getClientOriginalName();
            $file->move(storage_path('app/public/common_banner/'), $fileName);
            $contact_banner = $fileName;
        }

        //our_service_banner
        if (!empty($request->file('our_service_banner'))) {
            $file = $request->file('our_service_banner');

            @unlink(storage_path('app/public/common_banner/' . $item->our_service_banner));

            $fileName = time() . $file->getClientOriginalName();
            $file->move(storage_path('app/public/common_banner/'), $fileName);
            $our_service_banner = $fileName;
        }

        //our_category_banner
        if (!empty($request->file('our_category_banner'))) {
            $file = $request->file('our_category_banner');

            @unlink(storage_path('app/public/common_banner/' . $item->our_category_banner));

            $fileName = time() . $file->getClientOriginalName();
            $file->move(storage_path('app/public/common_banner/'), $fileName);
            $our_category_banner = $fileName;
        }

        $item->update([

            'faq_banner' => (!empty($faq_banner) ? $faq_banner : $item->faq_banner),
            'term_banner' => (!empty($term_banner) ? $term_banner : $item->term_banner),
            'privacy_banner' => (!empty($privacy_banner) ? $privacy_banner : $item->privacy_banner),
            'course_banner' => (!empty($course_banner) ? $course_banner : $item->course_banner),
            'service_banner' => (!empty($service_banner) ? $service_banner : $item->service_banner),

            'course_registration_banner' => (!empty($course_registration_banner) ? $course_registration_banner : $item->course_registration_banner),

            'course_login_banner' => (!empty($course_login_banner) ? $course_login_banner : $item->course_login_banner),

            'contact_banner' => (!empty($contact_banner) ? $contact_banner : $item->contact_banner),
            'our_service_banner' => (!empty($our_service_banner) ? $our_service_banner : $item->our_service_banner),
            'our_category_banner' => (!empty($our_category_banner) ? $our_category_banner : $item->our_category_banner),
            

        ]);

        return redirect()->route('admin.common_banner.index')->with('success', 'Data has been Update Successfully');
    }

    // //Delete About
    // public function DeleteAbout($id)
    // {
    //     $about = About::find($id);

    //     $imgDel = $about->section_one_image;
    //     $imgDel = $about->ceo_section_image;
    //     $imgDel = $about->ceo_section_signature_image;

    //     $imgDel = $about->choose_us_one_image;
    //     $imgDel = $about->choose_us_two_image;
    //     $imgDel = $about->choose_us_three_image;

    //     @unlink($imgDel);

    //     About::findOrFail($id)->delete();

    //     toastr()->success('About Delete Successfully');
    //     return redirect()->route('all.about');

    // } //
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\SettingRequest;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.setting.index', ['setting' => Setting::get()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function updateOrcreateSetting(SettingRequest $request)
    {
        $currentSetting = Setting::first();

        $dataToUpdateOrCreate = [
            'site_name'        => $request->site_name,
            'site_slogan'      => $request->site_slogan,
            'primary_email'    => $request->primary_email,
            'support_email'    => $request->support_email,
            'sales_email'      => $request->sales_email,
            'primary_phone'    => $request->primary_phone,
            'secondary_phone'  => $request->secondary_phone,
            'whatsapp'         => $request->whatsapp,
            'skype'            => $request->skype,
            'address_line_one' => $request->address_line_one,
            'address_line_two' => $request->address_line_two,
            'system_timezone'  => $request->system_timezone,
            'maintenance_mode' => $request->maintenance_mode,
            'seo_keywords'     => $request->seo_keywords,
            'seo_description'  => $request->seo_description,
            'social_facebook'  => $request->social_facebook,
            'social_twitter'   => $request->social_twitter,
            'social_instagram' => $request->social_instagram,
            'social_linkedin'  => $request->social_linkedin,
            'social_youtube'   => $request->social_youtube,
            'social_pinterest' => $request->social_pinterest,
            'default_language' => $request->default_language,
            'default_currency' => $request->default_currency,
        ];

        if ($request->hasFile('site_logo')) {
            $siteLogoPath = handaleFileUpload($request->file('site_logo'), 'settings');

            if ($siteLogoPath) {
                // check if there's an existing site logo and delete it
                if ($currentSetting && $currentSetting->site_logo) {
                    $existingSiteLogo = storage_path('app/public/' . $currentSetting->site_logo);
                    if (File::exists($existingSiteLogo)) {
                        File::delete($existingSiteLogo);
                    }
                }
                $dataToUpdateOrCreate['site_logo'] = $siteLogoPath;
            }
        }

        if ($request->hasFile('site_favicon')) {
            $siteFaviconPath = handaleFileUpload($request->file('site_favicon'), 'settings');

            if ($siteFaviconPath) {
                // check if there's an existing site logo and delete it
                if ($currentSetting && $currentSetting->site_favicon) {
                    $existingSiteLogo = storage_path('app/public/' . $currentSetting->site_favicon);
                    if (File::exists($existingSiteLogo)) {
                        File::delete($existingSiteLogo);
                    }
                }
                $dataToUpdateOrCreate['site_favicon'] = $siteFaviconPath;
            }
        }


        $setting = Setting::updateOrCreate([], $dataToUpdateOrCreate);

        $toastrMessage = $setting->wasRecentlyCreated ? 'Setting created successfully' : 'Setting updated successfully';

        return redirect()->route('admin.settings.index')->with('toast_success', $toastrMessage);
    }
}

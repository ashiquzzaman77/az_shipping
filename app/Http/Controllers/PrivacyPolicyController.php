<?php

namespace App\Http\Controllers;

use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    //All Privacy
    public function index()
    {
        $items = PrivacyPolicy::latest()->get();
        return view('admin.pages.privacy.index', compact('items'));
    }

    //Add Privacy
    public function create()
    {
        return view('admin.pages.privacy.create');
    }

    //Store Privacy
    public function store(Request $request)
    {
        $validator = $request->validate(
            [
                'name' => 'required|max:255',
                'content' => 'required',
                'effective_date' => 'required',
                'expiration_date' => 'required',
            ],

            [
                'name.required' => 'Name is required',
                'content.required' => 'Content is required',
                'effective_date.required' => 'Effective Date is required',
                'expiration_date.required' => 'Expiration Date is required',
            ],
        );

        if ($validator) {

            $term = new PrivacyPolicy();
            $term->name = $request->name;
            $term->content = $request->content;
            $term->effective_date = $request->effective_date;
            $term->expiration_date = $request->expiration_date;
            $term->version = $request->version;

            $term->save();

            return redirect()->route('admin.privacy-policy.index')->with('success', 'Data Inserted Successfully!!');
        }

    }

    //Edit Term
    public function edit($id)
    {
        $item = PrivacyPolicy::findOrFail($id);
        return view('admin.pages.privacy.edit', compact('item'));
    }

    //Update Faq
    public function update(Request $request, $id)
    {

        $privacy = PrivacyPolicy::findOrFail($id);

        $validator = $request->validate(

            [
                'name' => 'required|max:255',
                'content' => 'required',
                'effective_date' => 'required',
                'expiration_date' => 'required',
            ],

            [
                'name.required' => 'Name is required',
                'content.required' => 'Content is required',
                'effective_date.required' => 'Effective Date is required',
                'expiration_date.required' => 'Expiration Date is required',
            ],
        );

        if ($validator) {

            $privacy->update([

                'name' => $request->name,
                'content' => $request->content,
                'effective_date' => $request->effective_date,
                'expiration_date' => $request->expiration_date,
                'version' => $request->version,

            ]);

            return redirect()->route('admin.privacy-policy.index')->with('success', 'Data Update Successfully!!');
        }

    }

    //Delete Faq
    public function destroy($id)
    {
        PrivacyPolicy::find($id)->delete();
        return redirect()->back();
    }

    // Inactive
    public function inactive($id)
    {
        PrivacyPolicy::find($id)->update([
            'status' => 'inactive',
        ]);

        return redirect()->route('admin.privacy-policy.index')->with('success', 'Data Inactive Successfully!!');
    }

    // Active
    public function active($id)
    {
        PrivacyPolicy::find($id)->update([
            'status' => 'active',
        ]);

        return redirect()->route('admin.privacy-policy.index')->with('success', 'Data Active Successfully!!');
    }
}

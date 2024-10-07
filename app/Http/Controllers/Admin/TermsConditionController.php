<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TermsCondition;
use Illuminate\Http\Request;

class TermsConditionController extends Controller
{
    //All Term
    public function index()
    {
        $terms = TermsCondition::latest()->get();
        return view('admin.pages.terms.index', compact('terms'));
    }

    //Add Term
    public function create()
    {
        return view('admin.pages.terms.create');
    }

    //Store Term
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

            $term = new TermsCondition();
            $term->name = $request->name;
            $term->content = $request->content;
            $term->effective_date = $request->effective_date;
            $term->expiration_date = $request->expiration_date;
            $term->version = $request->version;

            $term->save();

            return redirect()->route('admin.terms-and-condition.index')->with('success', 'Data Inserted Successfully!!');
        }

    }

    //Edit Term
    public function edit($id)
    {
        $term = TermsCondition::findOrFail($id);
        return view('admin.pages.terms.edit', compact('term'));
    }

    //Update Faq
    public function update(Request $request, $id)
    {
        $term = TermsCondition::findOrFail($id);

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

            $term->update([

                'name' => $request->name,
                'content' => $request->content,
                'effective_date' => $request->effective_date,
                'expiration_date' => $request->expiration_date,
                'version' => $request->version,

            ]);

            return redirect()->route('admin.terms-and-condition.index')->with('success', 'Data Update Successfully!!');
        }

    }

    //Delete Faq
    public function destroy($id)
    {
        TermsCondition::find($id)->delete();
        return redirect()->back();
    }

    // Inactive
    public function inactive($id)
    {
        TermsCondition::find($id)->update([
            'status' => 'inactive',
        ]);

        return redirect()->route('admin.terms-and-condition.index')->with('success', 'Data Inactive Successfully!!');
    }

    // Active
    public function active($id)
    {
        TermsCondition::find($id)->update([
            'status' => 'active',
        ]);

        return redirect()->route('admin.terms-and-condition.index')->with('success', 'Data Active Successfully!!');
    }
}

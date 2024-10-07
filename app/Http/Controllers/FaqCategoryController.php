<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Http\Request;

class FaqCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = FaqCategory::latest()->get();
        return view('admin.pages.faq_category.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.faq_category.create');
    }

    public function store(Request $request)
    {
        $faqCategory = new FaqCategory();
        $faqCategory->name = $request->name;
        $faqCategory->save();

        return redirect()->route('admin.faq_category.index')->with('success', 'FAQ category created successfully.');
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
        $faq = FaqCategory::find($id);

        return view('admin.pages.faq_category.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $faq = FaqCategory::find($id);

        $faq->update([

            'name' => $request->name,

        ]);

        return redirect()->route('admin.faq_category.index')->with('success', 'Faq Category Update Successfully!!');
    }

    
    public function destroy($id)
    {
        FaqCategory::findOrFail($id)->delete();
    }
}

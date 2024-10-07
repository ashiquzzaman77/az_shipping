<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FaqCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class FaqController extends Controller
{

    public function index()
    {
        return view('admin.pages.faq.index', [
            'faqs' => Faq::latest('id')->get(),
            'faqCats' => FaqCategory::latest('id')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'order' => ['required', 'integer', 'max:255', 'unique:' . Faq::class],
            'category_id' => ['required', 'string', 'max:255'],
            'question' => ['required', 'string', 'max:255'],
            'answer' => ['required'],
        ], [
            'required' => 'The row title must be required',
            'question.max' => 'The FAQ Question may not be greater than 255 characters.',
        ]);

        if ($validator->fails()) {
            Session::flash('error', $validator->errors()->all());
            return redirect()->back()->withInput();
        }
        Faq::create([
            'category_id' => $request->category_id,
            'question' => $request->question,
            'answer' => $request->answer,
            'order' => $request->order,
            'status' => $request->status ?? 'active',
            'created_at' => Carbon::now(),
        ]);
        // toastr()->success('Data has been saved successfully!');
        return redirect()->back()->with('success', 'Data has been saved successfully!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $faq = Faq::findOrFail($id);

        $faq->update([
            'category_id' => $request->category_id,
            'question' => $request->question,
            'answer' => $request->answer,
            'order' => $request->order,
            'status' => $request->status,
            'updated_at' => Carbon::now(),
        ]);
        // toastr()->success('Data has been saved successfully!');
        return redirect()->back()->with('success', 'Data has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Faq::find($id)->delete();
    }
}

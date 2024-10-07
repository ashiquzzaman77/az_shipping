<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CouponRequest;
use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coupons = Coupon::latest()->get();
        return view('admin.pages.coupon.index', compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CouponRequest $request)
    {

        $startDate = Carbon::parse($request->coupon_start_date);
        $endDate = Carbon::parse($request->coupon_end_date);

        $validityDuration = $endDate->diffInDays($startDate);

        $isExpired = $endDate->isPast();

        // Determine the validity status of the coupon
        $validityStatus = $isExpired ? 'invalid' : 'valid';

        Coupon::insert([
            'coupon_name' => $request->coupon_name,
            'coupon_discount' => $request->coupon_discount,
            'coupon_start_date' => $request->coupon_start_date,
            'coupon_end_date' => $request->coupon_end_date,
            'coupon_validity' => $validityDuration,
            'is_expired' => $validityStatus, // Store validity status in the database
            'created_at' => now(),
        ]);

        return redirect()->route('admin.coupon.index')->with('success', 'Coupon Inserted Successfully!!');
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
        $coupon = Coupon::find($id);

        return view('admin.pages.coupon.edit', compact('coupon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CouponRequest $request, string $id)
    {

        $coupon = Coupon::find($id);

        $startDate = Carbon::parse($request->coupon_start_date);
        $endDate = Carbon::parse($request->coupon_end_date);

        $validityDuration = $endDate->diffInDays($startDate);

        $isExpired = $endDate->isPast();

        // Determine the validity status of the coupon
        $validityStatus = $isExpired ? 'invalid' : 'valid';

        $coupon->update([

            'coupon_name' => $request->coupon_name,
            'coupon_discount' => $request->coupon_discount,
            'coupon_start_date' => $request->coupon_start_date,
            'coupon_end_date' => $request->coupon_end_date,
            'coupon_validity' => $validityDuration,
            'is_expired' => $validityStatus, // Store validity status in the database

        ]);

        return redirect()->route('admin.coupon.index')->with('success', 'Coupon Update Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Coupon::findOrFail($id)->delete();
    }
}

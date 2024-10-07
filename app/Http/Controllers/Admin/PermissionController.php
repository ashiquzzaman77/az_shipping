<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\Admin\PermissionRequest;

class PermissionController extends Controller
{
    /**
     * The constructor function sets middleware permissions for specific actions in a PHP class.
     */
    // public function __construct()
    // {
    //     $this->middleware('permission:view permission|edit permission|delete permission|create permission')->only(['index', 'create', 'edit', 'destroy']);
    // }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.permissions.index', ['permissions' => Permission::get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PermissionRequest $request)
    {
        Permission::create(['group_name' => $request->group_name, 'name' => $request->name]);

        return redirect()->back()->with('success', 'Permission created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // deprecated
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.pages.permissions.edit', ['permission' => Permission::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PermissionRequest $request, string $id)
    {
        Permission::findOrFail($id)->update(['group_name' => $request->group_name, 'name' => $request->name]);

        return redirect()->back()->with('success', 'Permission updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Permission::findOrFail($id)->delete();
    }
}

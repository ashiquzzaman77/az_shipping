<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Course;
use App\Models\CourseSection;
use App\Models\UserCourseRegistration;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function dashboard()
    {
        
        return view('admin/dashboard');
    }

    public function index()
    {
        return view('admin.pages.admin-management.index', ['admins' => Admin::get()]);
    }

    public function create()
    {
        $roles = Role::orderBy('name','ASC')->get();
        return view('admin.pages.admin-management.create',compact('roles'));
    }

    public function store(Request $request)
    {
        // Define validation rules
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'phone' => 'required|string|max:20',
            'password' => [
                'required',
                'string', Rules\Password::min(8)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols(),
            ],
            'role' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image validation rules
        ]);

        // Handle file upload if an image is present
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('public/images'); // Store the file in 'storage/app/public/images'
            $imageName = basename($imagePath); // Extract the image filename
        } else {
            $imageName = null; // Or handle a default image if needed
        }
    //    dd($request->input('role'));

        // Create a new admin record
        $admin = new Admin();
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->phone = $request->input('phone');
        $admin->password = Hash::make($request->input('password'));
        $admin->role = $request->input('role');
        $admin->address = $request->input('address');
        $admin->image = $imageName; // Store the image filename in the database
        $admin->save();

        // Redirect or respond with a success message
        return redirect()->route('admin.admin-management.index')->with('success', 'Admin created successfully.');
    }

    public function edit(string $id)
    {
        return view('admin.pages.admin-management.edit', [
            'admin' => Admin::find($id),
            'roles' => Role::orderBy('name','ASC')->get(),
        ]);
    }

    public function update(Request $request, $id)
    {
        // Find the admin by ID
        $admin = Admin::findOrFail($id);

        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email,' . $id,
            'phone' => 'required|string|max:20',
            'role' => 'required|string|max:255',
            'address' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Image validation rules
        ]);
        // dd($request->input('role'));
        // Handle file upload if an image is present
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($admin->image) {
                Storage::delete('public/images/' . $admin->image);
            }

            // Store the new image
            $image = $request->file('image');
            $imagePath = $image->store('public/images'); // Store the file in 'storage/app/public/images'
            $imageName = basename($imagePath); // Extract the image filename
        } else {
            $imageName = $admin->image; // Keep the existing image if no new image is uploaded
        }

        // Update the admin record
        $admin->name = $request->input('name');
        $admin->email = $request->input('email');
        $admin->phone = $request->input('phone');
        $admin->role = $request->input('role');
        $admin->address = $request->input('address');
        $admin->image = $imageName; // Update the image filename in the database
        $admin->save();

        // Redirect or respond with a success message
        return redirect()->route('admin.admin-management.index')->with('success', 'Admin updated successfully.');
    }

    public function destroy($id)
    {
        // Find the admin by ID
        $admin = Admin::findOrFail($id);

        // Delete the image file if it exists
        if ($admin->image) {
            Storage::delete('public/images/' . $admin->image);
        }

        // Delete the admin record
        $admin->delete();

    }
}

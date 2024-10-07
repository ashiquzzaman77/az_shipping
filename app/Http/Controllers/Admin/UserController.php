<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Events\ActivityLogged;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;


class UserController extends Controller
{
    /**
     * The constructor function sets middleware permissions for specific user actions in a PHP class.
     */
    public function __construct()
    {
        $this->middleware('permission:view user|create user|show user|edit user|delete user')->only(['index', 'create', 'show', 'edit', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.users.index', ['users' => Admin::get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.users.create', ['roles' => Role::get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . Admin::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->syncRoles($request->roles);

        event(new Registered($user));
        event(new ActivityLogged('User created', $user));

        return redirect()->back()->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.pages.users.show', [
            'user' => Admin::find($id),
            'roles' => Role::get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.pages.users.edit', [
            'user' => Admin::find($id),
            'roles' => Role::get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $user): RedirectResponse
    {
        $request->validate([
            'name' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'string', 'email', 'max:255', 'unique:' . Admin::class . ',email,' . $user->id],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
        ]);

        $user->update([
            'name'     => $request->name ? $request->name  : $user->name,
            'email'    => $request->email ? $request->email : $user->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        if ($request->roles) {
            $user->syncRoles($request->roles);
        }

        event(new ActivityLogged('User updated', $user));

        return redirect()->back()->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Admin::findOrFail($id);
        $user->delete();

        event(new ActivityLogged('User deleted', $user));

        // return redirect()->back()->with('success', 'User deleted successfully');
    }
}

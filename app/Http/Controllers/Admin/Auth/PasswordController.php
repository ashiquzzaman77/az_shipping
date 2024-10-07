<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
        ]);

        return back()->with('status', 'password-updated');
    }

    public function checkPassword(Request $request)
    {
        $admin = Auth::guard('admin')->user();

        if (!$admin) {
            return response()->json(['success' => false, 'message' => 'Account not found']);
        }

        if (password_verify($request->password, $admin->password)) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => 'Incorrect password']);
        }
    }
}

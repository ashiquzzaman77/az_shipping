<?php

namespace App\Http\Controllers\User\Api;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class UserApiController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'message' => 'Registration Success',
            'status' => 'success'
        ], 201);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'The provided credentials are incorrect.',
                'status' => 'error'
            ], 401);
        }

        return response()->json([
            'token' => $user->createToken('token')->plainTextToken,
            'message' => 'Login Success',
            'status' => 'success'
        ], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logout Success',
            'status' => 'success'
        ], 200);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'string'],
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if (!Hash::check($request->current_password, $request->user()->password)) {
            return response()->json([
                'message' => 'Current password is incorrect',
                'status' => 'error'
            ], 400);
        }

        $request->user()->update(['password' => Hash::make($request->new_password)]);

        return response()->json([
            'message' => 'Password changed successfully',
            'status' => 'success'
        ], 200);
    }

    public function reset(Request $request, $token)
    {
        // Delete Token older than 2 minute
        $formatted = now()->subMinutes(2)->toDateTimeString();
        DB::table('password_reset_tokens')->where('created_at', '<=', $formatted)->delete();

        $request->validate([
            'password' => 'required|confirmed',
        ]);

        $passwordreset = DB::table('password_reset_tokens')->where('token', $token)->first();

        if (!$passwordreset) {
            return response([
                'message' => 'Token is Invalid or Expired',
                'status' => 'failed'
            ], 404);
        }

        // Update the user's password
        User::where('email', $passwordreset->email)->update([
            'password' => Hash::make($request->password),
        ]);

        // Delete the token after resetting password
        DB::table('password_reset_tokens')->where('email', $passwordreset->email)->delete();

        return response([
            'message' => 'Password Reset Success',
            'status' => 'success'
        ], 200);
    }

    public function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $email = $request->email;

        // Check if the email exists
        $user = User::where('email', $email)->first();
        if (!$user) {
            return response([
                'message' => 'Email does not exist',
                'status' => 'failed'
            ], 404);
        }

        // Generate Token
        $token = Str::random(60);

        // Saving Data to Password Reset Table
        DB::table('password_reset_tokens')->upsert([
            'email' => $email,
            'token' => $token,
            'created_at' => now()
        ], ['email'], ['token', 'created_at']);

        // Sending EMail with Password Reset Token
        Mail::raw("Your password reset token is: $token", function ($message) use ($email) {
            $message->subject('Reset Your Password');
            $message->to($email);
        });

        return response([
            'message' => 'Password Reset Email Sent... Check Your Email',
            'status' => 'success'
        ], 200);
    }

    public function profile(Request $request)
    {
        return response()->json([
            'user' => $request->user(),
            'message' => 'User profile retrieved successfully.',
            'status' => 'success'
        ], 200);
    }

    public function editProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $request->user()->id,
        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
        ]);

        $user = $request->user();

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return response()->json([
            'user' => $user,
            'message' => 'Profile updated successfully',
            'status' => 'success'
        ], 200);
    }
}

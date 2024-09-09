<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;

class AdminController extends Controller
{
    public function showLoginForm()
    {

        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        $admin = Admin::where('username',$credentials['username'])->where('password',$credentials['password'])->first();

        if ($admin) {
            Session::put('admin', [
                'id' => $admin->id
            ]);

            // Redirect to the admin dashboard
            return redirect()->route('admin.dashboard');
        }

        return back()->with('error', 'Invalid credentials');
    }

    public function dashboard()
    {
        if (!Session::has('admin')) {
            return redirect()->route('admin.login');
        }
        // Show the admin dashboard view with the admin's username
        $adminId = Session::get('admin')['id'];
        $admin = Admin::find($adminId);
        return view('admin.dashboard', compact('admin'));
    }

    public function logout()
    {
        // Clear the admin session
        Session::forget('admin');

        // Redirect to the login page
        return redirect()->route('admin.login')->with('success', 'Logged out successfully.');
    }


}

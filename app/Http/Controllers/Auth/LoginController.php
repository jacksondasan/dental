<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle the login request
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt to log the user in
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Update the session ID in the user record
            Auth::user()->update(['session_id' => session()->getId()]);
            
            // Store user type in session
            session(['user_type' => Auth::user()->user_type]);

            // Redirect based on user type
            switch (Auth::user()->user_type) {
                case 'Receptionist':
                    return redirect()->route('receptionist.dashboard');
                case 'superadmin':
                    return redirect()->route('superadmin.dashboard');
                case 'Doctors':
                    return redirect()->route('doctors.dashboard');
                case 'Admin':
                    return redirect()->route('admin.dashboard');
                case 'pgdoctor':
                    return redirect()->route('pgdoctor.dashboard');
                case 'frontdesk':
                    return redirect()->route('frontdesk.dashboard');
                default:
                    Auth::logout();
                    return redirect()->route('login.form')->withErrors([
                        'username' => 'Unauthorized access.',
                    ]);
            }
        }

        // If the login attempt was unsuccessful, return back with an error
        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('username'));
    }

    // Handle the logout request
    public function logout(Request $request)
    {
      
        $request->session()->flush();
        Auth::logout();
        return redirect('/')->with('status', 'Logged out successfully');
    }
}

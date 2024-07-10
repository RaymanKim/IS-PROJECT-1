<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorLoginController extends Controller
{
    /**
     * Display the login form for doctors.
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.doctor.login');
    }

    /**
     * Handle an authentication attempt for doctors.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('doctorEmail', 'password');

        if (Auth::guard('doctor')->attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('doctor.dashboard'); // Redirect to doctor dashboard
        }

        // Authentication failed...
        return redirect()->route('doctor.login')->with('error', 'Invalid credentials');
    }

    /**
     * Log the doctor out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::guard('doctor')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('doctor.login');
    }
}

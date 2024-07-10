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
        return view('auth.doctor.login'); // Assuming you have a view for doctor login form
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
            return redirect()->intended(route('doctor.login')); // Redirect to doctor dashboard or another route
        }

        // Authentication failed...
        return redirect()->route('doctor.login')->with('error', 'Invalid credentials'); // Redirect back with error message
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

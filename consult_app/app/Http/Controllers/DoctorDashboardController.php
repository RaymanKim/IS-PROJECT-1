<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctors;

class DoctorDashboardController extends Controller
{
    public function index()
    {
        if (Auth::guard('doctor')->check()) {
            $doctor = Doctors::find(Auth::guard('doctor')->id());
            return view('doctors.doctordashboard', compact('doctor')); // Corrected view path
        } else {
            return redirect()->route('doctor.login');
        }
    }
}

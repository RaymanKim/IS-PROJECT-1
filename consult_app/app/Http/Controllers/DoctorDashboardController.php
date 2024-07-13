<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctors; // Ensure this matches your model class

class DoctorDashboardController extends Controller
{
    public function index()
    {
        if (Auth::guard('doctor')->check()) {
            $doctor = Doctors::find(Auth::guard('doctor')->id());
            return view('doctor.doctorDashboard', compact('doctor'));
        } else {
            return redirect()->route('doctor.login');
        }
    }
}

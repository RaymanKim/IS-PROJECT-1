<?php

namespace App\Http\Controllers;

use App\Models\Doctors; // Import the Doctors model
use Illuminate\Http\Request;

class DoctorDashboardController extends Controller
{
    public function index()
    {
        $doctors = Doctors::all(); // Fetch all doctors

        return view('doctor.dashboard', compact('doctors'));
    }
}

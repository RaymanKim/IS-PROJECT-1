<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctors;
use App\Models\Consultation;
use App\Models\User;

class DoctorDashboardController extends Controller
{
    // public function index()
    // {
    //     $consultations = Consultation::all(); // or fetch a subset of consultations
    //     return view('dashboard', compact('consultations'));
    // }
    public function checkdoctor()
    {
        $user = User::find(auth()->id());
        return view('doctor.dashboard', compact('user'));
    }
}

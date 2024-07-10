<?php
// app/Http/Controllers/Patient/PatientDashboardController.php

namespace App\Http\Controllers\Patient;

use Illuminate\Http\Request;
use App\Models\Consultation;
use App\Models\Patient;
use App\Http\Controllers\Controller;

class PatientDashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user()->user;

        $upcomingConsultations = Consultation::where('user_id', $user->id)
            ->where('booked_at', '>=', now())
            ->orderBy('booked_at', 'asc')
            ->get();

        $recentConsultations = Consultation::where('user_id', $user->id)
            ->where('booked_at', '<', now())
            ->orderBy('booked_at', 'desc')
            ->limit(5)
            ->get();

        return view('patient.dashboard', compact('upcomingConsultations', 'ecentConsultations'));
    }
}

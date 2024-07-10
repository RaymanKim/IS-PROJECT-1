<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $upcomingConsultations = Consultation::where('patient_id', $user->id)
            ->where('scheduled_date', '>=', now())
            ->orderBy('scheduled_date', 'asc')
            ->get();

        $recentConsultations = Consultation::where('patient_id', $user->id)
            ->where('scheduled_date', '<', now())
            ->orderBy('scheduled_date', 'desc')
            ->get();

        return view('patient.dashboard', compact('upcomingConsultations', 'recentConsultations'));
    }
}

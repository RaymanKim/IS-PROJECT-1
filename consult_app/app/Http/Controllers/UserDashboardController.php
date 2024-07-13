<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Retrieve authenticated user
            $patient = Auth::user();

            // Debugging line to view the authenticated patient
            // dd($patient); // Uncomment for debugging

            // Example: Fetch upcoming consultations for the patient
            $upcomingConsultations = Consultation::where('patient_id', $patient->id)
                ->where('booked_at', '>=', now())
                ->orderBy('booked_at', 'asc')
                ->get();

            // Example: Fetch recent consultations for the patient
            $recentConsultations = Consultation::where('patient_id', $patient->id)
                ->where('booked_at', '<', now())
                ->orderBy('booked_at', 'desc')
                ->limit(5)
                ->get();

            return view('dashboard', compact('upcomingConsultations', 'recentConsultations'));
        }

        // User is not authenticated, redirect to login
        return redirect()->route('login');
    }
}

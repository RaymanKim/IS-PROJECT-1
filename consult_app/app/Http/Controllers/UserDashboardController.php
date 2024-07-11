<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Consultation;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth:patient');
    }

    public function index()
    {
        $patient = Auth::guard('users')->user();

        $upcomingConsultations = Consultation::where('patient_id', $patient->patient_id)
            ->where('booked_at', '>=', now())
            ->orderBy('booked_at', 'asc')
            ->get();

        $recentConsultations = Consultation::where('patient_id', $patient->patient_id)
            ->where('booked_at', '<', now())
            ->orderBy('booked_at', 'desc')
            ->limit(5)
            ->get();

        return view('dashboard', compact('upcomingConsultations', 'recentConsultations'));
    }
}

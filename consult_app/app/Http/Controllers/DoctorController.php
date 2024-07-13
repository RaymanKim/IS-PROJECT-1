<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Import Hash facade
use App\Models\Doctors;
use App\Models\Consultation;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctors::all();
        return view('doctors.index', compact('doctors'));
    }

    public function create()
    {
        return view('doctors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'doctorName' => 'required|string',
            'password' => 'required|string|min:8', // Example validation for password
            'doctorEmail' => 'required|email|unique:doctors,doctorEmail',
            'officeLocation' => 'required|string',
            'officeName' => 'required|string',
            'Specialization' => 'required|string',
            'license_no' => 'required|string',
        ]);

        $doctor = new Doctors();
        $doctor->doctorName = $request->input('doctorName');
        $doctor->doctorPassword = Hash::make($request->input('password'));
        $doctor->doctorEmail = $request->input('doctorEmail');
        $doctor->officeLocation = $request->input('officeLocation');
        $doctor->officeName = $request->input('officeName');
        $doctor->Specialization = $request->input('Specialization');
        $doctor->license_no = $request->input('license_no');
        $doctor->save();

        return redirect()->route('doctors.index')->with('success', 'Doctor created successfully');
    }

    public function show($id)
    {
        $doctor = Doctors::findOrFail($id);
        return view('doctors.show', compact('doctor'));
    }

    public function edit($id)
    {
        $doctor = Doctors::findOrFail($id);
        return view('doctors.edit', compact('doctor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'doctorName' => 'required|string',
            'doctorEmail' => 'required|email|unique:doctors,doctorEmail,' . $id,
            'officeLocation' => 'required|string',
            'officeName' => 'required|string',
            'Specialization' => 'required|string',
            'license_no' => 'required|string',
        ]);

        $doctor = Doctors::findOrFail($id);
        $doctor->doctorName = $request->input('doctorName');
        $doctor->doctorEmail = $request->input('doctorEmail');
        $doctor->officeLocation = $request->input('officeLocation');
        $doctor->officeName = $request->input('officeName');
        $doctor->Specialization = $request->input('Specialization');
        $doctor->license_no = $request->input('license_no');
        $doctor->save();

        return redirect()->route('doctors.index')->with('success', 'Doctor updated successfully');
    }

    public function destroy($id)
    {
        $doctor = Doctors::findOrFail($id);
        $doctor->delete();
        return redirect()->route('doctors.index')->with('success', 'Doctor deleted successfully');
    }

    public function consultations($id)
    {
        $doctor = Doctors::findOrFail($id);
        $consultations = $doctor->consultations;
        return view('doctors.consultations', compact('consultations', 'doctor'));
    }

    public function updatePaymentStatus(Request $request, $consultationId)
    {
        $request->validate([
            'payment_status' => 'required|string|in:pending,completed', // Example validation for payment status
        ]);

        $consultation = Consultation::findOrFail($consultationId);
        $consultation->payment_status = $request->input('payment_status');
        $consultation->save();

        return redirect()->back()->with('success', 'Payment status updated successfully');
    }
    public function doctorDashboard()
{
    // Logic to display the doctor dashboard
    return view('doctors.doctorDashboard'); // or whatever view you're using
}
}

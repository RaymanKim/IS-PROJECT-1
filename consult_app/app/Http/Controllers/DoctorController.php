<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $doctor = new Doctors();
        $doctor->doctorName = $request->input('doctorName');
        $doctor->password = bcrypt($request->input('password'));
        $doctor->doctorEmail = $request->input('doctorEmail');
        $doctor->officeLocation = $request->input('officeLocation');
        $doctor->officeName = $request->input('officeName');
        $doctor->Specialization = $request->input('Specialization');
        $doctor->license_no = $request->input('license_no');
        $doctor->save();
        return redirect()->route('doctors.index');
    }
    public function show($id)
    {
        $doctor = Doctors::find($id);
        return view('doctors.show', compact('doctor'));
    }

    public function edit($id)
    {
        $doctor = Doctors::find($id);
        return view('doctors.edit', compact('doctor'));
    }
    public function update(Request $request, $id)
    {
        $doctor = Doctors::find($id);
        $doctor->doctorName = $request->input('doctorName');
        $doctor->password = bcrypt($request->input('password'));
        $doctor->doctorEmail = $request->input('doctorEmail');
        $doctor->officeLocation = $request->input('officeLocation');
        $doctor->officeName = $request->input('officeName');
        $doctor->Specialization = $request->input('Specialization');
        $doctor->license_no = $request->input('license_no');
        $doctor->save();
        return redirect()->route('doctors.index');
    }
    public function destroy($id)
    {
        $doctor = Doctors::find($id);
        $doctor->delete();
        return redirect()->route('doctors.index');
    }
    public function consultations($id)
    {
        $doctor = Doctors::find($id);
        $consultations = $doctor->consultations;
        return view('doctors.consultations', compact('consultations', 'doctor'));
    }
    public function updatePaymentStatus(Request $request, $consultationId)
    {
        $consultation = Consultation::find($consultationId);
        $consultation->payment_status = $request->input('payment_status');
        $consultation->save();

        return redirect()->back()->with('success', 'Payment status updated successfully');
    }

}


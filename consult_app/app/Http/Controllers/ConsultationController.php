<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;


class ConsultationController extends Controller
{
    public function consultation(Request $request){
        $data=new Consultation;

        $data->title=$request->title;

        $data->description=$request->description;

        $data->booked_at=$request->booked_at;

        $data->patient_id='patient_id';

        $data->save();

        return redirect()->route('dashboard');
    }
}

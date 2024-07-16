<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::user()->role == 'user'){
            return view('dashboard');
        }
        if(Auth::user()->role == 'doctor'){
            return view('doctors.doctorDashboard');
        }
        else{
            return view('admin.adminDashboard');
        }
    }
    public function adddoctor(Request $request){
        $data=new user;

        $data->name=$request->name;

        $data->email=$request->email;

        $data->password=bcrypt($request->password);

        $data->role='doctor';

        $data->save();

        return redirect()->back();
    }
}

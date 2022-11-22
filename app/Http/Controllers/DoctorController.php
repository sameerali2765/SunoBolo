<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function doctor()
    {
        return view ('Doctor.doctor');
    }

    public function doctor_detail()
    {
        return view ('Doctor.doctor-detail');
    }
    //
}

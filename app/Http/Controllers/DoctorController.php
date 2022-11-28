<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{

//Admin doctor Backend

public function add_doctor()
{
    return view ('Admin/Doctors.add_doctor');
}
public function doctor_list()
    {
        return view ('Admin/Doctors.doctor_record');
    }


//doctor Frontend


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

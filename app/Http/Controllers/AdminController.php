<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view ('Admin/Dashboard.dashboard');
    }

    public function doctor_list()
    {
        return view ('Admin/Doctors.doctor_record');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Users;

class HomeController extends Controller
{
    public function redirect()
    {
       
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                return view('dashboard');
            }
            else
            {
                return view('Admin/Dashboard.dashboard');
            }
        }

        else
        {
            return redirect()->back();
        }
    }


    public function index()
        {
            return view ('welcome');
        }


    public function about()
        {
            return view ('About.about');
        }


        public function contact()
        {
            return view ('Contact.contact');
        }
    
    
}

<?php

namespace App\Http\Controllers;

use App\doctor;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {
        $doctors = doctor::all();
        return view('home.index',['doctors'=> $doctors]);
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function about()
    {
        return view('home.about');
    }
    public function doctor()
    {
        $doctors = doctor::all();
        return view('home.doctors',['doctors'=> $doctors]);
    }
    public function department()
    {
        return view('home.department');
    }
}

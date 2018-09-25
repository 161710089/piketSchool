<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        if (Laratrust::hasRole('admin')) return $this->adminDashboard();
        if (Laratrust::hasRole('petugas')) return $this->petugasDashboard();
        if (Laratrust::hasRole('member')) return $this->memberDashboard();
        return view('home');
    }
    public function adminDashboard(){
        return view('admin.index');
    }
    public function petugasDashboard(){
        return view('petugas.index');
    }
    public function memberDashboard(){
        return view('member.index');
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Po;

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
        $podrop = Po::All()->where('status', '!=', 'Approved');
        $pocount = Po::where('status', '!=', 'Approved')->count();

        return view('home', ['podrop' => $podrop, 'pocount' => $pocount]);
    }
}

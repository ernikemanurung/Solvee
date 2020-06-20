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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        //$request->session()->flash('success', 'testing success flash message');
        //$request->session()->flash('warning', 'testing success warning message');
        //$request->session()->flash('error', 'testing success error message');
        return view('welcome1');
    }
}

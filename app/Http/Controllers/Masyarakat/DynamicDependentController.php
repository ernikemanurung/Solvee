<?php

namespace App\Http\Controllers\Masyarakat;

use App\Http\Controllers\Controller;
use App\Provinces;
use DB;

use Illuminate\Http\Request;

class DynamicDependentController extends Controllers
{
    function index()
    {
       // $provinces = DB::table('provinces')
         //           ->groupBy('id')
           //         ->get();
        //return view('masyarakat.index')->with('provinces', $provinces);
    }
} 
return view('admin.users.index')->with('users', $users);

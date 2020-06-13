<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Pengaduan;
use App\Role;
use Gate;
use Illuminate\Http\Request;

class CariController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $query = $request->get('q');
        $hasil = Pengaduan::where('judul', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('result', compact('hasil', 'query'));
    }
}

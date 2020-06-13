<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Role;
use App\Pengaduan;
use Gate;
use Illuminate\Http\Request;
use DB;

class RekapitulasiController extends Controller
{
    public function __construct()
    {
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pengaduan = Pengaduan::all();
        $terima = $pengaduan->where('status_pengaduan', 'diterima');
        $teruskan = $pengaduan->where('status_pengaduan', 'diteruskan');
        $tolak = $pengaduan->where('status_pengaduan', 'ditolak');
        $belumdiproses = $pengaduan->where('status_pengaduan', 'belum diproses');
        $desasitoluama = $pengaduan->where('desa', 'Sitoluama');
        $desapintubosi = $pengaduan->where('desa', 'Pintu Bosi');
        $kebersihan = $pengaduan->where('kategori_pengaduan', 'Kebersihan');
        $kesehatan = $pengaduan->where('kategori_pengaduan', 'Kesehatan');
        $infrastruktur = $pengaduan ->where('kategori_pengaduan', 'Infrastruktur');
        $pendidikan = $pengaduan->where('kategori_pengaduan', 'Pendidikan');
        $kesejahteraanrakyat = $pengaduan->where('kategori_pengaduan', 'Kesejahteraan Rakyat');
        $perekonomian = $pengaduan->where('kategori_pengaduan', 'Perekonomian');
        $politikhukumdankeamanan = $pengaduan->where('kategori_pengaduan', 'Politik Hukum dan Keamanan');
        $energidansumberdayaalam = $pengaduan->where('kategori_pengaduan', 'energi dan Sumber Daya Alam');
        $lingkunganhidupdanpenanggulanganbencana = $pengaduan->where('kategori_pengaduan', 'Lingkungan Hidup dan Penanggulangan Bencana');
        $pariwisata = $pengaduan->where('kategori_pengaduan', 'Pariwisata');
        $pemilu = $pengaduan->where('kategori_pengaduan', 'Pemilu');
        $pertanian = $pengaduan->where('kategori_pengaduan', 'Pertanian');
        
        

        return view('rekapitulasi', compact('terima', 'teruskan', 'tolak', 'belumdiproses', 'desasitoluama', 'desapintubosi',
                                            'kebersihan', 'kesehatan', 'infrastruktur', 'pendidikan', 'kesejahteraanrakyat', 
                                            'perekonomian', 'politikhukumdankeamanan', 'energidansumberdayaalam',
                                            'lingkunganhidupdanpenanggulanganbencana', 'pariwisata', 'pemilu', 'pertanian'));
    }

 

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        
    }
}

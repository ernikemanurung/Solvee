<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Input;
//use Input;
use App\Pengaduan;
use App\User;
use App\Role;
use App\Provinces;
use App\Regencies;
use App\Districts;
use App\Villages;
use Gate;
use DB;
use PDF;



class PengaduanController extends Controller
{
    
    /*public function provinces(){
      $provinces = Provinces::all();
      return view('masyarakat.index')->with('provinces', $provinces);
      
    }
    
    public function regencies(){
      //$provinces_name = $request->input('name');
      //$provinces_id = $request->input('provinces_id');
      //$this->provinces('province_id');
      
      //$provinces_id =Request::get('province_id');
      //$provinces_id = $this->request->input('province_id');
      //$regencies = Regencies::where('province_id', '=', $provinces_id )->get();
      //return response()->json($regencies);
      $regencies = Regencies::all();
      return view('masyarakat.index')->with('regencies', $regencies);
    }

    public function districts(){
      //$this->regencies();
      
      //$regencies_id = Request::get('regencies_id');
      //$regencies_id= $this->request->input('regencies_id');
      //$districts = Districts::where('regency_id', '=', $regencies_id)->get();
      //return response()->json($districts);
      $districts = Districts::all();
      return view('masyarakat.index')->with('districts', $districts);
    }

    public function villages(){
      //$this->villages();
      
      //$districts_id = Request::get('districts_id');
      //$districts_id = $this->request->input('districts_id');
      //$villages = Villages::where('district_id', '=', $districts_id)->get();
      //return response()->json($villages);
      $villages = Villages::all();
      return view('masyarakat.index')->with('villages', $villages);
    }*/





    public function __construct(Request $request)
    {
       $this->request=$request;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //$users = User::all();
        //return view('admin.users.index')->with('users', $users);
        $provinces = Provinces::all();
        $regencies = Regencies::all();
        $districts = Districts::all();
        $villages = Villages::all();
        $user = Auth::User();
                        
        return view('masyarakat.index')->with('provinces', $provinces)
                                       ->with('regencies', $regencies)
                                       ->with('districts', $districts)
                                       ->with('villages', $villages)
                                       ->with('user', $user);
        
        //return view('masyarakat.index', compact('provinces'));
                          
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        
        $pengaduan = Pengaduan::paginate(15);
        
        return view('laporanpengaduan.index', compact('pengaduan'));
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showditeruskan()
    {
        
        $pengaduan = Pengaduan::where('status_pengaduan', 'diteruskan')->paginate(15);
        
        return view('laporanpengaduan.index', compact('pengaduan'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showbelumdiproses()
    {
        
        $pengaduan = Pengaduan::where('status_pengaduan', 'belum diproses')->paginate(15);
        
        return view('laporanpengaduan.index', compact('pengaduan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengaduan = Pengaduan::findOrFail($id);
        return view('laporanpengaduan.show', compact('pengaduan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param string $status_pengaduan
     * @return \Illuminate\Http\Response
     */
    public function showProses($id)
    {
        $pengaduan = Pengaduan::paginate(15)->where($status_pengaduan="belum diproses");
        
        return view('pemerintah.index', compact('pengaduan'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$patient = $request->isMethod('put') ? Patient::findOrFail
        ($request->id) : new Patient;
        */

        $pengaduan = new Pengaduan;
        //$pengaduan->id = $request->input('id');
        $pengaduan->nik = $request->input('nik');
        $pengaduan->nama = $request->input('nama');
        $pengaduan->judul = $request->input('judul');
        $pengaduan->kategori_pengaduan = $request->input('kategori_pengaduan');
        $pengaduan->provinsi = $request->input('provinsi');
        $pengaduan->kabupaten = $request->input('kabupaten');
        $pengaduan->kecamatan = $request->input('kecamatan');
        $pengaduan->desa = $request->input('desa');
        $pengaduan->tanggal = $request->input('tanggal');
        $pengaduan->lokasi_pengaduan = $request->input('lokasi_pengaduan');
        $pengaduan->deskripsi = $request->input('deskripsi');
        $pengaduan->image = $request->input('image');
        
        $user = Auth::user();

        if($pengaduan->save()){
            $request->session()->flash('success', 'pengaduan berhasil ditambahkan');
        }else{
            $request->session()->flash('error', 'pengaduan gagal ditambahkan');
        }
        return redirect()->route('listpengaduan', compact('pengaduan', 'user'));
        
        
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Gate::denies('edit-pengaduan')){
            return redirect(route('listpengaduan'));
        }

        $user = Auth::user();

        if($pengaduan = Pengaduan::where('id', $id)
                                ->where('status_pengaduan', 'belum diproses')
                                ->first())
        {
            if($pengaduan->nik != $user->nik){
                return redirect()->route('listpengaduan', compact('pengaduan'));
            }
            return view('laporanpengaduan.edit')->with('pengaduan',$pengaduan);
            
        }
        else{
            return redirect()->route('listpengaduan', compact('pengaduan'));
        }
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($pengaduan = Pengaduan::findOrFail ($id)) {
            //$pengaduan = new Pengaduan;
            //$pengaduan->id = $request->input('id');
            
            $pengaduan->judul = $request->input('judul');
            $pengaduan->kategori_pengaduan = $request->input('kategori_pengaduan');
            $pengaduan->provinsi = $request->input('provinsi');
            $pengaduan->kabupaten = $request->input('kabupaten');
            $pengaduan->kecamatan = $request->input('kecamatan');
            $pengaduan->desa = $request->input('desa');
            $pengaduan->tanggal = $request->input('tanggal');
            $pengaduan->lokasi_pengaduan = $request->input('lokasi_pengaduan');
            $pengaduan->deskripsi = $request->input('deskripsi');
            $pengaduan->image = $request->input('image');
            
            if($pengaduan->save()){
                $request->session()->flash('success', 'pengaduan berhasil diupdate');
            }else{
                $request->session()->flash('error', 'pengaduan gagal diupdate');
            }
            return redirect()->route('listpengaduan', compact('pengaduan'));
                                        
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function terima(Request $request, $id)
    {
        $status_pengaduan = "diterima";
        $status = "belum diproses";
        $status1 = 'diteruskan';

        $pengaduan = Pengaduan::findOrFail($id);

        if($pengaduan->status_pengaduan == 'belum diproses'){
            DB::update('update pengaduans set status_pengaduan = ? where id = ? && status_pengaduan = ?' , [$status_pengaduan,$id, $status]);
        }
        else if($pengaduan->status_pengaduan == 'diteruskan'){
            DB::update('update pengaduans set status_pengaduan = ? where id = ? && status_pengaduan = ?' , [$status_pengaduan,$id, $status1]);
        }
       
        //$pengaduan = Pengaduan::paginate(15);
        
            
        return view('pemerintah.terima', compact('pengaduan'));
        //return redirect()->route('terimapengaduan', compact('pengaduan'));
        //return view('laporanpengaduan.show', compact('pengaduan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tolak(Request $request, $id)
    {
        $status_pengaduan = "ditolak";
        $status = "belum diproses";
        $status1 = "diteruskan";

        $pengaduan = Pengaduan::findOrFail($id);
        
        if($pengaduan->status_pengaduan == 'belum diproses'){
            DB::update('update pengaduans set status_pengaduan = ? where id = ? && status_pengaduan = ?', [$status_pengaduan,$id, $status]);
            $pengaduan = Pengaduan::paginate(15);
            return redirect()->route('listpengaduan', compact('pengaduan'));
        }
        else if($pengaduan->status_pengaduan == 'diteruskan'){
            DB::update('update pengaduans set status_pengaduan = ? where id = ? && status_pengaduan = ?', [$status_pengaduan,$id, $status1]);
            $pengaduan = Pengaduan::paginate(15);
            return redirect()->route('listpengaduan', compact('pengaduan'));
        }
        else{
            $pengaduan = Pengaduan::paginate(15);
            return redirect()->route('listpengaduan', compact('pengaduan'));
        }
        
        //return redirect()->route('tolakpengaduan', compact('pengaduan'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function teruskan(Request $request, $id)
    {
        $status_pengaduan = "diteruskan";
        $status = "belum diproses";
        DB::update('update pengaduans set status_pengaduan = ? where id = ? && status_pengaduan = ?', [$status_pengaduan,$id,$status]);
        $pengaduan = Pengaduan::findOrFail($id);
            
        //return redirect()->route('tolakpengaduan', compact('pengaduan'));
        //return view('laporanpengaduan.show', compact('pengaduan'));
        return view('pemerintah.teruskan', compact('pengaduan'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @param  string $status
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$pengaduan = Pengaduan::where('status', '=', "belum diproses")->findOrFail($id);

        //$pengaduan->delete();
        if(Gate::denies('hapus-pengaduan')){
            return redirect(route('listpengaduan'));
        }

        $user = Auth::user();

        if($pengaduan = Pengaduan::where('id', $id)
                                ->where('status_pengaduan', 'belum diproses')
                                ->first())
        {
            if($pengaduan->nik == $user->nik){
                $pengaduan->delete();
                $pengaduan = Pengaduan::paginate(15);
                return redirect()->route('listpengaduan', compact('pengaduan'));    
            }
        }
        else{
            
            $pengaduan = Pengaduan::paginate(15);
            return redirect()->route('listpengaduan', compact('pengaduan'));
        }
        
        $pengaduan = Pengaduan::paginate(15);
        return redirect()->route('listpengaduan', compact('pengaduan'));
        
        
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function laporanpdf($id)
    {
        $pengaduan = Pengaduan::All();
        $user = Auth::user();
        

        $pdf = PDF::loadView('pemerintah.laporan', compact(['pengaduan' => $pengaduan], ['user' => $user]));
        return $pdf->stream('Laporan Pengaduan.pdf');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatediteruskan(Request $request, $id)
    {
        if($pengaduan = Pengaduan::findOrFail ($id)) {
            //$pengaduan = new Pengaduan;
            //$pengaduan->id = $request->input('id');
            
            $pengaduan->judul = $request->input('judul');
            $pengaduan->kategori_pengaduan = $request->input('kategori_pengaduan');
            $pengaduan->provinsi = $request->input('provinsi');
            $pengaduan->kabupaten = $request->input('kabupaten');
            $pengaduan->kecamatan = $request->input('kecamatan');
            $pengaduan->desa = $request->input('desa');
            $pengaduan->tanggal = $request->input('tanggal');
            $pengaduan->lokasi_pengaduan = $request->input('lokasi_pengaduan');
            $pengaduan->deskripsi = $request->input('deskripsi');
            $pengaduan->image = $request->input('image');
            $pengaduan->diteruskan_ke = $request->input('diteruskan ke');
            $pengaduan->alasan_diteruskan = $request->input('alasan_diteruskan');
            
            if($pengaduan->save()){
                $request->session()->flash('success', 'pengaduan berhasil diteruskan');
            }else{
                $request->session()->flash('error', 'pengaduan gagal diteruskan');
            }
            return redirect()->route('listpengaduan', compact('pengaduan'));
                                        
        }
    }

      
}
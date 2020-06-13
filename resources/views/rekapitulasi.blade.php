@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-6">
            <div class="card">
            <div class="card-header center"><h5><b>Rekapitulasi</b></h5></div>
            
               
                <div class="card-body" align="center">
                    <div class="card col-md-8">
                        <div class="card-header bg-primary" align="center">Status Pengaduan</div>
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td>Diterima</td>
                                    <td>: </td>
                                    <td>{{$terima->count()}}</td>
                                </tr>
                                <tr>
                                    <td>Diteruskan</td>
                                    <td>: </td>
                                    <td>{{$teruskan->count()}}</td>
                                </tr>
                                <tr>
                                    <td>Ditolak</td>
                                    <td>: </td>
                                    <td>{{$tolak->count()}}</td>
                                </tr>
                                <tr>
                                    <td>Belum Diproses</td>
                                    <td>: </td>
                                    <td>{{$belumdiproses->count()}}</td>
                                </tr>
                                
                            </table>
                            
                        </div>
                    </div>
                    <br>
                    <div class="card col-md-8">
                   
                        <div class="card-header bg-primary" align="center">Desa</div>
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td>Desa Sitoluama</td>
                                    <td>: </td>
                                    <td>{{$desasitoluama->count()}}</td>
                                </tr>
                                <tr>
                                    <td>Desa Pintu Bosi</td>
                                    <td>: </td>
                                    <td>{{$desapintubosi->count()}}</td>
                                </tr>
                                
                                
                            </table>
                            
                        </div>
                    </div>

                    <br>
                    <div class="card col-md-8">
                        <div class="card-header bg-primary" align="center">Kategori Pengaduan</div>
                        <div class="card-body">
                            <table>
                                <tr>
                                    <td>Kebersihan</td>
                                    <td>: </td>
                                    <td>{{$kebersihan->count()}}</td>
                                </tr>
                                <tr>
                                    <td>Kesehatan</td>
                                    <td>: </td>
                                    <td>{{$kesehatan->count()}}</td>
                                </tr>
                                <tr>
                                    <td>Infrastruktur</td>
                                    <td>: </td>
                                    <td>{{$infrastruktur->count()}}</td>
                                </tr>
                                <tr>
                                    <td>Pendidikan</td>
                                    <td>: </td>
                                    <td>{{$pendidikan->count()}}</td>
                                </tr>
                                <tr>
                                    <td>Kesejahteraan Rakyat</td>
                                    <td>: </td>
                                    <td>{{$kesejahteraanrakyat->count()}}</td>
                                </tr>
                                <tr>
                                    <td>Perekonomian</td>
                                    <td>: </td>
                                    <td>{{$perekonomian->count()}}</td>
                                </tr>
                                <tr>
                                    <td>Politik Hukum dan Keamanan</td>
                                    <td>: </td>
                                    <td>{{$politikhukumdankeamanan->count()}}</td>
                                </tr>
                                <tr>
                                    <td>Energi dan Sumber Daya Alam</td>
                                    <td>: </td>
                                    <td>{{$energidansumberdayaalam->count()}}</td>
                                </tr>
                                <tr>
                                    <td>Lingkungan Hidup dan Penanggulangan Bencana</td>
                                    <td>: </td>
                                    <td>{{$lingkunganhidupdanpenanggulanganbencana->count()}}</td>
                                </tr>
                                <tr>
                                    <td>Pariwisata</td>
                                    <td>: </td>
                                    <td>{{$pariwisata->count()}}</td>
                                </tr>
                                <tr>
                                    <td>Pemilu</td>
                                    <td>: </td>
                                    <td>{{$pemilu->count()}}</td>
                                </tr>
                                <tr>
                                    <td>Pertanian</td>
                                    <td>: </td>
                                    <td>{{$pertanian->count()}}</td>
                                </tr>
                            </table>
                            
                        </div>
                    
                    
                </div>
                    
                </div>
           
                
                    
                </div>
                    
                </div>
            
        </div>
    </div>
</div>
@endsection

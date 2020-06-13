@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card-header">Daftar Pengaduan</div>

            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        
                        
                    </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <th scope="row">{{ $pengaduan->id}}</th>
                                <td>{{$pengaduan->nik}}</td>
                                <td>{{$pengaduan->judul}}</td>
                                <td>{{$pengaduan->kategori_pengaduan}}</td>
                                <td>{{$pengaduan->lokasi_pengaduan}}</td>
                                <td>{{$pengaduan->status_pengaduan}}</td>
                                <td>
                                <a href="{{ url('laporan/{id}')}}"><button type="submit" class="btn btn-success">Buat Laporan</button>
                                </td>
                            </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>
@endsection
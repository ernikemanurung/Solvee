@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pengaduan {{$pengaduan -> id}}</div>

                <div class="card-body">
                    <form action="{{ route('teruskanpengaduan', $pengaduan)}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="nik" class="col-md-2 col-form-label text-md-right">NIK</label>

                            <div class="col-md-9">
                                <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{$pengaduan->nik}}" required autocomplete="nik" readonly autofocus>

                                @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-md-2 col-form-label text-md-right">Nama</label>

                            <div class="col-md-9">
                                <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{$pengaduan->nama}}" required autocomplete="nama" readonly autofocus>

                                @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="judul" class="col-md-2 col-form-label text-md-right">Judul Pengaduan</label>

                            <div class="col-md-9">
                                <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{$pengaduan->judul}}" required autocomplete="judul" readonly autofocus>

                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kategori_pengaduan" class="col-md-2 col-form-label text-md-right">Kategori Pengaduan</label>

                            <div class="col-md-9">
                                <select id="kategori_pengaduan" class="form-control @error('kategori_pengaduan') is-invalid @enderror" name="kategori_pengaduan" value="{{$pengaduan->kategori_pengaduan}}" readonly required autofocus>
                                    <option value="{{$pengaduan->kategori_pengaduan}}" disable="true" selected="true">{{$pengaduan->kategori_pengaduan}}</option>
                                </select>
                                @error('kategori_pengaduan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="provinsi" class="col-md-2 col-form-label text-md-right">Provinsi</label>

                            <div class="col-md-9">
                                <select id="provinsi" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" value="{{$pengaduan->provinsi}}" readonly required autofocus>
                                        <option value="{{$pengaduan->provinsi}}" disable="true" selected="true">{{$pengaduan->provinsi}}</option>
                                </select>
                                @error('provinsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kabupaten" class="col-md-2 col-form-label text-md-right">Kabupaten</label>

                            <div class="col-md-9">
                                <select name="kabupaten" id="kabupaten" class="form-control @error('kabupaten') is-invalid @enderror" value="{{$pengaduan->kabupaten}}" readonly required autofocus>
                                    <option value="{{$pengaduan->kabupaten}}" disable="true" selected="true">{{$pengaduan->kabupaten}}</option>
                                </select>
                                @error('kabupaten')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kecamatan" class="col-md-2 col-form-label text-md-right">Kecamatan</label>

                            <div class="col-md-9">
                                <select name="kecamatan" id="kecamatan" class="form-control @error('kecamatan') is-invalid @enderror" value="{{$pengaduan->desa}}" readonly required autofocus>
                                            <option value="{{$pengaduan->kecamatan}}" disable ="true" selected="true">{{$pengaduan->kecamatan}}</option>
                                        </select>            
                                @error('kecamatan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="desa" class="col-md-2 col-form-label text-md-right">Desa</label>

                            <div class="col-md-9">
                                <select id="desa" class="form-control @error('desa') is-invalid @enderror" name="desa" value="{{$pengaduan->desa}}" readonly required autofocus>
                               
                                            <option value="{{$pengaduan->desa}}" disable="true" selected="true">{{$pengaduan->desa}}</option>
                                        </select>
                                @error('desa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lokasi_pengaduan" class="col-md-2 col-form-label text-md-right">Detail Lokasi Kejadian</label>

                            <div class="col-md-9">
                                <input id="lokasi_pengaduan" type="text" class="form-control @error('lokasi_pengaduan') is-invalid @enderror" name="lokasi_pengaduan" value="{{$pengaduan->lokasi_pengaduan}}" readonly required autofocus>

                                @error('lokasi_pengaduan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal" class="col-md-2 col-form-label text-md-right">Tanggal Kejadian</label>

                            <div class="col-md-9">
                                <input id="tanggal" type="text" class="form-control @error('lokasi_pengaduan') is-invalid @enderror" name="tanggal" value="{{$pengaduan->tanggal}}" readonly required autofocus>

                                @error('tanggal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-2 col-form-label text-md-right">Deskripsi Pengaduan</label>

                            <div class="col-md-9">
                                
                                <textarea cols="64" rows="5" name="deskripsi" placeholder="deskripsikan pengaduan anda" readonly>
                                {{$pengaduan->deskripsi}}       
                                </textarea>
                                       
                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="diteruskan_ke" class="col-md-2 col-form-label text-md-right">Diteruskan Ke</label>

                            <div class="col-md-9">
                                <input id="diteruskan_ke" type="text" class="form-control @error('diteruskan_ke') is-invalid @enderror" name="diteruskan_ke" required autofocus>

                                @error('diteruskan_ke')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alasan_diteruskan" class="col-md-2 col-form-label text-md-right">Alasan Diteruskan</label>

                            <div class="col-md-9">
                                <input id="alasan_diteruskan" type="text" class="form-control @error('alasan_diteruskan') is-invalid @enderror" name="alasan_diteruskan" required autofocus>
                                @error('diteruskanke')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        <a class="btn btn-primary" href="{{url('pengaduan')}}">Kembali</a>
                        <button type="submit" class="btn btn-primary" align="right">
                            Teruskan
                        </button>
                    </form>        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

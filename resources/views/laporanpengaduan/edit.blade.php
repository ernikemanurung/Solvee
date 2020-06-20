@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Pengaduan {{$pengaduan -> id}}</div>

                <div class="card-body">
                    <form action="{{ route('editpengaduan', $pengaduan)}}" method="POST">
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
                            <label for="judul" class="col-md-2 col-form-label text-md-right">Judul</label>

                            <div class="col-md-9">
                                <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{$pengaduan->judul}}" required autocomplete="judul" autofocus>

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
                                <select id="kategori_pengaduan" class="form-control @error('kategori_pengaduan') is-invalid @enderror" name="kategori_pengaduan" value="{{$pengaduan->kategori_pengaduan}}" required autofocus>
                                    <option value="{{$pengaduan->kategori_pengaduan}}" disable="true" selected="true">{{$pengaduan->kategori_pengaduan}}</option>
                                    <option value="Energi dan Sumber Daya Alam">Energi dan Sumber Daya Alam</option>
                                            <option value="Infrastruktur">Infrastruktur</option>
                                            <option value="Kebersihan">Kebersihan</option>
                                            <option value="Kesehatan">Kesehatan</option>
                                            <option value="Kesejahteraan Rakyat">Kesejahteraan Rakyat</option>
                                            <option value="Lingkungan Hidup dan Penanggulangan Bencana">Lingkungan Hidup dan Penanggulangan Bencana</option>
                                            <option value="Pariwisata">Pariwisata</option>
                                            <option value="Pemilu">Pemilu</option>
                                            <option value="Pendidikan">Pendidikan</option>
                                            <option value="Perekonomian">Perekonomian</option>
                                            <option value="Pertanian">Pertanian</option>
                                            <option value="Politik, Hukum, dan Keamanan">Politik, Hukum, dan Keamanan</option>
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
                                <select id="provinsi" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" value="{{$pengaduan->provinsi}}" required autofocus>
                                        <option value="{{$pengaduan->provinsi}}" disable="true" selected="true">{{$pengaduan->provinsi}}</option>
                                        <option value="Aceh">Aceh</option>
                                        <option value="Bali">Bali</option>
                                        <option value="Bali">Banten</option>
                                        <option value="Bengkulu">Bengkulu</option>
                                        <option value="DI Yogyakarta">DI Yogyakarta</option>
                                        <option value="DKI Jakarta">DKI Jakarta</option>
                                        <option value="Gorontalo">Gorontalo</option>
                                        <option value="Jambi">Jambi</option>
                                        <option value="Jawa Barat">Jawa Barat</option>
                                        <option value="Jawa Tengah">Jawa Tengah</option>
                                        <option value="Jawa Timur">Jawa Timur</option>
                                        <option value="Kalimantan Barat">Kalimantan Barat</option>
                                        <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                        <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                        <option value="Kalimantan Timur">Kalimantan Timur</option>
                                        <option value="Kalimantan Utara">Kalimantan Utara</option>
                                        <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                                        <option value="Kepulauan Riau">Kepulauan Riau</option>
                                        <option value="Lampung">Lampung</option>
                                        <option value="Maluku">Maluku</option>
                                        <option value="Maluku Utara">Maluku Utara</option>
                                        <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                        <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                        <option value="Papua">Papua</option>
                                        <option value="Papua Barat">Papua Barat</option>
                                        <option value="Riau">Riau</option>
                                        <option value="Sulawesi Barat">Sulawesi Barat</option>
                                        <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                        <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                        <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                        <option value="Sulawesi Utara">Sulawesi Utara</option>
                                        <option value="Sumatera Barat">Sumatera Barat</option>                                            <option value="Sumatera Selatan">Sumatera Selatan</option>
                                        <option value="Sumatera Utara">Sumatera Utara</option>
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
                                <select name="kabupaten" id="kabupaten" class="form-control @error('kabupaten') is-invalid @enderror" value="{{$pengaduan->kabupaten}}" required autofocus>
                                
                                    <option value="{{$pengaduan->kabupaten}}" disable="true" selected="true">{{$pengaduan->kabupaten}}</option>
                                    <option value="Kabupaten Asahan">Kabupaten Asahan</option>
                                    <option value="Kabupaten Batu Bara">Kabupaten Batu Bara</option>
                                    <option value="Kabupaten Dairi">Kabupaten Dairi</option>
                                    <option value="Kabupaten Deli Serdang">Kabupaten Deli Serdang</option>
                                    <option value="Kabupaten Humbang Hasundutan">Kabupaten Humbang Hasundutan</option>
                                    <option value="Kabupaten Karo">Kabupaten Karo</option>
                                    <option value="Kabupaten Labuhan Batu">Kabupaten Labuhan Batu</option>
                                    <option value="Kabupaten Labuhan Batu Selatan">Kabupaten Labuhan Batu Selatan</option>
                                    <option value="Kabupaten Labuhan Batu Utara">Kabupaten Labuhan Batu Utara</option>
                                    <option value="Kabupaten Langkat">Kabupaten Langkat</option>
                                    <option value="Kabupaten Mandailing Natal">Kabupaten Mandailing Natal</option>
                                    <option value="Kabupaten Nias">Kabupaten Nias</option>
                                    <option value="Kabupaten Nias Barat">Kabupaten Nias Barat</option>
                                    <option value="Kabupaten Nias Selatan">Kabupaten Nias Selatan</option>
                                    <option value="Kabupaten Nias Utara">Kabupaten Nias Utara</option>
                                    <option value="Kabupaten Padang Lawas">Kabupaten Padang Lawas</option>
                                    <option value="Kabupaten Padang Lawas Utara">Kabupaten Padang Lawas Utara</option>
                                    <option value="Kabupaten Pakpak Bharat">Kabupaten Pakpak Bharat</option>
                                    <option value="Kabupaten Samosir">Kabupaten Samosir</option>
                                    <option value="Kabupaten Serdang Bedagai">Kabupaten Serdang Bedagai</option>
                                    <option value="Kabupaten Simanlungun">Kabupaten Simanlungun</option>
                                    <option value="Kabupaten Tapanuli Selatan">Kabupaten Tapanuli Selatan</option>
                                    <option value="Kabupaten Tapanuli Tengah">Kabupaten Tapanuli Tengah</option>
                                    <option value="Kabupaten Tapanuli Utara">Kabupaten Tapanuli Utara</option>
                                    <option value="Kabupaten Toba Samosir">Kabupaten Toba Samosir</option>
                                    <option value="Kota Binjai">Kota Binjai</option>
                                    <option value="Kota Gunungsitoli">Kota Gunungsitoli</option>
                                    <option value="Kota Medan">Kota Medan</option>
                                    <option value="Kota Padangsidimpuan">Kota Padangsidimpuan</option>
                                    <option value="Kota Pematang Siantar">Kota Pematang Siantar</option>
                                    <option value="Kota Sibolga">Kota Sibolga</option>
                                    <option value="Kota Tanjung Balai">Kota Tanjung Balai</option>
                                    <option value="Kota Tebing Tinggi">Kota Tebing Tinggi</option>    
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
                                <select name="kecamatan" id="kecamatan" class="form-control @error('kecamatan') is-invalid @enderror" value="{{$pengaduan->desa}}" required autofocus>
                                            <option value="{{$pengaduan->kecamatan}}" disable ="true" selected="true">{{$pengaduan->kecamatan}}</option>
                                            
                                            <option value="Ajibata">Ajibata</option>
                                            <option value="Balige">Balige</option>
                                            <option value="Bonatua Lunasi">Bonatua Lunasi</option>
                                            <option value="Borbor">Borbor</option>
                                            <option value="Habinsaran">Habinsaran</option>
                                            <option value="Laguboti">Laguboti</option>
                                            <option value="Lumban Julu">Lumban Julu</option>
                                            <option value="Nassau">Nassau</option>
                                            <option value="Parmaksian">Parmaksian</option>
                                            <option value="Pintu Pohan Meranti">Pintu Pohan Meranti</option>
                                            <option value="Porsea">Porsea</option>
                                            <option value="Siantar Narumonda">Siantar Narumonda</option>
                                            <option value="Sigumpar">Sigumpar</option>
                                            <option value="Silaen">Silaen</option>
                                            <option value="Tampahan">Tampahan</option>
                                            <option value="Uluan">Uluan</option>
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
                                <select id="desa" class="form-control @error('desa') is-invalid @enderror" name="desa" value="{{$pengaduan->desa}}" required autofocus>
                               
                                            <option value="{{$pengaduan->desa}}" disable="true" selected="true">{{$pengaduan->desa}}</option>
                                          
                                            <option value="Aruan">Aruan</option>
                                            <option value="Gasa Ribu">Gasa Ribu</option>
                                            <option value="Lumban Bagasan">Lumban Bagasan</option>
                                            <option value="Lumban Binanga">Lumban Binanga</option>
                                            <option value="Ompu Raja Hatulian">Ompu Raja Hatulian</option>
                                            <option value="Ompu Raja Hutapea">Ompu Raja Hutapea</option>
                                            <option value="Ompu Raja Hutapea Timur">Ompu Raja Hutapea Timur</option>
                                            <option value="Pardinggaran">Pardinggaran</option>
                                            <option value="Pardomuan Nauli">Pardomuan Nauli</option>
                                            <option value="Pasar Laguboti">Pasar Laguboti</option>
                                            <option value="Pintu Bosi">Pintu Bosi</option>
                                            <option value="Siraja Gorat">Siraja Gorat</option>
                                            <option value="Sitoluama">Sitoluama</option>
                                            <option value="Tinggir Nipasir">Tinggir Nipasir</option>
                                            <option value="Ujung Tanduk">Ujung Tanduk</option>
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
                                <input id="lokasi_pengaduan" type="text" class="form-control @error('lokasi_pengaduan') is-invalid @enderror" name="lokasi_pengaduan" value="{{$pengaduan->lokasi_pengaduan}}" required autofocus>

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
                                <input id="deskripsi" type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{$pengaduan->deskripsi}}" required autofocus>

                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        
                        <a class="btn btn-primary" href="{{url('pengaduan')}}">Kembali</a>
                        <button type="submit" class="btn btn-primary" align="right">
                            Update
                        </button>
                    </form>        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

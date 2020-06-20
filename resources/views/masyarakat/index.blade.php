@extends('layouts.app')

@section('content')
@yield('scripts')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="card">
                <div class="card-header">Sampaikan Pengaduan Anda</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('listpengaduan') }}">
                        @csrf
                        <table class="table">
                                <tr>
                                    <td>
                                        <label for="nik" ><b>NIK</b></label>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" id="nik" maxlength="16" value = "{{ $user->nik }}" readonly required autofocus/>

                                            @error('nik')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="nama" ><b>Nama</b></label>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" maxlength="50" value = "{{ $user->name }}" readonly required autofocus/>

                                            @error('nama')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                           
                                <tr>
                                    <td>
                                        <label for="judul"><b>Judul Pengaduan</b></label>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" maxlength="80" required autofocus/>
                                            @error('judul')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="kategori_pengaduan"><b>Kategori Pengaduan</b></label>
                                    </td>
                                    <td>
                                        <select class="form-control @error('kategori_pengaduan') is-invalid @enderror" name="kategori_pengaduan" required autofocus>
                                            <option value="None" selected>None</option>
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
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="provinsi"><b>Provinsi</b></label>
                                    </td>
                                    <td>
                                        <select name="provinsi" id="provinsi" class="form-control @error('provinsi') is-invalid @enderror" required autofocus>
                                            <option value="0" selected="true">Pilih Provinsi</option>

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
                                            <option value="Sumatera Barat">Sumatera Barat</option>
                                            <option value="Sumatera Selatan">Sumatera Selatan</option>
                                            <option value="Sumatera Utara">Sumatera Utara</option>
                                        </select>
                                        @error('provinsi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </td>        
                                </tr>
                                <tr>
                                    <td>
                                        <label for="kabupaten"><b>Kabupaten</b></label>
                                    </td>
                                    <td>
                                        <select name="kabupaten" id="kabupaten" class="form-control @error('kabupaten') is-invalid @enderror" required autofocus>
                                            <option value="0" disable="true" selected="true">Pilih Kabupaten</option>
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
                                    </td> 
                                </tr>
                                <tr>
                                    <td>
                                        <label for="kecamatan"><b>Kecamatan</b></label>
                                    </td>
                                    <td>
                                        <select name="kecamatan" id="kecamatan" class="form-control @error('kecamatan') is-invalid @enderror" required autofocus>
                                            <option value="0" disable ="true" selected="true">Pilih Kecamatan</option>
                                            
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
                                    </td> 
                                </tr>
                                <tr>
                                    <td>
                                        <label for="desa"><b>Desa</b></label>
                                    </td>
                                    <td>
                                        <select name="desa" id="desa" class="form-control @error('desa') is-invalid @enderror" required autofocus>
                                            <option value="0" disable="true" selected="true">Pilih Desa</option>
                                          
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
                                    </td> 
                                </tr>
                                <tr>
                                    <td>
                                        <label for="lokasi_pengaduan"><b>Detail Lokasi Kejadian</b></label>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control @error('lokasi_pengaduan') is-invalid @enderror" name="lokasi_pengaduan" id="lokasi_pengaduan" maxlength="80" required autofocus/>
                                            @error('lokasi_pengaduan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="tanggal"><b>Tanggal Kejadian</b></label>
                                    </td>
                                    <td>
                                        <div class="input-group input-group-sm">
                                            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" id="tanggal" required autofocus/>
                                            @error('tanggal')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="deskripsi"><b>Deskripsi</b></label>
                                    </td>
                                    <td>
                                        <textarea cols="65" rows="5" name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" placeholder="deskripsikan pengaduan anda">
                                        </textarea>
                                        @error('deskripsi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror    
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="image"><b>Foto/Bukti Aduan</b></label>
                                    </td>
                                    <td>
                                        <input type="file" id="image" name="image" accept="image/*">
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left">
                                        <a class="btn btn-danger" href="{{url('tambahaduan')}}">Batal</a>
                                    </td>
                                    
                                    <td align="right">
                              
                                        <button type="submit" name="kirim" class="btn btn-primary left">{{ __('Kirim Aduan') }}</button>
                                    </td>
                                </tr>
                        </table>   
                    </form>     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      $('#provinces').on('change', function(e){
        console.log(e);
        var province_id = e.target.value;
        $.get('/json-regencies?province_id=' + province_id,function(data) {
          console.log(data);
          $('#regencies').empty();
          $('#regencies').append('<option value="0" disable="true" selected="true">=== Select Regencies ===</option>');

          $('#districts').empty();
          $('#districts').append('<option value="0" disable="true" selected="true">=== Select Districts ===</option>');

          $('#villages').empty();
          $('#villages').append('<option value="0" disable="true" selected="true">=== Select Villages ===</option>');

          $.each(data, function(index, regenciesObj){
            $('#regencies').append('<option value="'+ regenciesObj.id +'">'+ regenciesObj.name +'</option>');
          })
        });
      });

      $('#regencies').on('change', function(e){
        console.log(e);
        var regencies_id = e.target.value;
        $.get('/json-districts?regencies_id=' + regencies_id,function(data) {
          console.log(data);
          $('#districts').empty();
          $('#districts').append('<option value="0" disable="true" selected="true">=== Select Districts ===</option>');

          $.each(data, function(index, districtsObj){
            $('#districts').append('<option value="'+ districtsObj.id +'">'+ districtsObj.name +'</option>');
          })
        });
      });

      $('#districts').on('change', function(e){
        console.log(e);
        var districts_id = e.target.value;
        $.get('/json-village?districts_id=' + districts_id,function(data) {
          console.log(data);
          $('#villages').empty();
          $('#villages').append('<option value="0" disable="true" selected="true">=== Select Villages ===</option>');

          $.each(data, function(index, villagesObj){
            $('#villages').append('<option value="'+ villagesObj.id +'">'+ villagesObj.name +'</option>');
          })
        });
      });
    </script>
@endsection

@extends('layouts.app')

@section('content')

<!--<div class="card-header">Detail Pengaduan</div>
<div class="card-body" color="blue">
    <table class="table">
        <tr>
            {{$pengaduan->nik}}
        </tr>
        <tr>
            <h6>{{$pengaduan->tanggal}}</h6>
        </tr>
    </table>
</div>-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card-header">Detail Pengaduan {{$pengaduan->id}}</div>
            <div class="card-body">
            <table class="table">
                <tr>
                    <td>
                        <h4 class="card-title card-title-primary">{{$pengaduan->nik}}</h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h4 class="card-title card-title-primary">{{$pengaduan->nama}}</h4>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="card-text card-text-danger">{{$pengaduan->tanggal}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="card-text">Judul Pengaduan : {{$pengaduan->judul}}</p>
                    </td>
                </tr>
                </tr>
                    <td>
                        <p class="card-text">Deskripsi : {{$pengaduan->deskripsi}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="card-text">Lokasi : {{$pengaduan->provinsi}}, {{$pengaduan->kabupaten}}, {{$pengaduan->kecamatan}}, {{$pengaduan->desa}}.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="card-text">Detail Lokasi : {{$pengaduan->lokasi_pengaduan}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="card-text">Status Pengaduan : {{$pengaduan->status_pengaduan}}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a class="btn btn-primary" href="{{url('pengaduan')}}">Kembali</a>
                    </td>
                </tr>
                
            </table>
            </div>
        </div>
    </div>
</div>

<div class="container">
  
        <div class="row justify-content-center">
            <div class="col-md-6">
            @can('kelola-pengaduan')
                <div class="card-header">Tambahkan Respon</div>
                <div class="card-body">
                <table class="table">
                    <tr>
                        <td>
                        @can('terima-pengaduan')
                            <a href="{{ route('terimapengaduan', $pengaduan->id)}}"><button id="terima" name="terima" type="submit" class="btn btn-success" value="diterima">Terima</button>
                        @endcan
                        </td>
                        
                        <td>
                        @can('teruskan-pengaduan')
                            <a href="{{ route('teruskanpengaduan', $pengaduan->id)}}"><button type="submit" class="btn btn-primary">Teruskan</button>
                        @endcan
                        </td>
                        <td>
                        @can('tolak-pengaduan')
                            <a href="{{ route('tolakpengaduan', $pengaduan->id)}}"><button type="submit" class="btn btn-danger">Tolak</button>
                        @endcan
                        </td>
                    </tr>
                </div>
            @endcan
            </div>
        </div>

</div>
<!--<div class="row">
    <div class="col-md-12 animated fadeInUp">
            <div class="card">
                <h5 class="card-header danger-color-dark white-text text-center py-3" align="center">
                    <strong>Detail Pengaduan</strong>
                </h5>
                <table class="table" align="left">
                    <tbody>
                        <div class="col-md-6">
                            <tr>
                                {{$pengaduan->id}}
                            </tr>
                            <tr>
                                {{$pengaduan->nik}}
                            </tr>
                        </div>
                        
                        
                    </tbody>
                </table>
            </div>
    </div>
    
    
</div>
</div>-->


<!-- Material form subscription -->
@endsection

@section('scripts')
    $(document).click(function() {
        if($('#terima').is(':disabled')) {
            $('#terima').removeAttr('disabled');
        }else {
            $('terima').attr('disabled', 'disabled');
        }
});

@endsection


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4 col-md-3">
            <div class="card">
                <div class="card-body pd-l-5 pd-r-5 bg-light opacity='3.0'">
                    

                        <div class="row">
                            
                                <a href="{{ route('editprofil')}}">
                                Ubah Profil
                                </a>
                            
                        </div>
                        
                        
                        <div class="row">
                            
                                <a href="{{ route('editpassword')}}">
                                Ubah Password
                                </a>
                            
                        </div>
                        
                    
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
            <div class="card-header center"><h5><b>Ubah Profil {{$user-> name}}</b></h5></div>

                <div class="card-body" >
                    <div class="row justify-content-center">
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-1.5 profile-image">
                                    <img src="/images/profil.png" alt="Your Profile Image" width=50px>
                                </div>
                                <div class="col-sm-10 profile-image">
                                    <h5>{{Auth::user()->name}}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <form action="{{ route('updateprofil', $user)}}" method="POST">
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nik" class="col-md-2 col-form-label text-md-right">NIK</label>

                            <div class="col-md-6">
                                <input id="nik" type="text" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{$user->nik}}" required autofocus>

                                @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jenis_kelamin" class="col-md-2 col-form-label text-md-right">Jenis Kelamin</label>

                            <div class="col-md-6">
                                <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                                <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan

                                @error('jenis_kelamin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-2 col-form-label text-md-right">Alamat</label>

                            <div class="col-md-6">
                                <input id="alamat" type="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{$user->alamat}}" required autocomplete="email" autofocus>

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nomor_telepon" class="col-md-2 col-form-label text-md-right">Nomor Telepon</label>

                            <div class="col-md-6">
                                <input id="nomor_telepon" type="nomor_telepon" class="form-control @error('nomor_telepon') is-invalid @enderror" name="nomor_telepon" value="{{$user->nomor_telepon}}" required autocomplete="nomor_telepon" autofocus>

                                @error('nomor_telepon')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @csrf  
                        {{ method_field('POST')}}
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary ">
                                Update
                            </button>  
                        </div>
                        
                        
                        
                    </form>
                          
                </div>
            
        </div>
    </div>
</div>
@endsection

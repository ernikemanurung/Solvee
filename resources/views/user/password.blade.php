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
            <div class="card-header center"><h5><b>Ubah Password</b></h5></div>

                
                    <br>
                    <form action="{{ route('updatepassword', $user)}}" method="POST">
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password Baru') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Konfirmasi Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                                        
                        @csrf  
                        {{ method_field('POST')}}
                        <div class="col-md-10">
                            <button type="submit" class="btn btn-primary ">
                                Update
                            </button>  
                        </div>
                        <br>
                        
                        
                        
                    </form>
                          
                </div>
            
        </div>
    </div>
</div>
@endsection

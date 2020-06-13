<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Gate;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
        $user = Auth::user();
        
        return view('user.edit', compact('user'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showpassword()
    {
        
        $user = Auth::user();
        
        return view('user.password', compact('user'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //$user->roles()->sync($request->roles);
        if($user = User::findOrFail ($id)){
            $user = Auth::user();
            $user->name = $request->name;
            $user->nik = $request->nik;
            $user->email = $request->email;
            $user->alamat = $request->alamat;
            $user->nomor_telepon = $request->nomor_telepon;
            $user->jenis_kelamin = $request->jenis_kelamin;

            if($user->save()){
                $request->session()->flash('success', $user->name . ' has been updated');
            }else{
                $request->session()->flash('error', 'There was an error updating the user');
            }
            return view('user.edit', compact('user'));
           
            
        }
    }

    /**
     * Get a validator for an incoming registration request.
     * @param  \Illuminate\Http\Request  $request
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $request)
    {
        return Validator::make($request, [
            
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function updatepassword(Request $request, $id)
    {
        //
        //$user->roles()->sync($request->roles);
        if($user = User::findOrFail ($id)){
            $user = Auth::user();
            $user->password = Hash::make($request->password);
            
            if($user->save()){
                $request->session()->flash('success', $user->name . ' has been updated');
            }else{
                $request->session()->flash('error', 'There was an error updating the user');
            }
            return view('user.password', compact('user'));
           
            
        }
    }

   

    
    
}

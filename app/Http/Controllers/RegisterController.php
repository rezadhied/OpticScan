<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelUser;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view ('register');
    }   

    public function store(Request $request){
        
        $request->validate([
            'name' => 'required|min:4',
            'username' => 'required|min:4|unique:model_user',
            'email' => 'required|email|unique:model_user',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ], [
            'username.unique' => 'Username sudah terdaftar.',
            'email.unique' => 'Email sudah terdaftar.',
        ]);

        $data =  new ModelUser();
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        $data->role = 'pasien'; // Set default role sebagai pasien
        $data->save();
        return redirect('/')->with('alert-success','Register Success');
    }
}

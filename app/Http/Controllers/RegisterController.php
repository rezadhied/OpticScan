<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }   

    public function store(Request $request){
        $request->validate([
            'name' => 'required|min:2',
            'Uname' => 'required|min:4|unique:model_user,username',
            'email' => 'required|email|unique:model_user,email',
            'ttl' => 'required|date',
            'NoHP' => 'required|min:10',
            'password' => 'required|min:8|confirmed',
        ], [
            'Uname.unique' => 'Username sudah terdaftar.',
            'email.unique' => 'Email sudah terdaftar.',
        ]);

        $data = new ModelUser();
        $data->name = $request->name;
        $data->username = $request->Uname;
        $data->email = $request->email;
        $data->phone = $request->NoHP;
        $data->birthdate = $request->ttl;
        $data->password = Hash::make($request->password);
        $data->role = 'pasien'; // Set default role sebagai pasien
        $data->save();

        Session::put('user', $data);

        return redirect('/')->with('alert-success','Register Success');
    }

    public function storeDokter(Request $request){
        $request->validate([
            'name' => 'required|min:2',
            'Uname' => 'required|min:4|unique:model_user,username',
            'email' => 'required|email|unique:model_user,email',
            'ttl' => 'required|date',
            'NoHP' => 'required|min:10',
            'password' => 'required|min:8|confirmed',
        ], [
            'Uname.unique' => 'Username sudah terdaftar.',
            'email.unique' => 'Email sudah terdaftar.',
        ]);

        $data = new ModelUser();
        $data->name = $request->name;
        $data->username = $request->Uname;
        $data->email = $request->email;
        $data->phone = $request->NoHP;
        $data->birthdate = $request->ttl;
        $data->password = Hash::make($request->password);
        $data->role = 'dokter'; 
        $data->save();

        Session::put('user', $data);

        return redirect('/')->with('alert-success','Register Success');
    }
}

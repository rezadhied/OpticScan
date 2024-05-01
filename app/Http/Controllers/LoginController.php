<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelUser;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index(){
        return view ('login');
    }   

    public function loginPost(Request $request){

        $username = $request->username;
        $password = $request->password;

        $data = ModelUser::where('username',$username)->first();
        if($data){ 
            if(Hash::check($password,$data->password)){
                Session::put('name',$data->name);
                Session::put('username',$data->username);
                Session::put('login',TRUE);
                return redirect('/');
            }
            else{
                return redirect('login')->with('alert','Wrong password or email!');
            }
        }
        else{
            return redirect('login')->with('alert','Wrong password or email!');
        }
    }
}

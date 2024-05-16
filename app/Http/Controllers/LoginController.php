<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }   

    public function loginPost(Request $request)
    {
        $usernameOrEmail = $request->input('username');
        $password = $request->input('password');

        $user = ModelUser::where('email', $usernameOrEmail)->orWhere('username', $usernameOrEmail)->first();

        if ($user && Hash::check($password, $user->password)) {
            $request->session()->put('user_id', $user->id);

            return redirect('/');
        } else {
            return redirect()->back()->with('alert', 'Wrong username or password');
        }
    }

}

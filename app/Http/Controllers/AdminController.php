<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelUser;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $users = ModelUser::whereIn('role', ['dokter', 'pasien'])->get();
        return view('admin', compact('users'));
    }

    public function create()
    {
        return view('formPengguna');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:model_user',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:model_user',
            'password' => 'required|string|min:8',
            'phone' => 'required|string|max:15',
            'birthdate' => 'required|date',
            'role' => 'required|in:dokter,pasien',
        ]);

        ModelUser::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'birthdate' => $request->birthdate,
            'role' => $request->role,
        ]);

        return redirect()->route('pengguna.index')->with('success', 'User created successfully.');
    }

    public function edit($id)
    {
        $user = ModelUser::findOrFail($id);
        return view('formPengguna', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = ModelUser::findOrFail($id);

        $request->validate([
            'username' => 'required|string|max:255|unique:model_user,username,' . $user->id,
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:model_user,email,' . $user->id,
            'password' => 'nullable|string|min:8',
            'phone' => 'required|string|max:15',
            'birthdate' => 'required|date',
        ]);

        $user->update([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
            'phone' => $request->phone,
            'birthdate' => $request->birthdate,
        ]);

        return redirect()->route('pengguna.index')->with('success', 'User updated successfully.');
    }

    public function destroy($id)
    {
        $user = ModelUser::findOrFail($id);
        $user->delete();

        return redirect()->route('pengguna.index')->with('success', 'User deleted successfully.');
    }
}

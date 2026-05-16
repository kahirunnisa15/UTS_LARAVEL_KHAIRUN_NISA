<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // MENAMPILKAN DATA USER
    public function index()
    {
        return view('admin.users', [
            'users' => User::all()
        ]);
    }

    // FORM TAMBAH USER
    public function create()
    {
        return view('admin.create');
    }

    // SIMPAN USER
    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()
            ->route('users.index')
            ->with('success', 'User created successfully.');
    }

    // FORM EDIT USER
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin.edit', compact('user'));
    }

    // UPDATE USER
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()
            ->route('users.index')
            ->with('success', 'User updated successfully.');
    }
}
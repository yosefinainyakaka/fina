<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $users = [];

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $this->users[] = $request->all();

        // Simpan data ke database atau session (opsional)
        return redirect('/users')->with('success', 'User berhasil ditambahkan!');
    }
}

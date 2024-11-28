<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    private $laporan = [];

    public function create()
    {
        return view('laporan.create');
    }

    public function store(Request $request)
    {
        $this->laporan[] = $request->all();

        return redirect('/laporan')->with('success', 'Laporan berhasil ditambahkan!');
    }
}

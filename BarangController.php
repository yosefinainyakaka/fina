<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    private $barang = [];

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $this->barang[] = $request->all();

        return redirect('/barang')->with('success', 'Barang berhasil ditambahkan!');
    }
}

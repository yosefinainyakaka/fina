<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    private $kategori = [];

    public function create()
    {
        return view('kategori-barang.create');
    }

    public function store(Request $request)
    {
        $this->kategori[] = $request->all();

        return redirect('/kategori-barang')->with('success', 'Kategori berhasil ditambahkan!');
    }
}

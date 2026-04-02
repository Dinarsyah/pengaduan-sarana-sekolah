<?php

namespace App\Http\Controllers;

use App\Models\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $data = Kategori::all();
        return view('kategori.index', compact('data'));
    }
}
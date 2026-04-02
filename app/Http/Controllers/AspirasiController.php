<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use App\Models\Siswa;
use App\Models\Kategori;
use App\Models\Status;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function index()
    {
        $data = Aspirasi::with(['siswa', 'kategori', 'status'])->get();
        return view('aspirasi.index', compact('data'));
    }

    public function create()
    {
        $siswa = Siswa::all();
        $kategori = Kategori::all();
        $status = Status::all();

        return view('aspirasi.create', compact('siswa', 'kategori', 'status'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required',
            'kategori_id' => 'required',
            'status_id' => 'required',
            'deskripsi' => 'required',
        ]);

        Aspirasi::create($request->all());

        return redirect('/aspirasi');
    }

    public function edit($id)
    {
        $aspirasi = Aspirasi::findOrFail($id);
        $siswa = Siswa::all();
        $kategori = Kategori::all();
        $status = Status::all();

        return view('aspirasi.edit', compact('aspirasi', 'siswa', 'kategori', 'status'));
    }

    public function update(Request $request, $id)
    {
        $aspirasi = Aspirasi::findOrFail($id);
        $aspirasi->update($request->all());

        return redirect('/aspirasi');
    }

    public function destroy($id)
    {
        $aspirasi = Aspirasi::findOrFail($id);
        $aspirasi->delete();

        return redirect('/aspirasi');
    }
}
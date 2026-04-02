<?php

namespace App\Http\Controllers;

use App\Models\UmpanBalik;

class UmpanBalikController extends Controller
{
    public function index()
    {
 $data = UmpanBalik::with(['aspirasi.siswa', 'admin'])->get();
    }
}
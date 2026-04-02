<?php

namespace App\Http\Controllers;

use App\Models\Status;

class StatusController extends Controller
{
    public function index()
    {
        $data = Status::all();
        return view('status.index', compact('data'));
    }
}
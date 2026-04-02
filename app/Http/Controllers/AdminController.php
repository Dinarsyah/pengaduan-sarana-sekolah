<?php

namespace App\Http\Controllers;

use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        $data = Admin::all();
        return view('admin.index', compact('data'));
    }
}
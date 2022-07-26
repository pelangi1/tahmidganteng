<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use app\Http\Controllers\Controller;

class bookController extends Controller
{
    public function index()
    {
        $halaman = "halaman utama";
        return view('welcome', compact('halaman'));
    }
}

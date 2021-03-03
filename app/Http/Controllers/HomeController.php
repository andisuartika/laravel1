<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function mhs(){
        $title='Data Mahasiswa';
        return view('admin.datamhs', compact('title'));
    }

    public function dashboard(){
        $title='Data Dashboard';
        return view('admin.dashboard', compact('title'));
    }
}

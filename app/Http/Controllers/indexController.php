<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
use App\Models\element;

class indexController extends Controller
{
    public function index()
    {
        $jurusanData = Jurusan::all(); // Retrieve all existing data
        $galeriData = element::all(); // Retrieve all existing data

        return view('index', compact('jurusanData','galeriData'));
    }
}

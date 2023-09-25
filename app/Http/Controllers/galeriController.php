<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\element;

class galeriController extends Controller
{
    public function index()
    {
        $kategoriData = element::all(); // Retrieve all existing data
        return view('admin.galeri_element', compact('kategoriData'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\element;

class galeriController extends Controller
{
    //Galeri_ELement
    public function index()
    {
        $kategoriData = element::all(); // Retrieve all existing data
        return view('admin.galeri_element', compact('kategoriData'));
    }

    //Galeri_ELement
    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
        ]);

        // Find the record by ID
        $element = element::findOrFail($id);

        try {
            // Update the record with the new data
            $element->update([
                'galeri_judul' => $request->input('nama'),
                'galeri_deskripsi' => $request->input('deskripsi'),
                'galeri_kategori' => $request->input('kategori'),
            ]);

            // Redirect to a success page or back to the form with a success message
            return redirect('/add-element-galeri')->with('success', 'Galeri Element updated successfully');

        } catch (\Exception $e) {

            // Log the error message (you can customize this as needed)
            Log::error('Error updating Galeri Element: ' . $e->getMessage());

            return redirect()->back()->with('error', 'Failed to update Galeri Element');
        }
    }

    //Galeri_Konten
    public function add_kegiatan()
    {
        $kategoriData = element::all();
        return view('admin.add-kegiatan', compact('kategoriData'));
    }
}

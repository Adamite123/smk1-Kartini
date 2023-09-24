<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;

class JurusanController extends Controller
{
    public function create()
    {
        $jurusanData = Jurusan::all(); // Retrieve all existing data
        return view('admin.add-jurusan', compact('jurusanData'));
    }

    public function destroy($id)
    {
        // Find the Jurusan record by its ID
        $jurusan = Jurusan::find($id);

        // Check if the Jurusan exists
        if (!$jurusan) {
            return redirect('/jurusan')->with('error', 'Jurusan not found.');
        }

        // Delete the Jurusan record
        $jurusan->delete();

        return redirect('/add-jurusan')->with('success', 'Jurusan deleted successfully.');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'image.required' => 'The image field is required.',
            'image.image' => 'The uploaded file is not a valid image.',
            'image.mimes' => 'The image must be a JPEG, PNG, JPG.',
            'image.max' => 'The image size must not exceed 2MB.',
        ]);

        // Upload the image to a temporary location
        $image = $request->file('image');

        // Filter the input
        $filteredNama = Str::lower(preg_replace('/[^a-zA-Z0-9]/', '', str_replace(' ', '', $request->input('nama'))));

        $timestamp = now()->format('si_dm_Y'); // Get the current timestamp
        $imageName = $filteredNama. '_' . $timestamp . '.' . $image->getClientOriginalExtension(); // Create a unique name for the image

        
        // Move the uploaded image to the public directory
        $newImagePath = public_path('images/jurusan_images/' . $imageName);
        $image->move(public_path('images/jurusan_images/'), $imageName);

        // Now, you can save the image path to the database
        $jurusan = new Jurusan;
        $jurusan->judul = $request->input('nama');
        $jurusan->image = 'images/jurusan_images/' . $imageName; // Save the renamed image path
        $jurusan->save();

        return redirect('/add-jurusan')->with('success', 'Jurusan added successfully');
    }
}

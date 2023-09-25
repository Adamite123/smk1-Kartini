<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Import the User model

class add_user extends Controller
{
    public function index()
    {
        // Retrieve all users from the database
        $users = User::all();
        return view('admin.add-user', compact('users'));
    }


    public function destroy($id)
    {
        // Find the Jurusan record by its ID
        $find_user = User::find($id);

        // Check if the Jurusan exists
        if (!$find_user) {
            return redirect('/add-user')->with('error', 'User not found.');
        }

        // Delete the Jurusan record
        $find_user->delete();

        return redirect('/add-user')->with('success', 'Jurusan deleted successfully.');
    }
}

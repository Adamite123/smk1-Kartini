<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class element extends Model
{
    protected $table = 'element'; // Replace 'jurusan' with your actual table name
    protected $fillable = ['galeri_judul', 'galeri_deskripsi','galeri_kategori']; // Define the columns you want to fill
    public $timestamps = false; // Disable timestamp columns
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan'; // Replace 'jurusan' with your actual table name
    protected $fillable = ['judul', 'image']; // Define the columns you want to fill
    public $timestamps = false; // Disable timestamp columns
}
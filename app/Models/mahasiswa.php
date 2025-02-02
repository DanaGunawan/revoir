<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = ['nim','nama','jurusan','prodi'];
  
    protected $primaryKey = 'nim';
    public $incrementing = false; 
    protected $keyType = 'string'; 
    public $timestamps = false;
}

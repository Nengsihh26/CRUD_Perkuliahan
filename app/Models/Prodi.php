<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_prodi';
    protected $table = 'prodi';
    protected $fillable = ['id_prodi', 'nama_prodi', 'fakultas', 'ketua_prodi'];
}

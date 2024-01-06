<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_mk';
    protected $table = 'matakuliah';
    protected $fillable = ['id_mk', 'nama_mk'];
}

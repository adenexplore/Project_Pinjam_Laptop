<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pinjaman extends Model
{
    use HasFactory;
    protected $table = 'pinjamans';
    protected $fillable = ['name', 'region', 'purproses', 'ket', 'date', 'return_date','teacher'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagepinjam extends Model
{
    use HasFactory;
    protected $table = 'pagepinjams';
    protected $fillable = ['name', 'region', 'purproses', 'ket', 'date', 'return_date','teacher'];
}


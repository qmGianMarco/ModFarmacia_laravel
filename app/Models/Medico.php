<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    public $table = 'medico';

    protected $fillable = [
        'id',
        'nombre',
        'especialidad',
    ];
}

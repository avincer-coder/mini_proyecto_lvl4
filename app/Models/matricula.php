<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matricula extends Model
{
    protected $fillable = ['cursos_id', 'alumnos_id']; 
    // use HasFactory;
}

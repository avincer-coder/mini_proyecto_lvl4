<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asistencia extends Model
{
    protected $fillable = ['asistencias', 'matricula_id']; 
    // use HasFactory;
}

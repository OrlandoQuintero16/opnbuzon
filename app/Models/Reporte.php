<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    use HasFactory;

    // Especifica los campos que se pueden llenar masivamente
    protected $fillable = [
        'entidad',
        'NombreUsuarios',
        'TelefonoUsuario',
        'TipoReporte',
        'DescripcionReporte',
        'imagen',
        
    ];
}

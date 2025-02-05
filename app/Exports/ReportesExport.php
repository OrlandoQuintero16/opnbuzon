<?php

namespace App\Exports;

use App\Models\Reporte;
use Maatwebsite\Excel\Concerns\FromCollection;

class ReportesExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Reporte::all();
    }
    public function headings(): array
    {
        //Si ves esto todo esto es pal' excel 
        return [
            'Entidad',                   // Primera columna
            'Nombre de Usuario',    // Segunda columna
            'Teléfono',             // Tercera columna
            'Tipo de Reporte',      // Cuarta columna
            'Descripción',          // Quinta columna
            'Fecha y Hora de Creación',  // Sexta columna
        ];
    }
}

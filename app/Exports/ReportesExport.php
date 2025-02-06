<?php

namespace App\Exports;

use App\Models\Reporte;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;


class ReportesExport implements FromCollection, WithHeadings
{

    /**
     * Devuelve la colección de datos que se exportará.
     *
     * @return array
     */
    public function collection()
    {
        return Reporte::select(
            'entidad',
            'NombreUsuarios',
            'TelefonoUsuario',
            'TipoReporte',
            'DescripcionReporte',
            'created_at' // Cambiado a fecha_hora_creacion
        )->get()->map(function ($item) {
            return [
                'Entidad' => $item->entidad,
                'Nombre de Usuario' => $item->NombreUsuarios,
                'Teléfono' => $item->TelefonoUsuario,
                'Tipo de Reporte' => $item->TipoReporte,
                'Descripción' => $item->DescripcionReporte,
                'Fecha y Hora de Creación' => $item->created_at->format('d/m/Y H:i:s'), // Formatear fecha_hora_creacion
            ];
        });
    }
    public function headings(): array
    {
        return [
            'Entidad',
            'Nombre de Usuario',
            'Teléfono',
            'Tipo de Reporte',
            'Descripción',
            'Fecha y Hora de Creación',
        ];
    }
}

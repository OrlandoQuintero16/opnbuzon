<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ReportesExport;



class ReporteController extends Controller
{
    public function store(Request $request)
    {
        // Validación
        $request->validate([
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = time() . '_' . $imagen->getClientOriginalName(); // Renombrar la imagen
            $imagen->move(public_path('imagenes'), $nombreImagen); // Guardar en public/imagenes
            $imagenPath = 'imagenes/' . $nombreImagen; // Guardar la ruta relativa en la BD
        } else {
            $imagenPath = null;
        }



        // Crear el reporte y guardar la ruta de la imagen
        Reporte::create([
            'entidad' => $request->entidad,
            'NombreUsuarios' => $request->NombreUsuarios,
            'TelefonoUsuario' => $request->TelefonoUsuario,
            'TipoReporte' => $request->TipoReporte,
            'DescripcionReporte' => $request->DescripcionReporte,
            'imagen' => $imagenPath,
        ]);

        // Enviar una notificación flash
        return redirect()->route('welcome')->with('success', 'Reporte enviado con éxito');
    }

    public function mostrarReportes()
    {
        $reportes = Reporte::paginate(10); // 10 resultados por página
        $reportes = Reporte::all(); // Obtener todos los reportes desde la base de datos
        return view('dashboard', compact('reportes')); // Pasar los reportes a la vista
    }
    public function exportarExcel()
    {
        // Genera el archivo Excel con los datos exportados.
        return Excel::download(new ReportesExport, 'Reportes.xlsx');
    }
}

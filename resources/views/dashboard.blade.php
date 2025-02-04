<x-app-layout>
    @section('title', 'Inicio') <!-- Definir el título personalizado -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>


    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gra20000 dark:text-gray-400"
                        id="tablareportes">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:bg-gray-800 dark:text-gray-400">
                            <tr class="bg-gray-200">
                                <th class="px-4 py-2 text-center">Entidad</th>
                                <th class="px-4 py-2 text-center">Nombre Completo</th>
                                <th class="px-4 py-2 text-center">Teléfono</th>
                                <th class="px-4 py-2 text-center">Tipo de reporte</th>
                                <th class="px-4 py-2 text-center">Descripción</th>
                                <th class="px-4 py-2 text-center">Evidencia</th>
                                <th class="px-4 py-2 text-center">Fecha y Hora</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reportes as $reporte)
                                <tr class="border-b">
                                    <td class="px-4 py-2 text-center">{{ $reporte->entidad }}</td>
                                    <td class="px-4 py-2 text-center">{{ $reporte->NombreUsuarios }}</td>
                                    <td class="px-4 py-2 text-center">{{ $reporte->TelefonoUsuario }}</td>
                                    <td class="px-4 py-2 text-center">{{ $reporte->TipoReporte }}</td>
                                    <td class="px-4 py-2 text-center">{{ $reporte->DescripcionReporte }}</td>
                                    <!-- Mostrar la imagen en icono -->
                                    <td class="px-4 py-2">
                                        @if ($reporte->imagen)
                                        <img src="{{ asset($reporte->imagen) }}" alt="Evidencia" class="w-20 h-20 object-cover rounded-lg shadow">
                                        @else
                                            <span class="text-gray-500">Sin Evidencia</span>
                                        @endif
                                    </td>

                                    <td class="px-4 py-2 text-center">{{ $reporte->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Modal para la imagen -->
        <div id="imageModal"
            class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden z-50 p-4">
            <div
                class="relative bg-white p-4 rounded-lg shadow-lg w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-2xl overflow-hidden">
                <button id="closeModal" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">✖</button>
                <div class="flex justify-center items-center max-h-[80vh] overflow-hidden">
                    <img id="modalImage" src="" class="w-auto max-w-full max-h-full object-contain rounded-lg">
                </div>
            </div>
        </div>
</x-app-layout>

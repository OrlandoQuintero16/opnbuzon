<x-app-layout>
    @section('title', 'Inicio') <!-- Definir el título personalizado -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">


        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
            <div class="p-6">
                <!-- Contenido de la tarjeta -->
                <div class="flex flex-col sm:flex-row items-center sm:items-start gap-4">
                    <!-- Título con soporte para tema nocturno -->
                    <h2 class="text-gray-900 dark:text-white text-xl font-bold">Opciones: </h2>

                    <!-- Botón de descarga -->
                    <a href="{{ route('exportar.reportes') }}"
                        class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white font-semibold rounded-lg flex items-center justify-center gap-2 transition-all duration-200">
                        <i class="fa-solid fa-file-excel" style="color: #ffffff;"></i>Descargar en Excel
                    </a>

                    
                </div>

            </div>
        </div>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6">

                <!-- Contenido de la tarjeta -->
                <table id="tablareportes" class="table-auto w-full border-collapse border border-gray-200">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-6 py-3 text-center">
                                <span class="block text-center font-medium text-gray-900 dark:text-white">Entidad</span>
                                <select class="datatable-input mt-2 block w-full p-2 text-sm border rounded-lg"
                                    data-column="0">
                                    <option value="">Seleccionar opción</option>
                                    <option value="Guardia Nacional">Guardia Nacional</option>
                                    <option value="Módulos de información AIFA">Módulos de información AIFA</option>
                                    <option value="Ecodelli">Ecodelli</option>
                                </select>
                            </th>
                            <th class="px-6 py-3 text-center">
                                <span class="block text-center font-medium text-gray-900 dark:text-white">Nombre
                                    Completo</span>
                                <input class="datatable-input mt-2 block w-full p-2 text-sm border rounded-lg"
                                    type="search" data-column="1" placeholder="Buscar...">
                            </th>
                            <th class="px-6 py-3 text-center">
                                <span
                                    class="block text-center font-medium text-gray-900 dark:text-white">Teléfono</span>
                                <input class="datatable-input mt-2 block w-full p-2 text-sm border rounded-lg"
                                    type="search" data-column="2" placeholder="Buscar...">
                            </th>
                            <th class="px-6 py-3 text-center">
                                <span class="block text-center font-medium text-gray-900 dark:text-white">Tipo
                                    de Reporte</span>
                                <select class="datatable-input mt-2 block w-full p-2 text-sm border rounded-lg"
                                    data-column="3">
                                    <option value="">Seleccionar opción</option>
                                    <option value="Comentario">Comentario</option>
                                    <option value="Necesidad">Necesidad</option>
                                    <option value="Ecodelli">Ecodelli</option>
                                </select>
                            </th>
                            <th class="px-6 py-3 text-center">
                                <span
                                    class="block text-center font-medium text-gray-900 dark:text-white">Descripción</span>
                                <input class="datatable-input mt-2 block w-full p-2 text-sm border rounded-lg"
                                    type="search" data-column="4" placeholder="Buscar...">
                            </th>
                            <th class="px-6 py-3 text-center">
                                <span
                                    class="block text-center font-medium text-gray-900 dark:text-white">Evidencia</span>
                            </th>
                            <th class="px-6 py-3 text-center">
                                <span class="block text-center font-medium text-gray-900 dark:text-white">Fecha
                                    y
                                    Hora</span>
                                <input id="fechaFiltro" class="block w-full p-2 text-sm border rounded-lg"
                                    type="text" placeholder="Seleccionar rango de fechas...">
                            </th>
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
                                <td class="px-4 py-2 text-center">
                                    @if ($reporte->imagen)
                                        <img src="{{ asset($reporte->imagen) }}" alt="Evidencia"
                                            class="w-20 h-20 object-cover rounded-lg shadow cursor-pointer open-modal"
                                            data-image="{{ asset($reporte->imagen) }}">
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
    <div id="imageModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden z-50 p-4">
        <div
            class="relative bg-white p-4 rounded-lg shadow-lg w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg xl:max-w-2xl overflow-hidden">
            <button id="closeModal" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">✖</button>
            <div class="flex justify-center items-center max-h-[80vh] overflow-hidden">
                <img id="modalImage" src="" class="w-auto max-w-full max-h-full object-contain rounded-lg">
            </div>
        </div>
    </div>
</x-app-layout>

@extends('layouts.app')

@section('title', 'Bienvenido') {{-- Título dinámico para esta página específica --}}

@section('content')

    <div class="min-h-screen flex justify-center items-center">
        <div class="w-full max-w-md p-4 bg-white border border-gray-300 rounded-xl shadow-lg">
            <div class="flex flex-col items-center justify-between mb-8 space-y-6">
                <h1 class="text-4xl font-semibold text-[#092534] text-center mb-4">
                    Buzón Interno de la Dirección de Operación
                </h1>
                <blockquote class="text-xl italic font-semibold text-gray-700 text-center mb-6">
                    Tu participación cuenta
                </blockquote>

                <a href="{{ route('buzon') }}"
                    class=" text-center text-white bg-verde-oscuro hover:bg-[#041e27] focus:ring-4 focus:ring-[#041e27] font-medium rounded-lg text-lg px-6 py-3 mb-4 focus:outline-none w-full transition duration-300 ease-in-out transform hover:scale-105"
                    id="guardia-nacional">
                    Guardia Nacional
                </a>

                <a href="{{ route('buzon') }}"
                    class="text-center text-white bg-verde-oscuro hover:bg-[#041e27] focus:ring-4 focus:ring-[#041e27] font-medium rounded-lg text-lg px-6 py-3 mb-4 focus:outline-none w-full transition duration-300 ease-in-out transform hover:scale-105">
                    Modulos de información AIFA
                </a>

                <a href="{{ route('buzon') }}"
                    class="text-center text-white bg-verde-oscuro hover:bg-[#041e27] focus:ring-4 focus:ring-[#041e27] font-medium rounded-lg text-lg px-6 py-3 mb-4 focus:outline-none w-full transition duration-300 ease-in-out transform hover:scale-105">
                    Ecodeli
                </a>
            </div>
        </div>
    </div>

@endsection
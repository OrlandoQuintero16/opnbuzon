<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->id(); // Campo id (primaria, AUTO_INCREMENT)
            $table->string('entidad',50);
            $table->string('NombreUsuarios', 100)->nullable(); // NombreUsuarios varchar(100)
            $table->string('TelefonoUsuario', 10)->nullable(); // TelefonoUsuario varchar(10)
            $table->string('TipoReporte', 20); // TipoReporte varchar(20)
            $table->text('DescripcionReporte'); // DescripcionReporte text
            $table->string('imagen')->nullable(); // Guardará la ruta de la imagen
            $table->timestamps(); // Para created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes');
    }
};

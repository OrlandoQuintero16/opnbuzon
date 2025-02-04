<!-- Pie de página con fondo blanco, bordes redondeados, sombra ligera y soporte para tema oscuro -->
<footer class="bg-verde-oscuro shadow-[rgba(0,_0,_0,_0.4)_0px_30px_90px] ">
    <!-- Contenedor principal que centra el contenido y ajusta el espaciado -->
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-6">
        <!-- Texto de derechos reservados con enlace interactivo -->
        <?php
        // Obtener la fecha actual
        $fecha_actual = date('Y ');
        ?>
        <span class="block text-sm text-white sm:text-center text-center">Copyright © <?php echo $fecha_actual; ?>
            Aeropuerto Internacional Felipe Ángeles</p>
        </span>
    </div>
</footer>

$(document).ready(function () {
    // Inicializa DataTable
    let table = $('#tablareportes').DataTable({
        responsive: true,
        autoWidth: false,
        lengthMenu: [10, 25, 50, 100],
        pageLength: 10,
        language: {
            search: "Buscar:",
            lengthMenu: "Mostrar _MENU_ registros",
            info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
            infoEmpty: "No hay registros disponibles",
            infoFiltered: "(filtrado de _MAX_ registros)",
            paginate: {
                first: "Primero",
                last: "Último",
                next: "Siguiente",
                previous: "Anterior"
            }
        }
    });

    // Limpiar filtros al cargar la página
    $(".datatable-input").val("");
    table.search("").draw();

    // Filtrar por columnas específicas al cambiar el select
    $(".datatable-input").on("keyup change", function () {
        let columnIndex = $(this).data("column");
        let valor = $(this).val();
        table.column(columnIndex).search(valor).draw();
    });

    // Inicializar Flatpickr para el filtro de fechas
    flatpickr("#fechaFiltro", {
        mode: "range",
        dateFormat: "Y-m-d",
        locale: "es",
        onClose: function (selectedDates) {
            if (selectedDates.length === 2) {
                filtrarPorFecha(selectedDates[0], selectedDates[1]);
            }
        }
    });

    // Función para filtrar la tabla por rango de fechas
    function filtrarPorFecha(fechaInicio, fechaFin) {
        const inicio = fechaInicio.toISOString().split('T')[0];
        const fin = fechaFin.toISOString().split('T')[0];

        $.fn.dataTable.ext.search.push(function (settings, data) {
            const fechaCelda = data[5].split(' ')[0]; // Extrae solo la fecha (sin la hora)
            return fechaCelda >= inicio && fechaCelda <= fin;
        });

        table.draw();
        $.fn.dataTable.ext.search.pop();
    }

    // Abrir modal al hacer clic en una imagen
    $(".open-modal").on("click", function () {
        let imageUrl = $(this).data("image"); // Obtener la URL de la imagen desde el atributo data-image
        $("#modalImage").attr("src", imageUrl); // Cambiar la imagen en el modal
        $("#imageModal").removeClass("hidden"); // Mostrar el modal
    });

    // Cerrar modal al hacer clic en el botón de cerrar
    $("#closeModal").on("click", function () {
        $("#imageModal").addClass("hidden");
    });

    // Cerrar modal al hacer clic fuera de la imagen/modal
    $("#imageModal").on("click", function (e) {
        if (e.target.id === "imageModal") {
            $(this).addClass("hidden");
        }
    });
});

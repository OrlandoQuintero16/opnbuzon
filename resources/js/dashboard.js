$(document).ready(function () {
    $('#tablareportes').DataTable({
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

    // Modal para ver la imagen en grande
    $(".open-modal").click(function () {
        let imageUrl = $(this).data("image");
        $("#modalImage").attr("src", imageUrl);
        $("#imageModal").removeClass("hidden");
    });

    $("#closeModal, #imageModal").click(function (e) {
        if (e.target.id === "closeModal" || e.target.id === "imageModal") {
            $("#imageModal").addClass("hidden");
        }
    });
});
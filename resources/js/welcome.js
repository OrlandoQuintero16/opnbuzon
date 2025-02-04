$(document).ready(function () {
    // Cambio de pasos
    $('.step1-btn').click(function () {
        const targetStep = $(this).data('target');
        $('#step1').addClass('hidden');
        $('#' + targetStep).removeClass('hidden');
    });

    // Acción de Regresar
    $('#backStep').click(function () {
        // Oculta el paso 2 y muestra el paso 1
        $('#step2').addClass('hidden');
        $('#step1').removeClass('hidden');
    });

    // Limitar campo Nombre a 100 caracteres
    $('#NombreUsuarios').on('input', function () {
        let maxLength = 100;
        let currentValue = $(this).val();
        if (currentValue.length > maxLength) {
            $(this).val(currentValue.slice(0, maxLength));
        }
    });

    // Limitar campo Teléfono a 10 dígitos numéricos
    $('#TelefonoUsuario').on('input', function () {
        let maxLength = 10;
        let currentValue = $(this).val();
        let numericValue = currentValue.replace(/\D/g, '');
        if (numericValue.length > maxLength) {
            numericValue = numericValue.slice(0, maxLength);
        }
        $(this).val(numericValue);
    });

    // Actualización de contador para Descripción
    const maxLength = 500;
    $('#DescripcionReporte').on('input', function () {
        let currentLength = $(this).val().length;
        $('#contador').text(`${currentLength}/${maxLength}`);
        if (currentLength > maxLength) {
            $(this).val($(this).val().slice(0, maxLength));
            $('#contador').text(`${maxLength}/${maxLength}`);
        }
    });

    // Validación de campo Descripción
    $('#multiStepForm').submit(function (event) {
        let descripcion = $('#DescripcionReporte').val().trim();
        if (descripcion.length < 1) {
            event.preventDefault();
            alert('El campo Descripción no puede estar vacío y debe tener al menos 1 carácter.');
        }
    });

    // Previsualización de imagen
    $('input[type="file"]').on('change', function (event) {
        const file = event.target.files[0];
        if (file) {
            if (file.type.startsWith('image/')) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    $('#imagePreview').attr('src', e.target.result).show();
                };
                reader.readAsDataURL(file);
            } else {
                alert('Por favor, selecciona un archivo de imagen válido.');
                $('#imagePreview').hide();
            }
        }
    });
});


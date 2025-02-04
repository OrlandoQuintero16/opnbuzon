

//Limitar Campo Nombre a 100 caracteres
$(document).ready(function () {
  $('#NombreUsuarios').on('input', function () {
    let maxLength = 100;
    let currentValue = $(this).val();
    if (currentValue.length > maxLength) {
      $(this).val(currentValue.slice(0, maxLength));
    }
  });
});

$(document).ready(function () {
  $('#TelefonoUsuario').on('input', function () {
    let maxLength = 10;
    let currentValue = $(this).val();

    // Eliminar caracteres no numéricos
    let numericValue = currentValue.replace(/\D/g, '');

    // Limita la longitud a 10 caracteres
    if (numericValue.length > maxLength) {
      numericValue = numericValue.slice(0, maxLength);
    }

    // Establecer el valor limpio en el campo
    $(this).val(numericValue);
  });
});


$(document).ready(function () {
  const maxLength = 500; // Máximo número de caracteres permitidos
  const minLength = 1; // Mínimo número de caracteres requeridos

  // Función que actualiza el contador y recorta el texto si es necesario
  $('#DescripcionReporte').on('input', function () {
    let currentLength = $(this).val().length; // Longitud del texto actual
    $('#contador').text(`${currentLength}/${maxLength}`); // Actualiza el contador

    // Si el texto supera el límite, recortarlo automáticamente
    if (currentLength > maxLength) {
      $(this).val($(this).val().slice(0, maxLength));
      $('#contador').text(`${maxLength}/${maxLength}`);
    }
  });

  // Validación para asegurarse de que el campo no esté vacío
  $('#formulario').submit(function (event) {
    let descripcion = $('#DescripcionReporte').val().trim();

    // Si el campo está vacío o tiene menos de 1 carácter, mostrar un mensaje de error
    if (descripcion.length < minLength) {
      event.preventDefault(); // Evita el envío del formulario
      alert('El campo Descripción no puede estar vacío y debe tener al menos 1 carácter.');
    }
  });
});


//Habilitar visualizar imagen seleccionada busca en el HTML Previsualización de imagen
$(document).ready(function () {
  $('input[type="file"]').on('change', function (event) {
    const file = event.target.files[0]; // Obtiene el archivo seleccionado

    if (file) {
      // Verifica que sea un archivo de imagen
      if (file.type.startsWith('image/')) {
        const reader = new FileReader();

        // Lee el archivo y lo muestra como fuente de imagen
        reader.onload = function (e) {
          $('#imagePreview').attr('src', e.target.result).show(); // Muestra la imagen
        };

        reader.readAsDataURL(file);
      } else {
        alert('Por favor, selecciona un archivo de imagen válido (PNG, JPG o JPEG).');
        $('#imagePreview').hide(); // Oculta la previsualización si no es una imagen
      }
    }
  });
});

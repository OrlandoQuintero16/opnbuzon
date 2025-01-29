

//Limitar Campo Nombre a 100 caracteres
$(document).ready(function () {
  $('#nombre').on('input', function () {
    let maxLength = 100;
    let currentValue = $(this).val();
    if (currentValue.length > maxLength) {
      $(this).val(currentValue.slice(0, maxLength));
    }
  });
});

//Limitar Campoo Telefono a 10 caracteres
$(document).ready(function () {
  $('#telefono').on('input', function () {
    let maxLength = 10;
    let currentValue = $(this).val();

    // Limita la longitud del texto a 2 caracteres
    if (currentValue.length > maxLength) {
      $(this).val(currentValue.slice(0, maxLength));
    }
  });
});

//Limitar Textarea a 500 caracteres
$(document).ready(function () {
  const maxLength = 500; // Máximo número de caracteres permitidos
  $('#comentarios').on('input', function () {
    let currentLength = $(this).val().length; // Longitud del texto actual
    $('#contador').text(`${currentLength}/${maxLength}`); // Actualiza el contador

    // Si el texto supera el límite, recortarlo automáticamente
    if (currentLength > maxLength) {
      $(this).val($(this).val().slice(0, maxLength));
      $('#contador').text(`${maxLength}/${maxLength}`);
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

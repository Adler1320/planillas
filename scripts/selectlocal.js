document.addEventListener('DOMContentLoaded', function () {
    // Seleccionar el primer elemento
    var selectElement = document.getElementById('local-select');
    var firstOption = selectElement.options[0];

    // Asignar el valor del ID al input oculto
    document.getElementById('idLocal').value = firstOption.getAttribute('data-id');

    // Agregar el evento de cambio
    selectElement.addEventListener('change', function () {
      var selectedOption = selectElement.options[selectElement.selectedIndex];
      document.getElementById('idLocal').value = selectedOption.getAttribute('data-id');
    });
  });
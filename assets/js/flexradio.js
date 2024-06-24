document.addEventListener('DOMContentLoaded', (event) => {
    const siRadio = document.getElementById('flexRadioDefault1');
    const noRadio = document.getElementById('flexRadioDefault2');
    const cuantosHijosInput = document.getElementById('cuantoshijos');

    siRadio.addEventListener('change', function () {
      if (siRadio.checked) {
        cuantosHijosInput.disabled = false;
      }
    });

    noRadio.addEventListener('change', function () {
      if (noRadio.checked) {
        cuantosHijosInput.disabled = true;
        cuantosHijosInput.value = ''; // Opcional: Limpiar el campo cuando se desactiva
      }
    });
  });


  document.addEventListener('DOMContentLoaded', (event) => {
    const siRadio = document.getElementById('flexRadioDefault3');
    const noRadio = document.getElementById('flexRadioDefault4');
    const igss = document.getElementById('igss');

    siRadio.addEventListener('change', function () {
      if (siRadio.checked) {
        igss.disabled = false;
      }
    });

    noRadio.addEventListener('change', function () {
      if (noRadio.checked) {
        igss.disabled = true;
        igss.value = ''; // Opcional: Limpiar el campo cuando se desactiva
      }
    });
  });
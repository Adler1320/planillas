function showModal(id_local) {
    
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'tablas/datoslocales.php?id=' + id_local, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
           // console.log("AJAX success, response:", xhr.responseText); // Verificar la respuesta de AJAX en la consola
            var empresa = JSON.parse(xhr.responseText);
           // console.log("Empresa recibida:", empresa); // Verificar el objeto empresa recibido

            // Asignar valores a los campos del formulario dentro de la modal
            document.getElementById('nombreEmpresa').value = empresa.nombrelocal || '';
            document.getElementById('direccionEmp').value = empresa.direccionlocal || '';
            document.getElementById('telef1').value = empresa.telefono || '';
            document.getElementById('telef2').value = empresa.telefono2 || '';
            document.getElementById('idLocalEmp').value = empresa.idLocal || "";
            
            // Mostrar la modal utilizando Bootstrap
            var modal = new bootstrap.Modal(document.getElementById('ModalEditarEmpresa'));
            modal.show();
        } else if (xhr.readyState === 4) {
           // console.error("Error al obtener datos de empresa:", xhr.status, xhr.statusText);
        }
    };
    xhr.send();
}
// Enviar datos al servidor

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('EditarEmpresaForm');
    
    form.addEventListener('submit', function (e) {
        e.preventDefault();

        const formData = new FormData(form);
        const fileInput = document.getElementById('logo');
        const file = fileInput.files[0];
        const allowedTypes = ['image/jpeg', 'image/png'];

        // Validación de archivo
        if (file && !allowedTypes.includes(file.type)) {
            Swal.fire({
                title: 'Error',
                text: 'Solo se permiten archivos JPG y PNG',
                icon: 'error',
                confirmButtonText: 'Ok'
            });
            return;
        }

        // Validación de campos vacíos y teléfono
        const nombre = formData.get('nombre').trim();
        const direccion = formData.get('direccion').trim();
        const telefono1 = formData.get('telefono1').trim();
        const telefono2 = formData.get('telefono2').trim();
        const telefonoPattern = /^\d{8}$/;

        if (!nombre || !direccion || !telefono1) {
            Swal.fire({
                title: 'Error',
                text: 'Nombre, dirección y teléfono 1 son obligatorios',
                icon: 'error',
                confirmButtonText: 'Ok'
            });
            return;
        }

        if (!telefonoPattern.test(telefono1) || (telefono2 && !telefonoPattern.test(telefono2))) {
            Swal.fire({
                title: 'Error',
                text: 'Los números de teléfono deben tener 8 dígitos y solo contener números',
                icon: 'error',
                confirmButtonText: 'Ok'
            });
            return;
        }

        // Enviar formulario con AJAX
        fetch('tablas/EditarEmpresaModal.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text()) // Leer la respuesta como texto
        .then(text => {
            //console.log(text); // Mostrar la respuesta en la consola
            try {
                return JSON.parse(text); // Intentar convertir el texto a JSON
            } catch (error) {
                throw new Error('Respuesta no es JSON: ' + text); // Lanzar un error si no se puede convertir a JSON
            }
        })
        .then(data => {
            if (data.status) {
                Swal.fire({
                    title: '¡Éxito!',
                    text: data.message,
                    icon: 'success',
                    confirmButtonText: 'Ok'
                }).then(() => {
                    location.reload(); // Recargar la página
                });
            } else {
                Swal.fire({
                    title: 'Error',
                    text: data.message,
                    icon: 'error',
                    confirmButtonText: 'Ok'
                });
            }
        })
        .catch(error => {
            Swal.fire({
                title: 'Error',
                text: 'Hubo un problema con la solicitud: ' + error.message,
                icon: 'error',
                confirmButtonText: 'Ok'
            });
           // console.error('Error:', error);
        });
    });
});


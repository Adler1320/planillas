document.addEventListener('DOMContentLoaded', function() {
    const insertForm = document.getElementById('puestoForm');
    const updateForm = document.getElementById('EditarTurnoForm');

    insertForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(insertForm);
        formData.append('action', 'insert');
        
        const nombreTurno = formData.get('nombreTurno');
        if (!nombreTurno) {
            Swal.fire({
                title: 'Error',
                text: 'Campo vacío',
                icon: 'error',
                confirmButtonText: 'Ok'
            });
            return;
        }

        fetch('peticionesPHP/Turnos.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status) {
                Swal.fire({
                    title: '¡Éxito!',
                    text: data.message,
                    icon: 'success',
                    confirmButtonText: 'Ok'
                })
                .then(() => {
                    location.reload();
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
        });
    });

    updateForm.addEventListener('submit', function(e) {
        e.preventDefault();
        const formData = new FormData(updateForm);
        formData.append('action', 'update');

        const nombreTurno = formData.get('Turno');
        if (!nombreTurno) {
            Swal.fire({
                title: 'Error',
                text: 'Campo vacío',
                icon: 'error',
                confirmButtonText: 'Ok'
            });
            return;
        }

        fetch('peticionesPHP/Turnos.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status) {
                Swal.fire({
                    title: '¡Éxito!',
                    text: data.message,
                    icon: 'success',
                    confirmButtonText: 'Ok'
                })
                .then(() => {
                    location.reload();
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
        });
    });
});

function showModal(id_turno, nombre_turno) {
    document.getElementById('Turno').value = nombre_turno;
    document.getElementById('idTurno').value = id_turno;
    $('#EditarTurno').modal('show');
    //console.log(id_turno, nombre_turno);
}

function eliminarPuesto(id_turno) {
    Swal.fire({
        title: '¿Estás seguro?',
        text: "¡No podrás revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'No, cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            const formData = new FormData();
            formData.append('action', 'delete');
            formData.append('idTurno', id_turno);

            fetch('peticionesPHP/Turnos.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.status) {
                    Swal.fire({
                        title: '¡Eliminado!',
                        text: data.message,
                        icon: 'success',
                        confirmButtonText: 'Ok'
                    }).then(() => {
                        location.reload();
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
            });
        }
    });
}

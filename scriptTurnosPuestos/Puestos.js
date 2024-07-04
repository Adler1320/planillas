document.addEventListener('DOMContentLoaded', function(){
    const formInsert = document.getElementById('puestoForm');
    const formUpdate = document.getElementById('EditarPuestoForm');

    formInsert.addEventListener('submit', function(e) {
     e.preventDefault();

    const formData = new FormData(formInsert);
    formData.append('action', 'insert');
    const nombrePuesto = formData.get('nombrePuesto').trim();
    //console.log(nombrePuesto);
    if(!nombrePuesto){
        Swal.fire({
            title: 'Error',
            text: 'Campo vacío',
            icon: 'error',
            confirmButtonText: 'Ok'
        });
        return;
    } 

        fetch("peticionesPHP/Puestos.php", {
            method:'POST',
            body:formData
        })
        .then(respuesta => respuesta.json())
        .then(data =>{
           // console.log(data)
            if(data.status === true){
                Swal.fire({
                    title:'¡Exito!',
                    text:data.message,
                    icon:'success',
                    confirmButtonText:'Ok'
                }).then(()=>{
                    location.reload();
                });
            } else{
                Swal.fire({
                    title: 'Error',
                    text: data.message,
                    icon: 'error',
                    confirmButtonText: 'Ok'
                });
               
            }
        })
        .catch(error =>{
            Swal.fire({
                title: 'Error',
                text: 'Hubo un problema con la solicitud: ' + error.message,
                icon: 'error',
                confirmButtonText: 'Ok'
            });
           // console.log(error.message)
        })
    
    });
    // ------------------------Editar Puesto ---------------------------------

    formUpdate.addEventListener('submit', function(e){
        e.preventDefault();
        const formData= new FormData(formUpdate);

        const nombrePuesto = formData.get('Puesto');
        formData.append('action', 'update');
        if(!nombrePuesto){
            Swal.fire({
                title: 'Error',
                text: 'Campos vacíos',
                icon: 'error',
                confirmButtonText: 'Ok'
            });
            return;
        } 
        fetch('peticionesPHP/Puestos.php',{
            method: 'POST',
            body: formData
        })
        .then(respuesta => respuesta.json())
        .then(data =>{
           // console.log(data);
            if(data.status){
                Swal.fire({
                    title:'¡Exito!',
                    text:'Datos actualizados Correctamente',
                    icon:'success',
                    confirmButtonText: 'Ok'
                })
                .then(()=>{
                    location.reload();
                });
            }else{
                Swal.fire({
                    title:'Error',
                    text: data.message,
                    icon:'error',
                    confirmButtonText:'Ok'
                })
            }

        })
        .catch(error=>{
            Swal.fire({
                title: 'Error',
                text: 'Hubo un problema con la solicitud'+error.message,
                icon: 'Error',
                confirmButtonText: 'Ok'
            });
        });
        
    });

});
function showModal(id_puesto, nombre_puesto){
    document.getElementById('Puesto').value = nombre_puesto;
    document.getElementById('idPuesto').value =id_puesto;
    $('#EditarPuesto').modal('show');
   // console.log(id_puesto, nombre_puesto)
}
function eliminarPuesto(id_puesto){
    console.log(id_puesto);
    Swal.fire({
        title:'¿Seguro?',
        text:'¿Estás seguro que deseas eliminar este puesto?',
        icon:'warning',
        showCancelButton:true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    })
    .then(result=>{
        if(result.isConfirmed){
            const formData = new FormData();
            formData.append('action', 'delete');
            formData.append('idPuesto', id_puesto);
            fetch('peticionesPHP/Puestos.php',{
                method:'POST',
                body: formData
            })
            .then(respuesta => respuesta.json())
            .then(data=>{
                //console.log(data)
                if(data.status){
                    Swal.fire(
                        '¡Eliminado!',
                        data.message,
                        'success'
                    ).then(()=>{
                        location.reload();
                    });
                }else{
                    Swal.fire(
                        'Error',
                        data.message,
                        'error'
                    );
                }
            })
            .catch(error =>{
                //console.error(error)
                Swal.fire(
                    'Error',
                    'Hubo un problema al comunicarse con el servidor'+ error.message,
                    'error'
                );
            })
        }
    })
}
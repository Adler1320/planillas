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
            fetch('peticionesPHP/eliminarPuesto.php',{
                method:'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ idPuesto: id_puesto })
            })
            .then(respuesta => respuesta.json())
            .then(data=>{
                console.log(data)
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
                console.error(error)
                Swal.fire(
                    'Error',
                    'Hubo un problema al comunicarse con el servidor'+ error.message,
                    'error'
                );
            })
        }
    })
}
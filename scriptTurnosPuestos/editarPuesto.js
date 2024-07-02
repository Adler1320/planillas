function showModal(id_puesto, nombre_puesto){
    document.getElementById('Puesto').value = nombre_puesto;
    document.getElementById('idPuesto').value =id_puesto;
    $('#EditarPuesto').modal('show');
    console.log(id_puesto, nombre_puesto)
}
document.addEventListener('DOMContentLoaded', function(){
    const form = document.getElementById('EditarPuestoForm');
    form.addEventListener('submit', function(e){
        e.preventDefault();
        const formData= new FormData(form);

        const nombrePuesto = formData.get('Puesto');
        if(!nombrePuesto){
            Swal.fire({
                title: 'Error',
                text: 'Campos vacíos',
                icon: 'error',
                confirmButtonText: 'Ok'
            });
            return;
        } 
        fetch('peticionesPHP/actualizarPuesto.php',{
            method: 'POST',
            body: formData
        })
        .then(respuesta => respuesta.json())
        .then(data =>{
            console.log(data);
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
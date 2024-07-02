document.addEventListener('DOMContentLoaded', function (){
    const form = document.getElementById('puestoForm');

    form.addEventListener('submit', function(e) {
     e.preventDefault();

    const formData = new FormData(form);

    const nombrePuesto = formData.get('nombrePuesto').trim();
    console.log(nombrePuesto);
    if(!nombrePuesto){
        Swal.fire({
            title: 'Error',
            text: 'Campos vacíos',
            icon: 'error',
            confirmButtonText: 'Ok'
        });
        return;
    } 

        fetch("peticionesPHP/insertarPuesto.php", {
            method:'POST',
            body:formData
        })
        .then(respuesta => respuesta.json())
        .then(data =>{
            console.log(data)
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
            console.log(error.message)
        })
    
})
});
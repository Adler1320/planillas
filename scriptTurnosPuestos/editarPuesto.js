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
    })
})
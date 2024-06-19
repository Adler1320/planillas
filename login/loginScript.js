document.getElementById('loginForm').addEventListener('submit', function(event){
    event.preventDefault();
    var username = document.getElementById('user').value;
    var password = document.getElementById('password').value;
    
    const xhr = new XMLHttpRequest();

    xhr.open('POST', './login/loginFun.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        // Definir qué hacer cuando la solicitud AJAX se complete
    xhr.onload = function() {
        //console.log('Status:', xhr.status);
        //console.log('Response:', xhr.responseText);
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.success) {

                // Login exitoso, redirigir o mostrar mensaje
                document.getElementById('message').innerHTML = "Login exitoso";
                // Redirigir a una página segura o actualizar la interfaz de usuario
                window.location.href = 'index.php';
                //console.log(response);
            } else {
                // Mostrar mensaje de error
                document.getElementById('message').innerHTML = response.message;
                //console.log(response);
                clearImputs();
            }
        } else {
            // Manejar errores de conexión
            document.getElementById('message').innerHTML = "Error de conexión: " + xhr.statusText;
            clearImputs();
        }
    };
    
    // Enviar la solicitud con los datos del formulario
    xhr.send('username=' + username + '&password=' + password);

});

function clearImputs(){
    document.getElementById('user').value ="";
    document.getElementById('password').value ="";
}
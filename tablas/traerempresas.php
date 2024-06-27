<?php
include 'conexionBD/conexion.php';

// Consulta para obtener las empresas
$sql = "SELECT idLocal, nombrelocal, direccionlocal, telefono, telefono2, logo FROM local";
$result = $conn->query($sql);

// Verifica si hay resultados
if ($result->num_rows > 0) {
    echo '<div class="container"><br><br><div class="row">';
    while ($row = $result->fetch_assoc()) {
        // Reemplaza "../" con "" en la ruta del logo
        $logoName= $row["logo"];
        $imageName= basename($logoName);
        $logoPath = "./assets/img/logos/" . $imageName;

        echo '<div class="col-md-4">';
        echo '  <div class="card card-profile">';
        echo '    <div class="card-header" style="background-image: url(\'assets/img/portada.avif\')">';
        echo '      <div class="profile-picture">';
        echo '        <div class="avatar avatar-xl">';
        echo '          <img src="' . $logoPath . '" alt="..." class="avatar-img rounded-circle" />';
        echo '        </div>';
        echo '      </div>';
        echo '    </div>';
        echo '    <div class="card-body">';
        echo '      <div class="user-profile text-center">';
        echo '        <div class="name">' . $row["nombrelocal"] . '</div>';
        echo '        <div class="job">' . $row["direccionlocal"] . '</div><br>';
        echo '        <div class="desc">' . $row["telefono"] . '</div>';
        echo '        <div class="desc">' . $row["telefono2"] . '</div>';
        echo '        <div class="view-profile">';
        echo '          <button class="btn btn-secondary w-100" onclick="editEmpresa(' . $row["idLocal"] . ')">Editar Empresa</button>';
        echo '        </div>';
        echo '      </div>';
        echo '    </div>';
        echo '    <div class="card-footer">';
        echo '      <div class="row user-stats text-center">';
        echo '        <div class="col">';
        echo '          <div class="number"> 44 </div>';
        echo '          <div class="title">Empleados</div>';
        echo '        </div>';
        echo '        <div class="col">';
        echo '          <div class="number"> 5 </div>';
        echo '          <div class="title">IGSS</div>';
        echo '        </div>';
        echo '      </div>';
        echo '    </div>';
        echo '  </div>';
        echo '</div>';
    }
    echo '</div></div>';
} else {
    echo "No se encontraron empresas.";
}

$conn->close();
?>

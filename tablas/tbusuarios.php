<?php
// Incluir el archivo de conexión
include 'conexionBD/conexion.php';

// Consulta para obtener todos los usuarios
$sql = "SELECT 
            u.Nombre, 
            u.username, 
            u.pass, 
            u.correo, 
            u.id_Local, 
            u.tipodeusuario, 
            u.estado, 
            l.nombreLocal AS nombrelocal  -- Esto asume que la tabla 'local' tiene una columna 'nombreLocal'
        FROM 
            usuario u
        JOIN 
            local l ON u.id_Local = l.idLocal";

$result = $conn->query($sql);
?>


<!-- TABLA PARA VER TODOS LOS USUARIOS -->
<div class="page-inner">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Usuarios Registrados</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Usuario</th>
                                    <th>Local</th>
                                    <th>Tipo de Usuario</th>
                                    <th>Estatus</th>
                                    <th style="width: 10%">Acción</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Usuario</th>
                                    <th>Local</th>
                                    <th>Tipo de Usuario</th>
                                    <th>Estatus</th>
                                    <th>Acción</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                if ($result->num_rows > 0) {
                                    // Salida de datos de cada fila
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row["Nombre"] . "</td>";
                                        echo "<td>" . $row["username"] . "</td>";
                                        echo "<td>" . $row["nombrelocal"] . "</td>";
                                        echo "<td>" . $row["tipodeusuario"] . "</td>";

                                        // Verificar el estado y asignar la clase adecuada
                                        $badgeClass = $row["estado"] == "ACTIVO" ? "badge badge-success" : "badge badge-danger";
                                        echo "<td> <span class='$badgeClass'>" . $row["estado"] . "</span> </td>";

                                        echo '<td>
                                                  <div class="form-button-action">
                                                      <button type="button" data-bs-toggle="tooltip" title=""
                                                        class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                         <i class="fa fa-edit"></i> </button>
                                                        <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger"
                                                           data-original-title="Remove">
                                                         <i class="fa fa-times"></i>
                                                      </button>
                                                    </div>
                                             </td>';
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='6'>No se encontraron usuarios</td></tr>";
                                }
                                $conn->close();
                                ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- TABLA PARA VER TODOS LOS USUARIOS -->
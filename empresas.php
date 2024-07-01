<!DOCTYPE html>
<html lang="en">

<head>
 <?php include_once "./navegacion/head.php"?>
 
</head>

<body>
  <div class="wrapper">

    <?php
    // Incluye el archivo 'header.php' solo una vez
    include_once 'navegacion/slidebaradmin.php';
    ?>

    <div class="main-panel">
      <?php
      // Incluye el archivo 'header.php' solo una vez
      include_once 'navegacion/navbar.php';
      include_once 'ConexionBD/conexion.php'
      ?>
      <div class="container">
        <div class="page-inner">
          <div class="page-header">
            <h3 class="fw-bold mb-3">Empresas</h3>
          </div>

          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalAgregarEmpresa">
            <span class="btn-label"><i class="fa fa-plus"></i></span>
            Agregar Nueva Empresa
          </button>

          <!-- Modal para agregar/editar empresa -->
          <div class="modal fade" id="ModalAgregarEmpresa" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalTitle">EMPRESAS</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="empresaForm" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12 ms-auto me-auto">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="card-header">
                                <div class="card-title" id="modalTitle">Agregar Empresa</div>
                              </div>
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                      <label for="name">Nombre de la Empresa</label>
                                      <input type="text" class="form-control" name="nombre" id="name"
                                        placeholder="Monte Alto XYZ" required />
                                    </div>
                                    <div class="form-group">
                                      <label for="direccion">Direccion</label>
                                      <input type="text" class="form-control" name="direccion" id="direccion"
                                        placeholder="5ta. Calle 6-7" required />
                                    </div>
                                    <div class="form-group">
                                      <label for="logo">Logo de la Empresa</label>
                                      <input type="file" class="form-control-file" name="logo" id="logo" />
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                      <label for="tel1">Telefono No. 1</label>
                                      <input type="text" class="form-control" name="telefono1" id="tel1"
                                        placeholder="0000-0000" maxlength="8" required />
                                    </div>
                                    <div class="form-group">
                                      <label for="tel2">Telefono No. 2</label>
                                      <input type="text" class="form-control" name="telefono2" id="tel2"
                                        placeholder="0000-0000" maxlength="8" />
                                    </div>
                                  </div>
                                </div>
                                <input type="hidden" name="idLocal" id="idLocal" value="" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer card-action ms-auto me-auto">
                    <button type="submit" class="btn btn-success">Guardar Empresa</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

<!--------------------------------------- mostrar empresas -------------------------------------------->
<?php
include 'conexionBD/conexion.php';
// Consulta para obtener las empresas
$sql = "SELECT idLocal, nombrelocal, direccionlocal, telefono, telefono2, logo FROM local";
$result = $conn->query($sql);
// Verifica si hay resultados
if ($result->num_rows > 0) { ?>
    <div class="container"><br><br><div class="row">
   <?php while ($row = $result->fetch_assoc()) {
        // Reemplaza "../" con "" en la ruta del logo
        $logoName= $row["logo"];
        $imageName= basename($logoName);
        $logoPath = "assets/img/logos/" . $imageName;?>
       <div class="col-md-4">
        <div class="card card-profile">
        <div class="card-header" style="background-image: url(assets/img/portada.avif">
        <div class="profile-picture">
        <div class="avatar avatar-xl">
        <img src=" <?php echo $logoPath ?>" alt="..." class="avatar-img rounded-circle" />
        </div>
        </div>
       </div>
       <div class="card-body">
        <div class="user-profile text-center">
        <div class="name"> <?php echo $row["nombrelocal"] ?></div>
       <div class="job"><?php echo $row["direccionlocal"] ?></div><br>
        <div class="desc"><?php echo $row["telefono"]  ?></div>
        <div class="desc"><?php echo $row["telefono2"] ?></div>
        <div class="view-profile">
        <button type="button" class="btn btn-secondary"  onClick="showModal(<?php echo $row["idLocal"]?>)">Editar Empresa</button>     
        </div>
       </div>
       </div>
      <div class="card-footer">
        <div class="row user-stats text-center">
        <div class="col">
        <div class="number"> 44 </div>
       <div class="title">Empleados</div>
        </div>
        <div class="col">
        <div class="number"> 5 </div>
        <div class="title">IGSS</div>
         </div>
        </div>
        </div>
        </div>
        </div>
        
   <?php } ?>
    </div></div>
<?php } else {
    echo "No se encontraron empresas.";
}
?>
<!-- ---------------------------------- modal editar empresas----------------------------------------->
<div class="modal fade" id="ModalEditarEmpresa" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalTitle">EDITAR</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="EditarEmpresaForm">
                  <div class="row">
                    <div class="col-md-12 ms-auto me-auto">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="card-header">
                                <div class="card-title" id="modalTitle">Actualizar Empresa</div>
                              </div>
                              <div class="card-body">
                                <div class="row">
                                  <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                      <label for="name">Nombre de la Empresa</label>
                                      <input type="text" class="form-control" name="nombre" id="nombreEmpresa"
                                        placeholder="Monte Alto XYZ" required value="" />
                                    </div>
                                    <div class="form-group">
                                      <label for="direccion">Dirección</label>
                                      <input type="text" class="form-control" name="direccion" id="direccionEmp"
                                        placeholder="5ta. Calle 6-7" required value="" />
                                    </div>
                                    <div class="form-group">
                                      <label for="logo">Logo de la Empresa</label>
                                      <input type="file" class="form-control-file" name="logo" id="logoEmp" />
                                    </div>
                                  </div>
                                  <div class="col-md-6 col-lg-6">
                                    <div class="form-group">
                                      <label for="tel1">Telefono No. 1</label>
                                      <input type="text" class="form-control" name="telefono1" id="telef1"
                                        placeholder="0000-0000" maxlength="8" required value=""/>
                                    </div>
                                    <div class="form-group">
                                      <label for="tel2">Telefono No. 2</label>
                                      <input type="text" class="form-control" name="telefono2" id="telef2"
                                        placeholder="0000-0000" maxlength="8" value=""/>
                                    </div>
                                  </div>
                                </div>
                                <input type="hidden" name="idLocalEmp" id="idLocalEmp" value="" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer card-action ms-auto me-auto">
                    <button type="submit" class="btn btn-success">Guardar Empresa</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- End Custom template -->
  </div>
  <!--   Core JS Files   -->
  
  <?php include_once "./navegacion/footer.php"?>
  <script src="scripts/agregar_empresa.js"></script> 
<script src="scripts/editarEmpresa.js"></script>
</body>

</html>
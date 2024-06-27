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
      ?>

      <!-- PARA AGREGAR USUARIOS AL Sistema -->
      <div class="container">
        <div class="page-inner">
          <div class="page-header">
            <h3 class="fw-bold mb-3">Usuarios del Sistema</h3>
          </div>


          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span class="btn-label"><i class="fa fa-plus"></i></span>
            Agregar Nuevo Usuario
          </button>

          <div class="modal" id="exampleModal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Agregar Usuario</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="tablas/insertarusuario.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12  ms-auto me-auto">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-10 col-lg-10  ms-auto me-auto">
                              <img src="assets/img/fotodeperfil/profile_default.jpg" class="rounded mx-auto d-block"
                                alt="...">
                              <div class="form-group">
                                <label for="namecompleto">Nombre</label>
                                <input type="text" class="form-control" id="namecompleto" name="namecompleto"
                                  placeholder="Ingrese nombre completo" required/>
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="user">Usuario</label>
                                    <input type="text" class="form-control" id="user" name="user"
                                      placeholder="Ingrese usuario" required />
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="text" class="form-control" id="password" name="password"
                                      placeholder="Ingrese contraseña" required />
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="local">Local</label>
                                <select class="form-select" id="local-select" name="local">
                                  <?php
                                  include_once 'tablas/traerlocales.php';
                                  ?>
                                </select>
                                <!-- Campo oculto para el id del local -->
                                <input type="hidden" id="idLocal" name="idLocal" value="">
                              </div>

                              <script src="scripts/selectlocal.js"></script>

                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="tipo_usuario">Tipo de Usuario</label>
                                    <select class="form-select" id="tipo_usuario" name="tipo_usuario">
                                      <option value="Administrador">Administrador</option>
                                      <option value="Usuario">Usuario</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="estatus">Estatus</label>
                                    <select class="form-select" id="estatus" name="estatus">
                                      <option value="Activo">ACTIVO</option>
                                      <option value="Inactivo">INACTIVO</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="foto_perfil">Seleccione una Foto</label>
                                <input type="file" class="form-control-file" id="foto_perfil" name="foto_perfil" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer card-action ms-auto me-auto">
                    <button type="submit" class="btn btn-success ">Agregar Usuario</button>
                  </div>
                </form>
                
              </div>
            </div>
          </div>

        </div>
        <!-- PARA AGREGAR USUARIOS AL Sistema -->

        <!-- TABLA PARA VER TODOS LOS USUARIOS -->
        <?php
        // Incluye el archivo 'header.php' solo una vez
        include_once 'tablas/tbusuarios.php';
        ?>
        <!-- TABLA PARA VER TODOS LOS USUARIOS -->


      </div>
    </div>


  </div>
  <?php include_once "./navegacion/footer.php"?>
</body>

</html>
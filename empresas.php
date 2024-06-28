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
      <div class="container">
        <div class="page-inner">
          <div class="page-header">
            <h3 class="fw-bold mb-3">Empresas</h3>
          </div>

          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span class="btn-label"><i class="fa fa-plus"></i></span>
            Agregar Nueva Empresa
          </button>

          <!-- Modal para agregar/editar empresa -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
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
<!-- ------------------------------------------------------------------------------------------ -->
<div class="modal fade" id="ModalEditarEmpresa" tabindex="-1" aria-labelledby="exampleModalLabel"
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

          <?php
          // Incluye el archivo 'header.php' solo una vez
          include_once 'tablas/traerempresas.php';
          ?>
        </div>
      </div>
    </div>

    <!-- End Custom template -->
  </div>
  <!--   Core JS Files   -->
  
  <?php include_once "./navegacion/footer.php"?>
  <script src="scripts/agregar_empresa.js"></script> 
  <script src="../sripts/editarEmpresa.js"></script>
</body>

</html>
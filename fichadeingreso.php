<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Empleados</title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
  <link rel="icon" href="assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

  <!-- Fonts and icons -->
  <script src="assets/js/plugin/webfont/webfont.min.js"></script>


  <!-- CSS Files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/plugins.min.css" />
  <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="assets/css/demo.css" />
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
            <h3 class="fw-bold mb-3">Ficha de Ingreso</h3>
          </div>
          <div class="modal" id="exampleModal" tabindex="-1">
            <div class="modal-dialog modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Agregar Empleado</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">

                      <div class="card-body">
                        <div class="row">
                          <div class="col-5 col-md-4">
                            <div class="nav flex-column nav-pills nav-secondary" id="v-pills-tab" role="tablist"
                              aria-orientation="vertical">
                              <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Datos
                                Personales</a>
                              <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile"
                                role="tab" aria-controls="v-pills-profile" aria-selected="false">Referencias</a>
                              <a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill"
                                href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                aria-selected="false">Ficha de Ingreso</a>
                            </div>
                          </div>
                          <div class="col-7 col-md-8">
                            <div class="tab-content" id="v-pills-tabContent">
                              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <!-- DATOS PERSONALES FORMULARIO -->
                                <div class="container">
                                  <div class="row">
                                    <div class="col-md-6 col-lg-6">

                                      <div class="form-group">
                                        <div class="input-icon">
                                          <span class="input-icon-addon"><i class="fa fa-user"></i></span>
                                          <input type="text" class="form-control" id="nombres"
                                            placeholder="Ingrese Nombres" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-icon">
                                          <span class="input-icon-addon"><i class="fa fa-user"></i></span>
                                          <input type="text" class="form-control" id="apellidos"
                                            placeholder="Ingrese Apellidos" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-icon">
                                          <span class="input-icon-addon"><i class="fas fa-address-card"></i></span>
                                          <input type="text" class="form-control" id="dpi"
                                            placeholder="Ingrese Numero de DPI" maxlength="12" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="nacimiento">Fecha de Nacimiento</label>
                                        <div class="input-icon">
                                          <span class="input-icon-addon"><i class="fas fa-calendar"></i></span>
                                          <input type="date" class="form-control" id="fechanacimiento"
                                            placeholder="Ingrese Fecha de Nacimiento" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-icon">
                                          <span class="input-icon-addon"><i class="fas fa-map-marker-alt"></i></span>
                                          <input type="text" class="form-control" id="lugarnacimiento"
                                            placeholder="Lugar de Nacimiento" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-icon">
                                          <span class="input-icon-addon"><i class="fas fa-phone"></i></span>
                                          <input type="text" class="form-control" id="telefono"
                                            placeholder="Ingrese Numero de Telefono" maxlength="8" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-icon">
                                          <span class="input-icon-addon"><i class="fas fa-tablet-alt"></i></span>
                                          <input type="text" class="form-control" id="celular"
                                            placeholder="Ingrese Numero de Celular" maxlength="8" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-icon">
                                          <span class="input-icon-addon"><i class="fas fa-window-maximize"></i></span>
                                          <input type="text" class="form-control" id="nit"
                                            placeholder="Ingrese Numero de NIT" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <select class="form-select form-control" id="estadocivil">
                                          <option>Estado Civil</option>
                                          <option>Soltero (a)</option>
                                          <option>Casado (a)</option>
                                          <option>Unido (a)</option>
                                          <option>Viudo (a)</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                      <div class="form-group">
                                        <select class="form-select form-control" id="genero">
                                          <option>Genero</option>
                                          <option>Masculino</option>
                                          <option>Femenino</option>
                                        </select>
                                      </div>
                                      <div class="form-group">
                                        <label>¿Tiene Hijos?</label><br />
                                        <div class="d-flex">
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                              id="flexRadioDefault1" />
                                            <label class="form-check-label" for="flexRadioDefault1">
                                              SI
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                              id="flexRadioDefault2" checked />
                                            <label class="form-check-label" for="flexRadioDefault2">
                                              NO
                                            </label>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <input type="text" class="form-control " id="cuantoshijos"
                                            placeholder="¿Cuantos Hijos Tiene?" disabled />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-icon">
                                          <span class="input-icon-addon"><i class="fas fa-address-book"></i></span>
                                          <input type="text" class="form-control" id="direccion"
                                            placeholder="Direccion" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-icon">
                                          <span class="input-icon-addon"><i class="fas fa-school"></i></span>
                                          <input type="text" class="form-control" id="referencia"
                                            placeholder="Referencias" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-icon">
                                          <span class="input-icon-addon"><i class="fas fa-clone"></i></span>
                                          <input type="text" class="form-control" id="municipio"
                                            placeholder="Municipio" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-icon">
                                          <span class="input-icon-addon"><i class="fas fa-globe-asia"></i></span>
                                          <input type="text" class="form-control" id="deparamento"
                                            placeholder="Departamento" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-icon">
                                          <span class="input-icon-addon"><i class="fas fa-user-tie"></i></span>
                                          <input type="text" class="form-control" id="profesion"
                                            placeholder="Profesion" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-icon">
                                          <span class="input-icon-addon"><i class="fas fa-university"></i></span>
                                          <input type="text" class="form-control" id="estudiosactuales"
                                            placeholder="Estudios Actuales" />
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <!-- REFERENCIAS PERSONALES FORMULARIO -->
                                <div class="container">
                                  <div class="row">
                                    <div class="col-md-6 col-lg-6">

                                      <div class="form-group">
                                        <div class="input-icon">
                                          <span class="input-icon-addon"><i class="fa fa-user"></i></span>
                                          <input type="text" class="form-control" id="nombres"
                                            placeholder="Ingrese Nombres" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-icon">
                                          <span class="input-icon-addon"><i class="fa fa-user"></i></span>
                                          <input type="text" class="form-control" id="apellidos"
                                            placeholder="Ingrese Apellidos" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-icon">
                                          <span class="input-icon-addon"><i class="fas fa-address-book"></i></span>
                                          <input type="text" class="form-control" id="direccion"
                                            placeholder="Direccion" />
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                      <div class="form-group">
                                        <div class="input-icon">
                                          <span class="input-icon-addon"><i class="fas fa-tablet-alt"></i></span>
                                          <input type="text" class="form-control" id="celular"
                                            placeholder="Ingrese Numero de Celular" maxlength="8" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-icon">
                                          <span class="input-icon-addon"><i class="fas fa-users"></i></span>
                                          <input type="text" class="form-control" id="parentezco"
                                            placeholder="Parentezco con el Empleado" />
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <button class="btn btn-black">
                                          <span class="btn-label">
                                            <i class="fa fa-archive"></i>
                                          </span>
                                          Agregar Referencia del Empleado
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="card">
                                  <div class="card-header">
                                    <div class="card-title">Referencias Personales</div>
                                  </div>
                                  <div class="card-body">
                                    <table class="table table-head-bg-success">
                                      <thead>
                                        <tr>
                                          <th scope="col">#</th>
                                          <th scope="col">Referencia</th>
                                          <th scope="col">Celular</th>
                                          <th scope="col">Direccion</th>
                                          <th scope="col">Parentezco</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                          <td>1</td>
                                          <td>Adler Abdiel Ramos Merida</td>
                                          <td>31627764</td>
                                          <td>Zona 7 Huehuetenango</td>
                                          <td>Hermano</td>
                                        </tr>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>


                              </div>
                              <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <!-- FICHA DE INGRESO -->

                                <div class="container">
                                  <div class="row">
                                    <div class="col-md-6 col-lg-6">

                                      <div class="form-group">
                                        <label for="nacimiento">Sueldo Base</label>
                                        <div class="input-group mb-3">
                                          <span class="input-group-text">Q.</span>
                                          <input type="number" class="form-control" id="sueldobase"
                                            aria-label="Amount (to the nearest dollar)" placeholder="3500.00" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="nacimiento">Bonificaciones</label>
                                        <div class="input-group mb-3">
                                          <span class="input-group-text">Q.</span>
                                          <input type="number" class="form-control" id="bonificaciones"
                                            aria-label="Amount (to the nearest dollar)" placeholder="500.00" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="nacimiento">Fecha de Contratacion</label>
                                        <div class="input-icon">
                                          <span class="input-icon-addon"><i class="fa fa-user"></i></span>
                                          <input type="date" class="form-control" id="fechacontratacion" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="user">Local</label>
                                        <div class="input-icon">
                                          <span class="input-icon-addon">
                                            <i class="fas fa-store"></i>
                                          </span>
                                          <input type="text" class="form-control" placeholder="Seleccione un local"
                                            id="local" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label>¿IGSS?</label><br />
                                        <div class="d-flex">
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                              id="flexRadioDefault3" />
                                            <label class="form-check-label" for="flexRadioDefault3">
                                              SI
                                            </label>
                                          </div>
                                          <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                              id="flexRadioDefault4" checked />
                                            <label class="form-check-label" for="flexRadioDefault4">
                                              NO
                                            </label>
                                          </div>
                                        </div>

                                        <div class="form-group">
                                          <input type="text" class="form-control " id="igss"
                                            placeholder="Numero de Afiliacion" disabled />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="nacimiento">Monto IGSS</label>
                                        <div class="input-group mb-3">
                                          <span class="input-group-text">Q.</span>
                                          <input type="number" class="form-control"
                                            aria-label="Amount (to the nearest dollar)" placeholder="155.00"
                                            id="montoigss" />
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <div class="input-icon">
                                          <span class="input-icon-addon"><i class="fas fa-clock"></i></span>
                                          <input type="text" class="form-control" id="turno" placeholder="Turno" />
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="input-icon">
                                          <span class="input-icon-addon"><i class="fas fa-hot-tub"></i></span>
                                          <input type="text" class="form-control" id="puesto" placeholder="Puesto" />
                                        </div>
                                      </div>
                                    </div>

                                    <div class="col-md-6 col-lg-6">
                                      
                                      <div class="form-group">
                                        <div class="input-icon">
                                          <span class="input-icon-addon"><i class="fas fa-users"></i></span>
                                          <input type="text" class="form-control" id="parentezco"
                                            placeholder="Parentezco con el Empleado" />
                                        </div>
                                      </div>

                                      <div class="form-group">
                                        <button class="btn btn-black">
                                          <span class="btn-label">
                                            <i class="fa fa-archive"></i>
                                          </span>
                                          Agregar Referencia del Empleado
                                        </button>
                                      </div>
                                    </div>
                                  </div>

                                </div>
                              </div>
                            </div>
                          </div>

                        </div>
                      </div>
                      <br>
                    </div>
                  </div>

                </div>

                <div class="modal-footer card-action ms-auto me-auto">
                  <button type="button" class="btn btn-success">Agregar Usuario</button>
                </div>
              </div>
            </div>
          </div>

          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span class="btn-label"><i class="fa fa-plus"></i></span>
            Agregar Nuevo Empleado
          </button>


        </div>
        <!-- PARA AGREGAR USUARIOS AL Sistema -->

        <style>
          .form-button-action .btn {
            margin-right: 5px;
          }


          .form-button-action .btn:last-child {
            margin-right: 0;
          }

          .small-text {
            font-size: 12px !important;
            text-align: center;
            /* Ajusta este valor según el tamaño que desees */
          }
        </style>

        <!-- TABLA PARA VER TODOS LOS USUARIOS -->
        <div class="page-inner">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h4 class="card-title">Todos los usuarios del sistema</h4>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nombre</th>
                          <th>DPI</th>
                          <th>Celular</th>
                          <th>Local</th>
                          <th>Puesto</th>
                          <th style="heidht: 10%">Acción</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>No.</th>
                          <th>Nombre</th>
                          <th>DPI</th>
                          <th>Celular</th>
                          <th>Local</th>
                          <th>Puesto</th>
                          <th>Acción</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr>
                          <th class="small-text">1</th>
                          <th class="small-text">Adler Abdiel Ramos Merida</th>
                          <th class="small-text">3343239081301</th>
                          <th class="small-text">31627764</th>
                          <th class="small-text">Admon Monte Alto</th>
                          <th class="small-text">Tecnico en Informatica</th>
                          <td>
                            <div class="form-button-action">
                              <button type="button" data-bs-toggle="tooltip" title=""
                                class="btn btn-link btn-secondary btn-sm" data-original-title="Edit Task">
                                <i class="fas fa-address-card"></i>
                              </button>
                              <button type="button" data-bs-toggle="tooltip" title=""
                                class="btn btn-link btn-primary btn-sm" data-original-title="Edit Task">
                                <i class="fa fa-edit"></i>
                              </button>
                              <button type="button" data-bs-toggle="tooltip" title=""
                                class="btn btn-link btn-secondary btn-sm" data-original-title="Edit Task">
                                <i class="fas fa-file-pdf"></i>
                              </button>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- TABLA PARA VER TODOS LOS USUARIOS -->


      </div>
    </div>


  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery-3.7.1.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <!-- jQuery Scrollbar -->
  <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
  <!-- Datatables -->
  <script src="assets/js/plugin/datatables/datatables.min.js"></script>
  <!-- Kaiadmin JS -->
  <script src="assets/js/kaiadmin.min.js"></script>
  <!-- Kaiadmin DEMO methods, don't include it in your project! -->
  <script src="assets/js/setting-demo2.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', (event) => {
      const siRadio = document.getElementById('flexRadioDefault1');
      const noRadio = document.getElementById('flexRadioDefault2');
      const cuantosHijosInput = document.getElementById('cuantoshijos');

      siRadio.addEventListener('change', function () {
        if (siRadio.checked) {
          cuantosHijosInput.disabled = false;
        }
      });

      noRadio.addEventListener('change', function () {
        if (noRadio.checked) {
          cuantosHijosInput.disabled = true;
          cuantosHijosInput.value = ''; // Opcional: Limpiar el campo cuando se desactiva
        }
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $("#basic-datatables").DataTable({});

      $("#multi-filter-select").DataTable({
        pageLength: 5,
        initComplete: function () {
          this.api()
            .columns()
            .every(function () {
              var column = this;
              var select = $(
                '<select class="form-select"><option value=""></option></select>'
              )
                .appendTo($(column.footer()).empty())
                .on("change", function () {
                  var val = $.fn.dataTable.util.escapeRegex($(this).val());
                  column
                    .search(val ? "^" + val + "$" : "", true, false)
                    .draw();
                });
              column
                .data()
                .unique()
                .sort()
                .each(function (d, j) {
                  select.append(
                    '<option value="' + d + '">' + d + "</option>"
                  );
                });
            });
        },
      });
      // Add Row
      $("#add-row").DataTable({
        pageLength: 5,
      });
      var action =
        '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';
      $("#addRowButton").click(function () {
        $("#add-row")
          .dataTable()
          .fnAddData([
            $("#addName").val(),
            $("#addPosition").val(),
            $("#addOffice").val(),
            action,
          ]);
        $("#addRowModal").modal("hide");
      });
    });
  </script>
  <script>
    WebFont.load({
      google: { families: ["Public Sans:300,400,500,600,700"] },
      custom: {
        families: [
          "Font Awesome 5 Solid",
          "Font Awesome 5 Regular",
          "Font Awesome 5 Brands",
          "simple-line-icons",
        ],
        urls: ["assets/css/fonts.min.css"],
      },
      active: function () {
        sessionStorage.fonts = true;
      },
    });
  </script>
</body>

</html>
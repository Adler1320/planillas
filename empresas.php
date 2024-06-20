<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Planillas
  </title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
  <link rel="icon" href="assets/img/nomina.ico" type="image/x-icon" />
  <!-- Fonts and icons -->
  <script src="assets/js/plugin/webfont/webfont.min.js"></script>
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
                <form id="empresaForm" action="tablas/insertarlocales.php" method="post" enctype="multipart/form-data">
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
                                        placeholder="0000-0000" maxlength="8" required />
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

          <script>
            function editEmpresa(id) {
              $.get('getLocalData.php', { id: id }, function (data) {
                var empresa = JSON.parse(data);
                if (empresa.error) {
                  alert(empresa.error);
                } else {
                  $('#modalTitle').text('Editar Empresa');
                  $('#name').val(empresa.nombrelocal);
                  $('#direccion').val(empresa.direccionlocal);
                  $('#tel1').val(empresa.telefono);
                  $('#tel2').val(empresa.telefono2);
                  $('#idLocal').val(empresa.idLocal);

                  // Eliminar el campo de archivo si no se desea cambiar el logo
                  $('#logo').prop('required', false);

                  // Mostrar el modal
                  $('#exampleModal').modal('show');
                }
              });
            }

            document.addEventListener('DOMContentLoaded', (event) => {
              const tel1Input = document.getElementById('tel1');
              const tel2Input = document.getElementById('tel2');

              function validateInput(event) {
                const value = event.target.value;
                event.target.value = value.replace(/[^0-9]/g, '').slice(0, 8);
              }

              tel1Input.addEventListener('input', validateInput);
              tel2Input.addEventListener('input', validateInput);
            });
          </script>



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
  <script src="assets/js/core/jquery-3.7.1.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>

  <!-- jQuery Scrollbar -->
  <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

  <!-- Chart JS -->
  <script src="assets/js/plugin/chart.js/chart.min.js"></script>

  <!-- jQuery Sparkline -->
  <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

  <!-- Chart Circle -->
  <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

  <!-- Datatables -->
  <script src="assets/js/plugin/datatables/datatables.min.js"></script>

  <!-- jQuery Vector Maps -->
  <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
  <script src="assets/js/plugin/jsvectormap/world.js"></script>

  <!-- Sweet Alert -->
  <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

  <!-- Kaiadmin JS -->
  <script src="assets/js/kaiadmin.min.js"></script>

  <!-- Kaiadmin DEMO methods, don't include it in your project! -->
  <script src="assets/js/setting-demo.js"></script>
  <script src="assets/js/demo.js"></script>
  <script>
    $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#177dff",
      fillColor: "rgba(23, 125, 255, 0.14)",
    });

    $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#f3545d",
      fillColor: "rgba(243, 84, 93, .14)",
    });

    $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
      type: "line",
      height: "70",
      width: "100%",
      lineWidth: "2",
      lineColor: "#ffa534",
      fillColor: "rgba(255, 165, 52, .14)",
    });
  </script>
  <script>
    function editEmpresa(id) {
      $.get('getLocalData.php', { id: id }, function (data) {
        var empresa = JSON.parse(data);
        if (empresa.error) {
          alert(empresa.error);
        } else {
          $('#modalTitle').text('Editar Empresa');
          $('#name').val(empresa.nombrelocal);
          $('#direccion').val(empresa.direccionlocal);
          $('#tel1').val(empresa.telefono);
          $('#tel2').val(empresa.telefono2);
          $('#idLocal').val(empresa.idLocal);

          // Eliminar el campo de archivo si no se desea cambiar el logo
          $('#logo').prop('required', false);

          // Mostrar el modal
          $('#exampleModal').modal('show');
        }
      });
    }

    document.addEventListener('DOMContentLoaded', (event) => {
      const tel1Input = document.getElementById('tel1');
      const tel2Input = document.getElementById('tel2');

      function validateInput(event) {
        const value = event.target.value;
        event.target.value = value.replace(/[^0-9]/g, '').slice(0, 8);
      }

      tel1Input.addEventListener('input', validateInput);
      tel2Input.addEventListener('input', validateInput);
    });
  </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Planillas</title>
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
      <!-- AQUI VA EL CONTENIDO -->


      <div class="container">
        <div class="page-inner">
          <div class="page-header">
            <h3 class="fw-bold mb-3">Mi Perfil</h3>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Detalles del Usuario</div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 col-lg-4">
                      <div class="form-group">
                        <label for="email2">Email Address</label>
                        <input type="email" class="form-control" id="email2" placeholder="Enter Email" />
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" />
                      </div>
                      <div class="form-group form-inline">
                        <label for="inlineinput" class="col-md-3 col-form-label">Inline Input</label>
                        <div class="col-md-9 p-0">
                          <input type="text" class="form-control input-full" id="inlineinput"
                            placeholder="Enter Input" />
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="disableinput">Disable Input</label>
                        <input type="text" class="form-control" id="disableinput" placeholder="Enter Input" disabled />
                      </div>
                      <div class="form-group">
                        <label>Gender</label><br />
                        <div class="d-flex">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                              id="flexRadioDefault1" />
                            <label class="form-check-label" for="flexRadioDefault1">
                              Male
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" />
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                        <label class="form-check-label" for="flexCheckDefault">
                          Agree with terms and conditions
                        </label>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                      <div class="form-group">
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">@</span>
                          <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                            aria-describedby="basic-addon1" />
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Recipient's username"
                            aria-label="Recipient's username" aria-describedby="basic-addon2" />
                          <span class="input-group-text" id="basic-addon2">@example.com</span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="basic-url">Your vanity URL</label>
                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                          <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" />
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group mb-3">
                          <span class="input-group-text">$</span>
                          <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" />
                          <span class="input-group-text">.00</span>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-text">With textarea</span>
                          <textarea class="form-control" aria-label="With textarea"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <button class="btn btn-black btn-border" type="button">
                            Button
                          </button>
                          <input type="text" class="form-control" placeholder="" aria-label=""
                            aria-describedby="basic-addon1" />
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <input type="text" class="form-control" aria-label="Text input with dropdown button" />
                          <div class="input-group-append">
                            <button class="btn btn-primary btn-border dropdown-toggle" type="button"
                              data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Dropdown
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                              <div role="separator" class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-icon">
                          <input type="text" class="form-control" placeholder="Search for..." />
                          <span class="input-icon-addon">
                            <i class="fa fa-search"></i>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-icon">
                          <span class="input-icon-addon">
                            <i class="fa fa-user"></i>
                          </span>
                          <input type="text" class="form-control" placeholder="Username" />
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-action">
                  <button class="btn btn-success">Submit</button>
                  <button class="btn btn-danger">Cancel</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <!-- AQUI TERMINA EL CONTENIDO -->
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
</body>

</html>
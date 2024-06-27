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
          <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div>
              <h3 class="fw-bold mb-3">Mi Perfil</h3>
            </div>
          </div>
          <!-- AQUI VA EL CONTENIDO -->


          <!-- AQUI TERMINA EL CONTENIDO -->
        </div>
      </div>
      <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <?php include_once "./navegacion/footer.php"?>
    
</body>
</html>
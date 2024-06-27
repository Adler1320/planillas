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
            <h3 class="fw-bold mb-3">Liquidaciones</h3>
          </div>


        </div>
        <!-- PARA AGREGAR USUARIOS AL Sistema -->
      </div>
    </div>


  </div>
  <!--   Core JS Files   -->
  <?php include_once "./navegacion/footer.php"?>
</body>

</html>
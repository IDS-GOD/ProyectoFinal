<!DOCTYPE html>
<html lang="es">
<head>
  <?php
    include_once($_SERVER["DOCUMENT_ROOT"]."/components/template/head.php");
  ?>
</head>
<body>
  <?php
    include_once($_SERVER["DOCUMENT_ROOT"]."/components/template/header.php");?>
    <nav class="nav">
            <a href="/index.php" class="home">Inicio</a>
            <a href="#" class="reportes">Reportes</a>
            <a href="#" class="crear-reportes">Generar Reporte</a>
            <a href="#" class="act-reportes" >Actualizar Reportes</a>
            <a href="/index.php" class="login">Iniciar Sesion</a>  
    </nav>
    <?php
        include_once($_SERVER["DOCUMENT_ROOT"]."/components/template/section.php");
    ?>
    <section class="section">
    <div class="breadcrums">
    <p>Denuncia Ciudadana / <a href="/index.php">Iniciar Sesion </a> / <span>Registrarse</span></p>
    </div>

  <?php include_once($_SERVER["DOCUMENT_ROOT"]."/components/singup.php");?>
  </section>
  <?php
    include_once($_SERVER["DOCUMENT_ROOT"]."/components/template/footer.php");
  ?>
</body>
</html>
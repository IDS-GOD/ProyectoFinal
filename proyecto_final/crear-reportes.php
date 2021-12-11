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
            <a href="/perfil.php" class="home">Inicio</a>
            <!-- falta crear el archivo donde se muestran los reportes de status aceptado y atendiendo -->
            <a href="#" class="reportes">Reportes</a>
            <a href="/" class="crear-reportes">Generar Reporte</a>
            <a href="#" class="act-reportes" >Actualizar Reportes</a>
            <!-- <a href="/inicio-no-login" class="login">Cerrar Sesion</a>   -->
    </nav>
    <?php
        include_once($_SERVER["DOCUMENT_ROOT"]."/components/template/section.php");
    ?>
    <section class="section">
    <div class="breadcrums">
        <p>Denuncia Ciudadana / <span>Generar Reporte</span></p>
    </div>

  <?php 
  include_once($_SERVER["DOCUMENT_ROOT"]."/components/mapForm.php");
  include_once($_SERVER["DOCUMENT_ROOT"]."/components/report.php");?>
  </section>
<?php
    include_once($_SERVER["DOCUMENT_ROOT"]."/components/template/footer.php");
?>
</body>
</html>
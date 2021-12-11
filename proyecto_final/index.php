<?php
  include_once($_SERVER["DOCUMENT_ROOT"]."/api/v1/controllers/User.php");
  $userController = new User(false);
  if($userController->isLoggedIn()) {
    header("Location: /perfil.php");
  }
?>
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
        <a href="/" class="home">Inicio</a>
        <a href="#" class="reportes">Reportes</a>
        <a href="#" class="crear-reportes">Generar Reporte</a>
        <a href="#" class="act-reportes" >Actualizar Reportes</a>
        <a href="/loginp.php" class="login">Iniciar Sesion</a>  
    </nav>
    <?php
        include_once($_SERVER["DOCUMENT_ROOT"]."/components/template/section.php");
    ?>
    <section class="section">
    <div class="breadcrums">
        <p>Denuncia Ciudadana / <span>Inicio</span></p>
    </div>
    <h2>Pasos a seguir para realizar un reporte</h2>
    <br>
    <div class="tutorial">
      <div class="pasos">
      
        <h4>Paso 1:</h4>
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-file-search" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
            <path d="M12 21h-5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v4.5" />
            <circle cx="16.5" cy="17.5" r="2.5" />
            <line x1="18.5" y1="19.5" x2="21" y2="22" />
          </svg>
        <p>
            Una vez con la sesion iniciada, selecciona la opcion de "Generar Reporte", la cual se encuentra en el menu de navegacion.
        </p>
        <br>
      </div>
      <div class="pasos">
          
        <h4>Paso 2:</h4>
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-flag-3" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <path d="M5 14h14l-4.5 -4.5l4.5 -4.5h-14v16" />
          </svg>
        <p>
            Una vez en la opcion de "Generar Reporte", lo siguiente es llenar el formulario de reportes, y seleccionando la ubicacion del problema a reportar en el mapa y subir una foto de prueba de forma opcional.
        </p>
        <br>
        </div>
      <div class="pasos">
          <h4>Paso 3:</h4>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-send" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
              <line x1="10" y1="14" x2="21" y2="3" />
              <path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" />
            </svg>
          <p>
            Una vez llenado el formulario, seleccionar el boton "Reportar", y una vez enviado el reporte, se le notificara al administrador del sistema para que actualice el reporte, conforme la importancia del reporte.
          </p>
          <br>
      </div>
    </div>
    </section>
    <?php
        include_once($_SERVER["DOCUMENT_ROOT"]."/components/template/footer.php"); 
    ?>
</body>
</html>
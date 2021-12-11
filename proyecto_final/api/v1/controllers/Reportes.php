<?php
include_once($_SERVER["DOCUMENT_ROOT"]."/api/v1/controllers/Controller.php");
class Report extends Controller{
    function __construct($jsonResponse = true) {
    parent::__construct($jsonResponse);
  }

  function registro(){
      //validar lo demas
    if(isset($_POST["titulo"]) && isset($_POST["descripcion"]))
    $iduser=$_POST["idusuario"];
    $titulo=$_POST["titulo"];
    $descripcion=$_POST["descripcion"];
    $latitud=$_POST["lat"];
    $longitud=$_POST["lng"];
    $user= $this->db->post("INSERT INTO Reporte(iduser,titulo,descripcion,lat,lng) VALUES('$iduser','$titulo','$descripcion','$latitud','$longitud')");
    
    if (count($user) > 0) {
      // Si es correct
      $response = [
              "message" => "Ha iniciado sesión con éxito.",
      ];
  }else{
    $this->code = 400;
      $response = [
        "message" => "No se solicitó correctamente el servicio",
      ];
  }
  return $response;
}

}
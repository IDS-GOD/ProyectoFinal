<?php
include_once($_SERVER["DOCUMENT_ROOT"]."/api/v1/controllers/Controller.php");
class User extends Controller{
  function __construct($jsonResponse = true) {
    parent::__construct($jsonResponse);
  }
  function isLoggedIn() {
    return isset($_SESSION["user"]);
  }
  function login() {
    $response = [];
    if($this->isLoggedIn()) {
      $this->code = 401;
      $response = [
        "message" => "Usted ya tiene una sesión activa"
      ];
    } else if (isset($_POST["email"]) && isset($_POST["password"])) {
      $email = $_POST["email"];
      $password=$_POST["password"];
      $user = $this->db->get("SELECT id, nombre,  primer_Ap, correo FROM Usuarios WHERE correo = '$email' AND password = '$password' LIMIT 1");
      if (count($user) > 0) {
        // Si es correcto
        $_SESSION["user"] = $user[0]->id;
        $response = [
          "data" => $user[0],
          "message" => "Ha iniciado sesión con éxito.",
        ];
      } else {
        // No es correcto
        $this->code = 401;
        $response = [
          "message" => "Correo electrónico y/o contraseña incorrecta.",
        ];
      }
    } else {
      $this->code = 400;
      $response = [
        "message" => "No se solicitó correctamente el servicio, faltan campos: [email, password].",
      ];
    }
    return $response;
  }
  function registro(){
    if(isset($_POST["email"]) && isset($_POST["password"]))
    $nombre=$_POST["nombre"];
    $apellido1=$_POST["apellido1"];
    $email= $_POST["email"];
    $password = $_POST["password"];
    $user= $this->db->post("INSERT INTO Usuarios(nombre,correo,primer_Ap,password) VALUES('$nombre','$email','$apellido1','$password')");
    
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

  function logout() {
    $response = [];
    try {
      session_destroy();
      $response = [
        "message" => "Se ha cerrado sesión con éxito."
      ];
    } catch (Exception $e) {
      $this->code = 500;
      $response = [
        "message" => "Ha ocurrido un error inesperado, por favor intentelo nuevamente y si el problema persiste contacte a servicio al cliente.",
        "details" => $e->getMessage()
      ];
    }
    return $response;
  }
}
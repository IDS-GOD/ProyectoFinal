<?php
  class DataBase {
    private $host = "localhost";
    private $user = "root";
    private $password = "Smuriel1123";
    private $database = "webdb";
    public $con;
    function __construct() {
      $this->con = new mysqli($this->host, $this->user, $this->password, $this->database);
    }
    function get($query) {
      $queryResult = $this->con->query($query);
      $result = [];
      while($row = $queryResult->fetch_object()) {
        $result[]=$row;
      }
      return $result;
    }
    function post($query) {
      echo $query;
      
      $exec = $this->con->query($query);
      $insertId = $this->con->insert_id;
      return ["success" => $exec, "id" => $insertId];
    }
  }
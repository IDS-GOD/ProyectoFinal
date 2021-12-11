<?php
include_once($_SERVER["DOCUMENT_ROOT"]."/api/v1/controllers/Reportes.php");
  $reporte = new Report();
  $response = $reporte->registro();
  $reporte->response($response);
<?php
include_once($_SERVER["DOCUMENT_ROOT"]."/api/v1/controllers/User.php");
  $user = new User();
  $response = $user->registro();
  $user->response($response);
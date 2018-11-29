<?php 

// error_reporting(0);
session_start();

if (!isset($_SESSION["type"])) {
  header('Location: ./');
  exit();
}else{
  include "candidate-profile.php";
}

?>
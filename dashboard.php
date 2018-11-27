<?php 

error_reporting(0);
session_start();

if (!isset($_SESSION["type"])) {
  header('Location: ./');
  exit();
}elseif($_SESSION["type"] == "company"){
  include "company-dashboard.php";
  
}else{
  include "candidate-dashboard.php";
}

?>
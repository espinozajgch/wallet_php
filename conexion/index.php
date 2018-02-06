<?php 
  if (!isset($_SESSION)) {
    session_start();
  }


  if(!isset($_SESSION['estado'])){
      header("Location: ../index.php");
  }
  else{
    header("Location: ../dashboard/");
  }


?>
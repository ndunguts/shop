<?php
session_start();
if(!isset($_SESSION['logged_admin']) ||  $_SESSION['logged_admin']!== true){
 
    header("location:../log1.php");
 
  
  exit;
}
?>
<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!== true){
 
    header("location:log1.php");
 
  
  exit;
}
?>
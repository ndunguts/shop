<?php
include 'checklogin.php';
if(isset($_POST['sub'])){
    $m=$_GET['m'];
    $code=$_POST['code'];
    if($m == $code){
        header("location:admin.php");
    }else{
        header("location:../log1.php");
    }

}
?>
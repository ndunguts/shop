<?php
session_start();
include 'checklogin.php';
$conn=new mysqli("localhost","root","","app");
if($conn){
    $name=$_POST["name"];
    $typr=$_POST["typroduct"];
    $pbuy=$_POST["buy"];
    $psell=$_POST["sell"];
    $id_user=$_SESSION['Id'];
    $qur=$_POST['quer'];
    $numbcod=$_POST['numbe'];
    if(isset($_POST["sub"])){
        if($qur == ""){
            $qur =1;
            $save=$conn->prepare("INSERT INTO product(nam,typroduct,buy,sell,ID_E,quar,numb) VALUES(?, ?, ?, ?, ?, ?, ?)");
            $save->bind_param("ssiiiii", $name,$typr,$pbuy,$psell,$id_user,$qur,$numbcod);

            $save->execute();
            header("location:add1.php").exit();
            $save->close();
            $conn->close();

        }else{
            $save=$conn->prepare("INSERT INTO product(nam,typroduct,buy,sell,ID_E,quar,numb) VALUES(?, ?, ?, ?, ?, ?, ?)");
            $save->bind_param("ssiiiii", $name,$typr,$pbuy,$psell,$id_user,$qur,$numbcod);

            $save->execute();
            header("location:add1.php").exit();
            $save->close();
            $conn->close();

        }
        
        
    }
    
}
?>
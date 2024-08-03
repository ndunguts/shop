<?php
include 'checklogin.php';
$conn=new mysqli("localhost","root","","app");
if($conn){
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $contact=$_POST["phone"];
    $email=$_POST["email"];
    $stutas=$_POST["status"];
    $pas=$_POST["password"];
    if(isset($_POST["sub"])){
        $save=$conn->prepare("INSERT INTO employee(fname,lname,contact,email,stat,pass) VALUES(?, ?, ?, ?, ?, ?)");
        $save->bind_param("ssisss", $fname,$lname,$contact,$email,$stutas,$pas);
        $save->execute();
        header("location:regist.php");
        $save->close();
        $conn->close();
        

    }
}
?>
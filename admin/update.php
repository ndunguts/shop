<?php
include 'checklogin.php';
$conn=new mysqli("localhost","root","","app");
if($conn){
    $name=$_POST['name'];
    $typ=$_POST['typr'];
    $buy=$_POST['buy'];
    $sell=$_POST['sell'];
    $quar=$_POST['quar'];
    $code=$_POST['code'];
    $Idp=$_GET['Id'];
    $namep=$_GET['namep'];
    $tname=$_GET['tname'];
    $buyp=$_GET['buyp'];
    $sellp=$_GET['sellp'];
    $Quar=$_GET['Quar'];
    $codep=$_GET['codep'];
    $time=$_GET['tim'];
    
    if(isset($_POST['sub'])){
        

        $save=$conn->prepare("INSERT INTO changeddd(idp,nam,typr,buy,sell,tim,quar,Codep) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
        $save->bind_param("issiisii", $Idp,$namep,$tname,$buyp,$sellp,$time,$Quar,$codep);
        $save->execute();
        $whochange="manager";
        $update = "UPDATE product 
       
           SET nam = '$name', 
               typroduct = '$typ', 
               buy = '$buy', 
               sell = '$sell', 
               tim_in='$time',
               quar = '$quar', 
               tim_u = CURRENT_TIMESTAMP, 
               who_change_product = '$whochange' 
            WHERE id = '$Idp'";
        $rest = $conn->query($update);

        
        if($rest){
            header("location:list_product.php");
        }

    }
}

?>
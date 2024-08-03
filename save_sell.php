<?php
session_start();
include 'checklogin.php';

$conn = new mysqli("localhost", "root", "", "app");

if ($conn) {
    $price = $_POST['price'];
    $quar = $_POST['quar'];
    $Sell = $_GET['sell'];
    $Buy = $_GET['buy'];
    $ID = $_GET['Id'];
    $name = $_GET['name'];
    $typr = $_GET['typr'];
    $Quar = $_GET['qwa'];
    $Numb = $_GET['numbe'];
    $id_user = $_SESSION['Id'];
    
    if (isset($_POST['sub1'])) {
        if (empty($quar)) {
            $quar = 1;
        }

        if (empty($price)) {
            $price = $Sell;
        }

        $new = $Quar - $quar;

        $save = $conn->prepare("INSERT INTO product_o (nam, typroduct, buy, sell, id_e, quar, numb, idp) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $save->bind_param("ssiiiiii", $name, $typr, $Buy, $price, $id_user, $quar, $Numb, $ID);
        $save->execute();

        $Upda1 = "UPDATE product SET quar = '$new' WHERE id = '$ID'";
        $rest1 = $conn->query($Upda1);

        if ($rest1) {
            header("Location: sell.php");
            exit();
        }

        $save->close();
    }
}
?>

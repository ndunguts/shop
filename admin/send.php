<?php
include 'checklogin.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';



$m= rand(1, 100000);
    
    

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = "ndungutsejean5@gmail.com";
$mail->Password = 'obrwyyqsozwkkyza';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('ndungutsejean5@gmail.com');
$mail->addAddress($_GET['email_a']);
$mail->isHTML(true);

$mail->Subject = "code";
$mail->Body = $m ;

$mail->send();




?>

<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript">
        window.history.forward();
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    
</head>
<body>
    <div class="wrapper">
    <div class="title">verfication form</div>
    <form action="verfic.php?m=<?php echo $m ?>" method="post">
        <div class="field">
            <input type="text" name="code">
            <label>verfication code from email</label>

        </div>
        
        <div class="field">
            <input type="submit" name="sub" value="verfication">
            

        </div>
    </form>
    </div>

    
</body>
</html>
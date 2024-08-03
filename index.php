<?php
session_start();
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
    <script ></script>
</head>
<body>
    <div class="wrapper">
    <div class="title">Login Form</div>
    <form action="send.php" method="post">
        <div class="field">
            <input type="text" name="email">
            <label>Email Address</label>

        </div>
        <div class="field">
            <input type="text" name="subject" >
            <label>Password</label>

        
        <div class="pass-link"><a href="">forgot password?</a></div>
        <div class="field">
            <input type="submit" name="send" value="Login">
            

        </div>
    </form>
    </div>
    
</body>
</html>
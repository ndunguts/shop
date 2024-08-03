<?php
session_start();
$conn = new mysqli("localhost", "root", "", "app");

if ($conn) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    if (isset($_POST['sub'])) {
        // Correcting the SQL query
        $query = "SELECT * FROM employee WHERE email='$email'";
        
        $result = $conn->query($query); // Storing the result of the query
        
        if ($result->num_rows > 0) { // Check if any rows were returned
            while ($row = mysqli_fetch_array($result)) {

                $_SESSION['id'] = $row['id'];
                $pas = $row['pass'];
                $_SESSION['email']=$row['email'];
                $_SESSION['PASS']=$row['pass'];
                
            }
            if ($_SESSION['PASS'] == $pass) {
                $_SESSION['loggedin']=true;
                header("location:profile.php").exit;
            } else {
                echo "Password incorrect user";
            }
        } else {
            $query_man = "SELECT * FROM manger WHERE email_man='$email'";
            $result1=$conn->query($query_man);
            if($result1->num_rows > 0){
                while($row1=mysqli_fetch_array($result1)){
                    $_SESSION['email_a']=$row1['email_man'];
                    $_SESSION['pass']=$row1['pass'];
                    $_SESSION['Id']=$row1['id'];
                }
                if($_SESSION['pass'] == $pass){
                    $_SESSION['logged_admin'] = true;
                    header("location:admin/send.php?email_a=$email").exit;

                }else{
                   echo "password incorrect manager";
                }
            
            }else{
                echo "not match email on user or manager";

            }
        }
    }
}
?>

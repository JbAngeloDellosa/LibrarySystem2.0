<?php
    include "connect.php";
    session_start();
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $myusername = mysqli_real_escape_string($conn,$_POST['Uname']);
        $mypassword = mysqli_real_escape_string($conn,$_POST['pass']); 
        
        $sql = "SELECT * FROM admin WHERE Username = '$myusername' AND Password = '$mypassword'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
          
        if($count == 1) {
           $_SESSION['login_user'] = $myusername;   
           header("location: LibrerySystem.php");

        }else {
            header ("Location: LibrerySystemLogin.php?message = Incorrect Username or Password");
            exit();
        }
     }
?>
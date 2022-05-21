<?php
   session_start();
   require('connection.php');

    if(isset($_POST['btn_login']))
    {
        $user = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
    
        $sql = "SELECT * FROM user_form WHERE BINARY username = '$user'  and BINARY password='$password'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
                
                   $_SESSION['user'] = $user;
                   $_SESSION['pass'] = $password;
                  
                   header("location: account.php");  
             } 
             else{
                    header("location: login.php?loginerror=".$user);
            }
    }
    else{
        header("location: login.php?loginerror=".$user);
}
            
   
?>
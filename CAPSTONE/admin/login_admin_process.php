<?php
   session_start();
   require('connection.php');

    if(isset($_POST['btn_login']))
    {
        $user = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
    
        $sql = "SELECT * FROM `admin_db` WHERE BINARY username = '$user'  and BINARY password='$password'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
                
                   $_SESSION['username'] = $user;
                   $_SESSION['password'] = $password;
                  
                   header("location: index.php");  
             } 
             else{
                    header("location: login_admin.php?loginerror=".$user);
            }
    }
    else{
        header("location: login_admin.php?loginerror=".$user);
}
            
   
?>
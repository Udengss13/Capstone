<?php   
    require_once('connection.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php 
                if(isset($_POST['signup'])){
                    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
                    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $passwordConfirm = $_POST['passwordConfirm'];

                    
                    //For FirstName
                    if(strlen($fname) < 3){
                        $error[]= 'Enter First Name atleat 3 Letters';
                    }
                    if(strlen($fname) > 20){
                        $error[]= 'First Name: Max Length 20 characters not allowed!';
                    }

                    //For Lastname
                    if(strlen($lname) < 3){
                        $error[]= 'Enter Last Name atleat 3 Letters';
                    }
                    if(strlen($lname) > 20){
                        $error[]= 'Last Name: Max Length 20 characters not allowed!';
                    }
                   
                    //For Username
                    if(strlen($username) < 3){
                        $error[]= 'Enter Username atleat 3 Letters';
                    }
                    if(strlen($username) > 20){
                        $error[]= 'Username: Max Length 20 characters not allowed!';
                    }

                    //For Email
                    if(strlen($email) > 50){
                        $error[]= 'Email: Max length 50 characters not allowed!';
                    }

                    //For Password
                    if($passwordConfirm == ' '){
                        $error[]= 'Please confirm the password!';
                    }
                    if($password != $passwordConfirm){
                        $error[]= 'Password does not match!';
                    }
                    if(strlen($password)<5){
                        $error[]= 'Password consist of 6 characters';
                    }
                    if(strlen($password)>20){
                        $error[]= 'Password: Max length 20 character not allowed!';
                    }
                    
                    if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  {
                        // echo "<script>alert('Incorrect verification code');</script>" ;
                        $error[]= 'Incorrect Captcha code!';
                    } 
                   

                   
                    $sql = "SELECT * FROM user_form WHERE (username='$username' or email='$email')";
                    $result = mysqli_query($conn, $sql);

                    if(mysqli_num_rows($result) > 0){
                        $row = mysqli_fetch_assoc($result);

                        if($username == $row['username']){
                            $error[] = 'Username already exist!';
                        }
                        if($email == $row['email']){
                            $error[] = 'Email already exist!';
                        }
                    }
                    if(!isset($error)){
                        $sql = "INSERT INTO user_form (fname, lname, username, email, password)
                        VALUES ('$fname','$lname','$username', '$email' ,'$password')";

                        $result = mysqli_query($conn, $sql);
                        if($result){
                            $done = 2;
                        }
                        else{
                            $error[]='Failed. Something went wrong!';
                        }
                    }
                }
                
            ?>
            <div class="col-sm-3">

            </div>
            <div class="col-sm-6">
                <div class="container shadow-lg p-3 mb-5 bg-body rounded my-2 ">
                    <?php
                            if(isset($error)){
                                foreach($error as $error){
                                    echo '<div class="alert alert-danger text-center" role="alert"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                                    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                  </svg>'.$error.'</div>';
                                }
                            }
                    ?>
                    <?php 
                        if(isset($done)){?>
                    <div class="alert alert-primary text-center" role="alert">You have registered Successfully!
                        <a href="login.php">Login</a>
                    </div>
                    <?php } else {?>

                    <h4 class="text-dark text-center my-2">Create your Account</h4>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3 my-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control rounded-pill" autocomplete="off" name="fname"
                                        required value=<?php if(isset($error)){ echo $fname;} ?>>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3 my-3">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control rounded-pill" autocomplete="off" name="lname"
                                        required value=<?php if(isset($error)){ echo $lname;} ?>>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control rounded-pill" autocomplete="off" name="username"
                                value=<?php if(isset($error)){ echo $username;} ?>>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control rounded-pill" autocomplete="off" name="email"
                                value=<?php if(isset($error)){ echo $email;} ?>>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control rounded-pill" name="password">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password" class="form-control rounded-pill" name="passwordConfirm">
                        </div>
                        <div class="form-group small clearfix">
                            <label class="checkbox-inline">CAPTCHA CODE</label>
                            <img src="captcha.php" alt="Captcha image">
                        </div>
                        <div class="form-group">
                            <input type="text" name="vercode" class="form-control"
                                placeholder="Enter here the Captcha Code" required="required">
                        </div>
                        
                </div>

                <button type="submit" name="signup" class="btn btn-primary mx-auto d-block w-50"
                    autocomplete="off">Submit</button>

                </form>

                <p class="text-dark text-center my-3">Already have an Account? <a href="login.php">Sign In</a></p>
            </div>
        </div>
        <?php }?>

    </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
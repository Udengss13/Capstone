<?php require_once "controllerUserData.php"; 
     require('php/connection.php');
     
    //GET USER ID IN REGISTRATION
    $user_id = $_SESSION['user_id'];

    if(!isset($user_id)){
      header('location: login-user.php');
    }
?>
<?php
  //This is for calling the informaiton of user in fields.
    $sqlInfo = mysqli_query($con, "SELECT * FROM usertable WHERE id = '$user_id'");
?>

<!--When Click ORDER NOW!-->
<?php 
  if(isset($_POST['submit_order'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $paymentmethod = $_POST['paymentmethod'];

    $cart_query = mysqli_query($con, "SELECT * FROM `cart` WHERE Cart_user_id = '$user_id'");
    $totalofprice=0;
    $price_total = 0;
  
    
    if(mysqli_num_rows($cart_query)>0){
        while($product_item = mysqli_fetch_assoc($cart_query)){
            
          $product_id = $product_item['product_id'];
          $product_name = $product_item['Cart_name'];
          $quantity= $product_item['Cart_quantity'];
          $price =$product_item['Cart_price'];
          $product_price = $product_item['Cart_price'] * $product_item['Cart_quantity'];  
          $price_total =  $totalofprice += $product_price;
        };
      };
  
    
    // $total_product = implode(', ',$product_name);
    $insertOrder = mysqli_query($con, "INSERT INTO  `order` (order_user_id, first_name,  last_name, contact, email, address, price, total_price, payment_method)
                                                     VALUES ('$user_id' , '$fname',  '$lname', '$contact', '$email', '$address', '$price','$price_total', '$paymentmethod')") or die('Query failed!'); // '$paymentmethod', '$product_name', '$quantity', '$price', '$price_total'

 



if($cart_query && $insertOrder){
    $order_id = $con->insert_id;
    
    $insertorderlist= mysqli_query($con, "INSERT INTO  `order_list` (order_id, product_id, qty) 
                                                            VALUES ('$order_id' , '$product_id',  '$quantity')") or die('Query failed!'); // '$paymentmethod', '$product_name', '$quantity', '$price', '$price_total'

if($insertorderlist){
  mysqli_query($con, "DELETE FROM `cart` WHERE Cart_user_id = '$user_id'");
  echo '<script>
  alert("Your reservation has been made!");
  window.location.href="product.php";
  </script>'; }
}

} 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <link rel="icon" href="asset/logopet.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                <img src="asset/logopet.png" alt="Logo" style="width:22%; height:8vh" />
                <span style="text-shadow: 2px 2px 2px  rgba(49, 44, 44, 0.767);" class="text-white"><b>PETCO. ANIMAL
                        CLINIC</b></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse me-3" id="navbarScroll">
            <ul class="navbar-nav me-auto my-0 my-lg-0 " style="--bs-scroll-height: 100px;">


                <div class="text-nowrap">
                    <li class="nav-item">

                        <a class="nav-link active text-white mt-2" aria-current="page" href="home.php">HOME</a>
                    </li>
                </div>
                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link text-white mt-2" href="product.php">SHOP</a>
                    </li>
                </div>

                <div class="text-nowrap">
                    <li class="nav-item">
                        <a href="userprofile.php" class="nav-link text-white"><img src=" asset/picon.png" alt="PETCO"
                                style="width: 40px;"></a>
                    </li>
                </div>

                <?php 
                    $select_rows = mysqli_query($con,"SELECT * FROM `cart` WHERE Cart_user_id = '$user_id'") or die ('query failed');
                    $row_count = mysqli_num_rows($select_rows);
                  ?>

                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="cart.php"><img src=" asset/cart.png" alt="PETCO"
                                style="width: 40px;"><span
                                class="badge badge-light mx-1 bg-light text-dark"><?php echo $row_count ?></span></a>

                    </li>
                </div>

                <div class="text-nowrap">
                    <li class="nav-item">
                        <a class="nav-link  text-white mt-2" href="logout-user.php"
                            onclick="return confirm('Are you sure do you want to logout?')">LOGOUT</a>
                    </li>
                </div>
            </ul>
        </div>
    </nav>


    <!--Call for Username -->
    <!-- <div class="container-fluid bg-light">
    <?php
      $select_user = mysqli_query($con, "SELECT * FROM `usertable` WHERE id = '$user_id'");
      if(mysqli_num_rows($select_user) > 0){
        $fetch_user = mysqli_fetch_assoc($select_user);
      }
    ?>
    <p class="text-capitalize text-center">Welcome
      <?php echo $fetch_user['first_name'] ." " .$fetch_user['last_name'] ?></p>
  </div> -->

    <div class="float-left col-2">
        <a href="cart.php" class=" btn w-100"><span class="text fw-bold" style="color:#034D73"><i
                    class="bi bi-arrow-left"> </i>Back</span></a>
    </div>

    <div class="container mt-4">
        <div class="container bg-light w-50 mb-4 rounded-4 border border-5">
            <table class="table table-bordered">

                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>

                    <?php while($rowInfo = mysqli_fetch_array($sqlInfo)){ ?>
                    <form action="" method="post">


                        <h5 class="color-blue">Order Summary
                            <hr>
                        </h5>
                        <p class="fs-5 mt-3 text-danger text-center">Check your Order first!</p>
                        <?php 
                        $select_cart = mysqli_query($con, "SELECT * FROM `cart` WHERE Cart_user_id = '$user_id' ");
                        $total = 0;
                        $grand_total= 0;

                            if(mysqli_num_rows($select_cart)>0):
                            while($fetch_cart = mysqli_fetch_assoc($select_cart)):
                            $total_price =$fetch_cart['Cart_price'] * $fetch_cart['Cart_quantity'] ;
                            $grand_total = $total += $total_price;
                        ?>
                        <tr>
                            <td><?php echo $fetch_cart['Cart_name'] ?></td>
                            <td><?php echo $fetch_cart['Cart_quantity'] ?></td>
                            <td>Php <?php echo number_format($fetch_cart['Cart_price'],2) ?></td>
                        </tr>


                        <?php endwhile; ?>
                        <tr>
                            <th colspan="2" class="text-right">TOTAL</th>
                            <th>Php <?php echo number_format($grand_total,2) ?></th>
                        </tr>

                        <?php endif; ?>

        </div>

        </tbody>
        <!-- <tfoot> -->

        <!-- </tfoot> -->
        </table>
    </div>
    <p><strong>Instruction: </strong>Check out your information and select a payment option to continue.</p>

    <div class="row">
        <div class="col-6 mb-2">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">First Name</span>
                <input type="text" class="form-control bg-light" name="fname" value="<?=  $rowInfo['first_name']?>"
                    readonly required>
            </div>
        </div>
        <div class="col-6 mb-2">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Last Name</span>
                <input type="text" class="form-control bg-light" name="lname" value="<?=  $rowInfo['last_name']?>"
                    readonly required>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6 mb-2">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Contact number</span>
                <input type="number" class="form-control bg-light" name="contact" value="<?=  $rowInfo['contact']?>"
                    readonly>
            </div>
        </div>
        <div class="col-6 mb-2">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Email</span>
                <input type="email" class="form-control bg-light" name="email" value="<?=  $rowInfo['email']?>" readonly
                    required>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-6 mb-2">
            <div class="input-group mb-3">
                <span class="input-group-text " id="basic-addon1">Payment Method</span>
                <select name="paymentmethod" class="form-select" required>
                    <option value="">Select your Payment Method</option>
                    <option value="For pick up">For Pick Up</option>

                </select>
            </div>
        </div>

        <div class="col-6 mb-2">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Address</span>
                <input type="text" class="form-control bg-light" name="address" value="<?= $rowInfo['address'];?>"
                    required readonly>
            </div>
        </div>

        <div class=" text-center">
            <button class="form-control btn btn-primary mb-5 w-50 " name="submit_order">PLACE ORDER</button>
        </div>

        </form>
        <?php }?>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
    </script>

</body>

</html>
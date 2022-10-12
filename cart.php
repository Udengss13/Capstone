<?php require_once "controllerUserData.php"; 
     require('php/connection.php');
     
    //GET USER ID IN REGISTRATION
    $user_id = $_SESSION['user_id'];

    if(!isset($user_id)){
      header('location: login-user.php');
    }

    //  To Update the Quantity
     if(isset($_POST['update_update_btn'])){
       $update_value = $_POST['update_quantity'];
       $update_id = $_POST['update_quantity_id'];

       $update_quantity_query = mysqli_query($con, "UPDATE `cart` SET  Cart_quantity = '$update_value'
       WHERE Cart_id = '$update_id'");

      if($update_quantity_query){
        header('location: cart.php');
      }
     }

     //To remove by ID
     if(isset($_GET['remove'])){
       $remove_id = $_GET['remove'];

      $querydelete = mysqli_query($con, "DELETE FROM `cart` WHERE Cart_id = '$remove_id'");
      if($querydelete){
        header('location: cart.php');
      }
     }

     //To Delete all ITems
     if(isset($_GET['delete_all'])){
     mysqli_query($con, "DELETE FROM `cart` WHERE Cart_user_id = '$user_id'");
     header('location: cart.php');




     }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cart</title>
    <link rel="icon" href="asset/logopet.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>

    <!--Navigation Bar-->
    <!--Navigation Bar-->
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



    <div class="container">
        <div class="row">
            <div class="text-center  mt-4">
                <h1 class="text-light">Your Cart</h1>
            </div>
            <!--Table-->
            <div class="table-responsive-sm table-responsive-md table-responsive-lg mt-3">
                <table class="table table-sm-responsive">
                    <thead class="thead text-light">
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
          $select_cart = mysqli_query($con, "SELECT * FROM `cart`WHERE Cart_user_id = '$user_id' ");
          $grand_total = 0;

          if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){    
        ?>
                        <tr class="text-white">
                            <!--Image-->
                            <td><img src="asset/menu/<?= $fetch_cart['Cart_image'];?>" height="53"
                                    style=" display:block; " alt="Images"></td>
                            <!--Name-->
                            <td class="align-middle"><?= $fetch_cart['Cart_name'];?></td>
                            <!--Price-->
                            <td class="align-middle">Php
                                <?php echo number_format($fetch_cart['Cart_price'],2);?>
                            </td>
                            <!--Input Number and Update Button-->
                            <td class="align-middle" class="">
                                <form action="" method="post">
                                <input type="hidden" name="update_quantity_id" min="1" max="10"
                                    value="<?php echo $fetch_cart['Cart_id'] ?>">
                                <input type="number" name="update_quantity" min="1" max="10"
                                    value="<?php echo $fetch_cart['Cart_quantity'] ?>" class="col-5 prc">
                                <input type="submit" value="Update" name="update_update_btn"
                                        class="btn btn-success">
                                        
                                </form>
                            </td>
                            <!--Quantity-->

                            <td class="align-middle">Php
                                <?php $sub_total = $fetch_cart['Cart_price'] * $fetch_cart['Cart_quantity'];
                                echo number_format($sub_total,2)?>
                            </td>
                            <!--Remove Button-->
                            <td class="align-middle"><a href="cart.php?remove=<?php echo $fetch_cart['Cart_id'] ?>"
                                    class="btn btn-danger bg-button"
                                    onclick="return confirm('Do you want to remove it from your Cart?')"><i
                                        class="bi bi-trash"></i><span class="text-light">Remove</span></a>
                            </td>

                        </tr>
                        <?php
                        $grand_total += $sub_total;
                        };
                    }else {
                        echo '<tr><td colspan="6" class="text-center fs-5 text-danger">No item added</td></tr>'; 
                    };
                    ?>
                        <tr>
                            <!--Button-->
                            <td colspan="3"><a href="product.php" class=" btn w-100"><span class="text fw-bold"
                                        style="color:#034D73"><i class="bi bi-arrow-left"> </i>Continue
                                        Shopping</span></a></td>
                            <!--Total-->
                            <td colspan="1" class="text-center fw-bold align-middle">Total Cart:</td>
                            <td class="fw-bold fs-6 align-middle">Php
                                <?php echo number_format($grand_total,2) ?></td>
                                <output id="result"></output>
                            <td><a href="cart.php?delete_all"
                                    class="btn btn-danger   <?php  echo ($grand_total > 1),'disabled'; ?>"
                                    onclick="return confirm('Do you want remove all your items from your cart?')">Delete
                                    All</a></td>
                        </tr>
                    </tbody>
                </table>
                <!--Proceed to Checkout BUtton-->
                <div class="text-center">
                    <a href="checkout.php?user_id=<?php echo $_SESSION['user_id'];?>"
                        class="btn btn-danger bg-button <?php  echo ($grand_total > 1),'disabled'; ?>">Proceed to
                        Checkout</a>
                </div>

            </div>

        </div>
        <!-- <script>
            $('.form-group').on('input', ',prc',function(){
                var totalSum =0;
                $('.form-group.prc').each(function(){
                    var inputVal = $(this).val();
                    if($.isNumeric(inputVal)){
                        totalSum += parseFloat(inputVal);
                    }
                });
                $('#result').text(totalSum);
            });

        </script> -->


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
</body>

</html>
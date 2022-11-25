<?php
 include 'config_pesanan.php';
 session_start();

 if(isset($_POST['add_product'])){

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_FILES['product_image']['name'];
    $address = $_POST['address'];
    $amount = $_POST['amount'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
    $product_image_folder = 'up_image/'.$product_image;

    if(empty($product_name) || empty($product_price) || empty($product_image) || empty($address) || empty($amount)){
        $message[] = 'please fill out all';
    }
    elseif($amount < 1 && $product_price < 1 ){
        $message[] = ' >< huh?';
    }
    else{
        $insert = "insert into pesanan (name,price,image,address,amount) values ('$product_name','$product_price','$product_image','$address','$amount')";
        $upload = mysqli_query($conn,$insert);
        if($upload){
            move_uploaded_file($product_image_tmp_name,$product_image_folder);
            header('location:hal_awal.php');
            $message[]='sucsess';
        }else{
            $message[] = 'could not add the product';
        }
    }

 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pesanan.css">
</head>
<body>
    <?php
     if(isset($message)){
        foreach($message as $message){
            echo '<span class="message">'.$message.'</span>';
        }
     }
    ?>
    <div class="container">
        <div class="admin-product-form-container">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
        <h2>ADD NEW PRODUCT</H2>
        <input type="text" placeholder="enter product name" name="product_name" class="box" value="">
        <input type="number" placeholder="enter product price" name="product_price" class="box">   
        <input type="file" accept="image/png, img/jpg , image/jpeg" name="product_image" class="box">
        <input type="text" placeholder="your addres" name="address" class="box">
        <input type="number" placeholder="amount" name="amount" class="box">
        <input type="submit" class="btn" name="add_product" value="add product">
        </div>
    </div>
</body>
</html>
<?php
 include 'config_pesanan.php';
$id =$_GET['edit'];
 if(isset($_POST['update_product'])){

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
    elseif($amount < 0 && $product_price < 0 ){
        $message[] = 'whats wrong with you';
    }
    else{
        $update = "update pesanan set name='$product_name',price='$product_price',image='$product_image',address='$address',amount='$amount'where id=$id";
        $upload = mysqli_query($conn,$update);
        header('location:keranjang.php');
        if($upload){
            move_uploaded_file($product_image_tmp_name,$product_image_folder);
        }
        else{
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
    <title>edit</title>
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
    <?php
$select = mysqli_query($conn,"SELECT * FROM pesanan where id =$id");
while($row = mysqli_fetch_assoc($select)){
        ?>
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
        <h2>update the PRODUCT</H2>
        <input type="text" placeholder="enter product name" name="product_name" value = "<?php echo $row['name'];?>"class="box">
        <input type="number" placeholder="enter product price" name="product_price"value = "<?php echo $row['price'];?>" class="box">
        <input type="file" accept="image/png, img/jpg , image/jpeg" name="product_image"  class="box">
        <input type="number" placeholder="amount" name="amount" value = "<?php echo $row['amount'];?>" class="box">
        <input type="text" placeholder="your address" name="address"value = "<?php echo $row['address'];?>" class="box">
        <input type="submit" name="update_product" value="edit" class="btn">
        <a href="keranjang.php"class="btn">go back</a>
        <?php }; ?>
        </div>
    </div>
    
</body>
</html>
<?php
include 'config_pesanan.php';
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn,"DELETE FROM pesanan where id =$id");
    header('location:keranjang.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="keranjang.css">
</head>
<body>
<?php 
        $select = mysqli_query($conn,"SELECT * FROM pesanan");
        ?>
        <div class="product-display">
            <table class="product-display-table">
                <thead>
                    <tr>
                        <th>product image</th>
                        <th>product name</th>
                        <th>product price</th>
                        <th>amount</th>
                        <th>address</th>
                        <th colspan="2">action</th>
                    </tr>
                </thead>
                <?php 
                while ($row = mysqli_fetch_assoc($select)){
                    ?>

                    <tr>
                        <td><img src = "up_image/<?php echo $row['image'];?>" height="100" alt=""></td>
                        <td><?php echo $row['name'];?></td>
                        <td>$<?php echo $row['price'];?></td>
                        <td><?php echo $row['amount'];?></td>
                        <td><?php echo $row['address'];?></td>
                        <td>
                            <a href="pesanan_update.php?edit=<?php echo $row['id'];?>" class="btn">edit</a>
                            <a href="keranjang.php?delete=<?php echo $row['id'];?>" class="btn"onclick="return confirm('you sure?')">delete</a>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    
</body>
</html>
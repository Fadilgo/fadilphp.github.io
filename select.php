<?php
include("config.php");

$query = "SELECT * FROM user_form";
$exec = mysqli_query($koneksi, $query);
if(mysqli_num_rows($exec) > 0){
    while($row = mysqli_fetch_assoc($exec)){
        echo "email adalah {$row['email']} </br>"
    }
}
?>
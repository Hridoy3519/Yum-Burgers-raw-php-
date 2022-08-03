<?php
    include 'config.php';

    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image'];

    $imageLocation = $image['tmp_name'];
    $imageName = $image['name'];
    $image_des = "images/".$imageName;

    move_uploaded_file($imageLocation, $image_des);

    if($conn){
        $update_query = "UPDATE `products` SET `product_name`='$name',`product_price`='$price',`image`='$image_des' WHERE id='$id'";

        if (!mysqli_query($conn, $update_query)) {
           echo "<script>alert('Error Uploading Files')</script>";
        }else{
            echo "<script>location.href = 'index.php'</script>";
        }
    }
?>
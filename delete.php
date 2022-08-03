<?php
    include 'config.php';
    $id = $_GET['id'];
    
    $delete_query = "DELETE FROM `products` WHERE id='$id'";
    if (!mysqli_query($conn, $delete_query)) {
        echo "<script>alert('Error Deleting Files')</script>";
    }else{
         echo "<script>location.href = 'index.php'</script>";
    }
?>
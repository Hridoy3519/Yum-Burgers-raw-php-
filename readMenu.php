<?php
    include 'config.php';
    $search_query = "SELECT * FROM `products`";
    $allData = mysqli_query($conn, $search_query);
    while($row = mysqli_fetch_array($allData)){
        echo "
        <div class='col'>
        <div class='card h-100 d-flex flex-column align-items-center border-0 shadow-lg'>
            <img src='$row[image]' class='card-img-top' alt='...'>
            <div class='card-body'>
                <h5 class='card-title'>$row[product_name]</h5>
                <p class='card-text'>Price: $row[product_price]</p>
            </div>
            <div class='w-100 d-flex justify-content-around mb-3 align-items-center'>
                <button class='btn burger-customized-btn-white'>
                    <a href='delete.php?id=$row[id]' style='text-decoration: none; color:#FF0303;''>Delete</a>
                </button>
                <button class='btn burger-customized-btn-white'>
                    <a href='update.php?id=$row[id]' style='text-decoration: none; color:#FF0303;''>Update</a>
                </button>
            </div>
        </div>
    </div>
        ";

        
    }
?>

<!-- <img src='images/Red-Cart.png' width='61' height='71' alt=''> -->

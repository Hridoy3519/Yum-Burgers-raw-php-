<?php

    include 'config.php';

    $r_name = $_POST['name'];
    $r_email = $_POST['email'];
    $r_mobile = $_POST['mobile'];
    $r_pass = $_POST['password'];
    $r_cpass = $_POST['cpassword'];

    if($conn){
        $insert_query = "INSERT INTO users (name, email, mobile, password) VALUES ('$r_name', '$r_email', '$r_mobile', '$r_pass')";

        if ($conn->query($insert_query) === TRUE) {
           // echo "New record created successfully";
           echo "<script>location.href = 'login.html'</script>";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

?>
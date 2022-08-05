<?php

    include 'config.php';


    $r_name = $_POST['name'];
    $r_email = $_POST['email'];
    $r_mobile = $_POST['mobile'];
    $r_pass = $_POST['password'];
    $r_cpass = $_POST['cpassword'];

    function checkValidation(){
        $validate = '/^[a-z]*[a-z 0-9]*[.-_]*$/i';
        if((preg_match($validate , $GLOBALS['r_name'])==true) && (preg_match($validate , $GLOBALS['r_email'])==true) && (preg_match($validate , $GLOBALS['r_mobile'])==true) && (preg_match($validate , $GLOBALS['r_pass'])==true))return true;
        return false;
    }

    $isValid = checkValidation();
    if($conn && $isValid){
        $insert_query = "INSERT INTO users (name, email, mobile, password) VALUES ('$r_name', '$r_email', '$r_mobile', '$r_pass')";

        if ($conn->query($insert_query) === TRUE) {
           // echo "New record created successfully";
           echo "<script>location.href = 'login.html'</script>";
        }else{
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }else{
        echo "<script>alert('You have used some unauthorized characters')</script>";
        echo "<script>location.href = 'register.html'</script>";
    }

?>
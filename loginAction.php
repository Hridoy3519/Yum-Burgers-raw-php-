<?php

    include 'config.php';

    $l_email = $_POST['email'];
    $l_pass = $_POST['password'];

    
    if($conn){
        //$insert_query = "INSERT INTO students_info (email, username, password) VALUES ('$r_email', '$r_username', '$r_pass')";

        $search_query = "SELECT * FROM users WHERE email='$l_email' AND password='$l_pass'";
        $result = mysqli_query($conn, $search_query);

        if ($result->num_rows > 0) {
            session_start();
            $_SESSION['username'] = $l_email;
            echo "<script>location.href = 'index.php'</script>";

          } else{
            echo "<script>alert('Password or Email do not match')</script>";
            echo "<script>location.href = 'login.html'</script>";
          }

    }

?>
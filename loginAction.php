<?php

    include 'config.php';

    $l_email = $_POST['email'];
    $l_pass = $_POST['password'];

  function checkValidation(){
      $validate = '/^[a-z]+[a-z0-9]*[.-_]*$/i';
      if((preg_match($validate , $GLOBALS['l_email'])==true) && (preg_match($validate , $GLOBALS['l_pass'])==true))return true;
      return false;
  }

    $isValid = checkValidation();
    // $isValid = false;
    if($conn && $isValid){
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

    }else{
      echo "<script>alert('You have used some unauthorized characters')</script>";
      echo "<script>location.href = 'login.html'</script>";
    }

?>
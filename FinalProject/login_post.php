<?php
include_once 'dbConfig.php';


session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = $connectionId;

// LOGIN USER
if (isset($_POST['btnSubmit'])) {
    $username = mysqli_real_escape_string($db, $_POST['inputEmail']);
    $password = mysqli_real_escape_string($db, $_POST['inputPass']);
  
    if (empty($username)) {
        array_push($errors, "E-mail is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE email='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['userLogged'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
    else{
        echo "Eita";
    }
  }
  
  ?>
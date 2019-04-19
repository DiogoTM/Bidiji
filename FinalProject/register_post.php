<?php
include_once 'dbConfig.php';

session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = $connectionId;

// REGISTER USER
if (isset($_POST['btnSubmit'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['userName']);
  $email = mysqli_real_escape_string($db, $_POST['userEmail']);
  $address = mysqli_real_escape_string($db, $_POST['userAddress']);
  $city = mysqli_real_escape_string($db, $_POST['userCity']);
  $state = mysqli_real_escape_string($db, $_POST['userState']);
  $phone = mysqli_real_escape_string($db, $_POST['userPhone']);
  $usertype = mysqli_real_escape_string($db, $_POST['userType']);
  $password_1 = mysqli_real_escape_string($db, $_POST['userPass']);
  $password_2 = mysqli_real_escape_string($db, $_POST['userPassRep']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($city)) { array_push($errors, "City is required"); }
  if (empty($state)) { array_push($errors, "State is required"); }
  if (empty($phone)) { array_push($errors, "Phone is required"); }
  if (empty($usertype)) { array_push($errors, "User type is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO user (name, address, city, state, phone, email, password) 
  			  VALUES('$username', '$address', '$city', '$state', '$phone' ,'$email', '$password')";
      mysqli_query($db, $query);

    switch($usertype)  
    {
        case "Administrator":
            $query = "INSERT INTO administrator DEFAULT VALUES";
            mysqli_query($db, $query);
        break;
        case "Employee":
            $query = "INSERT INTO employee DEFAULT VALUES";
            mysqli_query($db, $query);  
        break;
        case "Member":
            $query = "INSERT INTO member DEFAULT VALUES";
            mysqli_query($db, $query);
        break;          
    }  
    echo "Success";
    // $_SESSION['userLogged'] = $email;
    // $_SESSION['success'] = "You are now logged in";
    // header('location: index.php');   
}
}



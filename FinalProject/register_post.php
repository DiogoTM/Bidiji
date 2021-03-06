<?php
include_once 'dbConfig.php';
include_once 'class.user.php';
include_once 'class.administrator.php';
include_once 'class.employee.php';
include_once 'class.member.php';



session_start();

if (isset($_POST['btnSubmit'])) {
    
    
    $name = $_POST['userName'];
    $email = $_POST['userEmail'];
    $address = $_POST['userAddress'];
    $city = $_POST['userCity'];
    $state = $_POST['userState'];
    $phone = $_POST['userPhone'];
    $usertype = $_POST['userType'];
    $password_1 = $_POST['userPass'];
    $password_2 = $_POST['userPassRep'];

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($name)) {
        echo "Name is required";
        return;
    }
    if (empty($email)) {
        echo "Email is required";
        return;
    }
    if (empty($address)) {
        echo "Address is required";
        return;
    }
    if (empty($city)) {
        echo "City is required";
        return;
    }
    if (empty($state)) {
        echo "State is required";
        return;
    }
    if (empty($phone)) {
        echo "Phone is required";
        return;
    }
    if (empty($usertype)) {
        echo "User type is required";
        return;
    }
    if (empty($password_1)) {
        echo "Password is required";
        return;
    }
    if ($password_1 != $password_2) {
        echo "The two passwords do not match";
        return;
    }
    
    switch($usertype)
    {
    case "Administrator":
        $myUser = new Administrator($name, $address, $city, $state, $phone, $email, $password_1);
        $myUser->register($connectionId);
        $myUser->registerAdm($connectionId, $myUser);
        
    echo "Admin";
    break;
    case "Employee":
        $myUser = new Employee($name, $address, $city, $state, $phone, $email, $password_1);
        $myUser->register($connectionId);
        $myUser->registerEmp($connectionId, $myUser);
        
    echo "Emp";
    break;
    case "Member":
        $myUser = new Member($name, $address, $city, $state, $phone, $email, $password_1);
        $myUser->register($connectionId);
        $myUser->registerMember($connectionId, $myUser);
        
    echo "Memb";
    break;
    }
    $_SESSION['userLogged'] = $email;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');    
    
    
}

// // initializing variables
// $username = "";
// $email = "";
// $errors = array();

// // connect to the database
// $db = $connectionId;

// // REGISTER USER
// if (isset($_POST['btnSubmit'])) {
// // receive all input values from the form
// $username = mysqli_real_escape_string($db, $_POST['userName']);
// $email = mysqli_real_escape_string($db, $_POST['userEmail']);
// $address = mysqli_real_escape_string($db, $_POST['userAddress']);
// $city = mysqli_real_escape_string($db, $_POST['userCity']);
// $state = mysqli_real_escape_string($db, $_POST['userState']);
// $phone = mysqli_real_escape_string($db, $_POST['userPhone']);
// $usertype = mysqli_real_escape_string($db, $_POST['userType']);
// $password_1 = mysqli_real_escape_string($db, $_POST['userPass']);
// $password_2 = mysqli_real_escape_string($db, $_POST['userPassRep']);
// echo $usertype;

// // form validation: ensure that the form is correctly filled ...
// // by adding (array_push()) corresponding error unto $errors array
// if (empty($username)) { array_push($errors, "Name is required"); }
// if (empty($email)) { array_push($errors, "Email is required"); }
// if (empty($address)) { array_push($errors, "Address is required"); }
// if (empty($city)) { array_push($errors, "City is required"); }
// if (empty($state)) { array_push($errors, "State is required"); }
// if (empty($phone)) { array_push($errors, "Phone is required"); }
// if (empty($usertype)) { array_push($errors, "User type is required"); }
// if (empty($password_1)) { array_push($errors, "Password is required"); }
// if ($password_1 != $password_2) {
// array_push($errors, "The two passwords do not match");
// }

// // first check the database to make sure
// // a user does not already exist with the same username and/or email
// function checkId($email, $db)
// {
// $user_check_query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
// $result = mysqli_query($db, $user_check_query);
// $user = mysqli_fetch_assoc($result);
// return $user;
// }

// $user = checkId($email, $db);
// if ($user) { // if user exists
// if ($user['email'] === $email) {
// array_push($errors, "email already exists");
// }
// }

// // Finally, register user if there are no errors in the form
// if (count($errors) == 0) {
// $password = md5($password_1);//encrypt the password before saving in the database

// $query = "INSERT INTO user (name, address, city, state, phone, email, password)
// VALUES('$username', '$address', '$city', '$state', '$phone' ,'$email', '$password')";
// mysqli_query($db, $query);
// $type_query = "";
// $userId = checkId($email, $db)['userId'];
// echo $userId;
// switch($usertype)
// {
// case "Administrator":
// $type_query = "INSERT INTO administrator (userid) VALUES ('$userId')";
// echo "Admin";
// break;
// case "Employee":
// $type_query = "INSERT INTO employee (userid) VALUES ('$userId')";
// echo "Emp";
// break;
// case "Member":
// $type_query = "INSERT INTO member (userid) VALUES ('$userId')";
// echo "Memb";
// break;
// }
// mysqli_query($db, $type_query);

// echo "Success";
// $_SESSION['userLogged'] = $email;
// $_SESSION['success'] = "You are now logged in";
// header('location: index.php');
// }
// }

?>

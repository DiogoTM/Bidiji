<?php
include_once 'dbConfig.php';
include_once 'class.user.php';
include_once 'class.administrator.php';
include_once 'class.member.php';
include_once 'class.employee.php';

if ( isset( $_POST['submit'] ) ) {
    // $userId set automatically by class
    $name = $_REQUEST['name'];
    $address = $_REQUEST['address'];
    $city = $_REQUEST['city'];
    $state = $_REQUEST['state'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['pswd'];
    $type = $_REQUEST['type']; 
    
    switch ($type)
    {
        case "admin":
            $newUser = new Administrator($name, $address, $city, $state, $phone, $email, $password);
            break;
        case "emp":
            $newUser = new Employee($name, $address, $city, $state, $phone, $email, $password);
            break;
        case "member":
            $newUser = new Member($name, $address, $city, $state, $phone, $email, $password);
            break;               
    }
    
    try {
        $connection = new PDO("mysql:host=$hostname;dbname=$dbname",$username,$password,[]);
        echo "You are connected to $dbname database <br>";
        $isInserted = $newUser->create($connection);
        if ($isInserted) {
            echo "<br>User registered successfully!<br>";
        }
        else {
            $arrError = $connection->errorInfo();
            echo "<br>Error code: " . $arrError[0] . " </br>";
            echo "<br>Driver error code: " . $arrError[1] . " </br>";
            echo "<br>Error message: " . $arrError[2] . " </br>";
        }
    }
    catch (SQLException $exception) {
        echo "Error </br>";
    }
}

https://codewithawa.com/posts/complete-user-registration-system-using-php-and-mysql-database

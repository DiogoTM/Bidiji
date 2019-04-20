<?php
include_once 'dbConfig.php';
include_once 'class.user.php';

session_start();

if (isset($_POST['btnSubmit'])) {
    
    
    $email = $_POST['inputEmail'];
    $password = $_POST['inputPass'];


    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
  
    if (empty($email)) {
        echo "Email is required";
        return;
    }
    
    if (empty($password)) {
        echo "Password is required";
        return;
    }
    
    try
    {
        $password = md5($password);
        $stmt = $connectionId->prepare("SELECT * FROM user WHERE email=:email and password=:password LIMIT 1");
        $stmt->execute(array(':email'=>$email, ':password'=>$password));
        $found=$stmt->fetch(PDO::FETCH_ASSOC);
        
        if($stmt->rowCount() > 0)
        {
            $_SESSION['userLogged'] = $found['email'];
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');    
            return true;
        }
        echo "not nice job dude";
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
    
    
    
    
}


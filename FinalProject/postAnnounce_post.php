<?php
include_once 'dbConfig.php';
include_once 'class.ad.php';
include_once 'class.freeAd.php';
include_once 'class.paidad.php';

session_start();

if (isset($_POST['btnSubmitAdAnnounce'])) {
    
    
    echo "so far so good";
    $_SESSION['userLogged']= 1;    
    $name = $_POST['adTitle'];
    $subcategory = $_POST['adsubCategory'];
    $price = $_POST['adPrice'];
    $quantity = $_POST['adQuantity'];
    $desc = $_POST['adDescription'];
    $dateEnd = $_POST['datetimepicker5'];
    $maxPic = 1;
    $cost = 5;
    
    echo "so far so good";

    
    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($name)) {
        echo "Name/Title is required";
        return;
    }
    if (empty($subcategory)) {
        echo "Subcategory is required";
        return;
    }
    if (empty($price)) {
        echo "Price is required";
        return;
    }
    if (empty($quantity)) {
        echo "Quantity is required";
        return;
    }
    if (empty($desc)) {
        echo "Description is required";
        return;
    }
    if (empty($dateEnd)) {
        echo "Ending date is required";
        return;
    }
    $date = 7;
    echo $date ;
    
    
    
    switch(true)
    {
        case $date < 7:
            echo "ok";
            break;
        case $date >= 7 && $date <14:
            $maxPic = 5;
            $cost = 10;
            echo "ok";
            break;
        case $date >=14 && $date <= 30:
            $maxPic = 10;
            $cost = 15;
            echo "ok";
            break;
        default:
            echo"not ok...";
            break;
    }  
           
    $myAnnounce = new PaidAd($_SESSION['userLogged'],$subcategory,$dateEnd, $cost, $maxPic);
    echo "eh nois";
    $myAnnounce->register($connectionId, $_SESSION['userLogged']);
    
    echo "eh nois2". $myAnnounce->getAdId()." " .$myAnnounce->getImageQuantity() ." " .$myAnnounce->getTotalCost();

    $myAnnounce->registerPaidAd($connectionId, $myAnnounce);

    }

?>

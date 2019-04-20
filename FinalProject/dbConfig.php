<?php
$host="127.0.0.1";
$user='root';
$pass='';
$dbname='classifiedads';

try
{
    $connectionId = new PDO("mysql:host={$host};dbname={$dbname}",$user,$pass);
    $connectionId->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
     echo $e->getMessage();
}

?>
<?php 

include_once 'conn.php';

 

if(isset($_POST["sms"])){
    $email = $_POST["email"];
    $name = $_POST["name"];
    $phone = $_POST["Phone"];
    $msg = $_POST["msg"];



$sql="INSERT INTO users(Name,Email,Phone,Message) VALUES (?,?,?,?)";
$result = $mysqli->prepare($sql);
$result->bind_param("ssss",$name,$email,$phone,$msg);
$result->execute();


header('location:index.php');


}






?>
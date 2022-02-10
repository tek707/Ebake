<?php
 include_once 'conn.php';

 

if(isset($_POST["Subs"])){
$email = $_POST["email"];


$sql="  INSERT INTO subscribers( Email) VALUES (?) ";
$result = $mysqli->prepare($sql);
$result->bind_param("s",$email);
$result->execute();


header('location:index.php');





}


















?>
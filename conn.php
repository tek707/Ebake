<?php
session_start();


//connecting to database
$servername= 'localhost';
$username='root';
$password='';
$dbname = 'e-bake';

$mysqli = new mysqli($servername,$username,$password,$dbname)or die (mysqli_error($mysqli));




// login  code
if (isset($_POST['submit'] )){
  
  $Admin= $_POST['username'];
  $Password= $_POST['passwd'];
	$pa= "pas";
  $usern = "admin" ;
	if ($Admin ==$usern || $password == $pa){
    

    
    $_SESSION['Userid']= 1;

      header('location:Admin.php');

   

	}
	else{
    
    $_SESSION['message'] =  "Login Error. Please try again.";
    $_SESSION['msg_type']= "Alert";
    header('location:login.php');

  
     
    }
  
  	
  }

  
// newsletter




?>
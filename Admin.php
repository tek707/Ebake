<?php include_once 'conn.php' ?>

<?php 
if(!isset( $_SESSION['Userid'])  ||(trim ( $_SESSION['Userid']) == ''))
{
  header("location:index.php");
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

<link rel="stylesheet" href="Assets/CSS/basic.css?v=<?php echo time(); ?>">

    <link rel="stylesheet" href="Assets/CSS/admin.css?=<?php echo time(); ?>">

  
</head>
<body>
    <nav>
        <div class="nav-left">
          <h2>E-bakery</h2>
        </div>
        <div class="nav-right">
           
            <div class="nav-user-icon online">
                <img src="Assets/IMG/htu.jpg">
            </div>
            <a href="logout.php"> Logout </a>
        </div>
    </nav>

    <div class="container">
        <!------- left-sidebar -----------   --------->
        <div class="left-sidebar sidehead">
        <ul class="navbar-nav">
    
    <li class=" nav-item " ><a class="nav-link" href="#Home">Admin-Home</a></li>
      <li class=" nav-item "  ><a class="nav-link" href="Admin-subs.php">subscription</a></li>
     
       
    </ul>
        </div>
                <!------- main-content -----------   --------->

        <div class="main-content">
            
           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error voluptas totam veniam recusandae delectus saepe, ea quo quia omnis amet ipsum natus itaque neque praesentium! Ipsum voluptatem sapiente rem inventore.</p>
            </div>
   
      



          
      



</div>



    <script src="Assets\JS\script.js"></script>

   


</body>
</html>


<?php  include_once 'conn.php';?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!--General Stylesheet-->
    <link rel="stylesheet" type="text/css" href="Assets\CSS\bootstrap5.css">
    <link rel="stylesheet" type="text/css" href="Assets/CSS/login.css?v=<?php echo time(); ?>">
</head>

<body>
    <main id="wrapper" class="container">
      <div class="row">


        <form action="conn.php" method="POST" name="index_form">
            <div class="form_header division">
                <h2 >Sign In</h2>
            </div>
            <div class="form_body">

            <?php
if (isset($_SESSION['message'])):?>

<div class="alert alert-<?=$_SESSION['msg_type']?>">
<?php
echo $_SESSION['message'];
unset($_SESSION['message']);

 ?>

</div>
<?php endif ?>

                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="username" placeholder="Username">
                </div>

                  <div class="form-group">
                                    <label for="password">Password  </label>
                      <input type="password" class="form-control" name="passwd" placeholder="Password">
                  </div>
                  <div class="form-group">
                        <button type="submit" class="btn btn-danger" name="submit" value="login" id="login">Login</button>

                  </div>


            </div>
            <div class="form_footer">
                <p>Don't have an account? <span><a href="">Sign Up</a></span></p>
                <p><a href="">Forgot your password?</a></p>
            </div>
        </form>
          </div>
    </main>
</body>
</html>

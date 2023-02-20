<?php // include_once 'conn.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/JS/jquery.js">

    <link rel="stylesheet" href="Assets/CSS/bootstrap5.css">
    <link rel="stylesheet" href="Assets/CSS/basic.css?v=<?php echo time(); ?>">

    <title>E-bakery</title>
</head>

<nav class=" navone navbar navbar-expand-sm   ">
  <a  class="navbar-brand"href="index.html"> E-bakery   </a>
  <ul class="navbar-nav">
    
  <li class=" nav-item " ><a class="nav-link" href="#Home">Home</a></li>
    <li class=" nav-item "  ><a class="nav-link" href="#About">About</a></li>
    <li class=" nav-item "  ><a class="nav-link" href="#Products">Product</a></li>
    <li class=" nav-item "  ><a class="nav-link" href="#Instock">Instock</a></li>
    <li class=" nav-item "  ><a class="nav-link" href="#contact">Contact</a></li>
     
  </ul>


  

</nav>


<!--bar-->
<div id="menu-bar" >
    <div id="menu" onclick="onClickMenu()">
   
   
       <div id="bar1" class="bar"></div>
       <div id="bar2" class="bar"></div>
       <div id="bar3" class="bar"></div>
   
    </div>
   
   
    <ul class="nav-link nav" id="nav">
        <li class=" nav-item " ><a class="nav-link" href="#Home">Home</a></li>
    <li class=" nav-item "  ><a class="nav-link" href="#About">About</a></li>
    <li class=" nav-item "  ><a class="nav-link" href="#Products">Product</a></li>
    <li class=" nav-item "  ><a class="nav-link" href="#Instock">In stock</a></li>
    <li class=" nav-item "  ><a class="nav-link" href="#contact">Contact</a></li>
       </ul>
     
   
     </div>


<body>
    <br>
    <br>
    <div class="container">
        <div id="Home"></div>
        <section class="section padding-bottom-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                        <div class="left-heading">
                            <h2 class="section-title">Quality</h2>
                        </div>
                        <div class="left-text">
                            <p class="sub_topic  anim-typewriter">Products with breads <br> sweet Bake</p>
                            <p>At bake's Customer Satisfaction is our number one priority.Feel the taste!!!</p>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="Assets\IMG\br.jpg" class="dis_img" alt="App">
                    </div>
                </div>
            </div>
        </section>
    </div>
<br>
<br>
<br>

<div id="About">
<section class="section padding-bottom-100">
    <div class="container">
        <div class="row">
          
            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                <img src="Assets\IMG\straw.jpg" class="dis_img" alt="App">
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                <div class="left-heading">
                    <h2 class="section-title">About E-bakery</h2>
                    <hr>
                </div>
                <div class="left-text">
                    <p>this is a platform to exhibit the sweetest and mouth watering pastries in the whole world. It is a world class
                        online shop where quality products are advertised to cherished customers. As a loved cherised customer, you get the chance to explore all our products, Subscribe to our mail for more updates and also any vital information you want to share with us .
                        Through your subscription , you express interest in any of the products and we will be at your doorsteps.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
</div>




        <br>
        <br>
  

        <div id="Products">
<section class="section padding-bottom-100">
    <div class="container">
        <div class="row">
          
                    <h2 class="section-title">Our Products</h2>
                    <hr>
               <!-- gallary -->



 <div class=" col-sm-11  col-md-5 col-lg-3">
 <div class="image">
        <img class="image__img"src="Assets\IMG\all.jpg"
            alt="Bricks">
        <div class="image__overlay">
            <div class="image__title">Pie</div>
            <p class="image__description">
                All types of pie.
            </p>
        </div>
    </div>
</div>
<div class="col-sm-11 col-md-5 col-lg-3">
<div class="image">
        <img class="image__img"src="Assets\IMG\cake.jpg"
            alt="Bricks">
        <div class="image__overlay">
            <div class="image__title">Cake</div>
            <p class="image__description">
                All types of Cake.
            </p>
        </div>
    </div>
</div>
<div class="col-sm-11 col-md-5 col-lg-3">
<div class="image">
        <img class="image__img" src="Assets\IMG\mpie.jpg"
            alt="Bricks">
        <div class="image__overlay">
            <div class="image__title">Meat pie</div>
            <p class="image__description">
                All types of Meat pie.
            </p>
        </div>
    </div>

</div>
<div class=" col-sm-11  col-md-5 col-lg-3">
<div class="image">
        <img class="image__img" src="Assets\IMG/bread.jpg"
            alt="Bricks">
        <div class="image__overlay">
            <div class="image__title">Bread</div>
            <p class="image__description">
                All types of Bread.
            </p>
        </div>
    </div>
 
</div>

</div> 

        </div>
    </div>
</section>
</div>

<br>
<br>
<div id="Instock">
<section class="section padding-bottom-100">
    <div class="container">
        <div class="row">
          
                    <h2 class="section-title">E-bakerey Stock</h2>
                    <hr>
               <!-- stock -->

               
               <div id="wrap">
	<div id="columns" class="columns_4">
  <figure>
  <img src="Assets/IMG/cream-cakes.jpg" class="stock_pic" alt="stock">
	<figcaption>Cream cake</figcaption>
    <span class="price">GHS 15.00</span>
    <a class="button" href="Tel:+233 554 5680 90">Buy Now</a>
	</figure>
  <figure>
  <img src="Assets\IMG/cookie.jpg" class="stock_pic" alt="stock">
	<figcaption>Cookie</figcaption>
    <span class="price">GHS 20.00</span>
    <a class="button" href="Tel:+233 554 5680 90">Buy Now</a>

    
	</figure>
  
  <figure>
  <img src="Assets\IMG/donuts.jpg" class="stock_pic" alt="stock">
	<figcaption>Donuts</figcaption>
    <span class="price">GHS 10.00</span>
    <a class="button" href="Tel:+233 554 5680 90">Buy Now</a>
	</figure>
	
  </div>
               </div>
            

        </div>
    </div>
</section>
</div>

<br>
<br>

<div id="contact">
    <section class="section padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 class="section-title">Contact us</h2>
                    </div>
                    <div class="left-text">
                        <form id="contact" action="contact_us.php" method="Post">
                            <div class="row">
                              <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                  
                                  <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required>
                                </fieldset>
                              </div>
                            <br>
                            <br>
                              <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                 
                                  <input name="email" type="email" class="form-control" id="email" placeholder="E-Mail Address" required>
                                </fieldset>
                              </div>
                              <br>
                              <br>
                              <div class="col-lg-12">
                                <fieldset>
                                 
                                  <input name="Phone" type="tel" class="form-control" id="phone" placeholder="Phone number" required>
                                </fieldset>
                              </div>
                              <br>
                              <br>
                              <div class="col-lg-12">
                                <fieldset>
                                  <textarea name="msg" rows="6" class="form-control" id="message" placeholder="Your Message" required></textarea>
                                </fieldset>
                              </div>
                             
                              <div class="col-lg-12">
                                <fieldset>
                                    
                                    <br>
                                  <button type="submit" id="form-submit" name="sms" class="btn btn-danger">Send Message</button>
                                </fieldset>
                              </div>
                            </div>
                          </form>                 
                           </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <br>
                          

                            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="Assets\IMG/foot.jpg" class="foot_img" alt="App">
                    </div>



</div>
                    
                    </div>
            </div>
        </div>
    </section>
    </div>
    <br>
    <br>
      


    <footer class="footer" id="footer">

<span class="col">
  <h3 class="col-title">Info</h3>
  <nav class="col-list">
    <ul>
     
      <li><a href="#columns">Pricing</a></li>
      <li><a href="#">FAQ</a></li>
      <li><a href="#">Status</a></li>
    </ul>
  </nav>
</span>

<span class="col">
  <h3 class="col-title">Products</h3>
  <nav class="col-list">
    <ul>
      <li><a href="#Products">Bread</a></li>
      <li><a href="#Products">Pie</a></li>
      <li><a href="#Products">Cake</a></li>
    </ul>
  </nav>
</span>

<span class="col">
  <h3 class="col-title">Company</h3>
  <nav class="col-list">
    <ul>
      <li><a href="#About">About Us</a></li>
      <li><a href="#">Terms of Service</a></li>
      <li><a href="#">Privacy</a></li>
    </ul>
  </nav>
</span>

<span class="col">
  <div class="subscribe-form-holder">
    <h3 class="form-title">Subscribe to our email newsletter</h3>
    <form action="newsletter.php" method="POST"  class="subscribe-form">
      <input type="email" name="email" id="email" class="email subscribe-input" autocomplete="off" placeholder="Your email" required>
      <button type="submit" class="subscribe-btn" name="Subs">Subscribe</button>
    </form>
  </div>
 
      <p>Created by TITIATI ELORM KWAKU      &copy;2022</p>

   
</span>
</footer>
  
    <script src="Assets\JS\script.js"></script>
   
</body>
</html>
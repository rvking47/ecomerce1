<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"

      
    />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Icon -->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"
    />
    <!-- icon -->
    

    <!-- Google fonts End -->

    <!-- custon style Sheet & JavaScript -->
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/shop.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/blog.css">
    
    <script src="js/home.js" defer></script>
    <script src="js/shop.js" defer></script>
    
    <!-- custon style Sheet & JavaScript -->
    <title>Ecommerce Website</title>
    <style>
      .hu{
        width: 1rem;
    position:  absolute;
    background-color: hsl(var(--clr-red));
    height: 1.2rem;
    margin-top: -3rem;
    margin-left: 1rem;
    border-radius: 0.3rem;
    display: grid;
    color:hsl(var(--clr-white));
    font-size: 1rem;
    font-weight: 700;
      }

      </style>
  </head>
  <body class="home">
    <header class="primary-header container flex">
      <div class="header-inner-one flex">
        <div class="logo">
          <img src="image/logo.png" alt="">
        </div>
        <button class="mobile-close-btn" data-visible="false" aria-controls="primary-navigation">
          <i class="uil uil-times-circle"></i></button>
        <nav>
          <ul id="primary-navigation" data-visible="false" class="primary-navigation flex">
            <li><a class="fs-100 fs-montserrat bold-500" href="index.php">Home</a></li>
            <li><a class="fs-100 fs-montserrat bold-500" href="shop.php">Shop</a></li>
            <li><a class="fs-100 fs-montserrat bold-500" href="about.php">About Us</a></li>
            <li><a class="active fs-100 fs-montserrat bold-500" href="blog.php">Blog</a></li>
            <li><a class="fs-100 fs-montserrat bold-500" href="contactus.php">Contact Us</a></li>
          </ul>
        </nav>
      </div>
      <div class="header-login flex">
        <p class="fs-100 fs-montserrat bold-500">login</p>
          <?php
    $count=0;
     if(isset($_SESSION['cart']))
     {
        $count=count($_SESSION['cart']);
     }
    ?>
          <a style="color: black;" href="cart.php"><i id="count" aria-controls="cart-icon"  class="uil uil-shopping-bag"></i><?php echo
          "<div class='hu'>". $count."</div>"; ?></a>
      </div>
      <div class="mobile-open-btn">
        <i class="uil uil-align-right"></i>
      </div>
    </header>
     
    <section class="shop-feature bg-gray grid">
      <div>
      <p class="fs-montserrat text-black">Home <span aria-haspopup="true" class="margin"></span>Blog</p>
     </div>
    <h2 class="fs-poppins fs-300 bold-700">Blog</h2>
    </section>
   

     <section class="recent-news blog grid">
      <div data-aos="fade-right" data-aos-duration="3000" class="news grid">
        <img src="image/news-1.png" alt="">
        <div class="fs-montserrat fs-100 padding-inline flex">
          <p>October 5, 2020</p>
          <p>by shoppingstore3</p>
        </div>
        <h2 class="fs-poppins padding-inline fs-200 bold-600">How to choose perfect gadegets</h2>
        <p class="fs-montserrat padding-inline fs-100">When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper s ---</p>
      </div>

      <div data-aos="fade-right" data-aos-duration="3000" class="news grid">
        <img src="image/news-2.png" alt="">
        <div class="fs-montserrat fs-100 padding-inline flex">
          <p>January 12, 2021</p>
          <p>by shoppingstore3</p>
        </div>
        <h2 class="fs-poppins padding-inline fs-200 bold-600">Cognitive marketing is fueled by</h2>
        <p class="fs-montserrat padding-inline fs-100">But many organizations lack a strategy for a content technology stack. Developing one should be a jwbqau to ---</p>
      </div>

      <div data-aos="fade-right" data-aos-duration="3000" class="news grid">
        <img src="image/news-3.png" alt="">
        <div class="fs-montserrat fs-100 padding-inline flex">
          <p>March 8, 2023</p>
          <p>by shoppingstore3</p>
        </div>
        <h2 class="fs-poppins padding-inline fs-200 bold-600">Marketing automation reaches new</h2>
        <p class="fs-montserrat padding-inline fs-100">“I have no doubt technology will be able to do much more for content in the future, says Colleen Jones, ---</p>
      </div>

      <div data-aos="fade-left" data-aos-duration="3000" class="news grid">
        <img src="image/l1.jpg" alt="">
        <div class="fs-montserrat fs-100 padding-inline flex">
          <p>April 11, 2024</p>
          <p>by shoppingstore3</p>
        </div>
        <h2 class="fs-poppins padding-inline fs-200 bold-600">Content intelligence and artificia</h2>
        <p class="fs-montserrat padding-inline fs-100">There’s more content technology available today than ever before, and its role inside compan maturedee. ---</p>
      </div>

      <div data-aos="fade-left" data-aos-duration="3000"  class="news grid">
        <img src="image/l2.jpg" alt="">
        <div class="fs-montserrat fs-100 padding-inline flex">
          <p>June 18, 2018</p>
          <p>by shoppingstore3</p>
        </div>
        <h2 class="fs-poppins padding-inline fs-200 bold-600">Technology helps companies scale</h2>
        <p class="fs-montserrat padding-inline fs-100">Closely considering the purpose of the technology, what it’s going to do as part of your stack, toder ---</p>
      </div>

      <div data-aos="fade-left" data-aos-duration="3000"  class="news grid">
        <img src="image/l3.jpg" alt="">
        <div class="fs-montserrat fs-100 padding-inline flex">
          <p>May 10, 2022</p>
          <p>by shoppingstore3</p>
        </div>
        <h2 class="fs-poppins padding-inline fs-200 bold-600">Technology measures data and facili</h2>
        <p class="fs-montserrat padding-inline fs-100">Cognitive marketing is much easier to do now due to the technology at your fingertips, with advances in artificial ---</p>
      </div>
     </section>


  
    <section  class="brands grid">
      <div data-aos="fade-right" data-aos-duration="3000">
        <img  src="image/br-1.png" alt="">
      </div>
      <div data-aos="fade-right" data-aos-duration="3000">
        <img src="image/br-2.png" alt="">
      </div>
      <div data-aos="fade-right" data-aos-duration="3000">
        <img src="image/br-3.png" alt="">
      </div>
      <div data-aos="fade-right" data-aos-duration="3000">
        <img src="image/br-4.png" alt="">
      </div>
      <div data-aos="fade-right" data-aos-duration="3000">
        <img src="image/br-5.png" alt="">
      </div>
     </section>

     <section class="footer grid">
      <div class="footer-logo grid">
        <img src="image/logo.png" alt="">
        <p class="fs-montserrat fs-100">There are many variations passages of Lorem Ipsum available, but the majority have</p>
        <div class="social-media flex">
          <a style="color:black;" href="https://www.facebook.com/rahul.kanojiya.33865854"><i class="uil uil-facebook-f"></i></a>
          <a style="color:black;"  href="https://www.instagram.com/_rahul.v47/"><i class="uil uil-instagram"></i></a>
          <i class="uil uil-twitter"></i>
          <a style="color:black;"  href="https://www.linkedin.com/in/rahul09198/" ><i class="uil uil-linkedin"></i></a>
        </div>
      </div>
        <div class="footer-menu grid">
          <h3 class="fs-poppins fs-200 bold-800">Quick Links</h3>
          <ul>
          <li><a class="fs-montserrat text-black fs-100" href="index.php">Home</a></li>
          <li><a class="fs-montserrat text-black fs-100" href="about.html">About</a></li>
          <li><a class="fs-montserrat text-black fs-100" href="shop.php">Shop</a></li>
          <li><a class="fs-montserrat text-black fs-100" href="contactus.php">Contact </a></li>
        </ul>
        </div>
        <div class="contact grid">
          <h3 class="fs-poppins fs-200 bold-800">Contact</h3>
          <p class="fs-montserrat">(+91) 9140621365 Patricia C. Amedee 4401 Waldeck Street Grapevice Nashville, Tx 76051</p>
        </div>
        <div class="emails grid">
          <h3 class="fs-poppins fs-200 bold-800">Subscrib To Our Email</h3>
          <p class="updates fs-poppins fs-300 bold-800">For Latest News & Updates</p>
        
          <form method="post" action="send.php">
        <div class="inputField flex bg-gray">
           <input type="email" placeholder="Enter Your Email" name="em" class="fs-montserrat bg-gray">
           <button type="submit" name="submit" class="bg-red text-white fs-poppins fs-50">Submit</button>
        </div>
        </form>
        </div>
     </section>

     <section class="copyRight">
      <p class="c-font fs-montserrat fs-100">@ 2022 PHLOX. All right reserved</p>
      <p class="fs-montserrat fs-100 text-align p-top">Privacy Policy . Ierm Condition</p>
     </section>
    
</body>
</html>



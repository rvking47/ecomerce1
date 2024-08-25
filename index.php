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
    <script src="js/home.js" defer></script>
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
            <li><a class="active fs-100 fs-montserrat bold-500" href="index.php">Home</a></li>
            <li><a class="fs-100 fs-montserrat bold-500" href="shop.php">Shop</a></li>
            <li><a class="fs-100 fs-montserrat bold-500" href="about.php">About Us</a></li>
            <li><a class="fs-100 fs-montserrat bold-500" href="blog.php">Blog</a></li>
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
          </div>
      </div>
      <div class="mobile-open-btn">
        <i class="uil uil-align-right"></i>
      </div>
    </header>
      <main class="hero-section">
        <div>
        <h1 class="fs-200 fs-poppins">Beats Solo <span class="big-wireless block lineheight fs-300 bold-900 fs-poppins">Wireless</span><span class="text-white uppercase lineheight2  bold-bolder fs-poppins fs-900">HeadPhone</span></h1>
        <img data-aos="fade-left" data-aos-duration="3000" src="image/image1.png" alt="">
        </div>
        <div class="hero-inner flex">
          <div>
            <a href="shop.php"><button class="large-btn bg-red text-white fs-poppins fs-50">Shop By Category</button></a>
          </div>
          <div class="hero-info">
            <h4 class="fs-montserrat">Description</h4>
            <p class="fs-montserrat">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias numquam, a ut eos suscipit commodi Alias numquam .</p>
          </div>
        </div>
      </main>
       <section class="product-section">
        <div data-aos="fade-right" data-aos-duration="3000" class="category bg-black grid">
          <div>
          <h3 class="text-white fs-50 fs-montserrat">Enjoy <span class="block fs-300 fs-poppins">With</span> <span class="earphone uppercase fs-400 fs-montserrat bold-900 lineheight">Earphone</span></h3>
          <a href="shop.php"><button class="product-btn large-btn text-red bg-white fs-montserrat">Shop</button></a>
          </div>
        <div  class="product-img1">
          <img src="image/h.png" alt="">
        </div>
        </div>
        <div data-aos="fade-right" data-aos-duration="3000" class="category bg-yellow grid">
          <div>
          <h3 class="text-white fs-50 fs-montserrat">Enjoy <span class="block fs-300 fs-poppins">With</span> <span class="earphone uppercase fs-400 fs-montserrat bold-900 lineheight">Watch</span></h3>
         <a href="shop.php"><button class="product-btn large-btn text-yellow bg-white fs-montserrat">Shop</button></a>
          </div>
        <div class="product-img2">
          <img src="image/w.png" alt="">
        </div>
        </div>
        <div data-aos="fade-right" data-aos-duration="3000" class="category bg-gray grid">
          <div>
          <h3 class="text-black fs-50 fs-montserrat">Enjoy <span class="block fs-300 fs-poppins">With</span> <span class="earphone uppercase fs-400 fs-montserrat bold-900 lineheight">Playstation</span></h3>
          <a href="shop.php"><button class="product-btn large-btn text-gray bg-white fs-montserrat">Shop</button></a>
          </div>
        <div class="product-img3">
          <img src="image/gam.png" alt="">
        </div>
        </div>
        <div data-aos="fade-left" data-aos-duration="3000" class="category bg-red grid">
          <div>
          <h3 class="text-white fs-50 fs-montserrat">Enjoy <span class="block fs-300 fs-poppins">With</span> <span class="earphone uppercase fs-400 fs-montserrat bold-900 lineheight">Leptop</span></h3>
          <a href="shop.php"><button class="product-btn large-btn text-red bg-white fs-montserrat">Shop</button></a>
          </div>
        <div class="product-img4">
          <img src="image/Laptop.png" alt="">
        </div>
        </div>
        <div data-aos="fade-left" data-aos-duration="3000" class="category bg-green grid">
          <div>
          <h3 class="text-white fs-50 fs-montserrat">Enjoy <span class="block fs-300 fs-poppins">With</span> <span class="earphone uppercase fs-400 fs-montserrat bold-900 lineheight">Vision</span></h3>
          <a href="shop.php"><button class="product-btn large-btn text-green bg-white fs-montserrat">Shop</button></a>
          </div>
        <div class="product-img5">
          <img src="image/man2.png" alt="">
        </div>
        </div>
        <div data-aos="fade-left" data-aos-duration="3000" class="category bg-blue grid">
          <div>
          <h3 class="text-white fs-50 fs-montserrat">Enjoy <span class="block fs-300 fs-poppins">With</span> <span class="earphone uppercase fs-400 fs-montserrat bold-900 lineheight">Speaker</span></h3>
          <a href="shop.php"><button class="product-btn large-btn text-blue bg-white fs-montserrat">Shop</button></a>
          </div>
        <div class="product-img6">
          <img src="image/mus.png" alt="">
        </div>
        </div>
       </section>


       <section class="service-section">
        <div data-aos="fade-right" data-aos-duration="3000" class="service">
          <img src="image/free.svg" alt="">
          <div class="service-info">
            <h3 class="fs-poppins fs-200">Free Shipping</h3>
            <p class="fs-montserrat fs-50">Free Shipping On All Order</p>
          </div>
        </div>
        <div data-aos="fade-left" data-aos-duration="3000" class="service">
          <img src="image/sett.svg" alt="">
          <div class="service-info">
            <h3 class="fs-poppins fs-200">Money Guarantee</h3>
            <p class="fs-montserrat fs-50">30 Day Money Back</p>
          </div>
        </div>
        <div data-aos="fade-left" data-aos-duration="3000" class="service">
          <img src="image/supt.svg" alt="">
          <div class="service-info">
            <h3 class="fs-poppins fs-200">Online Support 24/7</h3>
            <p class="fs-montserrat fs-50">Technical Support 247</p>
          </div>
        </div>
        <div data-aos="fade-left" data-aos-duration="3000" class="service">
          <img src="image/pay.svg" alt="">
          <div class="service-info">
            <h3 class="fs-poppins fs-200">Secure Payment</h3>
            <p class="fs-montserrat fs-50">All Cards Accepted</p>
          </div>
        </div>
       </section>

       <section class="feature-section bg-red">
        <div class="feature-one grid">
          <img data-aos="fade-right" data-aos-duration="3000" src="image/p-1.png" alt="">
          <p class="text-white uppercase">20% OFF</p>
          <p class="fs-700 bold-900 fs-poppins uppercase lineheight font-size text-white">fine <span class="smile">Smile</span></p>
          <p class="text-white fs-poppins fs-50">15 Nov To & Dec</p>
        </div>
        <div class="feature-info">
          <h2 class="fs-200 text-white fs-poppins bold-500">JBL Tune 520</h2>
          <p class="fs-poppins fs-300 bold-800 text-white">Summer Sale</p>
          <p class="fs-montserrat text-white fs-50">Company that's grown from 270 to 480 employees in the last 12 months.</p>
          <a href="shop.php"><button class="product-btn large-btn text-red bg-white fs-poppins">Shop</button></a>
        </div>
       </section>
        
       <section data-aos="fade-right" data-aos-duration="3000" class="best-product container">
        <h2 class="letter-spacing bold-bolder fs-300 fs-poppins">Best Seller Products</h2>
        <p class="fs-montserrat fs-100">speakerThere are many variations passages</p>
       </section>

       <section class="best-Seller">
       
        <div data-aos="fade-left" data-aos-duration="3000" class="product grid">
        
           <img src="image/p-2.jpg" alt="">
           <form action="manage_cart.php" method="post">
           <p class="fs-poppins bold-500">Noise Colorfit Icon</p>
           <p class="fs-poppins bold-500">₹1100</p>
           <div class="product-details grid bg-red">
            <button style="border:red;" name="Add_To_Cart" class="uil text-white uil-shopping-cart-alt bg-red"></button>
            <i class="uil text-white uil-heart-alt"></i>
            <input type="hidden" name="item_name" value="Noise Colorfit Icon">
              <input type="hidden" name="price" value="1100">
           </div>
           </form>
        </div>
       

        <div class="product grid">
          <img data-aos="fade-left" data-aos-duration="3000" src="image/p-3.jpg" alt="">
          <form action="manage_cart.php" method="post">
          <p class="fs-poppins bold-500">Fire-Boltt Rise BT</p>
          <p class="fs-poppins bold-500">₹1300</p>
          <div class="product-details grid bg-red">
          <button style="border:red;" name="Add_To_Cart" class="uil text-white uil-shopping-cart-alt bg-red"></button>
           <i class="uil text-white uil-heart-alt"></i>
           <input type="hidden" name="item_name" value="Fire-Boltt Rise BT">
           <input type="hidden" name="price" value="1300">
          </div>
          </form>
       </div>

       <div class="product grid">
        <img data-aos="fade-left" data-aos-duration="3000" src="image/p-4.jpg" alt="">
        <form action="manage_cart.php" method="post">
        <p class="fs-poppins bold-500">Gentle e kart SH-12</p>
        <p class="fs-poppins bold-500">₹600</p>
        <div class="product-details grid bg-red">
        <button style="border:red;" name="Add_To_Cart" class="uil text-white uil-shopping-cart-alt bg-red"></button>
         <i class="uil text-white uil-heart-alt"></i>
         <input type="hidden" name="item_name" value="Gentle e kart SH-12">
           <input type="hidden" name="price" value="600">
        </div>
        </form>
     </div>
         
     <div class="product grid">
      <img data-aos="fade-left" data-aos-duration="3000" src="image/p-5.jpg" alt="">
      <form action="manage_cart.php" method="post">
      <p class="fs-poppins bold-500">ZEBRONICS Zeb</p>
      <p class="fs-poppins bold-500">₹700</p>
      <div class="product-details grid bg-red">
      <button style="border:red;" name="Add_To_Cart" class="uil text-white uil-shopping-cart-alt bg-red"></button>
       <i class="uil text-white uil-heart-alt"></i>
       <input type="hidden" name="item_name" value="ZEBRONICS Zeb">
           <input type="hidden" name="price" value="700">
      </div>
      </form>
   </div>

   <div class="product grid">
    <img data-aos="fade-right" data-aos-duration="3000" src="image/p-2.jpg" alt="">
    <form action="manage_cart.php" method="post">
    <p class="fs-poppins bold-500">boAt Rockerz</p>
    <p class="fs-poppins bold-500">₹760</p>
    <div class="product-details grid bg-red">
    <button style="border:red;" name="Add_To_Cart" class="uil text-white uil-shopping-cart-alt bg-red"></button>
     <i class="uil text-white uil-heart-alt"></i>
     <input type="hidden" name="item_name" value="boAt Rockerz">
     <input type="hidden" name="price" value="760">
    </div>
    </form>
</div>

  <div class="product grid">
  <img data-aos="fade-right" data-aos-duration="3000"  src="image/p-7.jpg" alt="">
  <form action="manage_cart.php" method="post">
  <p class="fs-poppins bold-500">SpinBot Ranger HX300</p>
  <p class="fs-poppins bold-500">₹999</p>
  <div class="product-details grid bg-red">
  <button style="border:red;" name="Add_To_Cart" class="uil text-white uil-shopping-cart-alt bg-red"></button>
   <i class="uil text-white uil-heart-alt"></i>
   <input type="hidden" name="item_name" value="SpinBot Ranger HX300">
   <input type="hidden" name="price" value="999">
  </div>
  </form>
</div>
     
<div class="product grid">
  <img data-aos="fade-right" data-aos-duration="3000"  src="image/p8.png" alt="">
  <form action="manage_cart.php" method="post">
  <p class="fs-poppins bold-500">SONY WH-1000XM4</p>
  <p class="fs-poppins bold-500">₹5000</p>
  <div class="product-details grid bg-red">
  <button style="border:red;" name="Add_To_Cart" class="uil text-white uil-shopping-cart-alt bg-red"></button>
   <i class="uil text-white uil-heart-alt"></i>
   <input type="hidden" name="item_name" value="SONY WH-1000XM4">
   <input type="hidden" name="price" value="5000">
  </div>
  </form>
</div>

<div class="product grid">
  <img data-aos="fade-right" data-aos-duration="3000"  src="image/p-2.jpg" alt="">
  <form action="manage_cart.php" method="post">
  <p class="fs-poppins bold-500">Noise Crew 1.38</p>
  <p class="fs-poppins bold-500">₹2000</p>
  <div class="product-details grid bg-red">
  <button style="border:red;" name="Add_To_Cart" class="uil text-white uil-shopping-cart-alt bg-red"></button>
   <i class="uil text-white uil-heart-alt"></i>
   <input type="hidden" name="item_name" value="Noise Crew 1.38">
   <input type="hidden" name="price" value="2000">
  </div>
  </form>
</div>

   </section>
       <section class="feature-section bg-green">
        <div class="feature-green feature-one grid">
          <img data-aos="fade-left" data-aos-duration="3000"  src="image/p12.png" alt="">
          <p class="text-white uppercase">20% OFF</p>
          <p class="fs-700 bold-900 fs-poppins uppercase lineheight font-size text-white">fine <span class="smile">Smile</span></p>
          <p class="text-white fs-poppins fs-50">15 Nov To & Dec</p>
        </div>
        <div class="feature-info">
          <h2 class="fs-200 text-white fs-poppins bold-500">Apple Watch 9</h2>
          <p class="fs-poppins fs-300 bold-800 text-white">Summer Sale</p>
          <p class="fs-montserrat text-white fs-50">Company that's grown from 270 to 480 employees in the last 12 months.</p>
          <a href="shop.php"><button class="product-btn large-btn text-green bg-white fs-poppins">Shop</button></a>
        </div>
       </section>
        
       <section data-aos="fade-right" data-aos-duration="3000"  class="best-product container">
        <h2 class="letter-spacing bold-bolder fs-300 fs-poppins">Recent News</h2>
        <p class="fs-montserrat fs-100">There are many variations passages</p>
       </section>

       <section class="recent-news grid">
        <div data-aos="fade-left" data-aos-duration="3000"  class="news grid">
          <img src="image/news-1.png" alt="">
          <div class="fs-montserrat fs-100 padding-inline flex">
            <p>October 5, 2020</p>
            <p>by shoppingstore3</p>
          </div>
          <h2 class="fs-poppins padding-inline fs-200 bold-600">How to choose perfect gadegets</h2>
          <p class="fs-montserrat padding-inline fs-100">When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper s ---</p>
        </div>

        <div data-aos="fade-left" data-aos-duration="3000"   class="news grid">
          <img src="image/news-2.png" alt="">
          <div class="fs-montserrat fs-100 padding-inline flex">
            <p>January 12, 2021</p>
            <p>by shoppingstore3</p>
          </div>
          <h2 class="fs-poppins padding-inline fs-200 bold-600">Cognitive marketing is fueled by</h2>
          <p class="fs-montserrat padding-inline fs-100">But many organizations lack a strategy for a content technology stack. Developing one should be a jwbqau to ---</p>
        </div>

        <div data-aos="fade-left" data-aos-duration="3000"   class="news grid">
          <img src="image/news-3.png" alt="">
          <div class="fs-montserrat fs-100 padding-inline flex">
            <p>March 8, 2023</p>
            <p>by ecommercestore3</p>
          </div>
          <h2 class="fs-poppins padding-inline fs-200 bold-600">How to choose perfect gadegets</h2>
          <p class="fs-montserrat padding-inline fs-100">When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper s ---</p>
        </div>
       </section>

       <section class="brands grid">
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
            <li><a class="fs-montserrat text-black fs-100" href="about.php">About</a></li>
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

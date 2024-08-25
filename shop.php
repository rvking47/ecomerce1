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
            <li><a class="active fs-100 fs-montserrat bold-500" href="shop.php">Shop</a></li>
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
      <div class="mobile-open-btn">
        <i class="uil uil-align-right"></i>
      </div>
    </header>

     <section class="shop-feature bg-gray grid">
      <div>
      <p class="fs-montserrat text-black">Home <span aria-haspopup="true" class="margin"></span>Product</p>
     </div>
    <h2 class="fs-poppins fs-300 bold-700">Products</h2>
    </section>
    
     <main class="shop-main-container grid">
      <div>
      

        <section class="shop-product grid">
          <div data-aos="fade-right" data-aos-duration="3000" class="product-list grid">
          <form action="manage_cart.php" method="post">
            <img src="image/p-3.jpg" alt="">
            <p class="fs-montserrat bold-600">boAt Rockerz 450 Headphones</p>
            <div class="shop-btn flex">
              <button name="Add_To_Cart" class="bg-red text-white fs-montserrat">Add To Cart</button>
              <input type="hidden" name="item_name" value="boAt Rockerz 450">
              <input type="hidden" name="price" value="1000">
              <p class="fs-montserrat bold-700">₹1,000</p>
            </div>
            <div class="pup-up">
              <p class="fs-poppins">Sell</p>
            </div>
            </form>
          </div>
          
          

          <div data-aos="fade-right" data-aos-duration="3000" class="product-list grid">
          <form action="manage_cart.php" method="post">
            <img src="image/p-4.jpg" alt="">
            <p class="fs-montserrat bold-600">SONY WH-CH520 Headphones</p>
            <div class="shop-btn flex">
              <button name="Add_To_Cart"  class="bg-red text-white fs-montserrat">Add To Cart</button>
              <input type="hidden" name="item_name" value="SONY WH-CH520">
              <input type="hidden" name="price" value="1250">
              <p class="fs-montserrat bold-700">₹1,250</p>
            </div>

            <div class="pup-up">
              <p class="fs-poppins">Sell</p>
            </div>
            </form>
          </div>

          <div data-aos="fade-right" data-aos-duration="3000" class="product-list grid">
          <form action="manage_cart.php" method="post">
            <img src="image/p-5.jpg" alt="">
            <p class="fs-montserrat bold-600">boAt BassHeads 900 Headphones</p>
            <div class="shop-btn flex">
              <button name="Add_To_Cart" class="bg-red text-white fs-montserrat">Add To Cart</button>
              <input type="hidden" name="item_name" value="boAt BassHeads 900">
              <input type="hidden" name="price" value="1100">
              <p class="fs-montserrat bold-700">₹1,100</p>
            </div>

            <div class="pup-up">
              <p class="fs-poppins">Sell</p>
            </div>
           </form>
          </div>

          <div data-aos="fade-right" data-aos-duration="3000" class="product-list grid">
          <form action="manage_cart.php" method="post">
            <img src="image/p9.jpg" alt="">
            <p class="fs-montserrat bold-600">boAt Rockerz 425 Headphones</p>
            <div class="shop-btn flex">
              <button name="Add_To_Cart" class="bg-red text-white fs-montserrat">Add To Cart</button>
              <input type="hidden" name="item_name" value="boAt Rockerz 425">
              <input type="hidden" name="price" value="800">
              <p class="fs-montserrat bold-700">₹800</p>
            </div>

            <div class="pup-up">
              <p class="fs-poppins">Sell</p>
            </div>
           </form>
          </div>

          <div data-aos="fade-right" data-aos-duration="3000" class="product-list grid">
          <form action="manage_cart.php" method="post">
            <img src="image/p-7.jpg" alt="">
            <p class="fs-montserrat bold-600">JBL Tune 770NC Headphones</p>
            <div class="shop-btn flex">
              <button name="Add_To_Cart" class="bg-red text-white fs-montserrat">Add To Cart</button>
              <input type="hidden" name="item_name" value="JBL Tune 770NC">
              <input type="hidden" name="price" value="4500">
              <p class="fs-montserrat bold-700">₹4,500</p>
            </div>

            <div class="pup-up">
              <p class="fs-poppins">Sell</p>
            </div>
          </form>
          </div>
          <div data-aos="fade-right" data-aos-duration="3000" class="product-list grid">
          <form action="manage_cart.php" method="post">
            <img src="image/p-3.jpg" alt="">
            <p class="fs-montserrat bold-600">JBL Tune 520 Headphones</p>
            <div class="shop-btn flex">
              <button name="Add_To_Cart" class="bg-red text-white fs-montserrat">Add To Cart</button>
              <input type="hidden" name="item_name" value="JBL Tune 520">
              <input type="hidden" name="price" value="3000">
              <p class="fs-montserrat bold-700">₹3,000</p>
            </div>
            <div class="pup-up">
              <p class="fs-poppins">Sell</p>
            </div>
          </form>
          </div>
          <div data-aos="fade-right" data-aos-duration="3000" class="product-list grid">
          <form action="manage_cart.php" method="post">
            <img src="image/ps1.png" alt="">
            <p class="fs-montserrat bold-600">Playstation 4 Video Game</p>
            <div class="shop-btn flex">
              <button name="Add_To_Cart" class="bg-red text-white fs-montserrat">Add To Cart</button>
              <input type="hidden" name="item_name" value="playstation 4">
              <input type="hidden" name="price" value="40000">
              <p class="fs-montserrat bold-700">₹40,000</p>
            </div>
            <div class="pup-up">
              <p class="fs-poppins">Sell</p>
            </div>
          </form>
          </div>
          <div data-aos="fade-right" data-aos-duration="3000" class="product-list grid">
          <form action="manage_cart.php" method="post">
            <img src="image/ps5.png" alt="">
            <p class="fs-montserrat bold-600">Playstation 5 Video Game</p>
            <div class="shop-btn flex">
              <button name="Add_To_Cart" class="bg-red text-white fs-montserrat">Add To Cart</button>
              <input type="hidden" name="item_name" value="JBL Tune 520">
              <input type="hidden" name="price" value="60000">
              <p class="fs-montserrat bold-700">₹60,000</p>
            </div>
            <div class="pup-up">
              <p class="fs-poppins">Sell</p>
            </div>
          </form>
          </div>
          <div data-aos="fade-right" data-aos-duration="3000" class="product-list grid">
          <form action="manage_cart.php" method="post">
            <img src="image/xbox.jpg" alt="">
            <p class="fs-montserrat bold-600">XBOX Video Game</p>
            <div class="shop-btn flex">
              <button name="Add_To_Cart" class="bg-red text-white fs-montserrat">Add To Cart</button>
              <input type="hidden" name="item_name" value="XBOX">
              <input type="hidden" name="price" value="55000">
              <p class="fs-montserrat bold-700">₹55,000</p>
            </div>
            <div class="pup-up">
              <p class="fs-poppins">Sell</p>
            </div>
          </form>
          </div>
          <div data-aos="fade-right" data-aos-duration="3000" class="product-list grid">
          <form action="manage_cart.php" method="post">
            <img src="image/pc3 (1).jpg" alt="">
            <p class="fs-montserrat bold-600">ASUS Vivobook Leptop</p>
            <div class="shop-btn flex">
              <button name="Add_To_Cart" class="bg-red text-white fs-montserrat">Add To Cart</button>
              <input type="hidden" name="item_name" value="ASUS Vivobook">
              <input type="hidden" name="price" value="45000">
              <p class="fs-montserrat bold-700">₹45,000</p>
            </div>
            <div class="pup-up">
              <p class="fs-poppins">Sell</p>
            </div>
          </form>
          </div>
          <div data-aos="fade-right" data-aos-duration="3000" class="product-list grid">
          <form action="manage_cart.php" method="post">
            <img src="image/pc5.jpg" alt="">
            <p class="fs-montserrat bold-600">Acer Aspire Leptop</p>
            <div class="shop-btn flex">
              <button name="Add_To_Cart" class="bg-red text-white fs-montserrat">Add To Cart</button>
              <input type="hidden" name="item_name" value="Acer Aspire">
              <input type="hidden" name="price" value="50000">
              <p class="fs-montserrat bold-700">₹50,000</p>
            </div>
            <div class="pup-up">
              <p class="fs-poppins">Sell</p>
            </div>
          </form>
          </div>
          <div data-aos="fade-right" data-aos-duration="3000" class="product-list grid">
          <form action="manage_cart.php" method="post">
            <img src="image/ma1.jpg" alt="">
            <p class="fs-montserrat bold-600">MacBook Pro Leptop</p>
            <div class="shop-btn flex">
              <button name="Add_To_Cart" class="bg-red text-white fs-montserrat">Add To Cart</button>
              <input type="hidden" name="item_name" value="MacBook Pro">
              <input type="hidden" name="price" value="120000">
              <p class="fs-montserrat bold-700">₹120,000</p>
            </div>
            <div class="pup-up">
              <p class="fs-poppins">Sell</p>
            </div>
          </form>
          </div>
          <div data-aos="fade-right" data-aos-duration="3000" class="product-list grid">
          <form action="manage_cart.php" method="post">
            <img src="image/so1 (1).jpg" alt="">
            <p class="fs-montserrat bold-600">JBL Flip 6 Speaker</p>
            <div class="shop-btn flex">
              <button name="Add_To_Cart" class="bg-red text-white fs-montserrat">Add To Cart</button>
              <input type="hidden" name="item_name" value="JBL Flip 6 Speaker">
              <input type="hidden" name="price" value="9069">
              <p class="fs-montserrat bold-700">₹9,069</p>
            </div>
            <div class="pup-up">
              <p class="fs-poppins">Sell</p>
            </div>
          </form>
          </div>
          <div data-aos="fade-right" data-aos-duration="3000" class="product-list grid">
          <form action="manage_cart.php" method="post">
            <img src="image/so2.jpg" alt="">
            <p class="fs-montserrat bold-600">JBL Flip 5 Speaker</p>
            <div class="shop-btn flex">
              <button name="Add_To_Cart" class="bg-red text-white fs-montserrat">Add To Cart</button>
              <input type="hidden" name="item_name" value="JBL Flip 5 Speaker">
              <input type="hidden" name="price" value="5999">
              <p class="fs-montserrat bold-700">₹5,999</p>
            </div>
            <div class="pup-up">
              <p class="fs-poppins">Sell</p>
            </div>
          </form>
          </div>
          <div data-aos="fade-right" data-aos-duration="3000" class="product-list grid">
          <form action="manage_cart.php" method="post">
            <img src="image/so3.jpg" alt="">
            <p class="fs-montserrat bold-600">JBL Go 3 Speaker</p>
            <div class="shop-btn flex">
              <button name="Add_To_Cart" class="bg-red text-white fs-montserrat">Add To Cart</button>
              <input type="hidden" name="item_name" value="JBL Go 3 Speaker">
              <input type="hidden" name="price" value="2499">
              <p class="fs-montserrat bold-700">₹2,499</p>
            </div>
            <div class="pup-up">
              <p class="fs-poppins">Sell</p>
            </div>
          </form>
          </div>
          <div data-aos="fade-right" data-aos-duration="3000" class="product-list grid">
          <form action="manage_cart.php" method="post">
            <img src="image/wa1.jpg" alt="">
            <p class="fs-montserrat bold-600">Bolt Smart Watch</p>
            <div class="shop-btn flex">
              <button name="Add_To_Cart" class="bg-red text-white fs-montserrat">Add To Cart</button>
              <input type="hidden" name="item_name" value="Bold Smart Watch">
              <input type="hidden" name="price" value="2000">
              <p class="fs-montserrat bold-700">₹2,000</p>
            </div>
            <div class="pup-up">
              <p class="fs-poppins">Sell</p>
            </div>
          </form>
          </div>
          <div data-aos="fade-right" data-aos-duration="3000" class="product-list grid">
          <form action="manage_cart.php" method="post">
            <img src="image/wat3.jpg" alt="">
            <p class="fs-montserrat bold-600">Apple Watch Series 4</p>
            <div class="shop-btn flex">
              <button name="Add_To_Cart" class="bg-red text-white fs-montserrat">Add To Cart</button>
              <input type="hidden" name="item_name" value="Apple Watch Series 4">
              <input type="hidden" name="price" value="30799">
              <p class="fs-montserrat bold-700">₹30,799</p>
            </div>
            <div class="pup-up">
              <p class="fs-poppins">Sell</p>
            </div>
          </form>
          </div>
          <div data-aos="fade-right" data-aos-duration="3000" class="product-list grid">
          <form action="manage_cart.php" method="post">
            <img src="image/wat5 (1).jpg" alt="">
            <p class="fs-montserrat bold-600">Sumsung Watch Active 2</p>
            <div class="shop-btn flex">
              <button name="Add_To_Cart" class="bg-red text-white fs-montserrat">Add To Cart</button>
              <input type="hidden" name="item_name" value="Sumsung Watch Active 2">
              <input type="hidden" name="price" value="15,000">
              <p class="fs-montserrat bold-700">₹15,000</p>
            </div>
            <div class="pup-up">
              <p class="fs-poppins">Sell</p>
            </div>
          </form>
          </div>
          <div data-aos="fade-right" data-aos-duration="3000" class="product-list grid">
          <form action="manage_cart.php" method="post">
            <img src="image/game1.jpg" alt="">
            <p class="fs-montserrat bold-600">Marvel's Spider-Man Game (PS4)</p>
            <div class="shop-btn flex">
              <button name="Add_To_Cart" class="bg-red text-white fs-montserrat">Add To Cart</button>
              <input type="hidden" name="item_name" value="Marvel's Spider-Man (PS4)">
              <input type="hidden" name="price" value="2,419">
              <p class="fs-montserrat bold-700">₹2,419</p>
            </div>
            <div class="pup-up">
              <p class="fs-poppins">Sell</p>
            </div>
          </form>
          </div>
          <div data-aos="fade-right" data-aos-duration="3000" class="product-list grid">
          <form action="manage_cart.php" method="post">
            <img src="image/games4 (1).jpg" alt="">
            <p class="fs-montserrat bold-600">Uncharted 4: A Thief's End Game (PS4)</p>
            <div class="shop-btn flex">
              <button name="Add_To_Cart" class="bg-red text-white fs-montserrat">Add To Cart</button>
              <input type="hidden" name="item_name" value="Uncharted 4: A Thief's End (PS4)">
              <input type="hidden" name="price" value="1,622">
              <p class="fs-montserrat bold-700">₹1,622</p>
            </div>
            <div class="pup-up">
              <p class="fs-poppins">Sell</p>
            </div>
          </form>
          </div>
          <div data-aos="fade-right" data-aos-duration="3000" class="product-list grid">
          <form action="manage_cart.php" method="post">
            <img src="image/game3.jpg" alt="">
            <p class="fs-montserrat bold-600">God Of War Ragnarok Game (PS5)</p>
            <div class="shop-btn flex">
              <button name="Add_To_Cart" class="bg-red text-white fs-montserrat">Add To Cart</button>
              <input type="hidden" name="item_name" value="God Of War Ragnarok (PS5)">
              <input type="hidden" name="price" value="2,999">
              <p class="fs-montserrat bold-700">₹2,999</p>
            </div>
            <div class="pup-up">
              <p class="fs-poppins">Sell</p>
            </div>
          </form>
          </div>
        </section>
      </div>
      
      <section>
        <div class="sidebar-search text-black bg-gray flex">
          <input type="text" id="find" name="find" placeholder="Search Her" onkeyup="serach()" class="fs-montserrat bg-gray">
          <div>
            <i class="uil bg-red text-white uil-search"></i>
          </div>
        </div>

        <aside class="sidebar-category">
          <div class="category-list flex">
            <h3 class="fs-poppins bold-700 fs-200">Product categories</h3>
            <i id="arrow" class="uil uil-angle-right" data-category="false"></i>
          </div>

          <div class="shop-category-list">
            <ul id="side-nav" class="side-nav grid" onchange="go()" data-category="false">
               <li id="ear"><a class="fs-montserrat text-black bold-500" href="#">Earphone</a></li>
               <li><a class="fs-montserrat text-black bold-500" href="#">Video Game</a></li>
               <li><a class="fs-montserrat text-black bold-500" href="#">Leptop</a></li>
               <li><a class="fs-montserrat text-black bold-500" href="#">Speakers</a></li>
               <li><a class="fs-montserrat text-black bold-500" href="#">Watch</a></li>
               <li><a class="fs-montserrat text-black bold-500" href="#">Game</a></li>
            </ul>
          </div>
        </aside>
      </section>

     </main>


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
          <li><a class=" text-black fs-100" href="index.php">Home</a></li>
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
    <script type="text/javascript">
      function serach()
      {
        let filter= document.getElementById('find').value.toUpperCase();

        let item= document.querySelectorAll('.product-list');
        
        let l= document.getElementsByTagName('p');

        for(var i=0; i<=l.length; i++){
         let a=item[i].getElementsByTagName('p')[0];

         let value=a.innerHTML || a.innerText || a.textContent;

         if(value.toUpperCase() .indexOf(filter) > -1)
         {
          item[i].style.display="";
         }
         else
         {
          item[i].style.display="none";
         }
        }
      }

    </script>
</body>
</html>



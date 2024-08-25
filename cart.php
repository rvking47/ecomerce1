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
    <script src="ht.js" defer></script>
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


#hu{
  border: solid 1px red;
  border-radius: 12px;
  font-size: 15px;
  text-align: center;
}
table{
  width: 100%;
}
.container1{
    width:96vw;
    margin-inline: auto;
    padding-inline: 2rem;
}
    </style>

  </head>
  <body class="home">
    <header class="primary-header container1 flex">
      <div class="header-inner-one flex">
        <div class="logo">
          <img src="image/logo.png" alt="">
        </div>
        <button class="mobile-close-btn" data-visible="false" aria-controls="primary-navigation">
          <i class="uil uil-times-circle"></i></button>
        <nav>
          <ul id="primary-navigation" data-visible="false" class="primary-navigation flex">
            <li><a style="text-decoration: none; color:gray;" class="fs-100 fs-montserrat bold-500" href="index.php">Home</a></li>
            <li><a style="text-decoration: none; color:gray;" class=" fs-100 fs-montserrat bold-500" href="shop.php">Shop</a></li>
            <li><a style="text-decoration: none; color:gray;" class="fs-100 fs-montserrat bold-500" href="about.php">About Us</a></li>
            <li><a style="text-decoration: none; color:gray;" class="fs-100 fs-montserrat bold-500" href="blog.php">Blog</a></li>
            <li><a style="text-decoration: none; color:gray;" class="fs-100 fs-montserrat bold-500" href="contactus.php">Contact Us</a></li>
          </ul>
        </nav>
      </div>
      <div style="margin-top: 16px;" class="header-login flex">
        <p class="fs-100 fs-montserrat bold-500">login</p>
          <?php
    $count=0;
     if(isset($_SESSION['cart']))
     {
        $count=count($_SESSION['cart']);
     }
    ?>
          <a style="color: black; margin-top:-22px;" href="cart.php"><i id="count" aria-controls="cart-icon"  class="uil uil-shopping-bag"></i><?php echo
          "<div class='hu'>". $count."</div>"; ?></a>
      </div>
      <div style="margin-top: 0px;" class="mobile-open-btn">
        <i class="uil uil-align-right"></i>
      </div>
    </header>
    <section class="shop-feature bg-gray grid">
      <div>
      <p class="fs-montserrat text-black">Home <span aria-haspopup="true" class="margin"></span>My Cart</p>
     </div>
    <h2 class="fs-poppins fs-300 bold-700">My Cart</h2>
    </section>
    <html>
     <head>
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
  label{
    font-size: 13px;
  }
  span{
    color: red;
  }
  </style>
     </head>
     <body>
     <div class="row">
      <div class="col-lg-6">
    <table class="table table-bordered text-center">
        <tr class="bg-light">
        <th scope="col">Serial No <span>*</span></th>
      <th scope="col">Item Name <span>*</span></th>
      <th scope="col">Item Price <span>*</span></th>
      <th scope="col">Qty <span>*</span></th>
      <th scope="col">Total <span>*</span></th>
      <th scope="col">Remove <span>*</span></th>
        </tr>
      </thead>
       
     <tbody class="text-center fs-montserrat">
    <?php
    if(isset($_SESSION['cart']))
      {
      foreach($_SESSION['cart'] as $key => $value)
      {
    $sr=$key+1; 
    echo "
    <tr>
    <td>$sr</td>
    <td>$value[item_name]</td>
    <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
    <td><form action='manage_cart.php' method='post'>
    <input class='text-center iqty' name='Mod_Qty' onchange='this.form.submit()' type='number' value='$value[qty]' min='1' max='10'>
    <input type='hidden' name='item_name' value='$value[item_name]'>
    </form></td>
    <td class='itotal'></td>
    <td>
    <form action='manage_cart.php' method='post'>
    <button name='remove' class='bg-red text-white fs-montserrat' id='hu'>Delete</button>
    <input type='hidden' name='item_name' value='$value[item_name]'>
    </form></td>
    </tr>";
}
    }
?>
  </tbody>
</table>
      </div>
      <div class="col-lg-6">
        <div class="jumbotron">
<div style="text-align: center; text-decoration:underline; padding-top:0px; padding-bottom:0px;" class="s1">
<span1 style="text-align: center; font-size:20px; font-weight:bold;" class="fs-montserrat">Grand Total<span>:</span></span1>
                <span1 style="text-align: center; font-size:20px; font-weight:600;" id="gtotal" class="fs-montserrat"></span1>
 </div>
<div class="hii">
<?php
          if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
          {
        ?>
 <form action="purchase.php" method="POST">
 <div class="row">
  <div class="col-lg-6">
    <div class="form-group">
     <label for="" class="form-label fs-montserrat">First Name <span>*</span></label>
     <input type="text" name="fn" class="form-control" required>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
     <label for="" class="form-label fs-montserrat">Last Name <span>*</span></label>
     <input type="text" name="ln" class="form-control" required>
    </div>
  </div>
 </div>
 <div class="row">
  <div class="col-lg-6">
    <div class="form-group">
     <label for="" class="form-label fs-montserrat">Phone Number <span>*</span></label>
     <input type="text" name="pn" class="form-control" required>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
     <label for="" class="form-label fs-montserrat">Address <span>*</span></label>
     <input type="text" name="add" class="form-control" required>
    </div>
  </div>
 </div>
 <div class="row">
  
  <div class="col-lg-6">
    <div class="form-group">
     <label for="" class="form-label fs-montserrat">Pincode <span>*</span></label>
     <input type="text" name="pin" class="form-control" required>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
    <div class="form-check">
     <input type="checkbox" name="cas" class="form-input-check" value="cash_on_delivery" required>
     <label for="" class="form-check-label fs-montserrat">Cash on Delivery</label>
    </div>
    </div>
    <input type="submit" name="submit" value="Make Purchase" class="btn btn-primary btn-sm fs-montserrat">
  </div>
 </div>
          
      </form>
      <?php
          }
      ?>
      </div>
        </div>
      </div>
     </div>
        </div>
     </body>
</html>
           
        </div>
    </div>
    <script>
      var gt=0;
       var iprice=document.getElementsByClassName('iprice');
       var iqty=document.getElementsByClassName('iqty');
       var itotal=document.getElementsByClassName('itotal');
       var gtotal=document.getElementById('gtotal');

       function subtotal()
       {
        gt=0
        for(i=0;i<iprice.length;i++)
       {
         itotal[i].innerText=(iprice[i].value)*(iqty[i].value);
         gt=gt+(iprice[i].value)*(iqty[i].value);
       }
       gtotal.innerText=gt;
       }
       subtotal();
        </script>
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
          <li><a style="text-decoration: none; color:blcak;" class=" text-black fs-100" href="index.html">Home</a></li>
          <li><a style="text-decoration: none; color:blcak;" class="fs-montserrat text-black fs-100" href="about.html">About</a></li>
          <li><a style="text-decoration: none; color:blcak;" class="fs-montserrat text-black fs-100" href="shop.html">Shop</a></li>
          <li><a style="text-decoration: none; color:black;" class="fs-montserrat text-black fs-100" href="contactus.php">Contact </a></li>
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

     <script>
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
      </script>
  </body>
</html>

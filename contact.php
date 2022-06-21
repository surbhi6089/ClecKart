<?php
session_start();
include_once("connect.php");
 if(isset($_POST["send"])){
  
            $to = "info.cleckart@gmail.com";
               $subject = "MESSAGE ALERT";

              $message = "Message from '".$_POST['mail']."'<br>".$_POST['message'];
                 // session_write_close ();
                
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

             
              $headers .= 'From: <info.cleckart@gmail.com>' . "\r\n";
              if(mail($to,$subject,$message,$headers))
              {
                  header("location:message.php");

              }

              else{
                  echo "Unable to send email";
              }
            
 }

?>






<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css" />
    <script src="home.js" defer></script>
    <script
      src="https://kit.fontawesome.com/6338071364.js"
      crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Concert+One&family=Merriweather+Sans:wght@300;400;600&family=Orelega+One&family=Playfair+Display&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Concert+One&family=Merriweather+Sans:wght@300;400;600&family=Mukta:wght@500;600;800&family=Orelega+One&family=Playfair+Display&family=Source+Sans+3:wght@300;500;600&display=swap" rel="stylesheet">

</head>
  <body>
    
    <!-- ------------------------------------------HEADER START --------------------------------------------->
    <header class="header">
      <input type="checkbox" id="nav-toggle"class="nav-toggle">
      <div class="side">
        <a href="http://localhost/Cleckart/WEBSITE/customerprofile.php">Profile</a>
        <a href="http://localhost/Cleckart/WEBSITE/home.php">Home</a>
        <a href="http://localhost/Cleckart/WEBSITE/aboutus.html">About Us</a>
        <a href="http://localhost/Cleckart/WEBSITE/cart.php">Cart</a>
        <a href="http://localhost/Cleckart/WEBSITE/cart.php">Wishlist</a>
        <a href="http://localhost/Cleckart/WEBSITE/cart.php">Products</a>
         <a href="http://localhost/Cleckart/WEBSITE/login.php">Login</a>
         <a href="#">Contact</a>

      </div>
      <label for="nav-toggle" class="nav-toggle-lable">
        <img src="image/menu.png" height="20px" width="20px">
      </label>
      <div id="logo">
        <a href="home.html"><img src="image/Logo.png" height="120px" width="170px" /></a>
      </div>
      <div class="search">
           <form id="tfnewsearch" method="post" action="cart.php">
          <input
            type="text"
            class="tftextinput"
            placeholder="Search in ClecKart..."
            name="q"
            size="21"
            maxlength="120"
          /><button type = "submit" class="tfbutton"  name = "Search">Search</button>
        </form>
      </div>
      <div class="links">
             <button type="" submit><a href="login.php" class="log">Login</a></button>
        <button type="" submit><a href="Final_register/RegisterPage.php">Sign Up</a></button>
        <a ><i id="user-btn" class="far fa-user-circle fa-xs"></i></a>
        <a href="#" ><i class="fas fa-shopping-cart"></i></a>
        <a href="#"><i class="far fa-heart"></i></a>

        <?php if(isset($_SESSION['user'])){
        echo '<div class="modal-box">';
         
            echo "<img width=70px height=70px src=".$_SESSION['img'].">"."<br>";
            echo $_SESSION['name']."<br>"; 
            echo $_SESSION['email']; 
          
           echo '<div class="modal-button">
            <button class="edit-button"><a href="Logout.php">Logout</a></button>
            <button class="edit-button"><a href="http://localhost/Cleckart/WEBSITE/customerprofile.php">Edit Profile</a></button>';
             }
             // else{
             //  location("header:login.php");
             // }
             echo ' </div>';
      ?>
        </div>
      </div>
    </header>
    <div class="dummy">
    </div>
    <!-- nav2 -->
    <nav class="nav2">
      <ul>
        <li>
          <a href="http://localhost/Cleckart/WEBSITE/cart.php"
            >Products</i
          ></a>
        </li>
        <li>
          <a href="http://localhost/Cleckart/WEBSITE/aboutus.html">About Us</i></a>
        </li>
        <li>
          <a href="#">Contact Us</i></a>
        </li>
      </ul>
    </nav>

    <!-------------------------------------------------------- END HEADER -------------------------------------------------------------->
     



    <div class="contactUs">
      <div class="title">
        <h2>Get In Touch With ClecKart</h2>
      </div>
      <div class="Wrap">

        <!--------------------------- CONTACT US FORM --------------------------->
        <div class="contact form">
          <h3>Send a Message</h3>
          <form method="post">
            <div class="formWrap">
              <div class="row50">
                <div class="inputWrap">
                  <span>First Name</span>
                  <input type="text" placeholder="your name" >
                </div>
                <div class="inputWrap">
                  <span>Last Name</span>
                  <input type="text" placeholder="last name">
                </div>
              </div>

              <div class="row50">
                <div class="inputWrap">
                  <span>Email</span>
                  <input type="text" placeholder="yourmail@email.com" name="mail" >
                </div>
                <div class="inputWrap">
                  <span>Phone No</span>
                  <input type="text" placeholder="0000000000">
                </div>
              </div>

              <div class="row100">
                <div class="inputWrap">
                  <span>Message</span>
                  <textarea placeholder="Message" name="message"></textarea>
                </div>
              </div>

              <div class="row100">
                <div class="inputWrap">
                  <button type="submit" value="Send" name="send">SEND
                </div>
              </div>


            </div>
          </form>
        </div>

        <!--------------------------- CONTACT US INFO --------------------------->
        <div class="contact info">
          <h3>Contact Info</h3>
          <div class="infoWrap">
            <div>
              <span><ion-icon name="location-outline"></ion-icon></span>
              <p>CleckHuddersFax, Yorkshire <br> UK</p>
            </div>
            <div>
              <span><ion-icon name="mail-outline"></ion-icon></span>
              <a href="mailto:info.clekart@gmail.com">info.clekart@gmail.com</a>
            </div>
            <div>
              <span><ion-icon name="call-outline"></ion-icon></span>
              <a href="tel:+020-7183-8750">+020-7183-8750</a>
            </div>

            
          </div>
        </div>
        <div class="contact map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1202835.0400257525!2d-2.328413370852435!3d53.92664153240471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487935b588f279e9%3A0xcba0fa0330518560!2sYorkshire%2C%20UK!5e0!3m2!1sen!2snp!4v1652593433505!5m2!1sen!2snp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>


    <!--------------------------------------------------------    FOOTER ----------------------------------------------------------->
    <footer>
      <div class="container">
        <div class="first box">
          <h2>Quick Links</h2>
          <p class="link">
            <a href="http://localhost/Cleckart/WEBSITE/home.php">Home</a>
            <a href="http://localhost/Cleckart/WEBSITE/login.php">Login</a>
            <a href="http://localhost/Cleckart/WEBSITE/cart.php">Products</a>
            <a href="http://localhost/Cleckart/WEBSITE/aboutus.html">About US</a>
          </p>
        </div>
        <div class="second box">
          <h2>Contact Us</h2>
          <p class="link">
            <a
              href="https://www.google.com/maps/place/Sherpa+Mall/@27.7105497,85.3156752,17z/data=!3m1!4b1!4m5!3m4!1s0x39eb19015ce34aa3:0x833d1f9f02d0db2d!8m2!3d27.710545!4d85.3178639"
              ><i class="fas fa-map-marker-alt"></i>Cleckhuddersfax</a
            >
            <a href="tel:+9770913582040"
              ><i class="fas fa-phone"></i>+9770913582040</a
            >
            <a href="mailto:clekart@gmail.com"
              ><i class="far fa-envelope"></i>info.clekart@gmail.com</a
            >
          </p>
        </div>
        <div class="third box">
          <h2>Information</h2>
          <p class="link">
            <a href="https://www.facebook.com/"
              >About Us
            </a>
            <a href="https://www.instagram.com/"
              >Delivery Information</a
            >
            <a href="https://www.youtube.com/"
              >Privacy Policy
            </a>
            <a href="https://twitter.com/?lang=en"
              >Offic location
            </a>
          </p>
        </div>        
         
        </div>
      
    
    </footer>
    <div class="bottom-box">&copy; 2020 ClecKart. All Rights Reserved.</div>
    <!-- ***************************** END FOOTER *************************************** -->

    <script type="text/javascript">
      /******************* MODAL BOX ********************/

let userBox = document.querySelector('.modal-box');

document.querySelector('#user-btn').onclick = () =>{
  userBox.classList.toggle('active');
}
    </script>


        

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  </body>
</body>
</html>

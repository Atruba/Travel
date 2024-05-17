<?php
session_start();
include("connect.php");
include("register.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel Web App</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="styles1.css">
</head>
<body>


  <header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"><i class="fas fa-paper-plane"></i>Digital Backpackers</a>

    <nav class="navbar">

      <a href="Home.html">Home</a>
      <a href="#">About</a>
      <a href="packages.html">Packages</a>
      <a href="contact.html">Contact</a>
      <span class="lang-option">
        <div class="dropdown">
          <button class="dropbtn">EN</button>
          <div class="dropdown-content">
            <a href="#" class="active">English</a>
            <a href="#">العربية</a>
          </div>
        </div>
      </span>
      </nav>
        
        <a href="myaccount.html" class="btn">My Account</a>

    </nav>
  </header>
  <br><br><br>

  <div class="slider">
    <div class="slider-images">
        <img src="turkey-1.png" alt="Image 1" onclick="currentSlide(1)">
        <img src="UK-1.png" alt="Image 2" onclick="currentSlide(2)">
        <img src="aus-1.png" alt="Image 3" onclick="currentSlide(3)">
        <img src="georg.png" alt="Image 4" onclick="currentSlide(4)">
        <img src="japan.png" alt="Image 5" onclick="currentSlide(5)">
        <!-- Add more images as needed -->
    </div>
  </div>

  <section class="home" id="home" >
    <div class="content">
      <span>Experience</span>
      <h3 id="home-title" class="visible">the Magic of Turkey</h3>
      <p class="visible">4 Days 3 Nights | 7 Reviews</p>
      <a href="#" class="btn">Sign In</a>
    </div>
    <div class="social-icons">
      <a href="https://www.facebook.com/people/Digital-Backpackers/61559198532404/?mibextid=LQQJ4d"><img src="facebook.png" alt="Facebook"></a>
      <a href="https://wa.me/971553620934"><img src="whatsapp.png" alt="WhatsApp"></a>
      <a href="https://www.instagram.com/digitalbackpackers_?igsh=d2kyaDNueXFpN2d6&utm_source=qr"><img src="instagram.png" alt="Instagram"></a>
      <a href="https://twitter.com/digibackpack24"><img src="twitter.png" alt="Twitter"></a>

  </div>
  </section>
 
  <section class="book-form" id="book-form">
    <form action="">
      <div class="inputBox">
        <span class="label">Choose Your Destination</span>
        <input type="text" id="destination-input" aria-label="Enter Destination" placeholder="Enter Destination" class="destination-input">
        <div class="dropdown-list" role="listbox">
          <span class="dropdown-item" data-value="France">Turkey</span>
          <span class="dropdown-item" data-value="Italy">Georgia</span>
          <span class="dropdown-item" data-value="Spain">Japan</span>
          <span class="dropdown-item" data-value="Germany">Australia</span>
          <span class="dropdown-item" data-value="England">UK</span>
        </div>
      </div>
      <input type="hidden" name="selectedCountry" class="selected-country">
      <input type="submit" value="Find Now" class="btn">
    </form>
  </section>
  
  
  

  <section class="about" id="about">
    <div class="video-container">
      <video src="video1.mp4" muted autoplay loop class="video"></video>
      <div class="controls">
        <span class="control-btn" data-src="video1.mp4"></span>
        <span class="control-btn" data-src="video2.mp4"></span>
        <span class="control-btn" data-src="video3.mp4"></span>
      </div>
    </div>

    <div class="content">
      <span>why coose us?</span>
      <h3>The World Awaits You</h3>
      <p>we specialize in budget-friendly adventures, offering curated destinations and unbeatable deals on accommodations. With us, you can explore more, spend less, and create unforgettable memories.</p>
      <a href="#" class="btn">Explore more</a>
    </div>
  </section>


  <section class="destination" id="destination">
    <div class="heading">
      <span>our destinations</span>
      <h1>make yours destination</h1>
    </div>

    <div class="box-container">
      <div class="box">
        <div class="image">
          <img src="tk.jpeg" alt="">
        </div>
        <div class="content">
          <h3>Tokyo, Japan</h3>
          <p>Transport yourself to the serene beauty of ancient Japan with Tokyo's tranquil lakeside vistas.</p>
          <br><br>
          
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="tb.jpg" alt="">
        </div>
        <div class="content">
          <h3>Tbilisi, Georgia</h3>
          <p>Discover the timeless charm of Tbilisi, Georgia, nestled amidst lush tea plantations and misty mountains.</p>
          <br><br>
          
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="bt.jpeg" alt="">
        </div>
        <div class="content">
          <h3>Bath, UK</h3>
          <p>Immerse yourself in the vibrant energy of Bath, UK, where Roman Baths and bustling markets converge in a modern metropolis.</p>
          
        </div>
        
      </div>
      
      
      </div>
      
    </div>
  </section>  

  <a href="#" class="btn1">Discover more</a>


  <section class="services" id="services">
    <div class="heading">
     
      <h1>countless experiences</h1>
    </div>

    <div class="box-container">

      <div class="box">
        <i class="fas fa-globe"></i>
        <h3>worldwide</h3>
        <p></p>
      </div>

      <div class="box">
        <i class="fas fa-hiking"></i>
        <h3>adventures</h3>
        <p></p>
      </div>

      <div class="box">
        <i class="fas fa-utensils"></i>
        <h3>food and drinks</h3>
        <p></p>
      </div>

      <div class="box">
        <i class="fas fa-hotel"></i>
        <h3>affordable hotels</h3>
        <p></p>
      </div>

      <div class="box">
        <i class="fas fa-wallet"></i>
        <h3>Low prices</h3>
        <p></p>
      </div>

      <div class="box">
        <i class="fas fa-headset"></i>
        <h3>24/7 service</h3>
        <p></p>
      </div>
    </div>
  </section>

  

  


<section class="footer">
  <section>
    <h1>Classy Footer</h1>
    <h3>Hover over the circle below</h3>
  </section>
  <div class="footer">
    <div id="button"></div>
  <div id="container">
  <div id="cont">
  <div class="footer_center">
       <h1>BathSpa Copyright © 2024 Inferno - All rights reserved || Designed by - Students </h1>
  </div>
  </div>
  </div>
  </div>
</section>

<div class="credit">created by <span>mr. web designer</span> | all rights reserved!</div>

<script src="script.js"></script>
</body>
</html>

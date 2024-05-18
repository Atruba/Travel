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
  <link rel="stylesheet" href="common/styles/footer.css">
  <style>
    #book-form p {
      font-size: 20px;
      color: #fef6db;
      margin-bottom: 5px;
      text-align: center;

    }
  </style>
</head>
<body>

<!--                  Header                      -->

  <header class="header header-mobile">
    <div id="menu-btn" class="fas fa-bars"></div>
    <a href="Home.html" class="logo"><i class="fas fa-paper-plane"></i>Digital Backpackers</a>
    <nav class="navbar navbar-mobile navbar-mobile.active">
      <a href="Home.html" class="cs-active">Home</a>
      <a href="About.html">About</a>
      <span class="services-option">
        <div class="dropdown">
          <button class="dropbutton">Services</button>
          <div class="dropdown-content">
            <a href="Destinations.html">Digital Guides</a>
            <a href="Book.html">Bookings</a>
            <a href="Map.html" class="active">Interactive Map</a>
          </div>
        </div>
      </span>
      <a href="contact.html">Contact</a>
      </nav>
        <a href="myaccount.html" class="btn btn-mobile">Sign In</a>
    </nav>
  </header>
  <br><br><br>

<!--                  Slider Side Images                      -->

  <div class="slider">
    <div class="slider-images">
        <img src="turkey-1.png" alt="Image 1" onclick="currentSlide(1)">
        <img src="UK-1.png" alt="Image 2" onclick="currentSlide(2)">
        <img src="aus-1.png" alt="Image 3" onclick="currentSlide(3)">
        <img src="georg.png" alt="Image 4" onclick="currentSlide(4)">
        <img src="japan.png" alt="Image 5" onclick="currentSlide(5)">
    </div>
  </div>

  <!--                  Hero Section                      -->
  <section class="home" id="home" >
    <div class="content">
      <span>Experience</span>
      <h3 id="home-title" class="visible">the Magic of Turkey</h3>
      <a href="#" class="btn">Sign In</a>
    </div>
    <div class="social-icons">
      <a href="https://www.facebook.com/people/Digital-Backpackers/61559198532404/?mibextid=LQQJ4d" title="Click here to visit our Facebook Page"><img src="facebook.png" alt="Facebook"></a>
      <a href="https://wa.me/971553620934" title="Text us on WhatsApp"><img src="whatsapp.png" alt="WhatsApp"></a>
      <a href="https://www.instagram.com/digitalbackpackers_?igsh=d2kyaDNueXFpN2d6&utm_source=qr" title="Click out our Instagram"><img src="instagram.png" alt="Instagram"></a>
      <a href="https://discord.gg/juP98Huk" title="Connect with Solo Backpackers"><img src="discord.png" alt="Discord"></a>
  </div>
  </section>
 
  <section class="book-form" id="book-form">
    <p>Choose your full guide:</p>
    <select name="city" id="city">
        <option value="Sydney.html">Sydney</option>
        <option value="Bath.html">Bath</option>
        <option value="Istanbul.html">Istanbul</option>
        <option value="Tokyo.html">Tokyo</option>
        <option value="Tbilisi.html">Tbilisi</option>
    </select>
    <input type="hidden" id="selectedCity" name="selectedCity">
    <input type="button" value="Find Now" class="btn" onclick="redirectToCityPage()">
</section>

  
  
  <!--                  About Section                      -->

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
      <p>We empower budget-conscious adventurers to explore the world with minimal impact. Download our digital guides – say goodbye to paper waste! – and discover cities with free walking tours, hidden gems, and budget-friendly recommendations. Our interactive map becomes your ultimate travel companion, visually pinpointing must-see attractions, delectable restaurants, and unique shopping experiences – all tailored to your budget.
        , while our platform seamlessly integrates booking tours and activities. Plan your dream itinerary, explore like a local, and save money – all on our user-friendly website!</p>
      <a href="About.html" class="btn">Explore</a>
    </div>
  </section>

  <!--                  Destinations Section                      -->

  <section class="destination" id="destination">
    <div class="heading">
      <span>Explore Our Destinations</span>
      <h1>Make Them Yours</h1>
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


  <!--                  Services Section                      -->

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
        <i class="fas fa-map"></i>
        <h3>Interactive Map</h3>
        <p></p>
      </div>
      <div class="box">
        <i class="fas fa-hotel"></i>
        <h3>affordable flights & hotels</h3>
        <p></p>
      </div>
      <div class="box">
        <i class="fas fa-mobile"></i>
        <h3>Offline</h3>
        <p></p>
      </div>
      <div class="box">
        <i class="fas fa-headset"></i>
        <h3>Online Community</h3>
        <p></p>
      </div>
    </div>
  </section>

    <!--                  Stats Section                      -->

  <section id="stats-section" class="stats-section">
    <div class="wrapper">
      <div class="current-visitors">
        <h2>1.87 billion</h2>
        <p>travel app users</p>
      </div>
      <div class="stats">
        <div class="stat">
          <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M27.4056 7.00068C26.0074 6.27095 24.1128 6.25969 22.7035 6.98754C17.3015 9.77742 12.4018 12.9762 8.10806 16.5242C7.44409 17.0728 6.97288 17.8701 6.98092 18.8085C6.98893 19.7431 7.46972 20.5297 8.12966 21.0693C12.3877 24.5509 17.2915 27.7526 22.5946 30.5204C23.9927 31.2501 25.8873 31.2614 27.2966 30.5335C32.6986 27.7437 37.5984 24.5449 41.8921 20.9969C42.556 20.4483 43.0272 19.651 43.0192 18.7126C43.0112 17.778 42.5304 16.9914 41.8705 16.4518C37.6124 12.9702 32.7087 9.76847 27.4056 7.00068ZM24.1375 9.76411C24.6368 9.50625 25.457 9.50869 25.9596 9.77105C31.0208 12.4125 35.6841 15.4515 39.7242 18.7339C35.66 22.0692 31.0105 25.0983 25.8627 27.757C25.3634 28.0148 24.5432 28.0124 24.0405 27.75C18.9794 25.1085 14.316 22.0696 10.276 18.7871C14.3401 15.4519 18.9896 12.4227 24.1375 9.76411Z" fill="#7000FF" />
            <path d="M44.1605 26.4544C44.6175 27.1864 44.3946 28.1502 43.6626 28.6072L30.9392 36.5507C29.2127 37.6287 27.0706 38.127 24.9999 38.1272C22.9292 38.1273 20.787 37.6292 19.0602 36.5515L6.47617 28.6978C5.7441 28.241 5.52101 27.2771 5.9779 26.545C6.43478 25.813 7.39862 25.5899 8.13069 26.0468L20.7147 33.9004C21.8484 34.6079 23.3883 35.0023 24.9997 35.0022C26.611 35.0021 28.1509 34.6075 29.2843 33.8999L42.0077 25.9564C42.7397 25.4994 43.7035 25.7224 44.1605 26.4544Z" fill="#7000FF" />
            <path d="M44.1604 34.2765C44.6175 35.0085 44.3947 35.9724 43.6628 36.4295L32.6442 43.3104C30.4408 44.6864 27.6846 45.3338 24.9998 45.334C22.315 45.3341 19.5586 44.6871 17.3549 43.3114L6.47601 36.5201C5.74399 36.0631 5.52102 35.0992 5.978 34.3672C6.43497 33.6352 7.39884 33.4122 8.13085 33.8692L19.0097 40.6605C20.6202 41.6658 22.7742 42.2091 24.9996 42.209C27.225 42.2089 29.3788 41.6653 30.9889 40.6598L42.0075 33.7789C42.7394 33.3218 43.7034 33.5446 44.1604 34.2765Z" fill="#7000FF" />
          </svg>
          <div>
            <h3>73%</h3>
            <p>Travelers choose sustainable options</p>
          </div>
        </div>
        <div class="stat">
          <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.1458 15.625C16.1458 10.735 20.1099 6.77084 25 6.77084C29.89 6.77084 33.8541 10.735 33.8541 15.625C33.8541 20.515 29.89 24.4792 25 24.4792C20.1099 24.4792 16.1458 20.515 16.1458 15.625ZM25 9.89584C21.8358 9.89584 19.2708 12.4609 19.2708 15.625C19.2708 18.7891 21.8358 21.3542 25 21.3542C28.1641 21.3542 30.7291 18.7891 30.7291 15.625C30.7291 12.4609 28.1641 9.89584 25 9.89584Z" fill="#7000FF" />
            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6666 30.7292C14.0778 30.7292 11.9791 32.8278 11.9791 35.4167V37.8923C11.9791 37.93 12.0064 37.9621 12.0436 37.9682C20.6244 39.3691 29.3755 39.3691 37.9563 37.9682C37.9935 37.9621 38.0208 37.93 38.0208 37.8923V35.4167C38.0208 32.8278 35.9221 30.7292 33.3333 30.7292H32.6231C32.5682 30.7292 32.5137 30.7379 32.4615 30.7549L30.6583 31.3437C26.9816 32.5443 23.0183 32.5443 19.3416 31.3437L17.5384 30.7549C17.4862 30.7379 17.4317 30.7292 17.3768 30.7292H16.6666ZM8.85413 35.4167C8.85413 31.102 12.3519 27.6042 16.6666 27.6042H17.3768C17.7611 27.6042 18.1431 27.665 18.5084 27.7843L20.3116 28.373C23.358 29.3678 26.6419 29.3678 29.6883 28.373L31.4915 27.7843C31.8568 27.665 32.2388 27.6042 32.6231 27.6042H33.3333C37.648 27.6042 41.1458 31.102 41.1458 35.4167V37.8923C41.1458 39.4615 40.0085 40.7995 38.4598 41.0523C29.5456 42.5077 20.4543 42.5077 11.5401 41.0523C9.99138 40.7995 8.85413 39.4615 8.85413 37.8923V35.4167Z" fill="#7000FF" />
          </svg>
  <br>
          <div>
            <h3>61%</h3>
            <p>encouraged to travel more sustainably in the future</p>
          </div>
        </div>
      </div>
    </div>
  </section><br><br>


<!--                  Footer                      -->
<footer id="cs-footer-308">
  <div class="cs-container">
      <!-- Logo Group -->
      <div class="cs-logo-group">
        <a aria-label="go back to home" class="cs-logo" href="Home.html">
          <h1 class="cs-logo-text">Digtial Backpackers</h1> </a>
        <p class="cs-text">
          Digital backpackers are a new breed of travelers who leverage technology to enhance their adventures.
        </p>
      </div>
      
      <!-- Links -->
      <ul class="cs-nav">
        <li class="cs-nav-li">
          <span class="cs-header">Quick Links</span>
      </li>
          <li class="cs-nav-li">
              <a class="cs-nav-link" href="Home.html">Home</a>
          </li>
          <li class="cs-nav-li">
              <a class="cs-nav-link" href="About.html">About</a>
          </li>
          <li class="cs-nav-li">
              <a class="cs-nav-link" href="Destinations.html">Destinations</a>
          </li>
          <li class="cs-nav-li">
            <a class="cs-nav-link" href="Map.html">Map</a>
        </li>
          <li class="cs-nav-li">
              <a class="cs-nav-link" href="contact.html">Contact</a>
          </li>
      </ul>
      <!-- Contact Info -->
      <ul class="cs-nav">
          <li class="cs-nav-li">
              <span class="cs-header">Contact</span>
          </li>
          <li class="cs-nav-li">
              <img class="cs-icon" aria-hidden="true" loading="lazy" decoding="async" src="https://csimg.nyc3.digitaloceanspaces.com/Contact-Page/phone-stroke.svg" alt="phone" width="24" height="24">
              <a class="cs-nav-link cs-phone" href="https://wa.me/971553620934">(+971) 55 362 0934</a>
          </li>
          <li class="cs-nav-li">
              <img class="cs-icon" aria-hidden="true" loading="lazy" decoding="async" src="https://csimg.nyc3.digitaloceanspaces.com/Contact-Page/email-stroke.svg" alt="email" width="24" height="24">
              <a class="cs-nav-link cs-email" href="mailto:digitalbackpackers24@gmail.com">digitalbackpackers24@gmail.com</a>
          </li> 
          <li class="cs-nav-li">
              <img class="cs-icon" aria-hidden="true" loading="lazy" decoding="async" src="https://csimg.nyc3.digitaloceanspaces.com/Contact-Page/pin-stroke.svg" alt="pin" width="24" height="24">
              <a class="cs-nav-link cs-address" href="https://maps.app.goo.gl/qpSWhccZDWv7zuGB9" target="_blank" rel="noopener">
                   Bath Spa University, RAK
              </a>
          </li>
      </ul>
  </div>
  <div class="cs-bottom">
      <span class="cs-copyright">© Copyright 2024 - <a class="cs-copyright-link" href="Home.html">Digital Backpackers</a></span>
  </div>
</footer>
            
<script src="script.js"></script>

</body>
</html>

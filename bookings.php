<?php
session_start();
include("connectphp
");
include("registerphp
");

if(!isset($_SESSION['username'])){
  header("Location: Signinphp
  ");
 exit();
}


?>


<!DOCTYPE html
>
<html
 lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bookings</title>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="bookings.css">
  <link rel="stylesheet" href="common/styles/footer.css">
  <link rel="stylesheet" href="common/styles/Header.css">

  <style>
    #flight-widget {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh; /* value to move the widget down */
      margin-top: 30px; /* Additional margin to move the widget down */
      
    }
  </style>
</head>
<body>
<!--                  Header                      -->

<?php include 'navphp
'; ?>
  <span class="big-circle"></span>

    <!--                  Flight Widget Section                  -->
    <section id="flight-widget">
        <script async src="https://tp.media/content?currency=aed&trs=322558&shmarker=547956&combine_promos=101_7873&show_hotels=true&powered_by=true&locale=en&searchUrl=www.aviasales.com%2Fsearch&primary_override=%23fcad02&color_button=%23fcad02&color_icons=%23fcad02&dark=%23262626&light=%23FFFFFF&secondary=%23FFFFFF&special=%23C4C4C4&color_focused=%23fcad02&border_radius=2&no_labels=&plain=false&promo_id=7879&campaign_id=100" charset="utf-8"></script>
  </section>
 
  <span class="circle one"></span>
  <span class="circle two"></span>

<!--                  Footer                      -->
<footer id="cs-footer-308">
    <div class="cs-container">
        <!-- Logo Group -->
        <div class="cs-logo-group">
          <a aria-label="go back to home" class="cs-logo" href="Home.php
          ">
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
                <a class="cs-nav-link" href="Home.php
                ">Home</a>
            </li>
            <li class="cs-nav-li">
                <a class="cs-nav-link" href="About.php
                ">About</a>
            </li>
            <li class="cs-nav-li">
                <a class="cs-nav-link" href="Destinations.php
                ">Digital Guides</a>
            </li>
            <li class="cs-nav-li">
              <a class="cs-nav-link" href="bookings.php
              ">Book Flights & Hotels</a>
          </li>
            <li class="cs-nav-li">
              <a class="cs-nav-link" href="Map.php
              ">Interactive Map</a>
          </li>
            <li class="cs-nav-li">
                <a class="cs-nav-link" href="contact.php
                ">Contact</a>
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
        <span class="cs-copyright">© Copyright 2024 - <a class="cs-copyright-link" href="Home.php
        ">Digital Backpackers</a></span>
    </div>
  </footer>

<script>document.getElementById('menu-btn').addEventListener('click', function () {
  document.querySelector('.navbar').classList.toggle('active');
  console.log("I am active")
});
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Istanbul Interactive Map</title>
  <link rel="stylesheet" href="istmap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="common/styles/footer.css">
  <link rel="stylesheet" href="common/styles/Header.css">



  <style>
    /* Optional CSS styling */
    .map-container {
      width: 100%;
      float: right;
      margin-top: 50px;

    }
    .map-container iframe {
      width: 100%;
      height: 500px; /* Adjust height as needed */
    }
   
  </style>
</head>
<body>
  <?php include 'nav.php'; ?>  


      <div class="main">
        
        <img src="Assets/Interactive.png" />
      </div>

      <div class="container supporting">
        <img src="Assets/mp.png" />
        <div class="description">
          <h2>Unveiling Istanbul's Majesty: Your Interactive Map to History, Delights & Delights</h2>
          <p>Embark on a captivating journey through Istanbul with our interactive map! We've meticulously pinned locations to unveil the majesty of this historic city. From indulging in the city's delectable cuisine to discovering awe-inspiring mosques and rejuvenating hammams, our map will be your essential guide. Explore bustling bazaars brimming with treasures, wander through the architectural wonders of Istanbul's past, and savor the flavors that define this vibrant metropolis.
          </p>
        </div>
      </div>

  

  <!-- Map container -->
  <div class="map-container">
    <!-- Paste the Google My Maps iframe code here -->
    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1EkiwTzd75cX-ojo6JVme5ceA17wxCAk&ehbc=2E312F" width="100%" height="480"></iframe>
  </div>


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
          <span class="cs-header">Links</span>
      </li>
          <li class="cs-nav-li">
              <a class="cs-nav-link" href="Home.html">Home</a>
          </li>
          <li class="cs-nav-li">
              <a class="cs-nav-link" href="About.html">About</a>
          </li>
          <li class="cs-nav-li">
            <a class="cs-nav-link" href="Destinations.html">Digital Guides</a>
        </li>
        <li class="cs-nav-li">
          <a class="cs-nav-link" href="bookings.html">Book Flights & Hotels</a>
      </li>
        <li class="cs-nav-li">
          <a class="cs-nav-link" href="Map.html">Interactive Map</a>
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
      <span class="cs-copyright">© Copyright 2024 - <a class="cs-copyright-link" href="">Digital Backpackers</a></span>
  </div>
</footer>
<script>document.getElementById('menu-btn').addEventListener('click', function () {
  document.querySelector('.navbar').classList.toggle('active');
  console.log("I am active")
});
</script>
</body>

</html>
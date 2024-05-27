<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tbilisi Map</title>
  <link rel="stylesheet" href="istmap.css">
  <link rel="stylesheet" href="common/styles/footer.css">
  <link rel="stylesheet" href="common/styles/Header.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


  <style>
    /* Optional CSS styling */
    .map-container {
      width: 100%;
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
          <h2>Unveiling Tbilisi's Soul: Your Interactive Map to History, Food & Adventure

          </h2>
          <p>Uncover the captivating spirit of Tbilisi with our interactive map! We've meticulously pinned locations to guide you through the heart and soul of this vibrant city. From indulging in delectable Georgian cuisine to exploring ancient churches and soaking in therapeutic sulfur baths, our map will be your essential companion. Wander through charming cobbled streets lined with unique shops, delve into the rich history of Tbilisi's past, and savor the flavors that define this unforgettable destination.
          </p>
          
        </div>
      </div>

  
  <!-- Paste the Google My Maps iframe code here -->
  <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1CeV1GaCAbTss1ooQEZ_8kjKC7pUPhkg&ehbc=2E312F" width="100%" height="480"></iframe>

  <!--                  Footer                      -->
<footer id="cs-footer-308">
  <div class="cs-container">
      <!-- Logo Group -->
      <div class="cs-logo-group">
        <a aria-label="go back to home" class="cs-logo" href="index.php">
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
              <a class="cs-nav-link" href="index.php">Home</a>
          </li>
          <li class="cs-nav-li">
              <a class="cs-nav-link" href="About.php">About</a>
          </li>
          <li class="cs-nav-li">
            <a class="cs-nav-link" href="Destinations.php">Digital Guides</a>
        </li>
        <li class="cs-nav-li">
          <a class="cs-nav-link" href="bookings.php">Book Flights & Hotels</a>
      </li>
        <li class="cs-nav-li">
          <a class="cs-nav-link" href="Map.php">Interactive Map</a>
      </li>
          <li class="cs-nav-li">
              <a class="cs-nav-link" href="contact.php">Contact</a>
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
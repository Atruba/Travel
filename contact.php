<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xphp">
<head>
    <meta charset="utf-8" />
    <title>ContactUs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="common/styles/footer.css">
    <link rel="stylesheet" href="common/styles/Header.css">

    
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
</head>
<body>
<?php include 'nav.php'; ?>
    <div class="container">
      
        <span class="big-circle"></span>
        <img src="Assets/shape.png" class="square" alt="" />
        <div class="form">
          <div class="contact-info">
            <h3 class="title">Let's get in touch</h3>
            <p class="text">
                We'd love to hear from you. Fill out the form below and we'll get back to you as soon as possible
            </p>
  
            <div class="info">
              <div class="information">
                <img src="Assets/location.png" class="icon" alt="" />
                <p>Bath Spa University, RAK</p>
              </div>
              <div class="information">
                <img src="Assets/email.png" class="icon" alt="" />
                <p>digitalbackpackers24@gmail.com</p>
              </div>
              <div class="information">
                <img src="Assets/phone.png" class="icon" alt="" />
                <p>+971 55 362 0934</p>
              </div>
            </div>
  
            <div class="social-media">
              <p>Connect with us :</p>
              <div class="social-icons">
                <a href="https://www.facebook.com/people/Digital-Backpackers/61559198532404/?mibextid=LQQJ4d">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://discord.gg/juP98Huk">
                  <i class="fab fa-discord"></i>
                </a>
                <a href="https://www.instagram.com/digitalbackpackers_/?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw%3D%3D">
                  <i class="fab fa-instagram"></i>
                </a>
                <a href="https://wa.me/971553620934">
                  <i class="fab fa-whatsapp"></i>
                </a>

                
                
              </div>
            </div>
          </div>
  
          <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>
  
            <form action="https://api.web3forms.com/submit" method="POST">
              <h3 class="title">Contact us</h3>
              <div class="input-container">
                <input type="hidden" name="access_key" value="ea310936-2287-4af2-b88c-9df93e1b0d5c">
                <input type="text" name="name" class="input" />
                <label for="">Username</label>
                <span>Username</span>
              </div>
              <div class="input-container">
                <input type="email" name="email" class="input" />
                <label for="">Email</label>
                <span>Email</span>
              </div>
              <div class="input-container">
                <input type="tel" name="phone" class="input" />
                <label for="">Phone</label>
                <span>Phone</span>
              </div>
              <div class="input-container textarea">
                <textarea name="message" class="input"></textarea>
                <label for="">Message</label>
                <span>Message</span>
              </div>
              <input type="submit" value="Send" class="btn" />
            </form>
          </div>
        </div>
        <span class="big-circle1"></span>
      </div>
  
      <div class="google-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3593.8816077086462!2d55.89846777464471!3d25.741428509443896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ef67451f56ae4d7%3A0x9338a5c333829d48!2sBath%20Spa%20University!5e0!3m2!1sen!2sae!4v1715497445848!5m2!1sen!2sae" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!--                  Footer                      -->
<footer id="cs-footer-308">
  <div class="cs-container">
      <!-- Logo Group -->
      <div class="cs-logo-group">
        <a aria-label="go back to home" class="cs-logo" href="Home.php">
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
              <a class="cs-nav-link" href="Home.php">Home</a>
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
      <span class="cs-copyright">© Copyright 2024 - <a class="cs-copyright-link" href="Home.php">Digital Backpackers</a></span>
  </div>
</footer>
      <script src="contact.js"></script>     
   
</body>
</html>
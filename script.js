let navbar = document.querySelector('.header-mobile .navbar-mobile');

document.getElementById('menu-btn').addEventListener('click', function() {
  navbar.classList.toggle('show');
});





// Initialize the slider and show the initial slide
let slideIndex = 1;
showSlides(slideIndex);

// Function to handle the click on slider images
function currentSlide(n) {
  // Show the selected slide and update the background image
  showSlides(slideIndex = n);
  changeBackgroundImage(n);
  
  // Toggle the content visibility
  toggleContent();
}

// Function to toggle the visibility of the title and paragraph
function toggleContent() {
  var title = document.getElementById("home-title");
  var paragraph = document.querySelector(".content-tab2 p");
  
  
  // Add the 'visible' class to start the animation
  title.classList.add("visible");
  paragraph.classList.add("visible");

}

// Function to show the selected slide
function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slider-images")[0].getElementsByTagName("img");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].classList.remove("active");
  }
  slides[slideIndex-1].classList.add("active");
}
// Function to change the background image based on the selected slide
function changeBackgroundImage(n) {
    let backgroundImage;
    let titleText;
    switch(n) {
      case 1:
        backgroundImage = "turkey.png";
        titleText = "the Magic of Turkey";
        break;
      case 2:
        backgroundImage = "UK.png";
        titleText = "the Beauty of the UK";
        break;
      case 3:
        backgroundImage = "aus.png";
        titleText = "the Charm of Australia";
        break;
      case 4:
        backgroundImage = "georg1.png"; // Replace with your Georgia image
        titleText = "the Unveiling Tbilisi's Treasures";
      break;
      case 5:
        backgroundImage = "japan1.png"; // Replace with your Japan image
        titleText = "the Tokyo Treasures on a Budget";
      break;
      // Add more cases for additional images
      default:
        backgroundImage = "turkey.png"; // Default background image
        titleText = "Experience the Magic of Dubai";
    }
    document.getElementById("home").style.backgroundImage = "url('" + backgroundImage + "')";
    document.getElementById("home-title").innerText = titleText;
  }

  document.querySelectorAll('.about .video-container .controls .control-btn').forEach(btn =>{
    btn.onclick = () =>{
        let src=btn.getAttribute('data-src');
        document.querySelector('.about .video-container .video').src=src;
    }
  })

  







// Contact
const toggleSwitch = document.querySelector('.theme-switch input[type="checkbox"]');

function switchTheme(e) {
    if (e.target.checked) {
        document.documentElement.setAttribute('data-theme', 'dark');
    }
    else {
        document.documentElement.setAttribute('data-theme', 'light');
    }
}

toggleSwitch.addEventListener('change', switchTheme, false);


const name = document.getElementById('name');
const email = document.getElementById('email');
const message = document.getElementById('message');
const contactForm = document.getElementById('contact-form');
const errorElement = document.getElementById('error');
const successMsg = document.getElementById('success-msg');
const submitBtn = document.getElementById('submit');

const validate = (e) => {
    e.preventDefault();

    if (name.value.length < 3) {
        errorElement.innerHTML = 'Your name should be at least 3 characters long.';
        return false;
    }

    if (!(email.value.includes('.') && (email.value.includes('@')))) {
        errorElement.innerHTML = 'Please enter a valid email address.';
        return false;
    }

    if (!emailIsValid(email.value)) {
        errorElement.innerHTML = 'Please enter a valid email address.';
        return false;
    }

    if (message.value.length < 15) {
        errorElement.innerHTML = 'Please write a longer message.';
        return false;
    }

    errorElement.innerHTML = '';
    successMsg.innerHTML = 'Thank you! I will get back to you as soon as possible.';

    e.preventDefault();
    setTimeout(function () {
        successMsg.innerHTML = '';
        document.getElementById('contact-form').reset();
    }, 6000);

    return true;

}

const emailIsValid = email => {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

submitBtn.addEventListener('click', validate);








// **1. Console Logging:**
function logPlaceholder(message) {
  console.log(message, document.getElementById("destination-input").placeholder);
}

// **2. Temporary Click Event Listener:**
const destinationInput = document.getElementById("destination-input");
destinationInput.addEventListener("click", () => {
  console.log("Input clicked, placeholder:", destinationInput.placeholder);
});


// **Dropdown Functionality:**

const dropdownList = document.querySelector(".dropdown-list");
const selectedCountryInput = document.querySelector(".selected-country");
const originalPlaceholder = destinationInput.placeholder;

dropdownList.addEventListener("click", (event) => {
  if (event.target.classList.contains("dropdown-item")) {
    const selectedCountry = event.target.dataset.value;
    destinationInput.value = selectedCountry;
    destinationInput.placeholder = selectedCountry; // Update placeholder
    selectedCountryInput.value = selectedCountry;
    dropdownList.style.display = "none"; /* Hide dropdown list after selection */

    // **Log Placeholder Update:**
    logPlaceholder("Updated placeholder after selection:");
  }
});










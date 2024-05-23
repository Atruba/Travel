let navbar = document.querySelector('.header-mobile .navbar-mobile');

document.getElementById('menu-btn').addEventListener('click', function() {
  navbar.classList.toggle('show');
});

// Initialize the slider and show the initial slide
let slideIndex = 1; // Declare and initialize slideIndex once
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
        backgroundImage = "Assets/turkey.png";
        titleText = "the Magic of Turkey";
        break;
      case 2:
        backgroundImage = "Assets/UK.png";
        titleText = "the Beauty of the UK";
        break;
      case 3:
        backgroundImage = "Assets/aus.png";
        titleText = "the Charm of Australia";
        break;
      case 4:
        backgroundImage = "Assets/georg1.png"; // Replace with your Georgia image
        titleText = "the Unveiling Tbilisi's Treasures";
      break;
      case 5:
        backgroundImage = "Assets/japan1.png"; // Replace with your Japan image
        titleText = "the Tokyo Treasures on a Budget";
      break;
      // Add more cases for additional images
      default:
        backgroundImage = "Assets/turkey.png"; // Default background image
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

// Function to handle the form submission
function redirectToCityPage() {
  // Get the selected city value from the dropdown
  let selectedCity = document.getElementById('city').value;
  
  // Redirect to the selected city's page
  if (selectedCity) {
      window.location.href = selectedCity;
  }
}

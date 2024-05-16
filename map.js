(function ($) {
    $(function () {
  
      
  
    });
  })(jQuery);




  const panelLink = document.querySelector('.panel-link');
  const popupForm = document.querySelector('.popup-form');
  
  panelLink.addEventListener('click', (e) => {
    e.preventDefault();
    popupForm.style.display = 'block';
  });
  
  popupForm.addEventListener('click', (e) => {
    if (e.target === popupForm) {
      popupForm.style.display = 'none';
    }
  });
  
  
  
let next = document.querySelector('.next')
let prev = document.querySelector('.prev')

next.addEventListener('click', function(){
    let items = document.querySelectorAll('.item')
    document.querySelector('.slidee').appendChild(items[0])
})

prev.addEventListener('click', function(){
    let items = document.querySelectorAll('.item')
    document.querySelector('.slidee').prepend(items[items.length - 1]) // here the length of items = 6
})





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







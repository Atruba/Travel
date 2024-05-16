/*active button class onclick*/
$('nav a').click(function(e) {
  e.preventDefault();
  $('nav a').removeClass('active');
  $(this).addClass('active');
  $('.rightbox > div').addClass('noshow');
  if(this.id === 'payment') {
    $('.payment').removeClass('noshow');
  }
  else if (this.id === 'profile') {
    $('.profile').removeClass('noshow');
  }
  else if(this.id === 'subscription') {
    $('.subscription').removeClass('noshow');
  }
  else if(this.id === 'privacy') {
    $('.privacy').removeClass('noshow');
  }
  else if(this.id === 'settings') {
    $('.settings').removeClass('noshow');
  }
});

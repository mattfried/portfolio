$('html').css('opacity', '1');

// ********* NAVBAR DROP DOWN *********

// variables & counter
const navbarButtonImage = document.getElementById('navbarButtonImage');
const buttonNavbarMenu = document.getElementById('buttonNavbarMenu');
let counter = 0;

// click event listener
document.addEventListener('click', e => {
  const target = e.target;
  // if navbar button is clicked & drop down menu ISN'T already visible
  if ((target == navbarButtonImage) && (counter == 0)) {
    // change button img, & fade-in drop down menu
    $('.navbarButton img').delay(50).hide();
    $('.navbarButton img').attr('src', 'img/close.svg');
    $('.navbarButton img').css('width', '26px');
    $('.navbarButton img').slideDown(400);
    $('.buttonNavbarMenu').delay(150).fadeIn(650);
    counter = 1;
    // if nvabar button is clicked & drop down menu IS already visible
  } else if ((target == navbarButtonImage) && (counter == 1)) {
    counter = 0;
    // change button back to original, & fade-out drop down menu
    $('.buttonNavbarMenu').fadeOut(400);
    $('.navbarButton img').delay(100).hide().delay(100);
    $('.navbarButton img').attr('src', 'img/navbarImage.svg');
    // navbar size matches css properties
    $('.navbarButton img').css('width', '35px');
    $('.navbarButton img').slideDown(400);
  }
});

// ********* / NAVBAR DROP DOWN *********



// ********* ABOUT PROJECT DIV DROP DOWNS *********

// dropdown button change function
const aboutProjectDropdown = (link, aboutDiv) => {
  if (link.hasClass('aboutProjectLinkJS') === false) {
    aboutDiv.slideDown(500);
    link.html('LEARN MORE &nbsp; &#8673;').addClass('aboutProjectLinkJS');
  } else {
    aboutDiv.slideUp(500);
    link.html('LEARN MORE &nbsp; &#8675;').removeClass('aboutProjectLinkJS');
  }
}

// variables
const aboutProjectLinks = document.getElementsByClassName('aboutProjectLink');
const aboutProjectDivs = document.getElementsByClassName('aboutProjectDiv');

// click event listener for each 'aboutProjectLink'
for (let i = 1; i <= aboutProjectLinks.length; i++) {
  $('#aboutProject' + i + 'Link').click( (e) => {
    aboutProjectDropdown($('#aboutProject' + i + 'Link'), $('#aboutProject' + i));
  });
}

// ********* / ABOUT PROJECT DIV DROP DOWNS *********

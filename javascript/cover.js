// ********* MAIN TITLE FADE IN *********

// .mattfried,
// .titleTagLine,
// .aboutSectionTitle,
// .aboutArrow
// are begin hidden via 'style.css' stylesheet

// function to fade-in title line
const titleLineFadeIn = () => {
  $('.titleLine').addClass('titleLineWidth');
}

// function to fade-in main title & tag line
const mainTitleFadeIn = () => {
  $('.mattFried').slideDown(500).css('opacity', '1');
  $('.titleTagLine').slideDown(500).css('opacity', '1');
}

// function to animate-in about me indicator
const aboutMeAnimation = () => {
  $('.aboutSectionTitleDiv').addClass('dropDown');
  $('.aboutSectionTitle').delay(1500).fadeIn(250);
  $('.aboutArrow').fadeIn(500);
}

// call this function after 0.5 seconds
setTimeout(titleLineFadeIn, 500);
// call this function after 2 seconds
setTimeout(mainTitleFadeIn, 1500);
// call this function after 2.5 seconds
setTimeout(aboutMeAnimation, 2000);

// ********* / MAIN TITLE FADE IN *********

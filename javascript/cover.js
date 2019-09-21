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
// const mainTitleFadeIn = () => {
//   $('.mattFried').slideDown(500).css('opacity', '1');
//   $('.titleTagLine').slideDown(500).css('opacity', '1');
// }

// function to animate-in about me indicator
// const aboutMeAnimation = () => {
//   $('.aboutSectionTitleDiv').addClass('dropDown');
//   $('.aboutSectionTitle').delay(1500).fadeIn(250);
//   $('.aboutArrow').fadeIn(500);
// }

// call this function after 0.5 seconds
setTimeout(titleLineFadeIn, 2000);
// call this function after 2 seconds
//setTimeout(mainTitleFadeIn, 1500);
// call this function after 2.5 seconds
//setTimeout(aboutMeAnimation, 2000);


const myName = 'Matt Fried';
const tagMessage = "Hi! ✌️ I'm a Web Developer"

for (let i = 0; i < myName.length; i++) {
  document.getElementById('mattFried').innerHTML += `<span class="nameLetter">${myName[i]}</span>`;
}

for (let i = 0; i < tagMessage.length; i++) {
  document.getElementById('titleTagLine').innerHTML += `<span class="tagLetter">${tagMessage[i]}</span>`;
}

const nameLetters = document.getElementsByClassName('nameLetter');
const tagLetters = document.getElementsByClassName('tagLetter');
const nameLettersArr = [...nameLetters];
const tagLettersArr = [...tagLetters];

const nameTL = new TimelineLite({delay:0.5});
const msgTL = new TimelineLite({delay:3});

const nameAnim = (item, index) => {
    nameTL.to(item, 0.1, {opacity:1});
}

const msgAnim = (item, index) => {
    msgTL.to(item, 0.05, {opacity:1});
}

const firstAnim = nameLettersArr.forEach(nameAnim);
const secondAnim = tagLettersArr.forEach(msgAnim);

// ********* / MAIN TITLE FADE IN *********

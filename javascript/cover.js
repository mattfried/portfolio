// text to be rendered inside of #mattFried & #titleTagLine element
const myName = 'Matt Fried';
const tagMessage = "Hi! ✌️ I'm a Web Developer"

// For loop to wrap each letter of myName variable above
// in its own <span> element, inside #mattFried <h1> element
for (let i = 0; i < myName.length; i++) {
  document.getElementById('mattFried').innerHTML += `<span class="nameLetter">${myName[i]}</span>`;
}

// For loop to wrap each letter of tagMessage variable above
// in its own <span> element, inside #titleTagLine <p> element
for (let i = 0; i < tagMessage.length; i++) {
  document.getElementById('titleTagLine').innerHTML += `<span class="tagLetter">${tagMessage[i]}</span>`;
}

// store each <span> element of each letter
// for both myName & tagMessage variables above
// into each seperate array to use later
const nameLetters = document.getElementsByClassName('nameLetter');
const tagLetters = document.getElementsByClassName('tagLetter');
const nameLettersArr = [...nameLetters];
const tagLettersArr = [...tagLetters];

// create animation timeline for the following elements:
// #mattFried, #titleTagLine, #titleLine
const nameTL = new TimelineLite({delay:0.5});
const msgTL = new TimelineLite({delay:3});

// specify animation type for each <span> element of each letter
// inside of #mattFried element
const nameAnim = (item, index) => {
    nameTL.to(item, 0.1, {opacity:1});
}

// specify animation type for each <span> element of each letter
// inside of #titleTagLine element
const msgAnim = (item, index) => {
    msgTL.to(item, 0.05, {opacity:1});
}

// run animations
nameLettersArr.forEach(nameAnim);
TweenMax.to('.titleLine', .8, {width:'12%', delay:1.75, ease:Back.easeOut.config(2.25)});
tagLettersArr.forEach(msgAnim);

TweenMax.to('.aboutArrow', 1, {opacity:1, display:'inline', delay:4.25});
TweenMax.to('.aboutSectionTitleDiv', 0.75, {bottom:'10px', delay:4.5, ease:Power1.easeInOut});
TweenMax.to('.aboutSectionTitle', 2, {opacity:1, display:'block', delay:5.25});

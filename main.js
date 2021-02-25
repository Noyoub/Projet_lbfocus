/* SCOLLREVEAL */

const sr = ScrollReveal({
  origin: 'top',
  distance: '20px',
  duration: 1000,
  scale: 0.5,
});

sr.reveal('#mainTitle', {
});


sr.reveal('.header p', {
  delay: 300
});

sr.reveal('.card', {
  delay: 700
});

sr.reveal('.flip-card', {
  delay: 700
}, 500);

/* MENU*/

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}







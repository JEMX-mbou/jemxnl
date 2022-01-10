// setInterval executes the slide function every 5000 milliseconds (5 seconds).
if (document.querySelectorAll('.carousel div.carousel-item').length > 1) {
  setInterval(function(){ slide() }, 5000);
}
// Start slide function.
function slide() {

  // Two elements are selected.
  // The active slide and the slide after that.
  let activeSlide = document.querySelector('.carousel div.carousel-item.active'),
      nextSlide = activeSlide.nextElementSibling;

  // If the nextSlide is empty, it means the active slide is the last in the series.
  // The first slide in the masthead will be selected.
  if (!nextSlide) {
    nextSlide = document.querySelector('.carousel div.carousel-item:first-of-type');
  }

  // The active slide will slide to the left.
  activeSlide.classList.remove('active');
  activeSlide.classList.add('sliding');

  //The next slide into view.
  nextSlide.classList.add('active');

  // After a timeout of 800 milliseconds (.8 seconds) the sliding slide will become inactive.
  // And will slide to the right in the background.
  setTimeout(function(){
    document.querySelector('.carousel div.carousel-item.sliding').classList.remove('sliding');
  }, 2000);
}

let menuButton = document.querySelector('nav .menu-icon'),
    menuEl = document.querySelector('nav .menu');
menuButton.addEventListener('click', function() {
  menuButton.classList.toggle('active');
  menuEl.classList.toggle('active');
});

let tachometers = document.querySelectorAll('.tachometer');
tachometers.forEach( function(el) {
  let rotation = 'rotate(' + (180 / (100 / parseInt(el.getAttribute('percent'))) - 45) + 'deg)',
      duration = 500,
      inner = el.children[1];
      inner.animate(
        [
          { transform: 'rotate(-45deg)' },
          { transform: rotation }
        ], {
          duration: duration,
          animationIterationCount: 1
        }
      );
      setTimeout(function() { inner.style.transform = rotation}, duration);
});

let iconCards = document.querySelectorAll('div.card.icon');
iconCards.forEach( function( card ) {
  let icon = card.querySelector('i');
  card.onmouseover = (function() { icon.style.color = icon.getAttribute('hover'); });
  card.onmouseout = (function() { icon.removeAttribute('style'); });
});

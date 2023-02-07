// DOM utility functions:

const el = (sel, par) => (par || document).querySelector(sel);
const els = (sel, par) => (par || document).querySelectorAll(sel);
const elNew = (tag, prop) => Object.assign(document.createElement(tag), prop);

// Helper functions:

const mod = (n, m) => (n % m + m) % m;

// Task: Carousel:

const carousel = (elCarousel) => {

  const animation = 500;
  const pause = 5000;
  // Or use something like: const animation = Math.abs(elCarousel.dataset.carouselAnimation ?? 500);

  const elCarouselSlider = el(".carousel-slider", elCarousel);
  const elsSlides = els(".carousel-slide", elCarouselSlider);
  const elsBtns = [];

  let itv; // Autoslide interval
  let tot = elsSlides.length; // Total slides
  let c = 0;

  if (tot < 2) return; // Not enough slides. Do nothing.

  // Methods:
  const anim = (ms = animation) => {
    const cMod = mod(c, tot);
    // Move slider
    elCarouselSlider.style.transitionDuration = `${ms}ms`;
    elCarouselSlider.style.transform = `translateX(${(-c - 1) * 100}%)`;
    // Handle active classes (slide and bullet)
    elsSlides.forEach((elSlide, i) => elSlide.classList.toggle("is-active", cMod === i));
    elsBtns.forEach((elBtn, i) => elBtn.classList.toggle("is-active", cMod === i));
  };

  const prev = () => {
    if (c <= -1) return; // prevent blanks on fast prev-click
    c -= 1;
    anim();
  };

  const next = () => {
    if (c >= tot) return; // prevent blanks on fast next-click
    c += 1;
    anim();
  };

  const goto = (index) => {
    c = index;
    anim();
  };

  const play = () => {
    itv = setInterval(next, pause + animation);
  };

  const stop = () => {
    clearInterval(itv);
  };

  // Buttons:

  const elPrev = elNew("button", {
    type: "button",
    className: "carousel-prev",
    innerHTML: "<span><i class='fa-solid fa-arrow-left'></i></span>",
    onclick: () => prev(),
  });
  elPrev.classList.add('btn', 'btn-icon', 'btn-charcoal')

  const elNext = elNew("button", {
    type: "button",
    className: "carousel-next btn btn-icon b",
    innerHTML: "<span><i class='fa-solid fa-arrow-right'></i></span>",
    onclick: () => next(),
  });
  elNext.classList.add('btn', 'btn-icon', 'btn-charcoal')

  // Navigation:

  const elNavigation = elNew("div", {
    className: "carousel-navigation",
  });

  // Navigation bullets:

  for (let i = 0; i < tot; i++) {
    const elBtn = elNew("div", {
      type: "div",
      className: "carousel-bullet",
      onclick: () => goto(i)
    });
    elsBtns.push(elBtn);
  }


  // Events:

  // Infinite slide effect:
  elCarouselSlider.addEventListener("transitionend", () => {
    if (c <= -1) c = tot - 1;
    if (c >= tot) c = 0;
    anim(0); // quickly switch to "c" slide (with animation duration 0)
  });

  // Pause on pointer enter:
  elCarousel.addEventListener("pointerenter", () => stop());
  elCarousel.addEventListener("pointerleave", () => play());

  elCarousel.addEventListener('touchstart', handleTouchStart, false);        
  elCarousel.addEventListener('touchmove', handleTouchMove, false);
  
  var xDown = null;                                                        
  var yDown = null;
  
  function getTouches(evt) {
    return evt.touches ||             // browser API
           evt.originalEvent.touches; // jQuery
  }                                                     
                                                                           
  function handleTouchStart(evt) {
      const firstTouch = getTouches(evt)[0];                                      
      xDown = firstTouch.clientX;                                      
      yDown = firstTouch.clientY;                                      
  };                                                
                                                                           
  function handleTouchMove(evt) {
    evt.preventDefault()
      if ( ! xDown || ! yDown ) {
          return;
      }
  
      var xUp = evt.touches[0].clientX;                                    
      var yUp = evt.touches[0].clientY;
  
      var xDiff = xDown - xUp;
      var yDiff = yDown - yUp;
                                                                           
      if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {/*most significant*/
          if ( xDiff > 0 ) {
              /* right swipe */ 
              next()
          } else {
              /* left swipe */
              prev()
          }                       
      } else {
          if ( yDiff > 0 ) {
              /* down swipe */ 
          } else { 
              /* up swipe */
          }                                                                 
      }
      /* reset values */
      xDown = null;
      yDown = null;                                             
  };

  // Init:

  // Insert UI elements:
  elNavigation.append(...elsBtns);
  elCarousel.append(elPrev, elNext, elNavigation);

  // Clone first and last slides (for "infinite" slider effect)
  elCarouselSlider.prepend(elsSlides[tot - 1].cloneNode(true));
  elCarouselSlider.append(elsSlides[0].cloneNode(true));

  // Initial slide
  anim();

  // Start autoplay
  play();
};

// Allows to use multiple carousels on the same page:
els(".carousel").forEach(carousel);

// swipe

document.addEventListener('touchstart', handleTouchStart, false);        
document.addEventListener('touchmove', handleTouchMove, false);

var xDown = null;                                                        
var yDown = null;

function getTouches(evt) {
  return evt.touches ||             // browser API
         evt.originalEvent.touches; // jQuery
}                                                     

function handleTouchStart(evt) {
    const firstTouch = getTouches(evt)[0];                                      
    xDown = firstTouch.clientX;                                      
    yDown = firstTouch.clientY;                                      
};                                                

function handleTouchMove(evt) {
    if ( ! xDown || ! yDown ) {
        return;
    }

    var xUp = evt.touches[0].clientX;                                    
    var yUp = evt.touches[0].clientY;

    var xDiff = xDown - xUp;
    var yDiff = yDown - yUp;

    if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {/*most significant*/
        if ( xDiff > 0 ) {
            /* left swipe */ 
        } else {
            /* right swipe */
        }                       
    } else {
        if ( yDiff > 0 ) {
            /* up swipe */ 
        } else { 
            /* down swipe */
        }                                                                 
    }
    /* reset values */
    xDown = null;
    yDown = null;                                             
};


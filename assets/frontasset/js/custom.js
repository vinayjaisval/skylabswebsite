$('.VirendraSlickSlider').slick({
  centerMode: true,
  centerPadding: '170px',
  autoplay: true,
  autoplaySpeed: 1000,
  slidesToShow: 2,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]
});



$('.mySlider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  autoplay:true,
  arrows: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});



// our clients/Partners
$('.ourPartNes').slick({
  dots: false,
  arrows:false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows:false,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        arrows:false,
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows:false,
        infinite: true,
        dots: false,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});





// slideshow


// IMAGE SLIDES & CIRCLES ARRAYS, & COUNTER
var imageSlides = document.getElementsByClassName('imageSlides');
var circles = document.getElementsByClassName('circle');
var leftArrow = document.getElementById('leftArrow');
var rightArrow = document.getElementById('rightArrow');
var counter = 0;

// HIDE ALL IMAGES FUNCTION
function hideImages() {
for (var i = 0; i < imageSlides.length; i++) {
  imageSlides[i].classList.remove('visible');
}
}

// REMOVE ALL DOTS FUNCTION
function removeDots() {
for (var i = 0; i < imageSlides.length; i++) {
  circles[i].classList.remove('dot');
}
}

// SINGLE IMAGE LOOP/CIRCLES FUNCTION
function imageLoop() {
var currentImage = imageSlides[counter];
var currentDot = circles[counter];
currentImage.classList.add('visible');
removeDots();
currentDot.classList.add('dot');
counter++;
}

// LEFT & RIGHT ARROW FUNCTION & CLICK EVENT LISTENERS
function arrowClick(e) {
var target = e.target;
if (target == leftArrow) {
  clearInterval(imageSlideshowInterval);
  hideImages();
  removeDots();
  if (counter == 1) {
    counter = (imageSlides.length - 1);
    imageLoop();
    imageSlideshowInterval = setInterval(slideshow, 10000);
  } else {
    counter--;
    counter--;
    imageLoop();
    imageSlideshowInterval = setInterval(slideshow, 10000);
  }
} 
else if (target == rightArrow) {
  clearInterval(imageSlideshowInterval);
  hideImages();
  removeDots();
  if (counter == imageSlides.length) {
    counter = 0;
    imageLoop();
    imageSlideshowInterval = setInterval(slideshow, 10000);
  } else {
    imageLoop();
    imageSlideshowInterval = setInterval(slideshow, 10000);
  }
}
}

leftArrow.addEventListener('click', arrowClick);
rightArrow.addEventListener('click', arrowClick);


// IMAGE SLIDE FUNCTION
function slideshow() {
if (counter < imageSlides.length) {
  imageLoop();
} else {
  counter = 0;
  hideImages();
  imageLoop();
}
}

// SHOW FIRST IMAGE, & THEN SET & CALL SLIDE INTERVAL
setTimeout(slideshow, 1000);
var imageSlideshowInterval = setInterval(slideshow, 10000);
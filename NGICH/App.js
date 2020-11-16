// ------------Menu Toggle------------------

const menuToggle = document.querySelectorAll("header .menu");
const menu = document.querySelector("header ul");
menuToggle.forEach((item) => {
  item.addEventListener("click", () => {
    menu.classList.toggle("menu-toggle");
  });
});

// --------------Login / Register---------------
// const loginMenu = document.querySelector("header .active");
// const loginShow = document.querySelector(".login-container");
// const btnClose = document.querySelector("#btn-close");
// loginMenu.addEventListener("click", () => {
//   loginShow.style.clipPath = `circle(70.7% at 50% 50%)`;
// });
// // btnClose.addEventListener("click", () => {
// //   loginShow.style.clipPath = `circle(0 at 50% 50%)`;
// // });

// const btnToggle = document.querySelectorAll(".next-log");
// const resForm = document.querySelector("#res");
// btnToggle.forEach((item) => {
//   item.addEventListener("click", () => {
//     resForm.classList.toggle("show");
//   });
// });

// -------slideshow--------------
let images, dots, prev, next, banner;
banner = document.querySelector(".banner");
images = document.querySelectorAll(".banner img");
dots = document.querySelectorAll(".banner .nav-dot");
prev = document.querySelector(".banner .prev");
next = document.querySelector(".banner .next");

let slideIndex = 0;
showSlide(slideIndex);

function showSlide(n) {
  if (slideIndex > images.length - 1) {
    slideIndex = 0;
  }
  if (slideIndex < 0) {
    slideIndex = images.length - 1;
  }
  let i;
  for (i = 0; i < images.length; i++) {
    images[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" dot-active", "");
  }
  images[slideIndex].style.display = "block";
  dots[slideIndex].className += " dot-active";
}
dots.forEach((item, index) => {
  item.addEventListener("click", () => {
    showSlide((slideIndex = index));
  });
});
prev.addEventListener("click", () => {
  showSlide((slideIndex -= 1));
});
next.addEventListener("click", () => {
  showSlide((slideIndex += 1));
});
let run;

function autoSlide() {
  run = setInterval(() => {
    showSlide((slideIndex += 1));
  }, 2000);
}
autoSlide();
banner.addEventListener("mouseover", () => {
  clearInterval(run);
  run = null;
});
banner.addEventListener("mouseout", () => {
  autoSlide();
});

//    lazy load------------------------

document.addEventListener("DOMContentLoaded", function () {
  var lazyloadImages = document.querySelectorAll("img.lazy");
  var lazyloadThrottleTimeout;

  function lazyload() {
    if (lazyloadThrottleTimeout) {
      clearTimeout(lazyloadThrottleTimeout);
    }

    lazyloadThrottleTimeout = setTimeout(function () {
      var scrollTop = window.pageYOffset;
      lazyloadImages.forEach(function (img) {
        if (img.offsetTop < window.innerHeight + scrollTop) {
          img.src = img.dataset.src;
          img.classList.remove("lazy");
          img.style.transform = `scale(1)`;
          img.style.transition = `2s`;
        }
      });
      if (lazyloadImages.length == 0) {
        document.removeEventListener("scroll", lazyload);
        window.removeEventListener("resize", lazyload);
        window.removeEventListener("orientationChange", lazyload);
      }
    }, 20);
  }

  document.addEventListener("scroll", lazyload);
  window.addEventListener("resize", lazyload);
  window.addEventListener("orientationChange", lazyload);
});

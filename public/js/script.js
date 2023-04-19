// const statNumbers = document.querySelectorAll('.statNumber');
// const articles = document.querySelectorAll('article');
const toTopBtn = document.querySelector('#toTop');
const headerWrap = document.querySelector('.headerInnerWrap');
const mainLogo = document.querySelector('.mainLogoWrap img');
const mainLogoInitialHeight = mainLogo.style.height;

// const heroSlideshowImages = document.querySelectorAll('.heroImages img');

// setArticlesClickable();
// upCountNumbers();

/***** To Top Button *************************/
toTopBtn.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo(0, 0);
});
if(window.scrollY > 800) {
    toTopBtn.classList.add('show');
}
window.addEventListener('scroll', (e) => {
    let fromTop = window.scrollY + 400; // +400 so it is more user friendly
    if(fromTop > 800) {
        toTopBtn.classList.add('show');
    } else {
        toTopBtn.classList.remove('show');
    }
    if(fromTop > 600) {
        mainLogo.classList.add('afterScroll');
        headerWrap.classList.add('afterScroll');
   } else {
        mainLogo.classList.remove('afterScroll');
        headerWrap.classList.remove('afterScroll');
    }
});
/*********************************************/
/***** Hero slideshow ************************/
// let curIndex = 0;
// let imgDuration = 4000;

// function slideShow() {
//     curIndex++;
//     if (curIndex == heroSlideshowImages.length) {
//         curIndex = 0;
//         heroSlideshowImages.forEach((element,i) => {
//             if(i != 0) element.style.opacity = 0;
//         });
//     }
//     heroSlideshowImages[curIndex].style.opacity = 1;
//     setTimeout(slideShow, imgDuration);
// }
// if(heroSlideshowImages && heroSlideshowImages.length > 1) setTimeout(slideShow, imgDuration);
/*********************************************/
/***** Fade in elements when in viewport *****/
// Beware of user has disabled JS; do not hide elements using CSS
// const ctaBtnElms = document.querySelectorAll('.ctaBtn');
// const introTexts = document.querySelectorAll('.introTextWrap');
// const observerOptions = {
//     root: null,
//     threshold: 0.2
// };
// function observerCallback(entries, observer) {
//     entries.forEach(entry => {
//         if (entry.isIntersecting) {
//             // entry.target.classList.replace('fadeOut', 'fadeIn');
//             entry.target.style.opacity = 1;
//             entry.target.style.transform = "translateY(0px)";
//         } else {
//             // entry.target.classList.replace('fadeIn', 'fadeOut');
//         }
//     });
// }
// ctaBtnElms.forEach(el => {
//     el.style.opacity = 0; // Beware of user has disabled JS; do not hide elements using CSS
//     el.style.transform = "translateY(50px)";
// });
// introTexts.forEach(el => {
//     // el.style.opacity = 0; // Beware of user has disabled JS; do not hide elements using CSS
//     el.style.transform = "translateY(50px)";
// });
// setTimeout(() => { // using setTimeout for elements that are directly in viewport, so they show the effect
//     const observer = new IntersectionObserver(observerCallback, observerOptions);
//     ctaBtnElms.forEach(el => {
//         el.style.transition = "opacity 0.7s ease-in, transform 0.7s ease-out";
//         observer.observe(el);
//     });
//     introTexts.forEach(el => {
//         el.style.transition = "opacity 0.7s ease-in, transform 0.7s ease-out";
//         observer.observe(el);
//     });
// }, 1);
/*************************************************/



// var swiperPartner = new Swiper(".partnerSwiper", {
//     slidesPerView: 2,
//     spaceBetween: 0,
//     speed: 1000,
//     // loop: true, // not compatible with slidesPerView
//     autoplay: {
//         delay: 2500,
//         disableOnInteraction: false,
//     },
//     breakpoints: {
//         768: {
//           slidesPerView: 3,
//         },
//         1024: {
//           slidesPerView: 5,
//         },
//     }
// });

// var swiperStats = new Swiper(".statsSwiper", {
//     slidesPerView: 1,
//     spaceBetween: 0,
//     speed: 1000,
//     autoplay: {
//         delay: 2500,
//         disableOnInteraction: false,
//     },
//     navigation: {
//         nextEl: ".swiper-button-next-stats",
//         prevEl: ".swiper-button-prev-stats",
//     },
//     breakpoints: {
//         768: {
//             slidesPerView: 2,
//           },
//           1024: {
//             slidesPerView: 3,
//           },
//         }
// });

// var swiperProfessionals = new Swiper(".professionalsSwiper", {
//     slidesPerView: 1,
//     spaceBetween: 0,
//     speed: 1000,
//     autoplay: {
//         delay: 2500,
//         disableOnInteraction: false,
//     },
//     navigation: {
//         nextEl: ".swiper-button-next-prof",
//         prevEl: ".swiper-button-prev-prof",
//     },
//     breakpoints: {
//         480: {
//             slidesPerView: 2,
//           },
//         768: {
//           slidesPerView: 3,
//         },
//       }
// });

// var swiperOurVessels = new Swiper(".ourVesselsSwiper", {
//     slidesPerView: 1,
//     spaceBetween: 0,
//     speed: 1000,
//     navigation: {
//         nextEl: ".swiper-button-next-vessels",
//         prevEl: ".swiper-button-prev-vessels",
//     },
//     pagination: {
//         el: '.swiper-pagination',
//         clickable: true,
//         type: 'bullets',
//     },
//     breakpoints: {
//         480: {
//             slidesPerView: 1,
//           },
//           768: {
//             slidesPerView: 2,
//           },
//           1024: {
//             slidesPerView: 3,
//           },
//     }
// });

// function upCountNumbers() {
//     if(statNumbers && statNumbers.length) {
//         statNumbers.forEach(element => {
//             let number = parseInt(element.innerHTML.replace('.', ''));
//             for (let i = 0; i <= number; i+=1) {
//                 setTimeout(() => {
//                     element.innerHTML = i;
//                 }, i * 1);
//             }
//         });
//     }
// }

// function setArticlesClickable() {
//     if(articles.length) {
//         articles.forEach(item => {
//             let link = item.querySelector('a');
//             if(link) {
//                 item.addEventListener('click', () => {
//                     window.location = link.getAttribute("href");
//                 });
//             }
//         });
//     }
// }

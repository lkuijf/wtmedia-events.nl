// const statNumbers = document.querySelectorAll('.statNumber');
const articles = document.querySelectorAll('article');
const toTopBtn = document.querySelector('#toTop');
const headerWrap = document.querySelector('.headerInnerWrap');
const mainLogo = document.querySelector('.mainLogoWrap img');
const mainLogoInitialHeight = mainLogo.style.height;
const anchors = document.querySelectorAll('.anchorPoint');
const buttons = document.querySelectorAll('.mainNav ul li a');
const burgerMenuLabel = document.querySelector('.burger-label');

let anchorsInViewport = [];

const heroSlideshowImages = document.querySelectorAll('.heroImages div img');

setArticlesClickable();
// upCountNumbers();

setAfterScrollAttributes(); // when page is loaded at some scroll position. scroll event will not fire.

/***** Activate navigation button when anchor is in viewport *************************/
const observerOptionsAnchor = {
    root: null,
    threshold: 0.9 // 1 can sometimes not give the desired result
};
// setTimeout(() => { // using setTimeout for elements that are directly in viewport, so they show the effect
    const observer = new IntersectionObserver(observerAnchorCallback, observerOptionsAnchor);
    anchors.forEach(el => {
        observer.observe(el);
    });
// }, 1);
function observerAnchorCallback(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            anchorsInViewport.push(entry.target.id);
        } else {
            var index = anchorsInViewport.indexOf(entry.target.id);
            if (index !== -1) {
                anchorsInViewport.splice(index, 1);
            }
        }
    });
    setActiveButtons(anchorsInViewport);
}
function setActiveButtons(activeAnchors) {
    if(activeAnchors.length) {
        let alreadyActivated = false;
        buttons.forEach((btnEl, i) => {
            var hash = btnEl.href.substring(btnEl.href.indexOf('#')+1);
            btnEl.classList.remove("active");
            if(activeAnchors.indexOf(hash) !== -1 && !alreadyActivated) {
                btnEl.classList.add("active");
                alreadyActivated = true;
            }
        });
    }
}
/************************************************************************************/

/***** To Top Button *************************/
toTopBtn.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo(0, 0);
});
if(window.scrollY > 800) {
    toTopBtn.classList.add('show');
}
/*********************************************/
/***** When user scrolls *********************/
window.addEventListener("scroll",debounce(function(e){
    setAfterScrollAttributes();
}));
function setAfterScrollAttributes() {
    let fromTop = window.scrollY;
    if(fromTop > 400) {
        toTopBtn.classList.add('show');
    } else {
        toTopBtn.classList.remove('show');
    }
    if(fromTop > 200) {
        mainLogo.classList.add('afterScroll');
        headerWrap.classList.add('afterScroll');
        burgerMenuLabel.classList.add('afterScroll');
   } else {
        mainLogo.classList.remove('afterScroll');
        headerWrap.classList.remove('afterScroll');
        burgerMenuLabel.classList.remove('afterScroll');
    }
}
function debounce(func){
    var timer;
    return function(event){
        if(timer) clearTimeout(timer);
        timer = setTimeout(func,10,event);
    };
}
/*********************************************/
/***** Hero slideshow ************************/
let curIndex = 0;
let imgDuration = 6000;

function slideShow() {
    curIndex++;
    if (curIndex == heroSlideshowImages.length) {
        curIndex = 0;
        heroSlideshowImages.forEach((element,i) => {
            if(i != 0) {
                element.style.opacity = 0;
            }
        });
    }
    heroSlideshowImages[curIndex].style.opacity = 1;
    if(heroSlideshowImages[curIndex-1]) heroSlideshowImages[curIndex-1].style.opacity = 0;
    setTimeout(slideShow, imgDuration);
}
if(heroSlideshowImages && heroSlideshowImages.length > 1) setTimeout(slideShow, imgDuration);
/*********************************************/
/***** Fade in elements when in viewport *****/
// Beware of user has disabled JS; do not hide elements using CSS
const ctaBtnElms = document.querySelectorAll('.ctaBtnWrap');
const serviceBtns = document.querySelectorAll('.serviceBtnWrap');
const headers = document.querySelectorAll('.contentWrapper h1');
const sectionImages = document.querySelectorAll('.fullw img, .twoColumns img');
const observerOptions = {
    root: null,
    threshold: 0.3
};
function observerCallback(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            // entry.target.classList.replace('fadeOut', 'fadeIn');
            entry.target.style.opacity = 1;
            entry.target.style.transform = "translate(0px, 0px)";

            // if(entry.target.classList.contains('imgHolder')) {
            //     entry.target.querySelector('img:first-of-type').style.height = entry.target.querySelector('img:first-of-type').dataset.originalHeight + 'px';
            // }
            
        } else {
            // entry.target.classList.replace('fadeIn', 'fadeOut');
        }
    });
}
ctaBtnElms.forEach(el => {
    el.style.opacity = 0; // Beware of user has disabled JS; do not hide elements using CSS
    el.style.transform = "translate(0px, 50px)";
});
serviceBtns.forEach(el => {
    el.style.opacity = 0; // Beware of user has disabled JS; do not hide elements using CSS
    el.style.transform = "translate(0px, 50px)";
});
headers.forEach(el => {
    el.style.opacity = 0; // Beware of user has disabled JS; do not hide elements using CSS
    el.style.transform = "translate(-50px, 0px)";
});
// sectionImages.forEach(el => {
//     el.onload = function(){
//         this.parentElement.style.height = this.offsetHeight + 'px';
//         this.dataset.originalHeight = this.offsetHeight;
//         this.style.height = 0;
//     }
// });
setTimeout(() => { // using setTimeout for elements that are directly in viewport, so they show the effect
    const observer = new IntersectionObserver(observerCallback, observerOptions);
    ctaBtnElms.forEach(el => {
        el.style.transition = "opacity 0.7s ease-in, transform 0.7s ease-out";
        observer.observe(el);
    });
    serviceBtns.forEach(el => {
        el.style.transition = "opacity 0.7s ease-in, transform 0.7s ease-out";
        observer.observe(el);
    });
    headers.forEach(el => {
        el.style.transition = "opacity 0.7s ease-in, transform 0.7s ease-out";
        observer.observe(el);
    });
    // sectionImages.forEach(el => {
    //     el.style.transition = "height 1.2s ease";
    //     observer.observe(el.parentElement);
    // });
}, 100);
/*************************************************/

var swiperPartner = new Swiper(".partnerSwiper", {
    slidesPerView: 2,
    spaceBetween: 0,
    speed: 1000,
    // loop: true, // not compatible with slidesPerView
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        type: 'bullets',
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        768: {
          slidesPerView: 3,
        },
        1024: {
          slidesPerView: 5,
        },
    }
});

function setArticlesClickable() {
    if(articles.length) {
        articles.forEach(item => {
            let link = item.querySelector('a');
            if(link) {
                item.addEventListener('click', () => {
                    window.location = link.getAttribute("href");
                });
            }
        });
    }
}



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


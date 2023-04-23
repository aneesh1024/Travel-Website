const Menu = document.querySelector('#menu-btn');
const Navbar = document.querySelector('.header .navbar')

Menu.addEventListener('click', () => {
    Menu.classList.toggle('fa-times')
    Navbar.classList.toggle('active')
})


window.onscroll = () => {
    Menu.classList.remove('fa-times');
    Navbar.classList.remove('fa-times');
}


// Animation when visible on Viewport

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show')
        }
        else {
            entry.target.classList.remove('show')
        }
    });
});

const hiddenElements = document.querySelectorAll('.hidden')
hiddenElements.forEach((el) => observer.observe(el))

// Automatic sliding | Home Page



// Swiper

var swiper = new Swiper(".home-slider", {
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    }
});

var swiper = new Swiper(".reviews-slider", {
    grabCursor: true,
    freeMode: true,
    spaceBetween: 20,
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        700: {
            slidesPerView: 2,
        },
        1000: {
            slidesPerView: 3,
        },
    },
});

const loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 3;

loadMoreBtn.addEventListener('click', () => {
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for (let i = currentItem; i < currentItem + 3; i++) {
        boxes[i].style.display = 'inline-block';
    };
    currentItem += 3;
    if (currentItem > boxes.length) {
        loadMoreBtn.classList.add('hide');
    }
})


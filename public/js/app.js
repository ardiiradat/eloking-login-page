document.addEventListener('DOMContentLoaded', function () {
    // Tooltip side checker
    const tooltipTriggers = document.querySelectorAll('.tooltip-trigger');

    function checkTooltipSide(e) {
        const tooltip = this.querySelector('.tooltip');
        const offset = this.getBoundingClientRect().top;
        if (offset < 250) {
            tooltip.classList.add('bottom');
        } else {
            tooltip.classList.remove('bottom');
        }
    }

    tooltipTriggers.forEach(function (trigger) {
        trigger.addEventListener('mouseenter', checkTooltipSide);
    });
});

// Hamburger on mobile menu
document.querySelector('.hamburger').addEventListener('click', function () {
    const headerContainer = document.querySelector('.header-container');
    const navigationElements = document.querySelectorAll('.navigation:not(.gameselect)');
    const body = document.querySelector('body');

    headerContainer.classList.toggle('active');

    navigationElements.forEach(function (navigation) {
        navigation.style.display = (navigation.style.display === 'none' || navigation.style.display === '') ? 'block' : 'none';
    });

    body.classList.toggle('overlay');
});

// Navbar animation
let scrollTimeOut = true;
let lastYPos = 0;
let yPos = 0;
const yPosDelta = 5;
const nav = document.querySelector('.header-container');
const navHeight = nav.offsetHeight;

const setNavClass = function () {
    scrollTimeOut = false;
    yPos = window.scrollY;

    if (Math.abs(lastYPos - yPos) >= yPosDelta && !nav.classList.contains('active')) {
        if (yPos > lastYPos) {
            nav.classList.add('hide-nav');
        } else {
            if (yPos > 0) {
                nav.classList.add('shadow', 'fixed');
            } else {
                nav.classList.add('hide-nav');
                nav.classList.remove('shadow');

                setTimeout(function () {
                    nav.classList.remove('fixed', 'hide-nav');
                }, 250);
            }

            nav.classList.remove('hide-nav');
        }
        lastYPos = yPos;
    }
};

if (window.innerWidth > 1063) {
    window.addEventListener('scroll', function (e) {
        scrollTimeOut = true;
    });

    setInterval(function () {
        if (scrollTimeOut) {
            setNavClass();
        }
    }, 250);
} else {
    window.addEventListener('scroll', function () {
        if (window.scrollY > 700) {
            nav.classList.add('fixed');
        } else {
            nav.classList.remove('fixed');
        }
    });
}
window.scrollTo(0, 0);
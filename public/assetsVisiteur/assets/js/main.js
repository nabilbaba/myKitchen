/**
 * Template Name: MyBiz - v4.1.0
 * Template URL: https://bootstrapmade.com/mybiz-free-business-bootstrap-theme/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */
(function() {
    "use strict";

    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
        el = el.trim()
        return all ? [...document.querySelectorAll(el)] : document.querySelector(el);
    }

    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
        let selectEl = select(el, all)
        if (selectEl) {
            if (all) {
                selectEl.forEach(e => e.addEventListener(type, listener))
            } else {
                selectEl.addEventListener(type, listener)
            }
        }
    }

    /**
     * Easy on scroll event listener 
     */
    const onscroll = (el, listener) => {
        el.addEventListener('scroll', listener)
    }

    /**
     * Navbar links active state on scroll
     */
    let navbarlinks = select('#navbar .scrollto', true)
    const navbarlinksActive = () => {
        let position = window.scrollY + 200
        navbarlinks.forEach(navbarlink => {
            if (!navbarlink.hash) return
            let section = select(navbarlink.hash)
            if (!section) return
            if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
                navbarlink.classList.add('active')
            } else {
                navbarlink.classList.remove('active')
            }
        })
    }
    window.addEventListener('load', navbarlinksActive)
    onscroll(document, navbarlinksActive)

    /**
     * Scrolls to an element with header offset
     */
    const scrollto = (el) => {
        let header = select('#header')
        let offset = header.offsetHeight

        let elementPos = select(el).offsetTop
        window.scrollTo({
            top: elementPos - offset,
            behavior: 'smooth'
        })
    }

    /**
     * Toggle .header-scrolled class to #header when page is scrolled
     */
    let selectHeader = select('#header')
    let selectTopbar = select('#topbar')
    if (selectHeader) {
        const headerScrolled = () => {
            if (window.scrollY > 100) {
                selectHeader.classList.add('header-scrolled')
                if (selectTopbar) {
                    selectTopbar.classList.add('topbar-scrolled')
                }
            } else {
                selectHeader.classList.remove('header-scrolled')
                if (selectTopbar) {
                    selectTopbar.classList.remove('topbar-scrolled')
                }
            }
        }
        window.addEventListener('load', headerScrolled)
        onscroll(document, headerScrolled)
    }

    /**
     * Back to top button
     */
    let backtotop = select('.back-to-top')
    if (backtotop) {
        const toggleBacktotop = () => {
            if (window.scrollY > 100) {
                backtotop.classList.add('active')
            } else {
                backtotop.classList.remove('active')
            }
        }
        window.addEventListener('load', toggleBacktotop)
        onscroll(document, toggleBacktotop)
    }

    /**
     * Mobile nav toggle
     */
    on('click', '.mobile-nav-toggle', function(e) {
        select('#navbar').classList.toggle('navbar-mobile')
        this.classList.toggle('bi-list')
        this.classList.toggle('bi-x')
    })

    /**
     * Mobile nav dropdowns activate
     */
    on('click', '.navbar .dropdown > a', function(e) {
        if (select('#navbar').classList.contains('navbar-mobile')) {
            e.preventDefault()
            this.nextElementSibling.classList.toggle('dropdown-active')
        }
    }, true)

    /**
     * Scrool with ofset on links with a class name .scrollto
     */
    on('click', '.scrollto', function(e) {
        if (select(this.hash)) {
            e.preventDefault()

            let navbar = select('#navbar')
            if (navbar.classList.contains('navbar-mobile')) {
                navbar.classList.remove('navbar-mobile')
                let navbarToggle = select('.mobile-nav-toggle')
                navbarToggle.classList.toggle('bi-list')
                navbarToggle.classList.toggle('bi-x')
            }
            scrollto(this.hash)
        }
    }, true)

    /**
     * Scroll with ofset on page load with hash links in the url
     */
    window.addEventListener('load', () => {
        if (window.location.hash) {
            if (select(window.location.hash)) {
                scrollto(window.location.hash)
            }
        }
    });

    /**
     * Hero carousel indicators
     */
    let heroCarouselIndicators = select("#hero-carousel-indicators")
    let heroCarouselItems = select('#heroCarousel .carousel-item', true)

    heroCarouselItems.forEach((item, index) => {
        (index === 0) ?
        heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "' class='active'></li>":
            heroCarouselIndicators.innerHTML += "<li data-bs-target='#heroCarousel' data-bs-slide-to='" + index + "'></li>"
    });

    /**
     * Porfolio isotope and filter
     */
    window.addEventListener('load', () => {
        let RECIPESContainer = select('.RECIPES-container');
        if (RECIPESContainer) {
            let RECIPESIsotope = new Isotope(RECIPESContainer, {
                itemSelector: '.RECIPES-item',
                layoutMode: 'fitRows'
            });

            let RECIPESFilters = select('#RECIPES-flters li', true);

            on('click', '#RECIPES-flters li', function(e) {
                e.preventDefault();
                RECIPESFilters.forEach(function(el) {
                    el.classList.remove('filter-active');
                });
                this.classList.add('filter-active');

                RECIPESIsotope.arrange({
                    filter: this.getAttribute('data-filter')
                });
            }, true);
        }

    });
    // document.getElementById('myInput').onkeyup = function myFunction() {


    //     // Declare variables
    //     var input, filter, a, j;
    //     var idsearch = [];
    //     var i, li;
    //     for (i = 1; i < 8; i++) {
    //         li = document.getElementById(i);
    //         idsearch[i] = li.getElementsByTagName("P")[0].textContent.toUpperCase();
    //     }
    //     input = document.getElementById('myInput');
    //     filter = input.value.toUpperCase();
    //     for (j = 1; j < 8; j++) {
    //         if (idsearch[j].includes(filter)) {
    //             for (a = 1; a < 8; a++) {
    //                 if (idsearch[a] == idsearch[j]) {
    //                     continue;
    //                 } 
    //                     document.getElementById('div' + a).remove('filter-active');




    //             }

    //             //li.getElementsByTagName("P")[0].parentNode.parentNode.remove();
    //         }
    //     }
    //     // var str = new String(idsearch[0]);
    //     // if (str.toString.indexOf(filter)) {
    //     //     console.log(idsearch[0]);

    //     // }
    //     // if (filter === idsearch) {
    //     //     console.log("ok");
    //     // }
    //     // var str = new String(filter);

    //     // if (filter == idsearch[2]) { console.log("-"); }
    //     // for (i = 1; i < 8; i++) {


    //     //     // for (j = 0; j < str.length; j++) {
    //     //     lettre = lettre + idsearch[str.length - 1];
    //     //     console.log(lettre);


    //     //     //     if (filter == idsearch) { console.log("-"); }
    //     // 


    //     //console.log(document.getElementById('idsearch').innerHTML.toUpperCase());
    //     //a = document.getElementById('idsearch').innerHTML.toUpperCase();


    // }


    /**
     * Initiate RECIPES lightbox 
     */
    const RECIPESLightbox = GLightbox({
        selector: '.RECIPES-lightbox'
    });

    /**
     * RECIPES details slider
     */
    new Swiper('.RECIPES-details-slider', {
        speed: 400,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        }
    });

    /**
     * Testimonials slider
     */
    new Swiper('.testimonials-slider', {
        speed: 600,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        slidesPerView: 'auto',
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        }
    });

})()
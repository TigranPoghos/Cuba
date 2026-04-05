document.addEventListener("DOMContentLoaded", function(){
    
    
    const sliderSections = document.querySelectorAll('.menu');

    sliderSections.forEach((section) => {
    const slider = section.querySelector('.menu__swiper');
    const nextBtn = section.querySelector('.swiper-btn-next');
    const prevBtn = section.querySelector('.swiper-btn-prev');
        new Swiper(slider, {
            slidesPerView: 4,
            spaceBetween: 20,
            navigation: {
            nextEl: nextBtn,
            prevEl: prevBtn,
            },
        });
    });




    const anchor = document.querySelector('.filters__menu-anchor');
    const filters = document.querySelector('.filters');

    if (anchor && filters) {
    const observer = new IntersectionObserver(([entry]) => {
        filters.classList.toggle('is-stuck', !entry.isIntersecting);
    });

    observer.observe(anchor);
    }


})
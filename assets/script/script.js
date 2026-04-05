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



})
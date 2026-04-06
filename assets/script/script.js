document.addEventListener("DOMContentLoaded", function(){
    
    //sliders
    const sliderSections = document.querySelectorAll('.menu');
    if (sliderSections.length) {
    sliderSections.forEach((section) => {
        const slider = section.querySelector('.menu__swiper');
        const nextBtn = section.querySelector('.swiper-btn-next');
        const prevBtn = section.querySelector('.swiper-btn-prev');
        if (!slider) return;
        new Swiper(slider, {
            slidesPerView: 4,
            spaceBetween: 20,
            navigation: nextBtn && prevBtn ? {
                nextEl: nextBtn,
                prevEl: prevBtn,
            } : undefined,
        });
    });
    }
    



    //map
    document.querySelectorAll('.open-map').forEach((btn) => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();

            const address = btn.dataset.address;
            const encoded = encodeURIComponent(address);

            const isIOS = /iPhone|iPad|iPod/i.test(navigator.userAgent);
            const isAndroid = /Android/i.test(navigator.userAgent);

            let url = '';

            if (isIOS) {
            url = `https://maps.apple.com/?q=${encoded}`;
            } else if (isAndroid) {
            url = `https://www.google.com/maps?q=${encoded}`;
            } else {
            url = `https://yandex.ru/maps/?text=${encoded}`;
            }

            window.open(url, '_blank');
        });
    });






})
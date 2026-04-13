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
                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 0,
                    },
                    480: {
                        slidesPerView: 2,
                    },
                    768: {
                        slidesPerView: 3,
                    },
                    1024: {
                        slidesPerView: 4,
                    }
                }
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






    // often slider
    const oftenBlock = document.querySelector('.often');
    if (oftenBlock) {
        const scrollContainer = oftenBlock.querySelector('.often__block');
        const prevBtn = oftenBlock.querySelector('.swiper-btn-prev');
        const nextBtn = oftenBlock.querySelector('.swiper-btn-next');
        const controls = oftenBlock.querySelector('.swiper-btn');

        if (scrollContainer && prevBtn && nextBtn && controls) {
            const getGap = () => {
                const styles = window.getComputedStyle(scrollContainer);
                return parseFloat(styles.columnGap || styles.gap || 0);
            };

            const getScrollStep = () => {
                const firstItem = scrollContainer.querySelector('.often__item');
                if (!firstItem) return 200;
                return firstItem.offsetWidth + getGap();
            };

            const updateButtons = () => {
                const hasOverflow = scrollContainer.scrollWidth > scrollContainer.clientWidth + 1;
                controls.style.display = hasOverflow ? 'flex' : 'none';

                if (!hasOverflow) {
                    prevBtn.disabled = true;
                    nextBtn.disabled = true;
                    prevBtn.classList.add('swiper-button-disabled');
                    nextBtn.classList.add('swiper-button-disabled');
                    return;
                }

                const maxScrollLeft = scrollContainer.scrollWidth - scrollContainer.clientWidth;
                const isAtStart = scrollContainer.scrollLeft <= 1;
                const isAtEnd = scrollContainer.scrollLeft >= maxScrollLeft - 1;

                prevBtn.disabled = isAtStart;
                nextBtn.disabled = isAtEnd;

                prevBtn.classList.toggle('swiper-button-disabled', isAtStart);
                nextBtn.classList.toggle('swiper-button-disabled', isAtEnd);
            };

            prevBtn.addEventListener('click', () => {
                scrollContainer.scrollBy({
                    left: -getScrollStep(),
                    behavior: 'smooth'
                });
            });

            nextBtn.addEventListener('click', () => {
                scrollContainer.scrollBy({
                    left: getScrollStep(),
                    behavior: 'smooth'
                });
            });

            scrollContainer.addEventListener('scroll', updateButtons);
            window.addEventListener('resize', updateButtons);

            updateButtons();
        }
    }





    const burger = document.querySelector('.burger');
    const openBtn = document.querySelector('.burger__button');
    const closeBtn = document.querySelector('.burger__close');
    const overlay = document.querySelector('.opacite');
    const body = document.body;

    if (burger && openBtn && closeBtn && overlay) {

        const openMenu = () => {
            burger.classList.add('active');
            overlay.classList.add('active');
            body.classList.add('hidden');
        };

        const closeMenu = () => {
            burger.classList.remove('active');
            overlay.classList.remove('active');
            body.classList.remove('hidden');
        };

        // открыть
        openBtn.addEventListener('click', openMenu);

        // закрыть по крестику
        closeBtn.addEventListener('click', closeMenu);

        // клик вне бургера (по оверлею)
        overlay.addEventListener('click', closeMenu);

        // клик вне .burger (на всякий случай)
        document.addEventListener('click', (e) => {
            if (
                burger.classList.contains('active') &&
                !burger.contains(e.target) &&
                !openBtn.contains(e.target)
            ) {
                closeMenu();
            }
        });
    }







   




})
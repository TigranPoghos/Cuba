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



    //sticky
    const anchor = document.querySelector('.filters__menu-anchor');
    const filters = document.querySelector('.filters');
    if (anchor && filters) {
    const observer = new IntersectionObserver(([entry]) => {
        filters.classList.toggle('is-stuck', !entry.isIntersecting);
    });

    observer.observe(anchor);
    }



    //filters
    const sections = document.querySelectorAll('.menu');
    const filterLinks = document.querySelectorAll('.filters__menu-item');

    if (sections.length && filterLinks.length) {
        const setActiveLink = (id) => {
        filterLinks.forEach((link) => {
            const isActive = link.getAttribute('href') === `#${id}`;
            link.classList.toggle('active', isActive);

            if (isActive) {
            link.scrollIntoView({
                behavior: 'smooth',
                inline: 'center',
                block: 'nearest'
            });
            }
        });
        };

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        setActiveLink(entry.target.id);
                    }
                });
            },
        {
            threshold: 0.4
        }
    );

    sections.forEach((section) => observer.observe(section));
    }


    //filters slider
    const filtersBlock = document.querySelector('.filters');
    if (filtersBlock) {
        const scrollContainer = filtersBlock.querySelector('.filters__menu');
        const prevBtn = filtersBlock.querySelector('.swiper-btn-prev');
        const nextBtn = filtersBlock.querySelector('.swiper-btn-next');
        const controls = filtersBlock.querySelector('.swiper-btn');

        if (scrollContainer && prevBtn && nextBtn && controls) {
            const getGap = () => {
            const styles = window.getComputedStyle(scrollContainer);
            return parseFloat(styles.columnGap || styles.gap || 0);
            };

            const getScrollStep = () => {
            const firstItem = scrollContainer.querySelector('li');
            if (!firstItem) return 200;
            return firstItem.offsetWidth + getGap();
            };

            const updateButtons = () => {
            const hasOverflow = scrollContainer.scrollWidth > scrollContainer.clientWidth + 1;
            controls.style.display = hasOverflow ? 'flex' : 'none';

            if (!hasOverflow) {
                prevBtn.disabled = true;
                nextBtn.disabled = true;
                return;
            }

            const maxScrollLeft = scrollContainer.scrollWidth - scrollContainer.clientWidth;

            prevBtn.disabled = scrollContainer.scrollLeft <= 1;
            nextBtn.disabled = scrollContainer.scrollLeft >= maxScrollLeft - 1;
            };

            prevBtn.addEventListener('click', () => {
            scrollContainer.scrollBy({
                left: -getScrollStep() * 2,
                behavior: 'smooth'
            });
            });

            nextBtn.addEventListener('click', () => {
            scrollContainer.scrollBy({
                left: getScrollStep() * 2,
                behavior: 'smooth'
            });
            });

            scrollContainer.addEventListener('scroll', updateButtons);
            window.addEventListener('resize', updateButtons);

            updateButtons();
        }
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
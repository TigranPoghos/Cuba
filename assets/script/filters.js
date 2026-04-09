document.addEventListener("DOMContentLoaded", function(){



    
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
            const isActive = link.getAttribute('href') === `/#${id}`;
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







})
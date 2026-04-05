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




    const sections = document.querySelectorAll('.menu');
    const filterLinks = document.querySelectorAll('.filters__menu-item');
    const setActiveLink = (id) => {
    filterLinks.forEach((link) => {
        link.classList.toggle('active', link.getAttribute('href') === `#${id}`);
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





    document.querySelectorAll('.js-filters-nav').forEach((filtersBlock) => {
  const scrollContainer = filtersBlock.querySelector('.js-filters-scroll');
  const controls = filtersBlock.querySelector('.js-filters-controls');
  const prevBtn = filtersBlock.querySelector('.js-filters-prev');
  const nextBtn = filtersBlock.querySelector('.js-filters-next');
  const links = filtersBlock.querySelectorAll('.js-filters-link');

  if (!scrollContainer || !controls || !prevBtn || !nextBtn || !links.length) return;

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

    controls.classList.toggle('is-visible', hasOverflow);

    if (!hasOverflow) {
      prevBtn.disabled = true;
      nextBtn.disabled = true;
      return;
    }

    const maxScrollLeft = scrollContainer.scrollWidth - scrollContainer.clientWidth;

    prevBtn.disabled = scrollContainer.scrollLeft <= 1;
    nextBtn.disabled = scrollContainer.scrollLeft >= maxScrollLeft - 1;
  };

  const setActiveLink = (id) => {
    links.forEach((link) => {
      const isCurrent = link.getAttribute('href') === `#${id}`;
      link.classList.toggle('is-active', isCurrent);

      if (isCurrent) {
        link.scrollIntoView({
          behavior: 'smooth',
          inline: 'center',
          block: 'nearest'
        });
      }
    });
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

  links.forEach((link) => {
    link.addEventListener('click', () => {
      const targetId = link.getAttribute('href').replace('#', '');
      setActiveLink(targetId);
    });
  });

  const sections = [...links]
    .map((link) => document.querySelector(link.getAttribute('href')))
    .filter(Boolean);

  if (sections.length) {
    const observer = new IntersectionObserver(
      (entries) => {
        const visibleEntry = entries
          .filter((entry) => entry.isIntersecting)
          .sort((a, b) => b.intersectionRatio - a.intersectionRatio)[0];

        if (visibleEntry) {
          setActiveLink(visibleEntry.target.id);
        }
      },
      {
        threshold: [0.2, 0.35, 0.5, 0.7],
        rootMargin: '-120px 0px -55% 0px'
      }
    );

    sections.forEach((section) => observer.observe(section));
  }

  updateButtons();
});


})
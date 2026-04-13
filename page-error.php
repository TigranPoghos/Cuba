<?php
get_header();
?>

<div class="filters__menu-anchor"></div>

<section class="filters">
    <div class="container">
        <div class="filters__row row">
            <div class="filters__buttons">
                <button class="filters__search">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.75 12.75L18.75 18.75M7.75 14.75C3.88401 14.75 0.75 11.616 0.75 7.75C0.75 3.88401 3.88401 0.75 7.75 0.75C11.616 0.75 14.75 3.88401 14.75 7.75C14.75 11.616 11.616 14.75 7.75 14.75Z" stroke="#131B2D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

                <button class="filters__sort">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.46429 14.8929L4.60714 18.75M4.60714 18.75L0.75 14.8929M4.60714 18.75V0.75M11.0357 4.60714L14.8929 0.75M14.8929 0.75L18.75 4.60714M14.8929 0.75V18.75" stroke="#131B2D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

            <ul class="filters__menu js-filters-scroll">
                <li><a href="<?php echo esc_url( home_url( '/#pizza' ) ); ?>" class="filters__menu-item js-filters-link">Пицца</a></li>
                <li><a href="<?php echo esc_url( home_url( '/#pizza-50' ) ); ?>" class="filters__menu-item js-filters-link">Пицца 50/50</a></li>
                <li><a href="<?php echo esc_url( home_url( '/#roll' ) ); ?>" class="filters__menu-item js-filters-link">Роллы</a></li>
                <li><a href="<?php echo esc_url( home_url( '/#set' ) ); ?>" class="filters__menu-item js-filters-link">Сеты</a></li>
                <li><a href="<?php echo esc_url( home_url( '/#pasta' ) ); ?>" class="filters__menu-item js-filters-link">Лапша</a></li>
                <li><a href="<?php echo esc_url( home_url( '/#snack' ) ); ?>" class="filters__menu-item js-filters-link">Закуски</a></li>
                <li><a href="<?php echo esc_url( home_url( '/#salad' ) ); ?>" class="filters__menu-item js-filters-link">Салаты</a></li>
                <li><a href="<?php echo esc_url( home_url( '/#dessert' ) ); ?>" class="filters__menu-item js-filters-link">Десерты</a></li>
                <li><a href="<?php echo esc_url( home_url( '/#drink' ) ); ?>" class="filters__menu-item js-filters-link">Напитки</a></li>
            </ul>

            <div class="swiper-btn js-filters-controls">
                <button class="swiper-btn-prev js-filters-prev" disabled tabindex="-1" aria-label="Previous slide" aria-disabled="true">
                    <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5 8.5L8.16667 15.5M1.5 8.5L8.16667 1.5M1.5 8.5H25.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>

                <button class="swiper-btn-next js-filters-next" tabindex="0" aria-label="Next slide" aria-disabled="false">
                    <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.5 8.5L18.8333 1.5M25.5 8.5L18.8333 15.5M25.5 8.5H1.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </div>

            <button class="filters__basket basketJS decs">
                <svg width="24" height="30" viewBox="0 0 24 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17 20C15.8954 20 15 20.8954 15 22C15 23.1046 15.8954 24 17 24C18.1046 24 19 23.1046 19 22C19 20.8954 18.1046 20 17 20ZM17 20H9.29395C8.83288 20 8.60193 20 8.41211 19.918C8.24466 19.8456 8.09938 19.7291 7.99354 19.5805C7.8749 19.414 7.82719 19.1913 7.73274 18.7505L5.27148 7.26465C5.17484 6.81363 5.12587 6.58838 5.00586 6.41992C4.90002 6.27135 4.75477 6.15441 4.58732 6.08205C4.39746 6 4.16779 6 3.70653 6H3M6 9H18.8732C19.595 9 19.9555 9 20.1978 9.15036C20.41 9.28206 20.5653 9.48862 20.633 9.729C20.7104 10.0034 20.611 10.35 20.411 11.0435L19.0264 15.8435C18.9068 16.2581 18.8469 16.465 18.7256 16.6189C18.6185 16.7547 18.4772 16.861 18.317 16.9263C18.1361 17 17.9211 17 17.4921 17H7.73047M8 24C6.89543 24 6 23.1046 6 22C6 20.8954 6.89543 20 8 20C9.10457 20 10 20.8954 10 22C10 23.1046 9.10457 24 8 24Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <div class="filters__basket-line"></div>
                <div class="filters__basket-price">1000₽</div>
            </button>
        </div>
    </div>
</section>

<section class="error">
    <h1 class="error__title">Страница не найдена</h1>
    <div class="error__img">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/404.png' ); ?>" alt="404">
    </div>
</section>

<?php get_footer(); ?>
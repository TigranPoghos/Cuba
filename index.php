<?php get_header(); ?>

<h1 class="hidden-text">Доставка пиццы и роллов в Курске</h1>
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
                <button class="swiper-btn-prev js-filters-prev" disabled tabindex="-1" aria-label="Previous slide">
                    <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.5 8.5L8.16667 15.5M1.5 8.5L8.16667 1.5M1.5 8.5H25.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
                <button class="swiper-btn-next js-filters-next" tabindex="0" aria-label="Next slide">
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

<section class="often">
    <div class="container">
        <div class="often__row row">
            <div class="often__title">
                <h2 class="title">Часто заказываю</h2>
                <div class="often__title-line"></div>
                <div class="swiper-btn">
                    <button class="swiper-btn-prev swiper-button-disabled" disabled tabindex="-1" aria-label="Previous slide">
                        <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 8.5L8.16667 15.5M1.5 8.5L8.16667 1.5M1.5 8.5H25.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <button class="swiper-btn-next" tabindex="0" aria-label="Next slide">
                        <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5 8.5L18.8333 1.5M25.5 8.5L18.8333 15.5M25.5 8.5H1.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <div class="often__block">
                <article class="often__item">
                    <button class="menu__item-overlay" data-id="14"></button>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pizza/zhulen.png' ); ?>" alt="">
                    <div class="often__item-about">
                        <p class="text">Пицца Жульен</p>
                        <p class="text">от 480₽</p>
                    </div>
                </article>

                <article class="often__item">
                    <button class="menu__item-overlay" data-id="14"></button>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pizza-50/karnoval.png' ); ?>" alt="">
                    <div class="often__item-about">
                        <p class="text">Пицца Карнавал</p>
                        <p class="text">от 1350₽</p>
                    </div>
                </article>

                <article class="often__item">
                    <button class="menu__item-overlay" data-id="14"></button>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/set/izobilie.png' ); ?>" alt="">
                    <div class="often__item-about">
                        <p class="text">Изобилие</p>
                        <p class="text">1599₽</p>
                    </div>
                </article>

                <article class="often__item">
                    <button class="menu__item-overlay" data-id="14"></button>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pasta/wok_sauce.png' ); ?>" alt="">
                    <div class="often__item-about">
                        <p class="text">Соба со свининой</p>
                        <p class="text">579₽</p>
                    </div>
                </article>

                <article class="often__item">
                    <button class="menu__item-overlay" data-id="14"></button>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pizza/zhulen.png' ); ?>" alt="">
                    <div class="often__item-about">
                        <p class="text">Пицца Жульен</p>
                        <p class="text">от 480₽</p>
                    </div>
                </article>

                <article class="often__item">
                    <button class="menu__item-overlay" data-id="14"></button>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pizza-50/karnoval.png' ); ?>" alt="">
                    <div class="often__item-about">
                        <p class="text">Пицца Карнавал</p>
                        <p class="text">от 1350₽</p>
                    </div>
                </article>

                <article class="often__item">
                    <button class="menu__item-overlay" data-id="14"></button>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/set/izobilie.png' ); ?>" alt="">
                    <div class="often__item-about">
                        <p class="text">Изобилие</p>
                        <p class="text">1599₽</p>
                    </div>
                </article>

                <article class="often__item">
                    <button class="menu__item-overlay" data-id="14"></button>
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pasta/wok_sauce.png' ); ?>" alt="">
                    <div class="often__item-about">
                        <p class="text">Соба со свининой</p>
                        <p class="text">579₽</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="promo">
    <div class="promo__row row promo__slider">
        <div class="promo__track">
            <div class="promo__item">
                <div class="promo__item-about">
                    <h3 class="title">3 средние пиццы по цене 2</h3>
                    <p class="text">3 средние пиццы по цене 2 выберите на ваш вкус</p>
                    <a href="<?php echo esc_url( home_url( '/promo/' ) ); ?>" class="promo__item-button"><span class="text">Все акции</span></a>
                </div>
                <div class="promo__item-img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/test.png' ); ?>" alt="">
                </div>
            </div>

            <div class="promo__item">
                <div class="promo__item-about">
                    <h3 class="title">Скидка на день рождение 10%</h3>
                    <p class="text">3 средние пиццы по цене 2 выберите на ваш вкус</p>
                    <a href="<?php echo esc_url( home_url( '/promo/' ) ); ?>" class="promo__item-button"><span class="text">Все акции</span></a>
                </div>
                <div class="promo__item-img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/test.png' ); ?>" alt="">
                </div>
            </div>

            <div class="promo__item">
                <div class="promo__item-about">
                    <h3 class="title">3 пиццы 25см по цене 2</h3>
                    <p class="text">3 средние пиццы по цене 2 выберите на ваш вкус</p>
                    <a href="<?php echo esc_url( home_url( '/promo/' ) ); ?>" class="promo__item-button"><span class="text">Все акции</span></a>
                </div>
                <div class="promo__item-img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/test.png' ); ?>" alt="">
                </div>
            </div>

            <div class="promo__item">
                <div class="promo__item-about">
                    <h3 class="title">Скидка 10% при заказе через сайт</h3>
                    <p class="text">3 средние пиццы по цене 2 выберите на ваш вкус</p>
                    <a href="<?php echo esc_url( home_url( '/promo/' ) ); ?>" class="promo__item-button"><span class="text">Все акции</span></a>
                </div>
                <div class="promo__item-img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/test.png' ); ?>" alt="">
                </div>
            </div>

            <div class="promo__item">
                <div class="promo__item-about">
                    <h3 class="title">Скидка на самовывоз 20%</h3>
                    <p class="text">3 средние пиццы по цене 2 выберите на ваш вкус</p>
                    <a href="<?php echo esc_url( home_url( '/promo/' ) ); ?>" class="promo__item-button"><span class="text">Все акции</span></a>
                </div>
                <div class="promo__item-img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/test.png' ); ?>" alt="">
                </div>
            </div>

            <div class="promo__item">
                <div class="promo__item-about">
                    <h3 class="title">3 средние пиццы по цене 2</h3>
                    <p class="text">3 средние пиццы по цене 2 выберите на ваш вкус</p>
                    <a href="<?php echo esc_url( home_url( '/promo/' ) ); ?>" class="promo__item-button"><span class="text">Все акции</span></a>
                </div>
                <div class="promo__item-img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/test.png' ); ?>" alt="">
                </div>
            </div>

            <div class="promo__item">
                <div class="promo__item-about">
                    <h3 class="title">Скидка на день рождение 10%</h3>
                    <p class="text">3 средние пиццы по цене 2 выберите на ваш вкус</p>
                    <a href="<?php echo esc_url( home_url( '/promo/' ) ); ?>" class="promo__item-button"><span class="text">Все акции</span></a>
                </div>
                <div class="promo__item-img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/test.png' ); ?>" alt="">
                </div>
            </div>

            <div class="promo__item">
                <div class="promo__item-about">
                    <h3 class="title">3 пиццы 25см по цене 2</h3>
                    <p class="text">3 средние пиццы по цене 2 выберите на ваш вкус</p>
                    <a href="<?php echo esc_url( home_url( '/promo/' ) ); ?>" class="promo__item-button"><span class="text">Все акции</span></a>
                </div>
                <div class="promo__item-img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/test.png' ); ?>" alt="">
                </div>
            </div>

            <div class="promo__item">
                <div class="promo__item-about">
                    <h3 class="title">Скидка 10% при заказе через сайт</h3>
                    <p class="text">3 средние пиццы по цене 2 выберите на ваш вкус</p>
                    <a href="<?php echo esc_url( home_url( '/promo/' ) ); ?>" class="promo__item-button"><span class="text">Все акции</span></a>
                </div>
                <div class="promo__item-img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/test.png' ); ?>" alt="">
                </div>
            </div>

            <div class="promo__item">
                <div class="promo__item-about">
                    <h3 class="title">Скидка на самовывоз 20%</h3>
                    <p class="text">3 средние пиццы по цене 2 выберите на ваш вкус</p>
                    <a href="<?php echo esc_url( home_url( '/promo/' ) ); ?>" class="promo__item-button"><span class="text">Все акции</span></a>
                </div>
                <div class="promo__item-img">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/test.png' ); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="menu" id="pizza">
    <div class="container">
        <div class="menu__row row">
            <div class="menu__line"></div>
            <div class="menu__title">
                <h2 class="title">Пицца</h2>
                <div class="menu__title-line"></div>
                <div class="swiper-btn">
                    <button class="swiper-btn-prev">
                        <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 8.5L8.16667 15.5M1.5 8.5L8.16667 1.5M1.5 8.5H25.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="swiper-btn-next">
                        <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5 8.5L18.8333 1.5M25.5 8.5L18.8333 15.5M25.5 8.5H1.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="menu__line"></div>
            <div class="swiper mySwiper menu__swiper">
                <div class="swiper-wrapper">
                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="0"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pizza/zhulen.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Жульен</h3>
                        <p class="text">Жареные шампиньоны, жареный лук, копченое куриное филе, сливочный соус, сыр моцарелла.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">от 480₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="1"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pizza/amore.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Аморе</h3>
                        <p class="text">Кальмар, кунжут, лосось, окунь, соус терияки, сыр моцарелла.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">от 777₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="2"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pizza/varadero.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Варадеро</h3>
                        <p class="text">Кетчуп, маринованный лук, маринованный огурчик, помидоры, соус горчичный, сыр моцарелла, фарш.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">от 480₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="3"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pizza/chegevara.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Че Гевара</h3>
                        <p class="text">Куриное филе, помидоры, свинина, соус пикантный, сыр моцарелла, шампиньоны.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">от 480₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="4"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pizza/partizan-01.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Партизан</h3>
                        <p class="text">Пепперони, помидоры, соус неаполитано, сыр моцарелла.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">от 580₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="5"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pizza/anarhija.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Пепперони</h3>
                        <p class="text">Ананасы, ветчина, куриное филе, маслины, соус кисло-сладкий, сыр моцарелла.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">от 550₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <div class="menu__leaf-right decs">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/menu__leaf-right.png' ); ?>" alt="">
    </div>
</section>

<section class="menu" id="pizza-50">
    <div class="container">
        <div class="menu__row row">
            <div class="menu__line"></div>
            <div class="menu__title">
                <h2 class="title">Пицца 50/50</h2>
                <div class="menu__title-line"></div>
                <div class="swiper-btn">
                    <button class="swiper-btn-prev">
                        <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 8.5L8.16667 15.5M1.5 8.5L8.16667 1.5M1.5 8.5H25.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="swiper-btn-next">
                        <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5 8.5L18.8333 1.5M25.5 8.5L18.8333 15.5M25.5 8.5H1.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="menu__line"></div>
            <div class="swiper mySwiper menu__swiper">
                <div class="swiper-wrapper">
                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="14"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pizza-50/don-becon.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Дон-Бекон</h3>
                        <p class="text"><b>Амигос:</b> Куриное филе, ананасы, ветчина, маслины, соус неаполитано, сыр моцарелла <br> <b>Че Гевара:</b> Куриное филе, колбаски кабаносси, ветчина, соус белый, шампиньоны, помидоры, сыр моцарелла</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">от 999₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="15"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pizza-50/kapriz.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Каприз</h3>
                        <p class="text"><b>Анархия:</b> Куриное филе, ананасы, ветчина, маслины, соус неаполитано, сыр моцарелла <br> <b>Революция:</b> Куриное филе, колбаски кабаносси, ветчина, соус белый, шампиньоны, помидоры, сыр моцарелла</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">от 999₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="16"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pizza-50/karnoval.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Карнавал</h3>
                        <p class="text"><b>Варадеро:</b> Фарш, маринованный огурчик, маринованный лук, помидор, сыр Моцарелла, кетчуп, соус горчичный<br><b>Партизан:</b> Пепперони, помидоры, соус неаполитано, сыр моцарелла</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">от 1350₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="17"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pizza-50/kubinskaya.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Кубинская</h3>
                        <p class="text"><b>Жульен:</b> Жареные шампиньоны, жареный лук, копченое куриное филе, сыр Моцарелла, сливочный соус<br><b>Куба:</b> Колбаски кабаносси, помидоры, шампиньоны, свинина, ветчина, соус тар-тар, сыр моцарелла</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">от 1099₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="18"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pizza-50/santyago.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Сантьяго</h3>
                        <p class="text"><b>Гуантанамо</b> Колбаски кабаносси, помидоры, соус острый, лук маринованный, куриное филе, перчик халапеньо, сыр моцарелла<br><b>Кастро</b> Колбаски кабаносси, помидоры, шампиньоны, куриное филе, соус барбекю, сыр моцарелла</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">от 1350₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="menu" id="roll">
    <div class="container">
        <div class="menu__row row">
            <div class="menu__line"></div>
            <div class="menu__title">
                <h2 class="title">Роллы</h2>
                <div class="menu__title-line"></div>
                <div class="swiper-btn">
                    <button class="swiper-btn-prev">
                        <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 8.5L8.16667 15.5M1.5 8.5L8.16667 1.5M1.5 8.5H25.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="swiper-btn-next">
                        <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5 8.5L18.8333 1.5M25.5 8.5L18.8333 15.5M25.5 8.5H1.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="menu__line"></div>
            <div class="swiper mySwiper menu__swiper">
                <div class="swiper-wrapper">
                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="19"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/roll/tartarlososspajsi.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Тар-тар лосось спайси</h3>
                        <p class="text">Лосось, масага красная, нори, огурец, рис, спайси соус, сыр креметта .</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">595₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="20"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/roll/slivochnuylosos.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Сливочный лосось</h3>
                        <p class="text">Кунжут, лосось копченый, сыр.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">515₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="21"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/roll/blekvud.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Блэк Вуа</h3>
                        <p class="text">Кунжут, курица терияки, майонез, масага оранжевая, нори, рис, сыр пармезан, томаго.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">445₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="22"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/roll/boston.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Бостон</h3>
                        <p class="text">Майонез, масага оранжевая, нори, рис, сыр пармезан, томаго.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">415₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="23"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/roll/gejsha.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Гейша</h3>
                        <p class="text">Креветка темпурная, майонез, масага красная, нори, огурец, рис, сыр пармезан, укроп.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">555₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <div class="menu__leaf-left decs">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/menu__leaf-left.png' ); ?>" alt="">
    </div>
</section>

<section class="menu" id="set">
    <div class="container">
        <div class="menu__row row">
            <div class="menu__line"></div>
            <div class="menu__title">
                <h2 class="title">Сеты</h2>
                <div class="menu__title-line"></div>
                <div class="swiper-btn">
                    <button class="swiper-btn-prev">
                        <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 8.5L8.16667 15.5M1.5 8.5L8.16667 1.5M1.5 8.5H25.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="swiper-btn-next">
                        <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5 8.5L18.8333 1.5M25.5 8.5L18.8333 15.5M25.5 8.5H1.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="menu__line"></div>
            <div class="swiper mySwiper menu__swiper">
                <div class="swiper-wrapper">
                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="26"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/set/izobilie.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Изобилие</h3>
                        <p class="text"><b>ЛАЙТ:</b> Сыр, огурец, грибы, кунжут<br><b>СЛИВОЧНЫЙ ЛОСОСЬ:</b> Сыр, лосось копченый, кунжут белый<br><b>ЭБИ ТЕМПУРА:</b> Сыр, креветка темпурная, кляр, сухари<br><b>ЭКО ФИЛА:</b> Сыр, огурец, лосось</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">1599₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="27"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/set/kapitolij-01.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Капитолий</h3>
                        <p class="text"><b>КАЛИФОРНИЯ:</b> Краб микс, огурец, масаго<br><b>ЭБИ ГОЛД:</b> Сыр, огурец, креветка жареная, сухари панко, соус терияки, кляр<br><b>ЯКУДЗА:</b> Лосось охлажденный, угорь, огурец, спайси соус, стружка тунца</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">1399₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="28"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/set/kompashka.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Компашка</h3>
                        <p class="text"><b>ГОРЯЧИЙ КРАБС:</b> Сыр, масаго красная, краб, кляр, сухари панко<br><b>КАЛИФОРНИЯ:</b> Огурец, краб, масаго<br><b>ОКУНЬ МАКИ:</b> Сыр, огурец, окунь, стружка тунца<br><b>СЯКИ ХОТ:</b> Сыр, огурец, лосось, кляр, сухари<br><b>ЭКО ФИЛА:</b> Сыр, огурец, лосось</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">2199₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="29"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/set/izobilie.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Изобилие</h3>
                        <p class="text"><b>ЛАЙТ:</b> Сыр, огурец, грибы, кунжут<br><b>СЛИВОЧНЫЙ ЛОСОСЬ:</b> Сыр, лосось копченый, кунжут белый<br><b>ЭБИ ТЕМПУРА:</b> Сыр, креветка темпурная, кляр, сухари<br><b>ЭКО ФИЛА:</b> Сыр, огурец, лосось</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">1599₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="30"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/set/kapitolij-01.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Капитолий</h3>
                        <p class="text"><b>КАЛИФОРНИЯ:</b> Краб микс, огурец, масаго<br><b>ЭБИ ГОЛД:</b> Сыр, огурец, креветка жареная, сухари панко, соус терияки, кляр<br><b>ЯКУДЗА:</b> Лосось охлажденный, угорь, огурец, спайси соус, стружка тунца</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">1399₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="31"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/set/kompashka.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Компашка</h3>
                        <p class="text"><b>ГОРЯЧИЙ КРАБС:</b> Сыр, масаго красная, краб, кляр, сухари панко<br><b>КАЛИФОРНИЯ:</b> Огурец, краб, масаго<br><b>ОКУНЬ МАКИ:</b> Сыр, огурец, окунь, стружка тунца<br><b>СЯКИ ХОТ:</b> Сыр, огурец, лосось, кляр, сухари<br><b>ЭКО ФИЛА:</b> Сыр, огурец, лосось</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">2199₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="menu" id="pasta">
    <div class="container">
        <div class="menu__row row">
            <div class="menu__line"></div>
            <div class="menu__title">
                <h2 class="title">Лапша Wok, Тяхан</h2>
                <div class="menu__title-line"></div>
                <div class="swiper-btn">
                    <button class="swiper-btn-prev">
                        <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 8.5L8.16667 15.5M1.5 8.5L8.16667 1.5M1.5 8.5H25.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="swiper-btn-next">
                        <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5 8.5L18.8333 1.5M25.5 8.5L18.8333 15.5M25.5 8.5H1.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="menu__line"></div>
            <div class="swiper mySwiper menu__swiper">
                <div class="swiper-wrapper">
                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="32"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pasta/tyakhanslososem.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Тяхан лосось</h3>
                        <p class="text">Кунжут, лосось, лук репчатый, морковь, перец болгарский, рис, соус соевый, терияки, хондаши, цукини.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">569₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="33"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pasta/wok_sauce.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Соба со свининой</h3>
                        <p class="text">Лапша Соба, лук репчатый, морковь, перец болгарский, свинина, сливочный соус, соус соевый, цукини.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">579₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="34"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pasta/wokovowi.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">С говядиной</h3>
                        <p class="text">Говядина, кунжут, лапша соба, лук репчатый, морковь, перец болгарский, соус соевый, соус терияки, хондаши, цукини.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">599₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="35"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pasta/tyakhanslososem.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Тяхан лосось</h3>
                        <p class="text">Кунжут, лосось, лук репчатый, морковь, перец болгарский, рис, соус соевый, терияки, хондаши, цукини.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">569₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="36"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pasta/wok_sauce.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Соба со свининой</h3>
                        <p class="text">Лапша Соба, лук репчатый, морковь, перец болгарский, свинина, сливочный соус, соус соевый, цукини.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">579₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="37"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pasta/wokovowi.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">С говядиной</h3>
                        <p class="text">Говядина, кунжут, лапша соба, лук репчатый, морковь, перец болгарский, соус соевый, соус терияки, хондаши, цукини.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">599₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <div class="menu__leaf-right decs">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/menu__leaf-right-2.png' ); ?>" alt="">
    </div>
</section>

<section class="menu" id="snack">
    <div class="container">
        <div class="menu__row row">
            <div class="menu__line"></div>
            <div class="menu__title">
                <h2 class="title">Закуски</h2>
                <div class="menu__title-line"></div>
                <div class="swiper-btn">
                    <button class="swiper-btn-prev">
                        <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 8.5L8.16667 15.5M1.5 8.5L8.16667 1.5M1.5 8.5H25.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="swiper-btn-next">
                        <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5 8.5L18.8333 1.5M25.5 8.5L18.8333 15.5M25.5 8.5H1.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="menu__line"></div>
            <div class="swiper mySwiper menu__swiper">
                <div class="swiper-wrapper">
                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="40"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/snack/rings3.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Луковые кольца</h3>
                        <p class="text">Хрустящие кольца лука в золотистой панировке, идеальны с соусом.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">319₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="41"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/snack/f_sbekonom.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Картошка фри с беконом</h3>
                        <p class="text">Сочная картошка фри с ароматным хрустящим беконом.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">299₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="42"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/snack/naggetsu.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Наггетсы</h3>
                        <p class="text">Нежное куриное филе в хрустящей панировке, любимая классика.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">299₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="43"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/snack/rings3.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Луковые кольца</h3>
                        <p class="text">Хрустящие кольца лука в золотистой панировке, идеальны с соусом.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">319₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="44"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/snack/f_sbekonom.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Картошка фри с беконом</h3>
                        <p class="text">Сочная картошка фри с ароматным хрустящим беконом.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">299₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="45"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/snack/naggetsu.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Наггетсы</h3>
                        <p class="text">Нежное куриное филе в хрустящей панировке, любимая классика.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">299₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="menu" id="salad">
    <div class="container">
        <div class="menu__row row">
            <div class="menu__line"></div>
            <div class="menu__title">
                <h2 class="title">Салаты</h2>
                <div class="menu__title-line"></div>
                <div class="swiper-btn">
                    <button class="swiper-btn-prev">
                        <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 8.5L8.16667 15.5M1.5 8.5L8.16667 1.5M1.5 8.5H25.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="swiper-btn-next">
                        <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5 8.5L18.8333 1.5M25.5 8.5L18.8333 15.5M25.5 8.5H1.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="menu__line"></div>
            <div class="swiper mySwiper menu__swiper">
                <div class="swiper-wrapper">
                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="46"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/salad/salat-chuka-transformed.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Салат чука</h3>
                        <p class="text">Лимон, ореховый соус, чука.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">259₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="47"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/salad/salat_s_krevetkoy.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Салат цезарь с тигровой креветкой</h3>
                        <p class="text">Креветка тигровая, помидор, салат айсберг, соус цезарь, сухарики, сыр пармезан.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">459₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="48"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/salad/salat_s_kuricey.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Салат цезарь с курицей</h3>
                        <p class="text">Куриное филе, помидор, салат айсберг, соус цезарь, сухарики, сыр пармезан.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">399₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="49"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/salad/salat-chuka-transformed.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Салат чука</h3>
                        <p class="text">Лимон, ореховый соус, чука.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">259₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="50"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/salad/salat_s_krevetkoy.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Салат цезарь с тигровой креветкой</h3>
                        <p class="text">Креветка тигровая, помидор, салат айсберг, соус цезарь, сухарики, сыр пармезан.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">459₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="51"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/salad/salat_s_kuricey.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Салат цезарь с курицей</h3>
                        <p class="text">Куриное филе, помидор, салат айсберг, соус цезарь, сухарики, сыр пармезан.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">399₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <div class="menu__leaf-left decs">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/menu__leaf-left-2.png' ); ?>" alt="">
    </div>
</section>

<section class="menu" id="dessert">
    <div class="container">
        <div class="menu__row row">
            <div class="menu__line"></div>
            <div class="menu__title">
                <h2 class="title">Десерты</h2>
                <div class="menu__title-line"></div>
                <div class="swiper-btn">
                    <button class="swiper-btn-prev">
                        <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 8.5L8.16667 15.5M1.5 8.5L8.16667 1.5M1.5 8.5H25.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="swiper-btn-next">
                        <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5 8.5L18.8333 1.5M25.5 8.5L18.8333 15.5M25.5 8.5H1.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="menu__line"></div>
            <div class="swiper mySwiper menu__swiper">
                <div class="swiper-wrapper">
                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="55"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/dessert/newyork.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Нью-йорк</h3>
                        <p class="text">Классический чизкейк с плотной текстурой и чистым сливочным вкусом.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">230₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="56"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/dessert/newyork.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Нью-йорк</h3>
                        <p class="text">Классический чизкейк с плотной текстурой и чистым сливочным вкусом.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">230₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="57"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/dessert/newyork.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Нью-йорк</h3>
                        <p class="text">Классический чизкейк с плотной текстурой и чистым сливочным вкусом.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">230₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="58"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/dessert/newyork.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Нью-йорк</h3>
                        <p class="text">Классический чизкейк с плотной текстурой и чистым сливочным вкусом.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">230₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="59"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/dessert/newyork.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Нью-йорк</h3>
                        <p class="text">Классический чизкейк с плотной текстурой и чистым сливочным вкусом.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">230₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="60"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/dessert/newyork.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Нью-йорк</h3>
                        <p class="text">Классический чизкейк с плотной текстурой и чистым сливочным вкусом.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">230₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="menu" id="drink">
    <div class="container">
        <div class="menu__row row">
            <div class="menu__line"></div>
            <div class="menu__title">
                <h2 class="title">Напитки</h2>
                <div class="menu__title-line"></div>
                <div class="swiper-btn">
                    <button class="swiper-btn-prev">
                        <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.5 8.5L8.16667 15.5M1.5 8.5L8.16667 1.5M1.5 8.5H25.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                    <button class="swiper-btn-next">
                        <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5 8.5L18.8333 1.5M25.5 8.5L18.8333 15.5M25.5 8.5H1.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="menu__line"></div>
            <div class="swiper mySwiper menu__swiper">
                <div class="swiper-wrapper">
                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="61"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/drink/sok_dobry.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Сок "Добрый" в ассортименте</h3>
                        <p class="text">Пепперони, помидоры, соус неаполитано, сыр моцарелла.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">230₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="62"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/drink/dobry_kola_r.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Добрый кола</h3>
                        <p class="text">Классический газированный напиток с насыщенным вкусом и освежающей сладостью.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">от 150₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="63"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/drink/dobry_limon_r.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Добрый лимон</h3>
                        <p class="text">Лёгкий лимонно-лаймовый напиток с яркой свежестью и пузырьками.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">от 150₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="64"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/drink/sok_dobry.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Сок "Добрый" в ассортименте</h3>
                        <p class="text">Пепперони, помидоры, соус неаполитано, сыр моцарелла.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">230₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="65"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/drink/dobry_kola_r.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Добрый кола</h3>
                        <p class="text">Классический газированный напиток с насыщенным вкусом и освежающей сладостью.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">от 150₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>

                    <article class="swiper-slide menu__item">
                        <button class="menu__item-overlay" data-id="66"></button>
                        <div class="menu__item-img">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/drink/dobry_limon_r.png' ); ?>" alt="">
                        </div>
                        <h3 class="subtitle">Добрый лимон</h3>
                        <p class="text">Лёгкий лимонно-лаймовый напиток с яркой свежестью и пузырьками.</p>
                        <div class="menu__buttons">
                            <p class="subtitle menu__price">от 150₽</p>
                            <button class="menu__button"><span class="text">Выбрать</span></button>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>

    <div class="menu__leaf-right decs">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/menu__leaf-right-3.png' ); ?>" alt="">
    </div>
</section>

<?php get_footer(); ?>
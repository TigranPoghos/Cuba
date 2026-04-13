    </main>

    <div class="opacite"></div>

    <?php if ( ! is_page( 'checkout' ) ) : ?>
        <aside class="basket">
            <div class="basket__top">
                <h3 class="title">Корзина</h3>
                <button class="basket__close">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13 13L7.00002 7.00002M7.00002 7.00002L1 1M7.00002 7.00002L13 1M7.00002 7.00002L1 13" stroke="#131B2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

            <div class="basket__menu">
                <article class="basket__item">
                    <div class="basket__item-top">
                        <div class="basket__item-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pizza/chegevara.png' ); ?>" alt="">
                        </div>
                        <div class="basket__item-content">
                            <h3 class="subtitle">Че Гевара</h3>
                            <p class="text">40см, тонкое тесто, 1.5кг</p>
                        </div>
                    </div>
                    <div class="basket__item-line"></div>
                    <div class="basket__item-bottom">
                        <div class="basket__item-price">
                            <span class="price-value">999</span>
                            <span class="price-currency">₽</span>
                        </div>
                        <div class="basket__counter">
                            <button class="basket__counter-btn basket__counter-btn--minus">
                                <svg width="7" height="1" viewBox="0 0 7 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 0.5H0.5" stroke="black" stroke-linecap="round" />
                                </svg>
                            </button>
                            <span class="basket__counter-value">1</span>
                            <button class="basket__counter-btn basket__counter-btn--plus">
                                <svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.5 0.5L3.5 6.5M6.5 3.5H0.5" stroke="black" stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <button class="basket__item-close" aria-label="Удалить товар">
                        <svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.49997 6.49997L3.5 3.5M3.5 3.5L0.5 0.5M3.5 3.5L6.5 0.5M3.5 3.5L0.5 6.5" stroke="#131B2D" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </article>

                <article class="basket__item">
                    <div class="basket__item-top">
                        <div class="basket__item-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pizza/chegevara.png' ); ?>" alt="">
                        </div>
                        <div class="basket__item-content">
                            <h3 class="subtitle">Че Гевара</h3>
                            <p class="text">40см, тонкое тесто, 1.5кг</p>
                        </div>
                    </div>
                    <div class="basket__item-line"></div>
                    <div class="basket__item-bottom">
                        <div class="basket__item-price">
                            <span class="price-value">999</span>
                            <span class="price-currency">₽</span>
                        </div>
                        <div class="basket__counter">
                            <button class="basket__counter-btn basket__counter-btn--minus">
                                <svg width="7" height="1" viewBox="0 0 7 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 0.5H0.5" stroke="black" stroke-linecap="round" />
                                </svg>
                            </button>
                            <span class="basket__counter-value">1</span>
                            <button class="basket__counter-btn basket__counter-btn--plus">
                                <svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.5 0.5L3.5 6.5M6.5 3.5H0.5" stroke="black" stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <button class="basket__item-close" aria-label="Удалить товар">
                        <svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.49997 6.49997L3.5 3.5M3.5 3.5L0.5 0.5M3.5 3.5L6.5 0.5M3.5 3.5L0.5 6.5" stroke="#131B2D" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </article>

                <article class="basket__item">
                    <div class="basket__item-top">
                        <div class="basket__item-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pizza/chegevara.png' ); ?>" alt="">
                        </div>
                        <div class="basket__item-content">
                            <h3 class="subtitle">Че Гевара</h3>
                            <p class="text">40см, тонкое тесто, 1.5кг</p>
                        </div>
                    </div>
                    <div class="basket__item-line"></div>
                    <div class="basket__item-bottom">
                        <div class="basket__item-price">
                            <span class="price-value">999</span>
                            <span class="price-currency">₽</span>
                        </div>
                        <div class="basket__counter">
                            <button class="basket__counter-btn basket__counter-btn--minus">
                                <svg width="7" height="1" viewBox="0 0 7 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 0.5H0.5" stroke="black" stroke-linecap="round" />
                                </svg>
                            </button>
                            <span class="basket__counter-value">1</span>
                            <button class="basket__counter-btn basket__counter-btn--plus">
                                <svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.5 0.5L3.5 6.5M6.5 3.5H0.5" stroke="black" stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <button class="basket__item-close" aria-label="Удалить товар">
                        <svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.49997 6.49997L3.5 3.5M3.5 3.5L0.5 0.5M3.5 3.5L6.5 0.5M3.5 3.5L0.5 6.5" stroke="#131B2D" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </article>

                <article class="basket__item">
                    <div class="basket__item-top">
                        <div class="basket__item-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pizza/chegevara.png' ); ?>" alt="">
                        </div>
                        <div class="basket__item-content">
                            <h3 class="subtitle">Че Гевара</h3>
                            <p class="text">40см, тонкое тесто, 1.5кг</p>
                        </div>
                    </div>
                    <div class="basket__item-line"></div>
                    <div class="basket__item-bottom">
                        <div class="basket__item-price">
                            <span class="price-value">999</span>
                            <span class="price-currency">₽</span>
                        </div>
                        <div class="basket__counter">
                            <button class="basket__counter-btn basket__counter-btn--minus">
                                <svg width="7" height="1" viewBox="0 0 7 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 0.5H0.5" stroke="black" stroke-linecap="round" />
                                </svg>
                            </button>
                            <span class="basket__counter-value">1</span>
                            <button class="basket__counter-btn basket__counter-btn--plus">
                                <svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.5 0.5L3.5 6.5M6.5 3.5H0.5" stroke="black" stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <button class="basket__item-close" aria-label="Удалить товар">
                        <svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.49997 6.49997L3.5 3.5M3.5 3.5L0.5 0.5M3.5 3.5L6.5 0.5M3.5 3.5L0.5 6.5" stroke="#131B2D" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </article>

                <article class="basket__item">
                    <div class="basket__item-top">
                        <div class="basket__item-image">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pizza/chegevara.png' ); ?>" alt="">
                        </div>
                        <div class="basket__item-content">
                            <h3 class="subtitle">Че Гевара</h3>
                            <p class="text">40см, тонкое тесто, 1.5кг</p>
                        </div>
                    </div>
                    <div class="basket__item-line"></div>
                    <div class="basket__item-bottom">
                        <div class="basket__item-price">
                            <span class="price-value">999</span>
                            <span class="price-currency">₽</span>
                        </div>
                        <div class="basket__counter">
                            <button class="basket__counter-btn basket__counter-btn--minus">
                                <svg width="7" height="1" viewBox="0 0 7 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 0.5H0.5" stroke="black" stroke-linecap="round" />
                                </svg>
                            </button>
                            <span class="basket__counter-value">1</span>
                            <button class="basket__counter-btn basket__counter-btn--plus">
                                <svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.5 0.5L3.5 6.5M6.5 3.5H0.5" stroke="black" stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <button class="basket__item-close" aria-label="Удалить товар">
                        <svg width="7" height="7" viewBox="0 0 7 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.49997 6.49997L3.5 3.5M3.5 3.5L0.5 0.5M3.5 3.5L6.5 0.5M3.5 3.5L0.5 6.5" stroke="#131B2D" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </article>
            </div>

            <button class="basket__clean"><span>Очистить корзину</span></button>

            <div class="basket__result">
                <div class="basket__result-price">
                    <div class="basket__result-text">Итого</div>
                    <div class="basket__item-price">
                        <span class="price-value">3999</span>
                        <span class="price-currency">₽</span>
                    </div>
                </div>
                <a class="basket__result-button" href="<?php echo esc_url( home_url( '/checkout/' ) ); ?>"><span>К оформлению заказа</span></a>
            </div>
        </aside>

        <article class="card">
            <button class="card__close">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 13L7.00002 7.00002M7.00002 7.00002L1 1M7.00002 7.00002L13 1M7.00002 7.00002L1 13" stroke="#131B2D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

            <div class="card__img">
                <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/pizza/partizan-01.png' ); ?>" alt="">
            </div>

            <div class="card__content">
                <h3 class="title">Партизан</h3>
                <p class="card__content-info card__content-info-light">35см, тридиционное тесто 35, 870г</p>
                <div class="card__content-info">Свиная шейка , томаты , красный лук , сладкий перец , моцарелла, соус сацебели, фирменный томатный соус</div>

                <div class="card__extra">
                    <div class="card__content-sizes option-group" data-option="size">
                        <span class="option-highlight"></span>
                        <button class="text active" type="button" aria-pressed="true" data-border-price="80" data-size="25" data-price="480">25см</button>
                        <button class="text" type="button" aria-pressed="false" data-border-price="80" data-size="33" data-price="680">33см</button>
                        <button class="text" type="button" aria-pressed="false" data-border-price="80" data-size="40" data-price="880">40см</button>
                        <button class="text" type="button" aria-pressed="false" data-border-price="0" data-size="50" data-price="1080">50см</button>
                    </div>

                    <div class="card__content-type option-group" data-option="type">
                        <span class="option-highlight"></span>
                        <button class="text active" aria-pressed="true" data-type="traditional" type="button">Традиционное</button>
                        <button class="text" aria-pressed="false" data-type="thin" type="button">Тонкое</button>
                    </div>

                    <div class="card__content-extra option-group" data-option="extra" data-allow-empty="true">
                        <span class="option-highlight"></span>
                        <button class="text" data-extra="cheese-border" data-price="130" aria-pressed="false" type="button"><span>Сырный +130<span>₽</span></span></button>
                        <button class="text" data-extra="sausage-border" data-price="130" aria-pressed="false" type="button"><span>Колбасный +130<span>₽</span></span></button>
                    </div>

                    <div class="card__option option-group" data-option="taste" data-allow-empty="true">
                        <span class="option-highlight"></span>
                        <button class="text" type="button" data-taste="cheese" data-price="50">Сырный</button>
                        <button class="text" type="button" data-taste="garlic" data-price="50">Чесночный</button>
                        <button class="text" type="button" data-taste="bbq" data-price="50">Барбекю</button>
                        <button class="text" type="button" data-taste="sweet-sour" data-price="50">Кисло-сладкий</button>
                    </div>

                    <div class="card__option option-group" data-option="volume">
                        <span class="option-highlight"></span>
                        <button class="text" type="button" data-volume="0.5">0.5 л</button>
                        <button class="text" type="button" data-volume="0.9">0.9 л</button>
                        <button class="text" type="button" data-volume="1">1 л</button>
                        <button class="text" type="button" data-volume="2">2 л</button>
                    </div>

                    <div class="card__option option-group" data-option="juice-taste">
                        <span class="option-highlight"></span>
                        <button class="text" type="button" aria-pressed="false" data-taste="pineapple">Ананас</button>
                        <button class="text" type="button" aria-pressed="false" data-taste="orange">Апельсин</button>
                        <button class="text" type="button" aria-pressed="false" data-taste="cherry">Вишня</button>
                        <button class="text" type="button" aria-pressed="false" data-taste="multifruit">Мультифрукт</button>
                        <button class="text" type="button" aria-pressed="false" data-taste="apple">Яблоко</button>
                    </div>

                    <div class="card__option option-group" data-option="roll-extra">
                        <span class="option-highlight"></span>
                        <button class="text" type="button" aria-pressed="false" data-taste="vasabi" data-price="50"><span>Доп. васаби +50<span>₽</span></span></button>
                        <button class="text" type="button" aria-pressed="false" data-taste="imbir" data-price="70"><span>Доп. имбирь +70<span>₽</span></span></button>
                        <button class="text" type="button" aria-pressed="false" data-taste="soeviy" data-price="100"><span>Доп. соевый соус +100<span>₽</span></span></button>
                        <button class="text" type="button" aria-pressed="false" data-taste="slivochniy" data-price="120"><span>Доп. сливочный соус +120<span>₽</span></span></button>
                        <button class="text" type="button" aria-pressed="false" data-taste="palochki" data-price="20"><span>Доп. палочки +20<span>₽</span></span></button>
                    </div>

                    <div class="card__option option-group" data-option="pizza-extra">
                        <span class="option-highlight"></span>
                        <button class="text" type="button" aria-pressed="false" data-taste="paket" data-price="10"><span>Пакет под пиццу +10<span>₽</span></span></button>
                        <button class="text" type="button" aria-pressed="false" data-taste="product" data-price="150"><span>Доп. продукт (Указать в комментариях) +150<span>₽</span></span></button>
                    </div>
                </div>

                <button class="card__content-add text">
                    <span>В корзину за</span>
                    <span>480<span>₽</span></span>
                </button>
            </div>
        </article>

        <button class="basket__button basketJS mob">
            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="24" cy="24" r="24" fill="white" />
                <path d="M29 29C27.8954 29 27 29.8954 27 31C27 32.1046 27.8954 33 29 33C30.1046 33 31 32.1046 31 31C31 29.8954 30.1046 29 29 29ZM29 29H21.2939C20.8329 29 20.6019 29 20.4121 28.918C20.2447 28.8456 20.0994 28.7291 19.9935 28.5805C19.8749 28.414 19.8272 28.1913 19.7327 27.7505L17.2715 16.2646C17.1748 15.8136 17.1259 15.5884 17.0059 15.4199C16.9 15.2713 16.7548 15.1544 16.5873 15.082C16.3975 15 16.1678 15 15.7065 15H15M18 18H30.8732C31.595 18 31.9555 18 32.1978 18.1504C32.41 18.2821 32.5653 18.4886 32.633 18.729C32.7104 19.0034 32.611 19.35 32.411 20.0435L31.0264 24.8435C30.9068 25.2581 30.8469 25.465 30.7256 25.6189C30.6185 25.7547 30.4772 25.861 30.317 25.9263C30.1361 26 29.9211 26 29.4921 26H19.7305M20 33C18.8954 33 18 32.1046 18 31C18 29.8954 18.8954 29 20 29C21.1046 29 22 29.8954 22 31C22 32.1046 21.1046 33 20 33Z" stroke="#131B2D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
    <?php endif; ?>

    <footer class="footer">
        <div class="container">
            <div class="footer__row row">
                <div class="footer__top">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__logo mob">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/footer__logo.png' ); ?>" alt="">
                    </a>

                    <div class="footer__left">
                        <ul class="footer__menu">
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text">Меню</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/promo/' ) ); ?>" class="text">Акции</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="text">Контакты и доставка</a></li>
                        </ul>

                        <div class="footer__middle">
                            <div class="header__about">
                                <div class="header__about-circle">
                                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18 8.55556V18H27.4444M18 35C8.61116 35 1 27.3888 1 18C1 8.61116 8.61116 1 18 1C27.3888 1 35 8.61116 35 18C35 27.3888 27.3888 35 18 35Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="header__about-text">
                                    <span class="header__about-title">сегодня работаем</span>
                                    <span class="header__about-subtitle">C 10:00 до 00:00</span>
                                </div>
                            </div>

                            <div class="header__about">
                                <div class="header__about-circle">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.66995 2.67629C9.26498 1.66387 8.28442 1 7.19401 1H3.52632C2.13107 1 1 2.1308 1 3.52604C1 15.3856 10.6144 25 22.474 25C23.8692 25 25 23.8688 25 22.4736L25.0006 18.8053C25.0006 17.7149 24.3369 16.7345 23.3245 16.3295L19.8092 14.9239C18.8998 14.5601 17.8644 14.7239 17.1119 15.3509L16.2047 16.1076C15.1452 16.9905 13.5862 16.9203 12.6109 15.945L10.0563 13.3881C9.08105 12.4128 9.00898 10.8551 9.89193 9.79558L10.6484 8.8884C11.2755 8.13594 11.4407 7.10021 11.0769 6.19079L9.66995 2.67629Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="header__about-text">
                                    <span class="header__about-title">Доставка еды <span style="font-weight: 400;">Курск</span></span>
                                    <a class="header__about-subtitle" href="tel:550015">55-00-15</a>
                                </div>
                            </div>

                            <div class="header__about">
                                <div class="header__about-circle">
                                    <svg width="33" height="23" viewBox="0 0 33 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_2039_749)">
                                            <mask id="mask0_2039_749" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="33" height="23">
                                                <path d="M32.6846 19C32.6846 21.209 30.8935 22.9998 28.6846 23H4C1.79086 23 4.02666e-08 21.2091 0 19V7.2627H32.6846V19ZM4.02637 10.2891C3.47422 10.2891 3.02659 10.737 3.02637 11.2891V15.3418C3.02637 15.8941 3.47408 16.3418 4.02637 16.3418H9.89453C10.4468 16.3418 10.8945 15.8941 10.8945 15.3418V11.2891C10.8943 10.737 10.4467 10.2891 9.89453 10.2891H4.02637ZM25.2109 13.9209C24.6587 13.9209 24.211 14.3687 24.2109 14.9209V15.3418C24.2109 15.8941 24.6587 16.3418 25.2109 16.3418H28.6582C29.2103 16.3416 29.6582 15.894 29.6582 15.3418V14.9209C29.6581 14.3688 29.2103 13.9211 28.6582 13.9209H25.2109ZM17.9473 10.2891C17.3952 10.2891 16.9475 10.737 16.9473 11.2891V11.7109C16.9475 12.263 17.3952 12.7109 17.9473 12.7109H28.6582C29.2102 12.7108 29.658 12.2629 29.6582 11.7109V11.2891C29.658 10.7371 29.2102 10.2892 28.6582 10.2891H17.9473ZM28.6846 0C30.8935 0.000193578 32.6846 1.79098 32.6846 4V4.8418H0V4C2.25493e-07 1.79086 1.79086 6.14505e-08 4 0H28.6846Z" fill="white" />
                                            </mask>
                                            <g mask="url(#mask0_2039_749)">
                                                <path d="M0 7.2627V-1.7373H-9V7.2627H0ZM32.6846 7.2627H41.6846V-1.7373H32.6846V7.2627ZM3.02637 11.2891L-5.97363 11.2854V11.2891H3.02637ZM10.8945 11.2891H19.8945V11.2854L10.8945 11.2891ZM24.2109 14.9209L15.2109 14.9195V14.9209H24.2109ZM28.6582 16.3418V25.3418H28.6609L28.6582 16.3418ZM29.6582 14.9209H38.6582V14.9195L29.6582 14.9209ZM28.6582 13.9209L28.6609 4.9209H28.6582V13.9209ZM16.9473 11.2891L7.94727 11.2854V11.2891H16.9473ZM16.9473 11.7109H7.94726L7.94727 11.7146L16.9473 11.7109ZM28.6582 12.7109V21.7109H28.6609L28.6582 12.7109ZM29.6582 11.7109L38.6582 11.7146V11.7109H29.6582ZM29.6582 11.2891H38.6582V11.2854L29.6582 11.2891ZM28.6582 10.2891L28.6609 1.28906H28.6582V10.2891ZM32.6846 4.8418V13.8418H41.6846V4.8418H32.6846ZM0 4.8418H-9V13.8418H0V4.8418ZM32.6846 19H23.6846C23.6846 16.2377 25.9236 14.0002 28.6838 14L28.6846 23V32C35.8627 31.9994 41.6846 26.1804 41.6846 19H32.6846ZM28.6846 23L28.6838 14H4V23V32H28.6846V23ZM4 23V14C6.76142 14 9 16.2386 9 19H0H-9C-9 26.1797 -3.1797 32 4 32V23ZM0 19H9V7.2627H0H-9V19H0ZM0 7.2627V16.2627H32.6846V7.2627V-1.7373H0V7.2627ZM32.6846 7.2627H23.6846V19H32.6846H41.6846V7.2627H32.6846ZM4.02637 10.2891V1.28906C-1.49995 1.28906 -5.97141 5.76922 -5.97363 11.2854L3.02637 11.2891L12.0264 11.2927C12.0246 15.7047 8.44839 19.2891 4.02637 19.2891V10.2891ZM3.02637 11.2891H-5.97363V15.3418H3.02637H12.0264V11.2891H3.02637ZM3.02637 15.3418H-5.97363C-5.97363 20.8646 -1.49648 25.3418 4.02637 25.3418V16.3418V7.3418C8.44464 7.3418 12.0264 10.9235 12.0264 15.3418H3.02637ZM4.02637 16.3418V25.3418H9.89453V16.3418V7.3418H4.02637V16.3418ZM9.89453 16.3418V25.3418C15.4174 25.3418 19.8945 20.8646 19.8945 15.3418H10.8945H1.89453C1.89453 10.9235 5.47625 7.3418 9.89453 7.3418V16.3418ZM10.8945 15.3418H19.8945V11.2891H10.8945H1.89453V15.3418H10.8945ZM10.8945 11.2891L19.8945 11.2854C19.8923 5.76922 15.4208 1.28906 9.89453 1.28906V10.2891V19.2891C5.47251 19.2891 1.89631 15.7047 1.89453 11.2927L10.8945 11.2891ZM9.89453 10.2891V1.28906H4.02637V10.2891V19.2891H9.89453V10.2891ZM25.2109 13.9209V4.9209C19.6868 4.9209 15.2118 9.39918 15.2109 14.9195L24.2109 14.9209L33.2109 14.9223C33.2103 19.3382 29.6306 22.9209 25.2109 22.9209V13.9209ZM24.2109 14.9209H15.2109V15.3418H24.2109H33.2109V14.9209H24.2109ZM24.2109 15.3418H15.2109C15.2109 20.8646 19.6881 25.3418 25.2109 25.3418V16.3418V7.3418C29.6292 7.3418 33.2109 10.9235 33.2109 15.3418H24.2109ZM25.2109 16.3418V25.3418H28.6582V16.3418V7.3418H25.2109V16.3418ZM28.6582 16.3418L28.6609 25.3418C34.1788 25.3401 38.6582 20.8673 38.6582 15.3418H29.6582H20.6582C20.6582 10.9207 24.2419 7.34313 28.6555 7.3418L28.6582 16.3418ZM29.6582 15.3418H38.6582V14.9209H29.6582H20.6582V15.3418H29.6582ZM29.6582 14.9209L38.6582 14.9195C38.6574 9.39658 34.1801 4.92256 28.6609 4.9209L28.6582 13.9209L28.6555 22.9209C24.2405 22.9196 20.6589 19.341 20.6582 14.9223L29.6582 14.9209ZM28.6582 13.9209V4.9209H25.2109V13.9209V22.9209H28.6582V13.9209ZM17.9473 10.2891V1.28906C12.4226 1.28962 7.94949 5.76835 7.94727 11.2854L16.9473 11.2891L25.9473 11.2927C25.9455 15.7057 22.3686 19.2886 17.9482 19.2891L17.9473 10.2891ZM16.9473 11.2891H7.94727L7.94726 11.7109H16.9473H25.9473V11.2891H16.9473ZM16.9473 11.7109L7.94727 11.7146C7.94949 17.2316 12.4217 21.7104 17.9464 21.7109L17.9473 12.7109L17.9482 3.71094C22.3686 3.71138 25.9455 7.29436 25.9473 11.7073L16.9473 11.7109ZM17.9473 12.7109L17.9464 21.7109H28.6582V12.7109V3.71094H17.9482L17.9473 12.7109ZM28.6582 12.7109L28.6609 21.7109C34.1823 21.7093 38.656 17.2334 38.6582 11.7146L29.6582 11.7109L20.6582 11.7073C20.66 7.29248 24.2381 3.71227 28.6555 3.71094L28.6582 12.7109ZM29.6582 11.7109H38.6582V11.2891H29.6582H20.6582V11.7109H29.6582ZM29.6582 11.2891L38.6582 11.2854C38.656 5.76663 34.1823 1.29072 28.6609 1.28906L28.6582 10.2891L28.6555 19.2891C24.2381 19.2877 20.66 15.7075 20.6582 11.2927L29.6582 11.2891ZM28.6582 10.2891V1.28906H17.9473V10.2891L17.9482 19.2891H28.6582V10.2891ZM28.6846 0L28.6838 9C25.9236 8.99976 23.6846 6.76233 23.6846 4H32.6846H41.6846C41.6846 -3.18037 35.8635 -8.99937 28.6854 -9L28.6846 0ZM32.6846 4H23.6846V4.8418H32.6846H41.6846V4H32.6846ZM32.6846 4.8418V-4.1582H0V4.8418V13.8418H32.6846V4.8418ZM0 4.8418H9V4H0H-9V4.8418H0ZM0 4H9C9 6.76142 6.76142 9 4 9V0V-9C-3.1797 -9 -9 -3.1797 -9 4H0ZM4 0V9H28.6838L28.6846 0L28.6854 -9H4V0Z" fill="white" />
                                            </g>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2039_749">
                                                <rect width="33" height="23" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="header__about-text">
                                    <span class="header__about-title" style="font-weight: 400;">Мы принимаем <br> оплату картой</span>
                                </div>
                            </div>
                        </div>

                        <div class="footer__address">
                            <span>г. Курск</span>
                            <button class="open-map" data-address="Курск, пр-т Дериглазова, 19"><span>пр-т Дериглазова, 19</span></button>
                            <button class="open-map" data-address="Курск, пр-т Хрущева, 1Б"><span>пр-т Хрущева, 1Б</span></button>
                            <button class="open-map" data-address="Курск, пр-т Кулакова, 7"><span>пр-т Кулакова, 7</span></button>
                        </div>
                    </div>

                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__right decs">
                        <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/image/footer__logo.png' ); ?>" alt="">
                    </a>
                </div>

                <?php if ( ! is_page_template( 'page-contact.php' ) && ('page-policy.php') && ! is_404() ) : ?>
                    <div class="footer__bottom">
                        <iframe src="https://yandex.ru/map-widget/v1/?lang=ru_RU&amp;scroll=true&amp;source=constructor-api&amp;um=constructor%3A0c40550a95135dbb55f8499a0515f271c6d291131313cdf6bad8aaa1d173c847" frameborder="0" allowfullscreen="true" width="100%" height="458px" style="display: block;"></iframe>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
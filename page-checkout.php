<?php
/*
Template Name: Checkout
*/
get_header();
?>

<section class="order">
    <div class="container">
        <div class="order__row row">
            <h1 class="title">Оформление заказа</h1>
            <form class="form" action="#">
                <div class="form__left">
                    <div class="form__client">
                        <input type="text" placeholder="Ваше имя" required>
                        <input type="tel" placeholder="+7 (999) 999 99 99" required>
                    </div>

                    <div class="form__get">
                        <h3 class="subtitle">Как хотите получить заказ?</h3>
                        <p class="text form__get-text">Выберите удобный для вас способ.</p>

                        <div class="form__get-type">
                            <label class="form__get-radio">
                                <input type="radio" name="delivery_type" value="pickup" checked>
                                <span class="text">Самовывоз</span>
                            </label>

                            <label class="form__get-radio">
                                <input type="radio" name="delivery_type" value="delivery">
                                <span class="text">Доставка</span>
                            </label>
                        </div>

                        <div class="form__pickup">
                            <h3 class="subtitle form__get-address">Выберите адрес самовывоза</h3>

                            <div class="form__select" id="addressSelect">
                                <div class="form__select-current">
                                    <span class="text">пр-т Дериглазова, 19</span>
                                    <svg class="form__select-arrow" width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.5 1.5L7.5 7.5L1.5 1.5" stroke="#131B2D" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>

                                <ul class="form__select-list">
                                    <li class="text">пр-т Хрущева, 1Б</li>
                                    <li class="text">пр-т Кулакова, 7</li>
                                </ul>
                            </div>
                        </div>

                        <div class="form__delivery">
                            <h3 class="subtitle form__get-address">Укажите адрес доставки</h3>

                            <div class="form__address">
                                <input type="text" name="address" placeholder="Адрес">
                                <input type="text" name="house" placeholder="Дом">
                                <input type="text" name="details" placeholder="Подъезд/Этаж/Квартира">
                            </div>

                            <input type="hidden" name="address_lat">
                            <input type="hidden" name="address_lng">
                            <input type="hidden" name="delivery_zone">
                            <input type="hidden" name="delivery_price">
                            <input type="hidden" name="delivery_time">
                        </div>
                    </div>

                    <input class="form__comment" type="text" placeholder="Комментарий к заказу ">
                    <button class="form__button" type="submit"><span class="text">Оформить заказ</span></button>
                    <a class="form__other" href="<?php echo esc_url( home_url( '/' ) ); ?>">Изменить заказ</a>
                </div>

                <div class="form__right">
                    <div class="form__order">
                        <h3 class="subtitle">Ваш заказ</h3>

                        <ul>
                            <li>
                                <div class="form__order-left">
                                    <p class="form__order-title text">
                                        <span>Сет Три Вкуса</span>
                                        <span>x</span>
                                        <span>1 шт.</span>
                                    </p>
                                    <p class="text form__order-about">Порция: 48 шт. 2500 гр.</p>
                                    <p class="text form__order-extra">Дополнительный соус</p>
                                </div>
                                <strong class="form__order-price text">
                                    <span>2499</span><span>₽</span>
                                </strong>
                            </li>

                            <li>
                                <div class="form__order-left">
                                    <p class="form__order-title text">
                                        <span>Сет Три Вкуса</span>
                                        <span>x</span>
                                        <span>1 шт.</span>
                                    </p>
                                    <p class="text form__order-about">Порция: 48 шт. 2500 гр.</p>
                                    <p class="text form__order-extra">Дополнительный соус</p>
                                </div>
                                <strong class="form__order-price text">
                                    <span>2499</span><span>₽</span>
                                </strong>
                            </li>

                            <li>
                                <div class="form__order-left">
                                    <p class="form__order-title text">
                                        <span>Сет Три Вкуса</span>
                                        <span>x</span>
                                        <span>1 шт.</span>
                                    </p>
                                    <p class="text form__order-about">Порция: 48 шт. 2500 гр.</p>
                                    <p class="text form__order-extra">Дополнительный соус</p>
                                </div>
                                <strong class="form__order-price text">
                                    <span>2499</span><span>₽</span>
                                </strong>
                            </li>

                            <li>
                                <div class="form__order-left">
                                    <p class="form__order-title text">
                                        <span>Сет Три Вкуса</span>
                                        <span>x</span>
                                        <span>1 шт.</span>
                                    </p>
                                    <p class="text form__order-about">Порция: 48 шт. 2500 гр.</p>
                                    <p class="text form__order-extra">Дополнительный соус</p>
                                </div>
                                <strong class="form__order-price text">
                                    <span>2499</span><span>₽</span>
                                </strong>
                            </li>

                            <li>
                                <div class="form__order-left">
                                    <p class="form__order-title text">
                                        <span>Сет Три Вкуса</span>
                                        <span>x</span>
                                        <span>1 шт.</span>
                                    </p>
                                    <p class="text form__order-about">Порция: 48 шт. 2500 гр.</p>
                                    <p class="text form__order-extra">Дополнительный соус</p>
                                </div>
                                <strong class="form__order-price text">
                                    <span>2499</span><span>₽</span>
                                </strong>
                            </li>

                            <li>
                                <p class="text">Доставка</p>
                                <strong class="form__order-price text">
                                    <span>100</span><span>₽</span>
                                </strong>
                            </li>
                        </ul>

                        <div class="form__order-price">
                            <h3 class="subtitle">Итого</h3>
                            <strong class="form__order-price text">
                                <span>5000</span><span>₽</span>
                            </strong>
                        </div>
                    </div>

                    <div class="form__order-line"></div>

                    <div class="form__order-pay">
                        <label>
                            <input type="radio" name="payment" value="card" checked>
                            <p class="text">Картой</p>
                            <svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.75 8.89286V15.4074C0.75 16.9276 0.75 17.6872 1.05276 18.2678C1.31907 18.7786 1.74371 19.1942 2.26638 19.4544C2.86 19.75 3.63749 19.75 5.19015 19.75H21.3098C22.8625 19.75 23.6389 19.75 24.2325 19.4544C24.7552 19.1942 25.1812 18.7786 25.4475 18.2678C25.75 17.6878 25.75 16.9292 25.75 15.412V8.89286M0.75 8.89286V6.17857M0.75 8.89286H25.75M0.75 6.17857V5.09312C0.75 3.57298 0.75 2.81234 1.05276 2.23172C1.31907 1.721 1.74371 1.30607 2.26638 1.04584C2.86058 0.75 3.63901 0.75 5.19472 0.75H21.3058C22.8615 0.75 23.6383 0.75 24.2325 1.04584C24.7552 1.30607 25.1812 1.721 25.4475 2.23172C25.75 2.81177 25.75 3.57149 25.75 5.08866V6.17857M0.75 6.17857H25.75M6.30556 14.3214H11.8611M25.75 8.89286V6.17857" stroke="#131B2D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </label>

                        <label>
                            <input type="radio" name="payment" value="cash">
                            <p class="text">Наличными</p>
                            <svg width="27" height="21" viewBox="0 0 27 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.75 3.125V15.95C0.75 17.2801 0.75 17.9447 1.05276 18.4528C1.31907 18.8997 1.7437 19.2637 2.26637 19.4914C2.85998 19.75 3.63746 19.75 5.1901 19.75H21.3096C22.8622 19.75 23.6386 19.75 24.2322 19.4914C24.7549 19.2637 25.1809 18.8999 25.4472 18.453C25.75 17.945 25.75 17.2799 25.75 15.9498L25.75 6.92474C25.75 5.59461 25.75 4.92955 25.4472 4.42151C25.1809 3.97462 24.7551 3.61156 24.2325 3.38386C23.6383 3.125 22.861 3.125 21.3053 3.125H13.2499M0.75 3.125H13.2499M0.75 3.125C0.75 1.81332 1.99364 0.75 3.52774 0.75H8.63118C9.31059 0.75 9.65109 0.75 9.97078 0.815621C10.2542 0.873801 10.5247 0.970002 10.7732 1.10022C11.0534 1.24705 11.2941 1.45278 11.7742 1.86328L13.2499 3.125" stroke="#131B2D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </label>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>
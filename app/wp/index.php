<?php get_header(); ?>   
    <main class="main" style="background-image: url(<?php the_field('main__bg')?>);">
        <section class="price">
            <div class="container">
                <div class="price__wrapper">
                    <h2 class="price__title title">
                        Узнайте стоимость
                    </h2>
                    <p class="price__text">
                        И наличие <br> свободных автомобилей по телефону
                    </p>
                    <form class="price__form">
                        <div class="price__inner">
                            <input type="text" class="price__input" placeholder="Ваш телефон">
                            <button class="price__btn">
                                Узнать о наличии свободных машин
                            </button>
                        </div>
                        <label class="price__label">
                            <input class="price__checkbox" type="checkbox">
                            <span class="price__span"></span>
                            <p>Согласен на обработку персональных данных</p>
                        </label>
                    </form>
                    <p class="price__description">
                        Вам перезвонит менеджер в течении 15 минут, <br>
                        сообщит какие автомобили свободны и где вы их можете забрать
                    </p>
                </div>
            </div>
        </section>
        <section class="choice">
            <div class="container">
                <div class="choice__wrapper">
                    <h2 class="choice__title title">
                        НАС ВЫБИРАЮТ ПОТОМУ ЧТО
                    </h2>
                    <div class="choice__items">
                        <div class="choice__item">
                            <img class="choice__item-01" src="<?php bloginfo( 'template_url' ); ?>/assets/images/choice/item/01.png" alt="img">
                            <h3 class="choice__item-title">
                                Работа с физическими и юридическими лицами по договору
                            </h3>
                            <span class="choice__item-text">
                                Свои обязаности и права клиента четко прописываем в договоре
                            </span>
                        </div>
                        <div class="choice__item">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/choice/item/02.png" alt="img">
                            <h3 class="choice__item-title">
                                Различные виды оплаты
                            </h3>
                            <span class="choice__item-text">
                                Оплата услуг может быть произведена как наличным так и безналичным расчетом
                            </span>
                        </div>
                        <div class="choice__item">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/choice/item/03.png" alt="img">
                            <h3 class="choice__item-title">
                                Выезд за пределы области
                            </h3>
                            <span class="choice__item-text">
                                Возможность выезда за пределы Московской области
                            </span>
                        </div>
                        <div class="choice__item">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/choice/item/04.png" alt="img">
                            <h3 class="choice__item-title">
                                Все автомобили проходят ТО у офицюдилера
                            </h3>
                            <span class="choice__item-text">
                                Тщательно следим за техническим состоянием автомобилей
                            </span>
                        </div>
                        <div class="choice__item">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/choice/item/05.png" alt="img">
                            <h3 class="choice__item-title">
                                Собственный автопарк
                            </h3>
                            <span class="choice__item-text">
                                Сдаем в аренду только собственные автомобили. Все машины официально пренадлежат нам
                            </span>
                        </div>
                        <div class="choice__item">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/choice/item/06.png" alt="img">
                            <h3 class="choice__item-title">
                                Детские кресло бесплатно
                            </h3>
                            <span class="choice__item-text">
                                Кресло для детей предоставляем бесплатно
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="catalog">
            <div class="container">
                <div class="catalog__wrapper">
                    <h2 class="catalog__title title">
                        Подберите надёжный автомобиль по вашему бюджету
                    </h2>
                    <div class="catalog__box">
                        <p class="catalog__text">
                            Не дорогая возможность оставаться свободным и мобильным с автомобилем
                        </p>
                        <h3 class="catalog__subtitle">
                            ЭКОНОМ КЛАССА
                        </h3>
                        <div class="catalog__items">
                            <div class="catalog__item" style="background-image: url(<?php the_field('catalog_bg')?>);">
                                <div class="catalog__img-box">
                                    <img src="<?php the_field('catalog__item--01')?>" alt="img">
                                </div>
                                <h4 class="catalog__item-title">
                                    <?php the_field('catalog__item-title--01')?>
                                </h4>
                                <span class="catalog__item-text">
                                    <?php the_field('catalog__item-text--01')?>
                                </span>
                                <button class="catalog__item-btn">
                                    Забронировать
                                </button>
                            </div>
                            <div class="catalog__item" style="background-image: url(<?php the_field('catalog_bg')?>);">
                                <div class="catalog__img-box">
                                    <img src="<?php the_field('catalog__item--02')?>" alt="img">
                                </div>
                                <h4 class="catalog__item-title">
                                    <?php the_field('catalog__item-title--02')?>
                                </h4>
                                <span class="catalog__item-text">
                                    <?php the_field('catalog__item-text--02')?>
                                </span>
                                <button class="catalog__item-btn">
                                    Забронировать
                                </button>
                            </div>
                            <div class="catalog__item" style="background-image: url(<?php the_field('catalog_bg')?>);">
                                <div class="catalog__img-box">
                                    <img src="<?php the_field('catalog__item--03')?>" alt="img">
                                </div>
                                <h4 class="catalog__item-title">
                                    <?php the_field('catalog__item-title--03')?>
                                </h4>
                                <span class="catalog__item-text">
                                    <?php the_field('catalog__item-text--03')?>
                                </span>
                                <button class="catalog__item-btn">
                                    Забронировать
                                </button>
                            </div>
                            <div class="catalog__item catalog__item--manual" style="background-image: url(<?php the_field('catalog_bg')?>);">
                                <div class="catalog__img-box">
                                    <img src="<?php the_field('catalog__item--01')?>" alt="img">
                                </div>
                                <h4 class="catalog__item-title">
                                    <?php the_field('catalog__item-title--01')?>
                                </h4>
                                <span class="catalog__item-text">
                                    <?php the_field('catalog__item-text--01')?>
                                </span>
                                <button class="catalog__item-btn">
                                    Забронировать
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__box">
                        <p class="catalog__text">
                            В городе или на плохой дороге вы всегда будете в полной безопасности
                        </p>
                        <h3 class="catalog__subtitle">
                            КОМФОРТ КЛАССА
                        </h3>
                        <div class="catalog__items">
                            <div class="catalog__item" style="background-image: url(<?php the_field('catalog_bg')?>);">
                                <div class="catalog__img-box">
                                    <img src="<?php the_field('catalog__item--04')?>" alt="img">
                                </div>
                                <h4 class="catalog__item-title">
                                    <?php the_field('catalog__item-title--04')?>
                                </h4>
                                <span class="catalog__item-text">
                                    <?php the_field('catalog__item-text--04')?>
                                </span>
                                <button class="catalog__item-btn">
                                    Забронировать
                                </button>
                            </div>
                            <div class="catalog__item" style="background-image: url(<?php the_field('catalog_bg')?>);">
                                <div class="catalog__img-box">
                                    <img src="<?php the_field('catalog__item--05')?>" alt="img">
                                </div>
                                <h4 class="catalog__item-title">
                                    <?php the_field('catalog__item-title--05')?>
                                </h4>
                                <span class="catalog__item-text">
                                    <?php the_field('catalog__item-text--05')?>
                                </span>
                                <button class="catalog__item-btn">
                                    Забронировать
                                </button>
                            </div>
                            <div class="catalog__item" style="background-image: url(<?php the_field('catalog_bg')?>);">
                                <div class="catalog__img-box">
                                    <img src="<?php the_field('catalog__item--06')?>" alt="img">
                                </div>
                                <h4 class="catalog__item-title">
                                    <?php the_field('catalog__item-title--06')?>
                                </h4>
                                <span class="catalog__item-text">
                                    <?php the_field('catalog__item-text--06')?>
                                </span>
                                <button class="catalog__item-btn">
                                    Забронировать
                                </button>
                            </div>
                            <div class="catalog__item catalog__item--manual" style="background-image: url(<?php the_field('catalog_bg')?>);">
                                <div class="catalog__img-box">
                                    <img src="<?php the_field('catalog__item--04')?>" alt="img">
                                </div>
                                <h4 class="catalog__item-title">
                                    <?php the_field('catalog__item-title--04')?>
                                </h4>
                                <span class="catalog__item-text">
                                    <?php the_field('catalog__item-text--04')?>
                                </span>
                                <button class="catalog__item-btn">
                                    Забронировать
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="catalog__box">
                        <p class="catalog__text">
                            В городе или на плохой дороге вы всегда будете в полной безопасности
                        </p>
                        <h3 class="catalog__subtitle">
                            БИЗНЕСС КЛАССА
                        </h3>
                        <div class="catalog__items">
                            <div class="catalog__item" style="background-image: url(<?php the_field('catalog_bg')?>);">
                                <div class="catalog__img-box">
                                    <img src="<?php the_field('catalog__item--07')?>" alt="img">
                                </div>
                                <h4 class="catalog__item-title">
                                    <?php the_field('catalog__item-title--07')?>
                                </h4>
                                <span class="catalog__item-text">
                                    <?php the_field('catalog__item-text--07')?>
                                </span>
                                <button class="catalog__item-btn">
                                    Забронировать
                                </button>
                            </div>
                            <div class="catalog__item" style="background-image: url(<?php the_field('catalog_bg')?>);">
                                <div class="catalog__img-box">
                                    <img src="<?php the_field('catalog__item--08')?>" alt="img">
                                </div>
                                <h4 class="catalog__item-title">
                                    <?php the_field('catalog__item-title--08')?>
                                </h4>
                                <span class="catalog__item-text">
                                    <?php the_field('catalog__item-text--08')?>
                                </span>
                                <button class="catalog__item-btn">
                                    Забронировать
                                </button>
                            </div>
                            <div class="catalog__item" style="background-image: url(<?php the_field('catalog_bg')?>);">
                                <div class="catalog__img-box">
                                    <img src="<?php the_field('catalog__item--09')?>" alt="img">
                                </div>
                                <h4 class="catalog__item-title">
                                    <?php the_field('catalog__item-title--09')?>
                                </h4>
                                <span class="catalog__item-text">
                                    <?php the_field('catalog__item-text--09')?>
                                </span>
                                <button class="catalog__item-btn">
                                    Забронировать
                                </button>
                            </div>
                            <div class="catalog__item catalog__item--manual" style="background-image: url(<?php the_field('catalog_bg')?>);">
                                <div class="catalog__img-box">
                                    <img src="<?php the_field('catalog__item--07')?>" alt="img">
                                </div>
                                <h4 class="catalog__item-title">
                                    <?php the_field('catalog__item-title--07')?>
                                </h4>
                                <span class="catalog__item-text">
                                    <?php the_field('catalog__item-text--07')?>
                                </span>
                                <button class="catalog__item-btn">
                                    Забронировать
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="rent">
            <div class="container">
                <div class="rent__wrapper">
                    <h2 class="rent__title title">
                        В нашу аренду входит:
                    </h2>
                    <div class="rent__items">
                        <div class="rent__item">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/rent/01.png" alt="img">
                            <p>Страхование<br>ДТП</p>
                        </div>
                        <div class="rent__item">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/rent/02.png" alt="img">
                            <p>Страхование ответственности<br>перед третьими лицами</p>
                        </div>
                        <div class="rent__item">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/rent/03.png" alt="img">
                            <p>Страхование<br>от угона</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>
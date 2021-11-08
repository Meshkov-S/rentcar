<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.min.css">
    <title><?php bloginfo( 'description' ); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header" style="background-image: url(<?php the_field('header__bg')?>);">
        <div class="container">
            <div class="header__top">
                <div class="header__logo">
                    <span>ЛОГО</span>
                    <p>Прокат легких <br> автомобилей в Москве</p>
                </div>
                <div class="header__info">
                    <a href="tel:<?php the_field('header__info-phone')?>" class="header__info-phone"><?php the_field('header__info-phone')?></a>
                    <button class="header__btn">Перезвоните мне</button>
                    <span class="header__info-span"><?php the_field('header__info-span')?></span>
                </div>
            </div>
            <div class="header__box" style="background-image: url(<?php the_field('header__img')?>);">
                <h1 class="header__title">
                    <?php the_field('header__title')?>
                    <!-- Аренда <span>автомобиля</span> на один день от 1700р без водителя<span>.</span> -->
                </h1>
                <div class="header__wrapper">
                    <div class="header__items">
                        <div class="header__item">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/header/item/01.png" alt="item">
                            <p>Подача в любую точку <br> Москвы и аэропорт</p>
                        </div>
                        <div class="header__item">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/header/item/02.png" alt="item">
                            <p>Полный бак <br> бензина</p>
                        </div>
                        <div class="header__item">
                            <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/header/item/03.png" alt="item">
                            <p>Положительное решение <br> по телефону за 10 минут</p>
                        </div>
                        <button class="header__items-btn">Посмотреть автомобили</button>
                    </div>
                    <div class="header__inner">
                        <div class="header__links">
                            <a href="#" class="header__link">
                                Эконом
                            </a>
                            <a href="#" class="header__link">
                                Комфорт
                            </a>
                            <a href="#" class="header__link">
                                Бизнес
                            </a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </header>
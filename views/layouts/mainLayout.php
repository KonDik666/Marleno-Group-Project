<?php
use app\assets\AppAsset;
use yii\helpers\Html;
AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
    <header>
        <div>
            <div class="header-top">
                <img src="../../web/img/logo.png" width="230" height="110" alt="логотип">
                <div class="icon-text">
                    <img src="../../web/img/location.png" width="24" height="24" alt="символ расположения">
                    <p>ОФИС: EKБ, УЛИЦА СМАЗЧИКОВ, дом 10 к 4, офис 25</br>
                        Производство: ЕКБ, УЛИЦА СМАЗЧИКОВ, дом 10 к 4</p>
                </div>
                <div class="icon-text">
                    <img src="../../web/img/Phone_call.png" width="24" height="24" alt="символ звонка">
                    <p>круглосуточно</br>
                        +7 (000) 000-00-00</p>
                </div>
            </div>

            <nav class="navbar">
                <a href="/site/index">Главная</a>
                <a href="/site/construction">Производство</a>
                <a href="/site/catalog">Каталог</a>
                <a href="">Услуги</a>
                <a href="">Партнеры</a>
                <a href="/site/about">О компании</a>
            </nav>
        </div>

        <div class="bg">
            <div class="info-container">
                <div class="info-text">
                    <h1>Большой выбор</br> плит</h1>
                    <p>ГРАНИТНЫЕ И КЕРАМИЧЕСКИЕ ПЛИТЫ ОТ</br> 5 тыс.руб.</p>

                </div>

                <ul class="list">
                    <li>Гранитные плиты</li>
                    <li>Плиты мощения</li>
                    <li>Облицовочные плиты</li>
                    <li>Широкоформатные плиты</li>
                    <li>Бордюры и ступени</li>
                    <li>и другое</li>
                </ul>


            </div>
            <div class="gift-block">
                <p class="topic"><mark class="bold">Подарок</mark> на вашу</br> первую покупку</p>
                <div class="gift-container">
                    <img src="../../web/img/Gift.png" alt="подарок">
                    <p>От 20 тыс</br><mark class="lower-text">рублей!</mark> </p>
                </div>

                <p class="description">При заказе строительных работ в</br> компании ООО ”Marleno Group”</p>
                <p class="description">Предоставляем дополнительный</br> набор плит под ваши цели</br> <mark
                        class="bold">БЕСПЛАТНО</mark></p>
                <p class="phone">+7 (000) 000-00-00</p>
                <button class="button-black">Оставить заявку</button>

            </div>
        </div>
    </header>

    <?= $content ?>

    <footer>
        <div class="container">
            <div class="footer">
                <div class="footer-top">
                    <a href="#" class="footer__logo">
                        <img src="../../img/logo2.png" />
                    </a>
                    <div class="footer__menu">
                        <ul>
                            <li><a href="/site/index">Главная</a></li>
                            <li><a href="/site/construction">Производство</a></li>
                            <li><a href="/site/catalog">Каталог</a></li>
                            <li><a href="#">Услуги</a></li>
                            <li><a href="#">Партнеры</a></li>
                            <li><a href="/site/about">О компании</a></li>
                        </ul>
                        <div class="footer-social">
                            <a href="#">
                                <img src="../../img/vk.png" />
                            </a>
                            <a href="#" target="_blank">
                                <img src="../../img/tg.png" />
                            </a>
                            <a href="#" target="_blank">
                                <img src="../../img/w.png" />
                            </a>
                        </div>
                    </div>

                    <div class="footer__contact">
                        <a href="#" class="footer__phone">+7 (000) 000-00-00</a>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="footer__info">ООО “Marleno Group” <br>ОГРН: 1047712345678 <br>ИНН: 7712345678</div>
                    <div class="footer-adres">
                        <div class="footer-adres__item">
                            <img src="../../img/location2.png" />
                            <b>офис:</b>
                            <span> EKБ, УЛИЦА СМАЗЧИКОВ, дом 10 к 4, офис 25</span>
                        </div>
                        <div class="footer-adres__item">
                            <img src="../../img/location2.png" />
                            <b>производство:</b>
                            <span> EKБ, УЛИЦА СМАЗЧИКОВ, дом 10 к 4</span>
                        </div>
                    </div>
                    <div class="footer__ya">
                        <img src="../../img/ya.png" alt="ya">
                    </div>
                </div>
                <div class="footer__copyright">2022-2024 All rights reserved</div>
            </div>
        </div>
    </footer>








<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
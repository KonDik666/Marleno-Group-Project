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
    <script src="
https://cdn.jsdelivr.net/npm/swiper@11.1.1/swiper-bundle.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/swiper@11.1.1/swiper-bundle.min.css
" rel="stylesheet">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

    <header class="anim">
        <div>
            <div class="header-top anim">
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

            <nav class="navbar anim">
                <a href="/site/index">Главная</a>
                <a href="/site/construction">Производство</a>
                <a href="/site/catalog">Каталог</a>
                <div id="services_on"><p  href="">Услуги</p><div class="trangle"></div>
                <!-- <script>
                     serviceOn=document.getElementById("services_on");
                     serviceMenu=document.getElementById("services_menu");
serviceOn.addEventListener("click", function(){
    
    
   menu=document.getElementById("services_menu");
   isDisplay= window.getComputedStyle(menu).display;
   if(isDisplay=="block"){
    menu.style.display="none";
   }
   else if(isDisplay=="none"){
    menu.style.display="block";
   }

   
});

                </script> -->
                <ul id="services_menu">
                    <li><a href="/site/consultations">Консультация специалистов</a></li>
                    <li><a href="/site/measurements">Замеры облицовки</a></li>
                    <li><a href="/site/delievers">Доставка материала</a></li>
                    <li><a href="/site/montage">Монтаж</a></li>
                </ul>
            </div>
                <a href="/site/partners">Партнеры</a>
                <a href="/site/about">О компании</a>
            </nav>
        </div>

       
    </header>

    <?= $content ?>

    

    <footer>
        <div class="container">
            <div class="footer anim">
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
                            <li><a href="/site/partners">Партнеры</a></li>
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
<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<section>
    <div class="bg">
            <div class="info-container anim">
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
            <div class="gift-block anim">
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
</section>   

<section class="main-catalog">
        <h3 class="anim">Каталог плит</h3>
        <div class="catalog-row">
        <div class="filters-bg anim">
            <div class="filters-container">
            <div class="filters-items">
                <h4>Материал</h4>
                <div class="filters-item">
                    <input type="checkbox" name="Гранит" id=""><label>Гранит</label>
                </div>    
                <div class="filters-item">
                    <input type="checkbox" name="Мрамор" id=""><label>Мрамор</label>
                </div>
                <div class="filters-item">
                    <input type="checkbox" name="Известняк" id=""><label>Известняк</label>
                </div>
                <div class="filters-item">
                    <input type="checkbox" name="Керамика" id=""><label>Керамика</label>
                </div>
            </div>

            <div>
                <h4>Назначение</h4>
                <div class="filters-item">
                    <input type="checkbox" name="Для пола" id=""><label>Для пола</label>
                </div>
                <div class="filters-item">
                    <input type="checkbox" name="Облицовка" id=""><label>Облицовка</label>
                </div>
            </div>

            <div>
                <h4>Цвет</h4>
                <div class="filters-item">
                    <input type="checkbox" name="Белый" id=""><label>Белый</label>
                </div>
                <div class="filters-item">
                    <input type="checkbox" name="Бежевый" id=""><label>Бежевый</label>
                </div>
                <div class="filters-item">
                    <input type="checkbox" name="Серый" id=""><label>Серый</label>
                </div>
                <div class="filters-item">
                    <input type="checkbox" name="Желтый" id=""><label>Желтый</label>
                </div>
                <div class="filters-item">
                    <input type="checkbox" name="Коричневый" id=""><label>Коричневый</label>
                </div>
                <div class="filters-item">
                    <input type="checkbox" name="Черный" id=""><label>Черный</label>
                </div>
            </div>
            <h4>Сбросить<br> фильтры</h4>
        </div>
        </div>

        <div class="customs-catalog">
            <div class="sorting anim">
                <p>Сортировать:</p>
                <a><img src="../../img/arrow.svg" alt="arrow"></a>
            </div>

            <div class="catalog">
               

                <?php foreach($catalog as $cat):?>
                    <?php
                        echo '<div class="custom-card anim">';
                        echo '<div class="triangle"></div>';
                        echo \yii\helpers\Html::img("@web/{$cat->imagePath}");
                        echo '<div class="triangle2"></div>';
                        echo '<p>'; echo $cat->name; echo'</p>';
                        echo '<p>'; echo $cat->cost; echo' руб за кв. метр</p>';
                        echo '<button>Купить</button>';
                        echo '</div>';
                    ?>
                <?php endforeach; ?>


                

                

            </div>
        </div>
    </div>
    </section>

    <section class="free_rock">
        <div class="free_center_right">
        <div class="free_right anim">
            <h1>3</h1>
            <p>простых</p>
            <p>шага</p>
        </div>
        <div class="free_center anim">
            <h2>ПОЛУЧИТЕ БЕСПЛАТНО <br>
                ОБРАЗЕЦ КАМНЯ</h2>
            <p>ОСТАВЬТЕ ЗАЯВКУ У НАС НА САЙТЕ И МЫ ПРИШЛЕМ ВАМ <br>
                ОБРАЗЕЦ МАТЕРИАЛА ДЛЯ ВАШИХ ПЛИТ</p>
        </div>
    </div>
            <button class="anim">Оставить заявку</button>
    </section>

    <section>
        <div class="faq-wrap anim">
            <div class="container">
                <div class="faq">
                    <div class="faq-box">
                        <div class="faq-box__item">
                            <div class="faq-box__title" id="faq1" onclick="OpenFunc(this.id)">
                                <div class="faq-box__button" >
                                    <img src="../../img/Plus_circle_white.svg" id="img1">
                                </div>
                                Как много времени займет процесс призводства?

                            </div>
                            <div class="faq-box__desc" id="desc1">
                                <p>Процесс произодства плит в среднем занимает неделю, в редких случаях может
                                    потребовать 2 недели и более в зависимости от сложности проекта. Мы всегда готовы
                                    предоставить скидку нашим клиентам если заказ по каким-либо причинам задержался.</p>

                            </div>
                        </div>
                        <div class="faq-box__item">
                            <div class="faq-box__title"  id="faq2" onclick="OpenFunc(this.id)">
                                <div class="faq-box__button">
                                    <img src="../../img/Plus_circle_white.svg" id="img2">
                                </div>
                                Как я могу проверить качество материала?
                            </div>
                            <div class="faq-box__desc" id="desc2">
                                <p>ответ на вопрос</p>
                            </div>
                        </div>
                        <div class="faq-box__item">
                            <div class="faq-box__title" id="faq3" onclick="OpenFunc(this.id)">
                                <div class="faq-box__button" >
                                    <img src="../../img/Plus_circle_white.svg" id="img3">
                                </div>
                                Как правильно оформить заказ?
                            </div>
                            <div class="faq-box__desc" id="desc3">
                                <p>ответ на вопрос</p>
                            </div>
                        </div>
                        <div class="faq-box__item">
                            <div class="faq-box__title" id="faq4" onclick="OpenFunc(this.id)">
                                <div class="faq-box__button" >
                                    <img src="../../img/Plus_circle_white.svg" id="img4">
                                </div>
                                 Какие плиты лучше подобрать для облицовки здания?
                            </div>
                            <div class="faq-box__desc" id="desc4">
                                <p>ответ на вопрос</p>
                            </div>
                        </div>
                        <div class="faq-box__item">
                            <div class="faq-box__title" id="faq5" onclick="OpenFunc(this.id)">
                                <div class="faq-box__button" >
                                    <img src="../../img/Plus_circle_white.svg" id="img5">
                                </div>
                                Где я могу найти помощь в выборе плит?
                            </div>
                            <div class="faq-box__desc" id="desc5">
                                <p>ответ на вопрос</p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-desc">
                        <div class="faq-desc__title anim">часто <br>задаваемые <br>вопросы</div>
                        <div class="faq-desc__middle">
                            <div class="faq-desc__sub">Не нашли нужного ответа?</div>
                            <p>Вы всегда можете уточнить любой интересующий вас вопрос у нашего менеджера по телефону
                                или заполнив специальную форму ниже.</p>
                        </div>
                        <button class="faq-desc__link">Задать свой вопрос</button>
                    </div>
                </div>
            </div>
        </div>

        
    </section>


    <section class="anim">
    <div class="platform_map">
        <p>Екатеринбург, Улица Смазчиков, дом 10 к 4, офис 25</p>
        </div>
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A3539023eca36e9fb8e1f56ecad884b0f6ecf9334ff6f335ef81bdb003101a324&amp;source=constructor" width="100%" height="450" frameborder="0"></iframe>
    </section>
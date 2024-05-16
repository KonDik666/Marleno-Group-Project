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
                <button id="openModal" onclick="modalFunc(this.id)" class="button-black">Оставить заявку</button>

            </div>
        </div>
</section>

<section id="modalWindow1" class="modal_window">
<div class="popap">
    <div class="report">
        <div class="report_text">
    <h2>Отправить заявку</h2>
    <p>Отправьте заявку для того, чтобы получить от нас точный <br> рассчет стоимости обсудить доставку</p>
    </div>
    <div id="closeModal" onclick="modalFunc(this.id)"><img src="../../img/Close.svg" alt="Close"></div>
    </div>
    <form action="post">
        <input type="text" placeholder="Ваше Имя">
        <input type="text" placeholder="+7 (ххх) ххх-хх-хх">
        <input type="text" placeholder="Место Доставки">
    </form>
    <p class="phone">+7 (000) 000-00-00</p>
    <button>Отправить на рассчет</button>
</div>

<!-- <div class="popap">
    <div class="report">
        <div class="report_text">
    <h2>Спасибо за заявку</h2>
    <p>Ваша заявка отправлена, в течение 15 минут с вами <br> свяжется специалист</p>
    </div>
    <img src="../../img/Close.svg" alt="Close">
    </div>
    <div class="report_saccsess">
    <img src="../../img/clock_circle.svg" alt="Time">
    <p>В течении 15 минут менеджер проекта <br> подготовит предложение и свяжемся с Вами</p>
    </div>
    <p class="phone">+7 (000) 000-00-00</p>
    <button>Ок</button>
</div> -->

</section>

<section class="guarantee">
        <div class="guarant anim">
            <h2>Почему заказать нужно у нас:</h2>
            <P>В случае срыва сроков вернем 20% от стоимости</P>
        </div>
        <div class="guarantee_list anim">
            <div class="guarantee_block">
            <div class="guarantee_img_block_black"><img src="../../img/Quality.svg" alt="Качество"></div>
            <p>Гарантируем срок выполнения заказа. В случае срыва срока - вернем 20% от стоимости работ.</p>
        </div>
        <div class="guarantee_block">
            <div class="guarantee_img_block"><img src="../../img/Cart.svg" alt="Тележка"></div>
            <p>Мы не зарабатываем на разнице при закупке материалов. Все материалы добываем сами и продаем продукт по рыночным ценам.</p>
        </div>
         <div class="guarantee_block">
            <div class="guarantee_img_block"><img src="../../img/Delivery.svg" alt="Доставка"></div>
            <p>Собственная служба логистики и парк техники. Организацию перемещения - берем на себя.</p>
        </div>
        <div class="guarantee_block">
            <div class="guarantee_img_block"><img src="../../img/Time.svg" alt="Время"></div>
            <p>Производство работает 24/7 в две смены. Позволяет выдерживать сроки производства.</p>
        </div>
        </div>
    </section>   

    <section class="map">
        <img src="../../img/Map.png" alt="Карта" width="981px" height="581px" class="Russia anim">
        <div class="stock_list anim">
            <div class="back">
                <img src="../../img/Logo2.png" alt="Лого" width="164px" height="66px">

                <p class="stock">Склад плит - площадью до 1440 м2</p>
                <ul class="list2">
                    <li>Изготовление декоративных плит;</li>
                    <li>Строительные работы;</li>
                    <li>Полировка плит;</li>
                    <li>Доставка в любую точку РФ;</li>
                    <li>Бережное хранение плит;</li>
                </ul>
                <div class="reflist">
                    <img src="../../img/file-text.svg" alt="Файл">
                    <u>Скачать референс лист</u>
                </div>
            </div>
            <div class="front">
                <p class="numbers">5</p>
                <p class="medium_font">Лет опыта</p>
                <div class="line_font"></div>
                <p class="big_font">Более</p>
                <p class="numbers">250</p>
                <p class="little_font">Реализованных <br> объектов</p>
            </div>
        </div>
    </section>

<section class="cost-calculation anim">
        <div class="cost-text">
            <h2>Сделайте свой первый заказ</br>
                и получите скидку 25%
            </h2>
            <p>подсчитаем стоимость плитки </br> для вашего помещения с </br> учетом скидки</p>
        </div>
        <div class="cost-form">
            <h3>Заполните анкету</h3>
            <form>
                <div>
                    <p>Ваше имя:</p>
                    <input type="text" placeholder="текст">
                </div>
                <div>
                    <p>Номер <br>телефона</p>
                    <input type="text" placeholder="+7 (000)-000-00-00">
                </div>

            </form>
            <button>Узнать цену</button>
        </div>
    </section>

    <section>
        <div class="complete-obj__middle anim">Выполненные проекты <span>с 2013 года</span></div>

        <div class="completed-gallery">
            <div class="completed-gallery__item">
                <img src="../../img/house.png" class="house_completed anim">
            </div>
            <div class="done-info anim">
                <div class="done-info__title">Подробная информация <br>о строительстве объекта</div>
                <div class="done-info__sub">Стоимость, сроки реализации <br> уточнить у нашего менеджера</div>
                <a href="#" class="done-info__phone">8 (800) 550-28-84</a>
                <button class="done-info__btn">Получить информацию</button>
            </div>


            <div class="completed-content anim">
                <div class="completed-content__slider">
                    <div class="completed-content__item">
                        <p class="complete-obj__name">ООО “Marleno group”</p>
                        <div class="completed-content__title">Облицовка многоквартирного <br>дома</div>
                        <p class="line3"></p>
                        <div class="option">
                            <div class="option-item">
                                <img src="../../img/maximize.png">
                                <div class="option-item__title"><b>Площадь:</b> 770 кв.м</div>
                            </div>
                            <div class="option-item">
                                <img src="../../img/location.png">
                                <div class="option-item__title"><b>Регион строительства:</b> Свердловская
                                    область</div>
                            </div>
                            <div class="option-item">
                                <img src="../../img/lock.png">
                                <div class="option-item__title"><b>Вес металлоконструкций:</b> 760 тонн
                                </div>
                            </div>
                        </div>
                        <div class="option-item__desc">
                            <p>Гранитные плиты отличались своей прочностью и непревзойденной красотой. Они
                                были достаточно толстыми, чтобы выдерживать любые погодные условия, и
                                одновременно были легкими в укладке. Они имели красивую текстуру, состоящую
                                из различных оттенков серого, которая привнесла внешность дома элегантность
                                и шарм.</p>
                            <p>Теперь дом стал украшением района и местом, куда с удовольствием возвращались
                                его владельцы. Гости не переставали восхищаться его внешностью и задавать
                                вопросы о материале облицовки.</p>
                        </div>
                        <div class="done-line">
                            <img src="../../img/file-text.png">
                            <u>Скачать референс лист</u>

                        </div>
                    </div>
                    <div class="completed-bottom">
                        <div class="completed-nav">
                            <img src="../../img/Arrow_Left_white.png" alt="Влево">
                            <img src="../../img/Arrow_Right_white.png" alt="Вправо">
                        </div>

                        <div class="completed-count">
                            <p>1</p>
                            <span class="line4"></span>
                            <p> 4</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fact-block">
        <div class="fact-wrap anim">
            <div class="container">
                <div class="fact">
                    <div class="title-fact__title anim">Факты о компании “Marleno Group”</div>
                    <div class="fact-sub__sub anim">полный цикл строительства от проектирования до ввода в эксплуатацию</div>
                    <div class="fact-box anim">
                        <div class="fact-box__item">
                            <div class="fact-box__title">5</div>
                            <div class="fact-box__desc">лет <br>на рынке</div>
                        </div>
                        <div class="fact-box__item">
                            <div class="fact-box__title">200.000+</div>
                            <div class="fact-box__desc">кв.м. <br>плит продано</div>
                        </div>
                        <div class="fact-box__item">
                            <div class="fact-box__title">60+</div>
                            <div class="fact-box__desc">человек <br>работает у нас</div>
                        </div>
                    </div>
                    <div class="fact-list anim">
                        <div class="fact-list__item">
                            <div class="fact-list__title" id="act1" onclick="OpenFunc(this.id)">
                                <div class="fact-list__button" ><img src="../../img/Plus_circle.svg" id="image1"></div>
                                Собственная добыча камней для плит
                            </div>
                            <div class="fact-list__desc" id="descr1">Компания “Marleno Group” имеет 10 собственных карьеров для
                                добычи
                                различных типов камней, таких как гранит, мрамор, известняк и другие натуральные
                                материалы.
                                Эти материалы обладают прекрасными физическими и визуальными свойствами, делая их
                                идеальными
                                для производства плит высокого качества.</div>
                        </div>
                        <div class="fact-list__item">
                            <div class="fact-list__title" id="act2" onclick="OpenFunc(this.id)">
                                <div class="fact-list__button" ><img src="../../img/Plus_circle.svg" id="image2"></div>Собственные заводы для обработки камня
                            </div>
                            <div class="fact-list__desc" id="descr2"><!--описание факта--></div>
                        </div>
                        <div class="fact-list__item">
                            <div class="fact-list__title" id="act3" onclick="OpenFunc(this.id)">
                                <div class="fact-list__button" ><img src="../../img/Plus_circle.svg" id="image3"></div>Собственный отдел логистики и снабжения
                            </div>
                            <div class="fact-list__desc" id="descr3"><!--описание факта--></div>
                        </div>
                        <div class="fact-list__item">
                            <div class="fact-list__title" id="act4" onclick="OpenFunc(this.id)">
                                <div class="fact-list__button" ><img src="../../img/Plus_circle.svg" id="image4"></div>Собственный отдел инженерных изысканий
                            </div>
                            <div class="fact-list__desc" id="descr4"><!--описание факта--></div>
                        </div>
                        <div class="fact-list__item">
                            <div class="fact-list__title" id="act5" onclick="OpenFunc(this.id)">
                                <div class="fact-list__button" ><img src="../../img/Plus_circle.svg" id="image5"></div>Собственные склады по всей России
                            </div>
                            <div class="fact-list__desc" id="descr5"><!--описание факта--></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="black_gift">
        <div class="black_gold_gift anim">
            <div class="grey_font">
            <div>
            <p class="gift-low">от отдела продаж MArleno group</p>
            <p class="line_gift"></p>
            <p class="gift-white">Дополнительный набор плит <br>
                для вашего проекта</p>
            </div>
            <div>
                <p><mark>БЕСПЛАТНО</mark> <br>
                доставим в короткие <br>
                сроки</p>
            <p class="gift20">*При первом заказе от 20тыс.руб</p>
        </div>
         </div>
         <div class="gift-block2 anim">
            <p class="topic"><mark class="bold">Подарок</mark> на вашу</br> первую покупку</p>
            <div class="gift-container">
                <img src="../../img/Gift.png" alt="подарок">
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

   


    


    <section class="reviews_section">
        <div class="comment_client anim">
            <h2>Отзывы клиентов <br>
                о нашей работе</h2>
            <p>Каждый отзыв набран текстом для удобства его</br> чтения и к нему прикреплена фотография </br>реального отзыва.</p>
        </div>
    <div  class="overflow">
        <div id="moving" class="comment_line anim " id="all">
            <?php $counter; foreach($reviews as $rev):?>
                <?php
                echo '<div class="comment">';
                echo '<p class="client">'; echo $rev->username; echo '</p>';
                echo '<p class="comment_text">'; echo $rev->review; echo '</p>';
                echo '<p class="full_comment">весь отзыв</p>';
                echo '</div>';
                $counter=$counter+1;
                ?>
            <?php endforeach; ?>
       
        </div>
    </div>
    <div class="slider_navigation">

    
    <div class="arrows">
        <div id="prev" onclick="navigationFunc(this.id)"><img src="../../img/Arrow_Left.png" alt="назад"></div>
        <div id="next" onclick="navigationFunc(this.id)"><img src="../../img/Arrow_Right.png" alt="вперед"></div>
    </div>
    <div id="pgg" class="pagination">
        <?php
        $points=$counter-3;
        for($i=0; $i<$points; $i++){
         
                echo'<div class="point_circle" id="pag';
            echo $i; echo '"></div>';
            
            
        }
        ?>

    </div>
    <div>
        <p>оставить отзыв</p>
    </div>
    </div>

        
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

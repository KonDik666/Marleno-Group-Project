<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>


<section class="main-catalog">
        <h3>Каталог плит</h3>
        <div class="catalog-row">
        <div class="filters-bg">
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
            <div class="sorting">
                <p>Сортировать:</p>
                <a><img src="../../img/arrow.svg" alt="arrow"></a>
            </div>

            <div class="catalog">
               

                <?php foreach($catalog as $cat):?>
                    <?php
                        echo '<div class="custom-card">';
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


    <section class="cost-calculation">
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
        <div class="complete-obj__middle">Выполненные проекты <span>с 2013 года</span></div>

        <div class="completed-gallery">
            <div class="completed-gallery__item">
                <img src="../../img/house.png">
            </div>
            <div class="done-info">
                <div class="done-info__title">Подробная информация <br>о строительстве объекта</div>
                <div class="done-info__sub">Стоимость, сроки реализации <br> уточнить у нашего менеджера</div>
                <a href="#" class="done-info__phone">8 (800) 550-28-84</a>
                <button class="done-info__btn">Получить информацию</button>
            </div>


            <div class="completed-content">
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


    <section class="black_gift">
        <div class="black_gold_gift">
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
         <div class="gift-block2">
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


    <section class="fact-block">
        <div class="fact-wrap">
            <div class="container">
                <div class="fact">
                    <div class="title-fact__title">Факты о компании “Marleno Group”</div>
                    <div class="fact-sub__sub">полный цикл строительства от проектирования до ввода в эксплуатацию</div>
                    <div class="fact-box">
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
                    <div class="fact-list">
                        <div class="fact-list__item">
                            <div class="fact-list__title">
                                <div class="fact-list__button"></div>
                                Собственная добыча камней для плит
                            </div>
                            <div class="fact-list__desc">Компания “Marleno Group” имеет 10 собственных карьеров для
                                добычи
                                различных типов камней, таких как гранит, мрамор, известняк и другие натуральные
                                материалы.
                                Эти материалы обладают прекрасными физическими и визуальными свойствами, делая их
                                идеальными
                                для производства плит высокого качества.</div>
                        </div>
                        <div class="fact-list__item">
                            <div class="fact-list__title">
                                <div class="fact-list__button"></div>Собственные заводы для обработки камня
                            </div>
                            <div class="fact-list__desc"><!--описание факта--></div>
                        </div>
                        <div class="fact-list__item">
                            <div class="fact-list__title">
                                <div class="fact-list__button"></div>Собственный отдел логистики и снабжения
                            </div>
                            <div class="fact-list__desc"><!--описание факта--></div>
                        </div>
                        <div class="fact-list__item">
                            <div class="fact-list__title">
                                <div class="fact-list__button"></div>Собственный отдел инженерных изысканий
                            </div>
                            <div class="fact-list__desc"><!--описание факта--></div>
                        </div>
                        <div class="fact-list__item">
                            <div class="fact-list__title">
                                <div class="fact-list__button"></div>Собственные склады по всей России
                            </div>
                            <div class="fact-list__desc"><!--описание факта--></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="free_rock">
        <div class="free_center_right">
        <div class="free_right">
            <h1>3</h1>
            <p>простых</p>
            <p>шага</p>
        </div>
        <div class="free_center">
            <h2>ПОЛУЧИТЕ БЕСПЛАТНО <br>
                ОБРАЗЕЦ КАМНЯ</h2>
            <p>ОСТАВЬТЕ ЗАЯВКУ У НАС НА САЙТЕ И МЫ ПРИШЛЕМ ВАМ <br>
                ОБРАЗЕЦ МАТЕРИАЛА ДЛЯ ВАШИХ ПЛИТ</p>
        </div>
    </div>
            <button>Оставить заявку</button>
    </section>


    <section>
        <div class="comment_client">
            <h2>Отзывы клиентов <br>
                о нашей работе</h2>
            <p>Каждый отзыв набран текстом для удобства его</br> чтения и к нему прикреплена фотография </br>реального отзыва.</p>
        </div>
        <div class="comment_line">
            <div class="comment">
                <p class="client">ЗАО “СтройБизнес”</p>
                <p class="comment_text">Весь процесс облицовки здания гранитными плитами прошел гладко и без каких-либо проблем. Благодаря
                    вашей организованности и четкой коммуникации, мы смогли достичь отличных результатов.</p>
                <p class="full_comment">весь отзыв</p>
            </div>
            <div class="comment">
                <p class="client">ЗАО “СтройБизнес”</p>
                <p class="comment_text">Весь процесс облицовки здания гранитными плитами прошел гладко и без каких-либо проблем. Благодаря
                    вашей организованности и четкой коммуникации, мы смогли достичь отличных результатов.</p>
                <p class="full_comment">весь отзыв</p>
            </div>
            <div class="comment">
                <p class="client">ЗАО “СтройБизнес”</p>
                <p class="comment_text">Весь процесс облицовки здания гранитными плитами прошел гладко и без каких-либо проблем. Благодаря
                    вашей организованности и четкой коммуникации, мы смогли достичь отличных результатов.</p>
                <p class="full_comment">весь отзыв</p>
            </div>
            <div class="comment">
                <p class="client">ЗАО “СтройБизнес”</p>
                <p class="comment_text">Весь процесс облицовки здания гранитными плитами прошел гладко и без каких-либо проблем. Благодаря
                    вашей организованности и четкой коммуникации, мы смогли достичь отличных результатов.</p>
                <p class="full_comment">весь отзыв</p>
            </div>
        </div>
        <div class="comment_line2">
            <div class="arrow_comment">
            <img src="../../img/Arrow_Left.png" alt="Влево">
            <img src="../../img/Arrow_Right.png" alt="Вправо">
        </div>
        <div class="release-count2">
            <p>1</p>
            <span class="line2"></span>
            <p> 4</p>
        </div>
            <p class="stay">Оставить отзыв</p>
        </div>
    </section>

    <section>
        <div class="faq-wrap">
            <div class="container">
                <div class="faq">
                    <div class="faq-box">
                        <div class="faq-box__item">
                            <div class="faq-box__title">
                                <div class="faq-box__button">
                                    <img src="../../img/Plus_circle_white.svg">
                                </div>
                                Как много времени займет процесс призводства?

                            </div>
                            <div class="faq-box__desc">
                                <p>Процесс произодства плит в среднем занимает неделю, в редких случаях может
                                    потребовать 2 недели и более в зависимости от сложности проекта. Мы всегда готовы
                                    предоставить скидку нашим клиентам если заказ по каким-либо причинам задержался.</p>

                            </div>
                        </div>
                        <div class="faq-box__item">
                            <div class="faq-box__title">
                                <div class="faq-box__button">
                                    <img src="../../img/Plus_circle_white.svg">
                                </div>
                                Как я могу проверить качество материала?
                            </div>
                            <div class="faq-box__desc">
                                <p><!--ответ на вопрос--></p>
                            </div>
                        </div>
                        <div class="faq-box__item">
                            <div class="faq-box__title">
                                <div class="faq-box__button">
                                    <img src="../../img/Plus_circle_white.svg">
                                </div>
                                Как правильно оформить заказ?
                            </div>
                            <div class="faq-box__desc">
                                <p><!--ответ на вопрос--></p>
                            </div>
                        </div>
                        <div class="faq-box__item">
                            <div class="faq-box__title">
                                <div class="faq-box__button">
                                    <img src="../../img/Plus_circle_white.svg">
                                </div>
                                 Какие плиты лучше подобрать для облицовки здания?
                            </div>
                            <div class="faq-box__desc">
                                <p><!--ответ на вопрос--></p>
                            </div>
                        </div>
                        <div class="faq-box__item">
                            <div class="faq-box__title">
                                <div class="faq-box__button">
                                    <img src="../../img/Plus_circle_white.svg">
                                </div>
                                Где я могу найти помощь в выборе плит?
                            </div>
                            <div class="faq-box__desc">
                                <p><!--ответ на вопрос--></p>
                            </div>
                        </div>
                    </div>
                    <div class="faq-desc">
                        <div class="faq-desc__title">часто <br>задаваемые <br>вопросы</div>
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


    <section>
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A3539023eca36e9fb8e1f56ecad884b0f6ecf9334ff6f335ef81bdb003101a324&amp;source=constructor" width="100%" height="450" frameborder="0"></iframe>
    </section>
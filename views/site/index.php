<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

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

    <section class="map">
        <img src="../../img/Map.png" alt="Карта" width="981px" height="581px">
        <div class="stock_list">
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

    <section class="stages">
        <div class="stages-text">
            <h2>Этапы производства</h2>
            <p>Каждый этап выполняем своими силами</p>
        </div>

        <div class="stages-container">
            <div class="stages-list-container">
                <ol class="stages-list">
                    <li class="li1" id="elem1" onclick="ShowFunc(this.id)">
                        <p>01</p>Добыча камня из наших<br>
                        карьеров
                    </li>
                    <li class="li2" id="elem2" onclick="ShowFunc(this.id)">
                        <p>02</p>Проверка качества<br>
                        камня
                    </li>
                    <li class="li1" id="elem3" onclick="ShowFunc(this.id)">
                        <p>03</p>Отправка проверенных<br> камней на завод
                    </li>
                    <li class="li2" id="elem4" onclick="ShowFunc(this.id)">
                        <p>04</p>Обработка материала<br> на заводах
                    </li>
                    <li class="li1" id="elem5" onclick="ShowFunc(this.id)">
                        <p>05</p>Полировка материала
                    </li>
                    <li class="li2" id="elem6" onclick="ShowFunc(this.id)">
                        <p>06</p>Покрытие специальной защитной пленкой
                    </li>
                    <li class="li1" id="elem7" onclick="ShowFunc(this.id)">
                        <p>07</p>Испытания и контроль<br> качества
                    </li>
                    <li class="li2" id="elem8" onclick="ShowFunc(this.id)">
                        <p>08</p>Упаковка и хранение
                    </li>
                    <li class="li1" id="elem9" onclick="ShowFunc(this.id)">
                        <p>09</p>Отправка и доставка к покупателям
                    </li>
                    <li class="li2" id="elem10" onclick="ShowFunc(this.id)">
                        <p>10</p>Ввод в эксплуатацию
                    </li>
                </ol>
            </div>
            <div class="stages-bg" id="backgroundId">
                <div class="stages-description">
                    <div class="stages-description-text" id="stage1">

                        <h3>добыча камня из наших карьеров</h3>

                        <p>
                            Добыча камня из наших карьеров - это сложный и тщательно организованный процесс, направленный на извлечение каменных блоков из природных карьеров. Результат этого процесса - натуральный камень высочайшего качества, который затем будет использоваться в различных строительных проектах.</p>
                        <p>
                            Добыча камня из наших карьеров - это не только процесс получения материала, но и ответственность перед окружающей средой и соблюдение экологических стандартов. Мы тщательно контролируем все аспекты добычи, чтобы минимизировать негативное воздействие на природу и предоставить клиентам натуральный камень высочайшего качества.
                        </p>
                    </div>

                    <div class="stages-description-text" id="stage2">

                        <h3>Проверка качества камня</h3>

                        <p>
                            Проверка качества камня - это процесс оценки различных параметров камня, таких как прочность, цвет, чистота, блеск и т. д. Этот процесс важен для определения стоимости и подходящего применения камня.

                            Оценка качества камня может проводиться специалистами в области геологии, минералогии или драгоценных камней. Они используют специальные инструменты и методы, такие как микроскопы, спектрометры и наборы реактивов, чтобы определить его характеристики.
                            
                        </p>
                        <p>
                            Имея ясное представление о качестве камня, клиенты могут быть уверены в его ценности и долговечности, что важно при принятии решения о приобретении или использовании камня в строительстве, создании украшений или других целях.

                            Кроме того, проверка качества камня также важна для обеспечения его безопасности. Например, при использовании камня в строительстве, важно удостовериться, что он не содержит вредных веществ, которые могут негативно повлиять на здоровье людей. Также важно убедиться, что камень обладает необходимой прочностью и устойчивостью к воздействию внешних факторов, чтобы избежать разрушения или повреждения.
                            
                            В целом, проверка качества камня является важным этапом в его производстве, обработке и использовании, который помогает гарантировать его высокое качество, надежность и безопасность.
                        </p>
                    </div>

                    <div class="stages-description-text" id="stage3">

                        <h3>Отправка проверенных камней на завод</h3>

                        <p>
                            Отправка проверенных камней на завод - это процесс доставки каменного материала, который был предварительно проверен на качество и соответствие стандартам, на производственное предприятие для дальнейшей обработки и использования.

                            Перед отправкой камни обычно проходят обязательную проверку на прочность, внешний вид, размеры и другие характеристики, чтобы убедиться в их качестве и пригодности для использования в производстве.
                            </p>
                        <p>
                            Прибытие проверенных камней на завод позволяет начать производственный процесс с использованием качественного сырья, что в свою очередь способствует улучшению качества конечной продукции.

Отправка проверенных камней на завод также позволяет производителям сэкономить время и ресурсы на поиск и проверку сырья, так как они могут быть уверены в качестве поставляемого материала.

В целом, отправка проверенных камней на завод является важным этапом в цепи поставок и обеспечивает стабильность и надежность производства на предприятии.
                        </p>
                    </div>

                    <div class="stages-description-text" id="stage4">

                        <h3>Обработка материала на заводах</h3>

                        <p>
                            Обработка материала на заводах - это процесс превращения сырья или полуфабрикатов в готовую продукцию с помощью различных технологических операций. Этот процесс может включать в себя такие этапы, как резка, сварка, гибка, сверление, термическая обработка, покраска и многие другие.

На заводах обработка материала осуществляется с использованием современного оборудования и специализированных инструментов, которые позволяют выполнять сложные операции точно и эффективно.</p>
                        <p>
                            Обработка материала на заводах включает в себя не только физические операции по обработке материалов, но также планирование производственного процесса, контроль качества продукции, управление запасами и логистика доставки готовой продукции. Все эти компоненты важны для обеспечения эффективной работы предприятия и удовлетворения потребностей клиентов.

                            Таким образом, обработка материала на заводах - это сложный и многокомпонентный процесс, который требует профессионализма, опыта и использования современных технологий. От правильно организованной и качественной обработки материала зависит успех предприятия и его конкурентоспособность на рынке.
                        </p>
                    </div>


                    <div class="stages-description-text" id="stage5">

                        <h3>Полировка материала</h3>

                        <p>Полировка материала - это процесс, в ходе которого поверхность обрабатываемого материала
                            становится гладкой, блестящей и равномерной. Этот процесс выполняется с использованием
                            специальных инструментов и абразивных материалов, которые помогают удалить неровности,
                            царапины и другие дефекты с поверхности.</p>
                        <p>Процесс полировки может включать в себя несколько этапов. Сначала поверхность
                            подготавливается путем удаления грубых дефектов, таких как выступающие края или
                            шероховатости, с помощью инструментов, таких как наждачная бумага или шлифовальные пасты.
                            После этого поверхность полируется с использованием более мелкозернистых абразивных
                            материалов, чтобы достичь искомой гладкости и блеска. Затем производится финальный этап
                            полировки с применением специальных полировальных средств или полировальных машин для
                            придания поверхности идеального финишного вида.</p>
                    </div>

                    <div class="stages-description-text" id="stage6">

                        <h3>Покрытие специальной защитной пленкой</h3>

                        <p>
                            Специальная защитная пленка для покрытия плит - это инновационное средство, которое помогает сохранить красоту и целостность поверхности материала на протяжении длительного времени. Эта пленка обладает высокой прочностью и износостойкостью, защищая поверхность от царапин, пыли, грязи и других внешних воздействий.</p>
                        <p>
                            Пленка для покрытия плит - отличное решение для защиты и улучшения внешнего вида материала, сделав его более привлекательным и долговечным.

                            Кроме того, её применение поможет сэкономить деньги на ремонте и замене поврежденных плит, а также обеспечит легкость в уходе за поверхностью. Не стоит забывать о том, что специальная защитная пленка для плит может быть использована не только в домашних условиях, но и на производстве, в офисах, магазинах и других местах, где важно сохранить безупречный вид и качество плит долгое время.
                        </p>
                    </div>

                    <div class="stages-description-text" id="stage7">

                        <h3>Испытания и контроль качества</h3>

                        <p>
                            Испытания и контроль качества – это процесс, направленный на проверку соответствия продукции или услуг определенным стандартам и требованиям. Целью проведения испытаний и контроля качества является обеспечение высокого уровня качества продукции, удовлетворение потребностей потребителей и соблюдение законодательных норм и стандартов.</p>
                        <p>
                            Процесс испытаний и контроля качества также позволяет выявить и устранить возможные недочеты в производственном процессе, что способствует улучшению производственной эффективности и снижению издержек. Кроме того, регулярные испытания и контроль качества помогают компаниям поддерживать свою репутацию на рынке и укреплять доверие потребителей к их продукции.

Все эти меры способствуют созданию устойчивой и успешной бизнес-модели, направленной на производство качественной и безопасной продукции, что в конечном итоге приводит к удовлетворению потребностей клиентов и увеличению прибыли компании.
                        </p>
                    </div>

                    <div class="stages-description-text" id="stage8">

                        <h3>Упаковка и хранение</h3>

                        <p>
                            Плиты – это материал, который используется в строительстве для создания покрытий пола, стен и других поверхностей. Упаковка и хранение плит играют важную роль в обеспечении их целостности и сохранности. 

                            Плиты обычно упаковываются в крупные стеклянные, деревянные или пластиковые ящики для предотвращения повреждений во время транспортировки. Упаковка обычно имеет защитные угловые элементы и заполнена материалом для амортизации ударов.</p>
                        <p>
                            Для длительного хранения плит рекомендуется использовать специализированные складские условия, где можно контролировать температуру и влажность. Некоторые типы плит требуют особого ухода и условий хранения, поэтому перед приобретением необходимо ознакомиться с инструкцией производителя.

Соблюдение правил упаковки и хранения плит – это важный этап в обеспечении качественного и долговечного исполнения строительных работ. Правильно упакованные и хранящиеся плиты помогут избежать повреждений и сохранить их первоначальные характеристики на протяжении всего периода использования.
                        </p>
                    </div>

                    <div class="stages-description-text" id="stage9">

                        <h3>Отправка и доставка к покупателям</h3>

                        <p>
                            Отправка плит - это процесс доставки плит из места производства или хранения до места назначения, где находятся покупатели. Плиты могут быть отправлены различными видами транспорта - автомобильным, железнодорожным, воздушным или морским.

При отправке плит необходимо учитывать их хрупкость и тяжесть, поэтому упаковка должна быть надежной и защищенной.</p>
                        <p>
                            Важно также предоставить достаточную информацию покупателям о доставке плит, включая сроки, стоимость и условия оплаты. Таким образом, клиенты смогут правильно спланировать получение товара и быть уверены в надежности поставщика.

В целом, отправка плит и их доставка - это сложный и ответственный процесс, который требует точного планирования и координации всех этапов. Но при правильной организации он позволяет успешно выполнить заказы и удовлетворить потребности клиентов.
                        </p>
                    </div>

                    <div class="stages-description-text" id="stage10">

                        <h3>Ввод в эксплуатацию</h3>

                        <p>
                            Ввод плит в эксплуатацию – это процесс установки и подключения плит на рабочее место или в систему. Плиты могут быть различных типов и предназначены для выполнения определенных функций, например, плиты питания, плиты управления или плиты связи.</p>
                        <p>
                            Таким образом, ввод плит в эксплуатацию – это ответственный этап процесса установки оборудования, который требует внимательного и точного выполнения всех необходимых действий для обеспечения надежной и безопасной работы плит.

                            Важно помнить, что неправильный или некачественный ввод плит в эксплуатацию может привести к серьезным последствиям, а также повлечь за собой дополнительные затраты на исправление недочетов. Поэтому следует обращать особое внимание на каждый этап процесса и следовать инструкциям производителя. В случае сомнений или неуверенности всегда лучше проконсультироваться с специалистом.
                        </p>
                    </div>
                    <button class="button-2">Рассчитать стоимость</button>
                </div>
            


            </div>


        </div>
        <script>
            function ShowFunc(id){
                if(id==="elem10"){
                    ident=id.slice(-2);
                }
                else{
                     ident=id.slice(-1);
                }
                
                
                activeStage= document.getElementById("stage"+ident);
                backg=document.getElementById("backgroundId");
                // alert(ident);
                suka="url('../../img/"+activeStage.id+".png')";
                backg.style.background="url('../../img/"+activeStage.id+".png')";
                backg.style.backgroundRepeat="no-repeat";
                var blocks = document.getElementsByClassName("stages-description-text");
              
                for (var i = 0; i <= blocks.length; i++) {
                if (blocks[i].id == activeStage.id) {
                    
                    blocks[i].style.display = "block";
                    
                   
                } else {
                    blocks[i].style.display = "none";
                  
                }
                
            }
            
             

            }


        </script>
    </section>


    <section>
        <div class="release-objects">
            <img class="wall" src="../../img/Wall.jpg" alt="Стена">
            <div class="release-obj-info">
                <p class="release-obj__name">ООО “Marleno group”</p>
                <p class="release-obj__title">Реализованные объекты</p>
                <p class="line"></p>
                <p class="release-ob__middle">Склад плит - площадью до 1440 м2</p>
                <ul class="release-obj__list">
                    <li>Изготовление декоративных плит;</li>
                    <li>Строительные работы;</li>
                    <li>Полировка плит;</li>
                    <li>Доставка в любую точку РФ;</li>
                    <li>Бережное хранение плит;</li>
                </ul>
                <div class="release-line">
                    <div class="release-line__conten">
                        <p class="release-line__title">Подробная информация об использованных материалах</p>
                        <p class="release-line__desc">(материалы, сроки изготовления, площадь плит)</p>
                    </div>
                    <button>Получить</button>
                </div>
                <div class="release-bottom">
                    <div class="release-nav">
                        <img src="../../img/Arrow_Left.png" alt="Влево">
                        <img src="../../img/Arrow_Right.png" alt="Вправо">

                    </div>
                    <div class="release-count">
                        <p>1</p>
                        <span class="line2"></span>
                        <p> 4</p>
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


    <section class="careers">
        <div class="careers-desc">
            <p>месторождения, используемые Marleno group</p>
        </div>

        <div class="careers-header">
            <p>месторождения камня для плит</br>
                нашей компании</p>
            <p class="yellow-text"><mark class="ptsans">10</mark></br>
                карьеров</p>
        </div>

        <div class="careers-photo">
            <div class="careers-item numb1">
                <div class="careers-dark-bg element1">
                <div class="careers-text-container">
                <p class="career-name">Московский гранитный карьер</p>
                <p class="career-text">Город Москва</p>
                <p class="career-text">Московская область</p>
                </div>
                </div>
            </div>

            <div class="careers-item numb2">
                <div class="careers-dark-bg element2">
                    <div class="careers-text-container">
                    <p class="career-name">Екатеринбуржский мраморный карьер</p>
                    <p class="career-text">Город Екатеринбург</p>
                    <p class="career-text">Свердловская область</p>
                    </div>
                </div>
            </div>
            <div class="careers-item numb3">
                <div class="careers-dark-bg element3">
                    <div class="careers-text-container">
                    <p class="career-name">Ильинский мраморный карьер</p>
                    <p class="career-text">Село Ильино</p>
                    <p class="career-text">Московская область</p>
                    </div>
                </div>
            </div>
            <div class="careers-item numb4">
                <div class="careers-dark-bg element4">
                    <div class="careers-text-container">
                    <p class="career-name">Грязновский гранитный карьер</p>
                    <p class="career-text">Село Грязновское</p>
                    <p class="career-text">Свердловская область</p>
                    </div>
                </div>
            </div>
        </div>

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
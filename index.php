<?php

include_once 'Config/config.php';
//include_once 'Library/DataBase.php';


$foo = new DataBase($db);
$res = $foo->hiho();
var_dump($res);
echo 'hi';
include "header.php"
?>
    <div class="main-content">
        <section class="mdc-area mdc-area-nospace">
            <div class="widget mdc-widget-slider-01">
                <div class="widget-content">
                    <div class="slider-pro slider-pro-1">
                        <div class="sp-slides">
                            <div class="sp-slide mdc-slide-rgba">
                                <div class="sp-image-container">
                                    <img class="sp-image sp-image-bg" src="img/slider1.jpg" data-src="img/slider1.jpg"
                                         data-retina="img/slider1.jpg" alt=""/></div>
                                <p class="sp-layer sp-txt-2" data-horizontal="20%" data-vertical="30%"
                                   data-show-transition="right" data-show-delay="400" data-hide-delay="300"
                                   data-show-duration="800" data-hide-duration="800">Мы нацелены только на один
                                    результат</p>
                                <p class="sp-layer sp-txt-3" data-horizontal="20%" data-vertical="40%"
                                   data-show-transition="up" data-show-delay="1200" data-hide-delay="300"
                                   data-show-duration="1000" data-hide-duration="1000"><i>Ваша здоровье!</i></p>
                                <!--                                    <p class="sp-layer sp-txt-3" data-horizontal="20%" data-vertical="52%" data-show-transition="up" data-show-delay="1800" data-hide-delay="300" data-show-duration="1000" data-hide-duration="1000"><i>нашим пациентам, забота об их здоровье, профилактика </i></p>-->
                                <p class="sp-layer sp-txt-4 " data-horizontal="20%" data-vertical="50%"
                                   data-position="topleft" data-show-transition="down" data-show-delay="1800"
                                   data-hide-delay="300" data-show-duration="800" data-hide-duration="800"><a
                                            href="doctors.php?id=d5" class="hvr-grow-shadow slider_button">Записаться на
                                        приём</a></p>
                            </div>
                            <div class="sp-slide">
                                <div class="sp-image-container">
                                    <img class="sp-image sp-image-bg" src="img/slider1.jpg" data-src="img/slider1.jpg"
                                         data-retina="img/slider1.jpg" alt=""/></div>
                                <p class="sp-layer sp-txt-2" data-horizontal="20%" data-vertical="30%"
                                   data-show-transition="right" data-show-delay="400" data-hide-delay="300"
                                   data-show-duration="800" data-hide-duration="800">Мы нацелены только на один
                                    результат</p>
                                <p class="sp-layer sp-txt-3" data-horizontal="20%" data-vertical="40%"
                                   data-show-transition="up" data-show-delay="1200" data-hide-delay="300"
                                   data-show-duration="1000" data-hide-duration="1000"><i>Ваша здоровье!</i></p>
                                <p class="sp-layer sp-txt-4" data-horizontal="20%" data-vertical="50%"
                                   data-position="topleft" data-show-transition="down" data-show-delay="1800"
                                   data-hide-delay="300" data-show-duration="800" data-hide-duration="800"><a
                                            href="doctors.php?id=d5">Записаться на приём</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="loading-slider">
                        <i class="fa fa-refresh fa-spin"></i>
                    </div>
                </div>
            </div>
        </section>


    </div> <!-- end main container -->
    <div class="why_block">
        <div class="container">

            <div id="owl-demo">
                <div class="item">
                    <div class="circle"><img src="img/icon_diractions/owl1.png" alt="Owl Image"></div>
                    <p>Хирургия</p></div>
                <div class="item">
                    <div class="circle"><img src="img/icon_diractions/owl1.png" alt="Owl Image"></div>
                    <p>Терапия</p></div>
                <div class="item">
                    <div class="circle"><img src="img/icon_diractions/owl1.png" alt="Owl Image"></div>
                    <p>Педиатрия</p></div>
                <div class="item">
                    <div class="circle"><img src="img/icon_diractions/owl1.png" alt="Owl Image"></div>
                    <p>Гинекология<br>Акушерство</p></div>
                <div class="item">
                    <div class="circle"><img src="img/icon_diractions/owl1.png" alt="Owl Image"></div>
                    <p>Лабораторная диагностика</p></div>
                <div class="item">
                    <div class="circle"><img src="img/icon_diractions/owl1.png" alt="Owl Image"></div>
                    <p>Урология</p></div>
                <div class="item">
                    <div class="circle"><img src="img/icon_diractions/owl1.png" alt="Owl Image"></div>
                    <p>Дерматология</p></div>
                <div class="item">
                    <div class="circle"><img src="img/icon_diractions/owl1.png" alt="Owl Image"></div>
                    <p>Отоларингология</p></div>
                <div class="item">
                    <div class="circle"><img src="img/icon_diractions/owl1.png" alt="Owl Image"></div>
                    <p>Эндокринология</p></div>
                <div class="item">
                    <div class="circle"><img src="img/icon_diractions/owl1.png" alt="Owl Image"></div>
                    <p>Неврология</p></div>
                <div class="item">
                    <div class="circle"><img src="img/icon_diractions/owl1.png" alt="Owl Image"></div>
                    <p>Психиатрия Психотерапия</p></div>
                <div class="item">
                    <div class="circle"><img src="img/icon_diractions/owl1.png" alt="Owl Image"></div>
                    <p>Вакцинация</p></div>
                <div class="item">
                    <div class="circle"><img src="img/icon_diractions/owl1.png" alt="Owl Image"></div>
                    <p>УЗИ санология</p></div>
                <div class="item">
                    <div class="circle"><img src="img/icon_diractions/owl1.png" alt="Owl Image"></div>
                    <p>Реабилитология</p></div>
                <div class="item">
                    <div class="circle"><img src="img/icon_diractions/owl1.png" alt="Owl Image"></div>
                    <p>Артопедия</p></div>
                <div class="item">
                    <div class="circle"><img src="img/icon_diractions/owl1.png" alt="Owl Image"></div>
                    <p>Эндоскопия</p></div>
            </div>
        </div>
    </div>

    <!--  О НАС -->
    <div class="container">
        <div class="row">

           <div class=" col-md-6">
               <div id="about">
                    <h2> <b>Еврейский медицинский центр «JMC»</b></h2>
                    <p>ДОБРО ПОЖАЛОВАТЬ</p>
                    <p>Мы многопрофильный, высококлассный медицинский центр, принципиально нового для Украины уровня и подхода к оказанию медицинских услуг, где наилучшим образом сочетаются новейшие технологии, самое современное и уникальное оборудование, высочайшая квалификация и интеллект врачей всех профилей, высокий сервис.</p>
               </div>
           </div>
            <div class="col-sm-6">
                <div class="wrapper">
                    <div class="box">
                        <input type="text" value="100" class="dial" data-readOnly="true" data-thickness="0.05" data-fgColor="#f7a34a" data-bgColor="#fff" >
                    </div>
                </div>

                <script>
                    $(".dial").knob();
                    $({animatedVal: 0}).animate({animatedVal: 100}, {
                        duration: 2000,
                        easing: "swing",
                        step: function() {
                            $(".dial").val(Math.ceil(this.animatedVal)).trigger("change");
                        }
                    });


                </script>
                <img src="img/glav_vrach1.png" class="solution img-circle" alt="Cinque Terre" width="304" height="236">
            </div>
        </div>
   </div>


        </div>
    </div>


    <!--  Запись на прием -->
    <div class="order_bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="oreder_text">
                        <p>Вы можите записаться<br> на прием к специалистам <br> нашей клиники приямо сейчас</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="oreder_button">
                        <a href="index.php#map">
                            <button><b>Записаться на приём</b></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  наша команда -->
    <div id="team">
        <div class="container bg_doctor">
            <div class="row">
                <div class="col-md-3" style="float: right; "><img src="img/glav_vrach.png" class="glav_vrach"></div>
                <div class=" col-md-9" style="float: left;">
                    <div class="team_text">
                        <h3><span class="mark1h3"> наша </span> <b><span class="mark2h3"> команда </span></b></h3>
                        <hr width="150px" align="left">
                        <p>Ведущий специалист клиники, кандидат медицинских наук, Завизион Виктор Федорович, врач
                            онкохирург, хирург высшей категории, стаж работы более 30 лет, доцент кафедры онкологии и
                            медицинской радиологии, имеет более 190 публикаций в отечественных и зарубежных
                            изданиях. </p>

                        <a href="doctors.php?id=d1"><p><i>«Наша команда это слаженный коллектив специалистов высокого
                                    уровня квалификации, способных вместе быстро и грамотно поставить правильный
                                    диагноз, провести качественное обследование и назначить соответствующее лечение»</i>
                            </p></a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Врачи -->
    <div id="vrachi">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <a href="doctors.php?id=d5">
                        <div class="vrachi_card">
                            <img src="img/vrach_card/d5.jpg">
                            <div class="social">
                                <img src="img/vrach_card/ok.png">
                                <img src="img/vrach_card/fb.png">
                                <img src="img/vrach_card/vk.png">
                            </div>
                            <div class="vrach_text">
                                <h6>Сергеев</h6>
                                <h5><strong>Станислав Николаевич</strong></h5>
                                <p>Врач уролог, высшей категории, стаж работы 17 лет. Консуль&shyтации, диагностика и
                                    лечение уро&shyлогических проблем, обзор&shyная экскреторная уро&shyграфия, УЗИ,
                                    исследование на онко&shyмаркеры... </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="doctors.php?id=d3">
                        <div class="vrachi_card">
                            <img src="img/vrach_card/d3.jpg">
                            <div class="social">
                                <img src="img/vrach_card/ok.png">
                                <img src="img/vrach_card/fb.png">
                                <img src="img/vrach_card/vk.png">
                            </div>
                            <div class="vrach_text">
                                <h6>Нороха </h6>
                                <h5>Игорь Иванович</h5>
                                <p>Врач дермато-венеролог, выс&shyшей кате&shyго&shyрии, имеет много&shyлет&shyний опыт
                                    веде&shyния па&shyци&shyентов с дер&shyма&shyто&shyло&shyги&shyчес&shyки&shyми,
                                    кож&shyны&shyми, ве&shyни&shyро&shyло&shyгичес&shyкими проб&shyле&shyма&shyми.
                                    Прак&shyти&shyкует лазер&shyные мето&shyдики в лече&shyнии кож&shyной...</p>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="doctors.php?id=d2">
                        <div class="vrachi_card">
                            <img src="img/vrach_card/d2.jpg">
                            <div class="social">
                                <img src="img/vrach_card/ok.png">
                                <img src="img/vrach_card/fb.png">
                                <img src="img/vrach_card/vk.png">
                            </div>
                            <div class="vrach_text">
                                <h6>Артеменко</h6>
                                <h5>Александр Андреевич</h5>
                                <p>Врач онко-дерматолог, консуль&shyтации , диагностика и лечение новообразований кожи,
                                    дерма&shyтоскопия эксперт класса, малоинвазивная хирургия кожи, гистологическое
                                    исследование кожи в онкологии...</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="doctors.php?id=d4">
                        <div class="vrachi_card">
                            <img src="img/vrach_card/d4.jpg">
                            <div class="social">
                                <img src="img/vrach_card/ok.png">
                                <img src="img/vrach_card/fb.png">
                                <img src="img/vrach_card/vk.png">
                            </div>
                            <div class="vrach_text">
                                <h6>Балашов</h6>
                                <h5>Игорь Васильевич</h5>
                                <p>Врач гинеколог, высшей категории, стаж работы 21 год, консультативный прием,
                                    гине&shyкологический осмотр, цитологи&shyческое исследование, мазки и посевы на
                                    флору, обследвание на ТОРЧ инфекции...</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!--   Оборудование -->
    <div class="Surgitron">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="Surgitron_text">
                        <p>Хирурги нашей клиники проводят
                            операции американским аппаратом
                            «Surgitron ЕМС» Ellman International</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="Surgitron_button">
                        <a href="blog.php">
                            <button><b>Побробнее</b></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- блог -->
    <div id="blog">
        <div class="container">
            <h3 style="text-align: center"><span class="mark1h3"> последние </span> <b><span
                            class="mark2h3"> статьи </span></b></h3>
            <hr width="150px" align="center">
            <p>На страницах блога вы можете ознакомиться с последними новостями и достижениями медицины, а так же узнать
                новости и предложения нашей клиники</p>
            <div class="row">
                <div class="col-md-4">
                    <a href="blog.php#b1">
                        <div class="article">
                            <img src="img/blog/b_2.jpg">
                            <div class="blog_content">
                                <p class="blog_data"> 5 сентября 2016г </p>
                                <h5>«Золотой век» аппаратов лазерной эпиляции</h5>
                                <p class="blog_text">Если ранее методы удаления волос были, большей частью, довольно
                                    травматичными для кожи, то сейчас, когда современная косметология переживает свой
                                    «золотой век», эта процедура уже может превратиться не в средневековую экзекуцию, а
                                    в более безболезненную и приятную процедуру. Так что бритва или депилятор – это уже
                                    «прошлый век»...
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="blog.php#b2">
                        <div class="article">
                            <img src="img/blog/b_1.jpg">
                            <div class="blog_content">
                                <p class="blog_data"> 7 ноября 2016г </p>
                                <h5>Американские технологии теперь в Украине</h5>
                                <p class="blog_text">Несмотря на достигнутые успехи, сегодняшняя медицина продолжает
                                    свое развитие, благодаря чему почти каждый год появляется всё более совершенное
                                    медицинское оборудование. Естественно, и хирургия не остается в стороне от этого
                                    процесса. Можно привести большое количество примеров, которые свидетельствуют о
                                    достижениях хирургии...
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="blog.php#b3">
                        <div class="article">
                            <img src="img/blog/b_3.jpg">
                            <div class="blog_content">
                                <p class="blog_data"> 29 ноября 2016г </p>
                                <h5>Фракционный фототермолиз - новое слово в омоложении</h5>
                                <p class="blog_text">Лазерный фототермолиз Фраксель (Fraxel) – это самая инновационная и
                                    безопасная методика омоложения в современной аппаратной косметологии. Она позволяет
                                    эффективно избавиться от косметических дефектов и возрастных изменений кожи.
                                    Процедура осуществляется на базе революционной лазерной системы Fraxel SR1500....
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>

<?php
include "footer.php"
?>
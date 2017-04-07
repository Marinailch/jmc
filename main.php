
<div class="slidin2">
    <p></p>
    <div class="sildin">
    <?php
    include "slider1.php"
    ?>
    </div>
</div>
<div class="why_block">
    <div class="container">

        <div id="owl-demo">
            <div class="item">
                <div class="circle"><img src="../img/icon_diractions/hirurg.png" alt="Owl Image"></div>
                <p>Хирургия</p></div>
            <div class="item">
                <div class="circle"><img src="../img/icon_diractions/terapevt.png" alt="Owl Image"></div>
                <p>Терапия</p></div>
            <div class="item">
                <div class="circle"><img src="../img/icon_diractions/pediator.png" alt="Owl Image"></div>
                <p>Педиатрия</p></div>
            <div class="item">
                <div class="circle"><img src="../img/icon_diractions/genikolog1.png" alt="Owl Image"></div>
                <p>Гинекология<br>Акушерство</p></div>
            <div class="item">
                <div class="circle"><img src="../img/icon_diractions/lab.png" alt="Owl Image"></div>
                <p>Лабораторная диагностика</p></div>
            <div class="item">
                <div class="circle"><img src="../img/icon_diractions/urolog.png" alt="Owl Image"></div>
                <p>Урология</p></div>
            <div class="item">
                <div class="circle"><img src="../img/icon_diractions/dermo.png" alt="Owl Image"></div>
                <p>Дерматология</p></div>
            <div class="item">
                <div class="circle"><img src="../img/icon_diractions/oto.png" alt="Owl Image"></div>
                <p>Отоларингология</p></div>
            <div class="item">
                <div class="circle"><img src="../img/icon_diractions/endo.png" alt="Owl Image"></div>
                <p>Эндокринология</p></div>
            <div class="item">
                <div class="circle"><img src="../img/icon_diractions/nevro.png" alt="Owl Image"></div>
                <p>Неврология</p></div>
            <div class="item">
                <div class="circle"><img src="../img/icon_diractions/psiho.png" alt="Owl Image"></div>
                <p>Психиатрия<br> Психотерапия</p></div>
            <div class="item">
                <div class="circle"><img src="../img/icon_diractions/vakcina.png" alt="Owl Image"></div>
                <p>Вакцинация</p></div>
            <div class="item">
                <div class="circle"><img src="../img/icon_diractions/uzi.png" alt="Owl Image"></div>
                <p>УЗИ санология</p></div>
            <div class="item">
                <div class="circle"><img src="../img/icon_diractions/reobil.png" alt="Owl Image"></div>
                <p>Реабилитология</p></div>
            <div class="item">
                <div class="circle"><img src="../img/icon_diractions/ortoped.png" alt="Owl Image"></div>
                <p>Артопедия</p></div>
            <div class="item">
                <div class="circle"><img src="../img/icon_diractions/gastro.png" alt="Owl Image"></div>
                <p>Эндоскопия</p></div>
        </div>
    </div>
</div>

<!--  О НАС -->
<div class="about_container">
<div class="container ">
    <div class="row">

        <div class=" col-md-6">
            <div id="about">
                <p> <span class="markh2b">Еврейский медицинский центр «JMC»</span></p>
                <p> <span class="markh4o">ДОБРО ПОЖАЛОВАТЬ</span> </p>
                <p>Мы многопрофильный, высококлассный медицинский центр, принципиально нового для Украины уровня и подхода к оказанию медицинских услуг, где наилучшим образом сочетаются новейшие технологии, самое современное и уникальное оборудование, высочайшая квалификация и интеллект врачей всех профилей, высокий сервис.</p>
                <a href="" type="submit" class="btn hvr-grow-shadow diraction_form_button">Подробнее</a>
            </div>
        </div>




        <div class="col-sm-6 ">
            <div class="wrapper1">
                <div class="box">
                    <p><span class="about_counter_el1">НА ВСЕ</span></p>
                    <input type="text" value="100" class="dial" data-readOnly="true" data-thickness="0.03" data-fgColor="#f7a34a" data-bgColor="#fff" data-width="300px" data-fontWeight="600" data-font="" >
                    <p class="about_counter_el2">%</p>
                    <p class="about_counter_el3">Честные</p>
                    <p class="about_counter_el4">Взаимоотношения</p>
                </div>
            </div>

            <script>
                $('.dial').knob();
                var control  =0;
                $(window).scroll(function(){
                    var offsset = $('.dial').offset().top - 600;
                    var scroll = $(window).scrollTop();
                    if (scroll > offsset && control===0) {
                        control++;
                        $({animatedVal: 0}).animate({animatedVal: 100}, {
                            duration: 2000,
                            easing: "swing",
                            step: function() {
                                $(".dial").val(Math.ceil(this.animatedVal)).trigger("change");
//
                            }
                        });
                    }
                })
            </script>
<!--            <img src="../img/minora.png" class="solution " alt="Cinque Terre" width="304" height="236"/>-->
        </div>
    </div>
</div>
</div>

<div class="container about_item">
    <p class="markh1b"> О нашем центре</p>
    <p class="markh4o"><span >ДАВАЙТЕ ПОЗНАКОМИМСЯ!</span></p>
    <div class="row">
        <div class="col-sm-4"><img src="../img/about/about3.jpg"><div class="about_item_text"><h4>Наши руководители </h4><p>Целями нашего центра являются оказание квалифицированной, качественной, адекватной состоянию здоровья пациента ...   </p> <div><p class= "hvr-grow-shadow diraction_form_button">узнать больше</p></div></div> </div>
        <div class="col-sm-4"><img src="../img/about/about2.jpg"><div class="about_item_text"><h4>О клинике         </h4><p>С открытием нового двухэтажного офиса JMC в центре «Менора» мы расширяем деятельность, в частности ...               </p> <div><p class=" hvr-grow-shadow diraction_form_button">узнать больше</p></div></div> </div>
        <div class="col-sm-4"><img src="../img/about/about1.jpg"><div class="about_item_text"><h4>Главний раввин    </h4><p>Начинается месяц Адар. Для еврейского народа это месяц Мазаль и Броха (успеха и благословения). Сказано в Талмуде ...</p> <div><p class="hvr-grow-shadow diraction_form_button">узнать больше</p></div></div> </div>
    </div>

</div>

<!--  Запись на прием -->
<div  class="order_bg">
    <div class="container">
        <div class="order_bg_in">
            <p><span class="markh1w">Получить консультацию врачей</span> </p>
            <p><span class="markh4g">УЗКОЙ СПЕЦИАЛИЗАЦИИ</span> </p>
            <a href="../directions.php" class="button_w hvr-grow-shadow">Записаться на приём</a>
        </div>
    </div>

</div>


<!--  наша команда -->
<div id="team" style="background-image: url(img/bg_doc.jpg);">
    <div class="container ">
        <div class="row">
            <div class="col-md-3" style="float: right; "></div>
            <div class=" col-md-9" style="float: left;">
                <div class="team_text">
                    <p><span class="markh2b">Наши услуги </span></p>
                    <p><span class="markh4o">ЧЕМ МЫ МОЖЕМ ПОМОЧЬ </span></p>
                    <div class="tema_ul">


                        <div class="panel-group" id="accordion">

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <div class="circle_button">
                                            <div class="button_plus"></div>
                                            <div  class="minus"></div>
                                            <div  class="plus" id="plus1"></div>
                                        </div>
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Консультации специалистов</a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse">
                                    <div class="panel-body">более 30 докторов узкой специализации</div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <div class="circle_button">
                                            <div class="button_plus"></div>
                                            <div  class="minus"></div>
                                            <div  class="plus"></div>
                                        </div>
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Инструментальная диагностика</a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">Самое современное оборудование</div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <div class="circle_button">
                                            <div class="button_plus"></div>
                                            <div  class="minus"></div>
                                            <div  class="plus"></div>
                                        </div>
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Лабораторные исследования</a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">Более 300 лабораторных анализов</div>
                                </div>
                            </div>


                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <div class="circle_button">
                                            <div class="button_plus"></div>
                                            <div  class="minus"></div>
                                            <div  class="plus"></div>
                                        </div>
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Опиративное лечение</a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="panel-body">Одного дня</div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <div class="circle_button">
                                            <div class="button_plus"></div>
                                            <div  class="minus"></div>
                                            <div  class="plus"></div>
                                        </div>
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Дневной стационар</a>
                                    </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse">
                                    <div class="panel-body"> Под наблюдением врача и опытной мед. сестры</div>
                                </div>
                            </div>



                        </div>

                        <button class="btn btn-orange btn-icon"><i class="fa fa-plus"></i></button>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!--______OWL________-->

<div class="advantages">
    <div class="container">
        <p><span class="markh2w">Наши преимущества</span></p>
        <div id="owl-demo2">
            <div class="item"> <div class="circle"><img src="../img/icon_diractions/owl1.png" alt="Owl Image"></div>
                <p><span class="markh4g">КАЧЕСТВЕННО И ВЫСОКОТЕХНОЛОГИЧНО</span></p>
                <p>JMC гарантирует качество результатов диагностики и лечения;<br>
                    мы работаем на современном лабораторном и диагностическом оборудовании,<br>
                    многоуровневая система контроля качества оказания медицинской помощи  </p></div>

            <div class="item"> <div class="circle"><img src="../img/icon_diractions/owl1.png" alt="Owl Image"></div>
                <p><span class="markh4g">ЧЕСТНО И ГУМАННО</span></p>
                <p> наша основная задача – здоровье и благополучие наших клиентов;<br>
                    осуществление благотворительной деятельности;<br>
                    JMC не сотрудничает с фармацевтическими представителями.<br>
                    В клинике нет рекламы лекарственных препаратов<br>
                </p></div>
            <div class="item"> <div class="circle"><img src="../img/icon_diractions/owl1.png" alt="Owl Image"></div>
                <p><span class="markh4g">УДОБНО И КОМФОРТНО</span></p>
                <p>  работаем каждое воскресенье и все государственные праздники;<br>
                    ведем прием пациентов до последнего клиента;<br>
                    результаты лабораторных исследований выдаем сразу;<br>
                    уделяем пациентам столько времени, сколько нужно;<br>
                    наше обслуживание Вас приятно удивит.</p></div>

        </div>
    </div>
</div>







<!--______OWL________-->
<!-- блог -->
<div id="blog">
    <div class="container">
        <h3 style="text-align: center"><span class="markh1w">Последние статьи </span></h3>
        <p><span class="markh4o">Наш блог</span></p>
        <div class="row">
            <div class="col-md-4">
                <a href="../blog.php#b1">
                    <div class="article">
                        <img src="../img/blog/blog_img1.jpg">
                        <div class="blog_content">
                            <p class="blog_data"> 5 сентября 2016г </p>
                            <h5> JMC расширяет спектр услуг</h5>
                            <p class="blog_text">С 7 марта в центре можно измерить внутриглазное давление самым комфортным и безопасным способом – с помощью бесконтактного тонометра.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="../blog.php#b2">
                    <div class="article">
                        <img src="../img/blog/blog_img2.jpg">
                        <div class="blog_content">
                            <p class="blog_data"> 19 февраля 2017г </p>
                            <h5>Открытие нового офиса JMC</h5>
                            <p class="blog_text">Стало известно, что открытие нового офиса Еврейского Медицинского Центра JMC в центре «Менора» запланировано на 19 февраля...
                            </p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="../blog.php#b3">
                    <div class="article">
                        <img src="../img/blog/blog_img3.jpg">
                        <div class="blog_content">
                            <p class="blog_data"> 29 ноября 2016г </p>
                            <h5>Вступлене в завет Авраама</h5>
                            <p class="blog_text">Провел обрезание главный моэль Украины и Молдовы раввин Яков Гайсинович, ассистировал председатель правления, профессор Александр Родинский.....
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
</div>

<!--end- блог -->

<!--___________достижения___________-->

<div class="row"  id="track_record">
    <div class="col-sm-6 track_record_meet_doctor" >
        <div class="track_record_record_in track_record_left">
            <p> <span class="markh2b">Встречайте докторов</span> </p>
            <p><span class="markh4o">НАШИ СОТРУДНИКИ</span> </p>
            <div class="col-sm-5">
                <div class="doctor_card1">
                    <img class="" src="../img/vrach_card/avatar.png">
                    <div class="doctor_info1">
                        <h5>Гениколог</h5>
                        <h4>Иванов Иван Иванович</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-5">
                <div class="doctor_card1">
                    <img class="" src="../img/vrach_card/avatar.png">
                    <div class="doctor_info1">
                        <h5>Гениколог</h5>
                        <h4>Иванов Иван Иванович</h4>
                    </div>
                </div>
            </div>
            <a href="../directions.php" class="button_o hvr-grow-shadow">Записаться на приём</a>
        </div>

    </div>


    <div class="col-sm-6 track_record_record" >
        <div class="track_record_record_in track_record_right">
            <p><span class="markh2w">Наши достижения</span> </p>
            <p><span class="markh4g">КАК МЫ ПОМОГАЕМ ЛЮДЯМ</span></p>
            <p class="track_record_record_text">За пять лет своей работы уникальная программа еврейской общины Днепра – Медицинский центр JMC – добился значительных успехов, в частности, было проведено:</p>
            <p ><span class="markh4w">Врачебных консультаций</span><span class="markh4w" style="margin-left: 44%; margin-top: 30px">10321</span></p>
            <div class="line">
                <div></div>
                <div class="lineTwo l1"></div>
            </div>
            <p ><span class="markh4w">Функциональных исследований</span><span class="markh4w" style="margin-left: 36%; margin-top: 30px">3419</span></p>
            <div class="line">
                <div></div>
                <div class="lineTwo l2"></div>
            </div>
            <p ><span class="markh4w">Лабораторных исследований</span><span class="markh4w" style="margin-left: 38%; margin-top: 30px">17804</span></p>
            <div class="line">
                <div></div>
                <div class="lineTwo l3"></div>
            </div>
            <p ><span class="markh4w">УЗИ-исследований</span><span class="markh4w" style="margin-left: 52%; margin-top: 30px">5672</span></p>
            <div class="line">
                <div></div>
                <div class="lineTwo l4"></div>
            </div>
        </div>
    </div>
</div>


<!--____end_______достижения___________-->

<!--    recommend-->
<div class="row"  id="recommend">

    <div class="col-sm-6 recommend_circle" >
        <div class="wrapper">
            <div class="box">
                <p><span class="about_counter_el1">НА ВСЕ</span></p>
                <input type="text" value="" class="dial1" data-readOnly="true" data-thickness="0.03" data-fgColor="#fff" data-bgColor="#4c463a" data-width="300px" data-fontWeight="600" data-font="" >
                <p class="about_counter_el2">%</p>
                <p class="about_counter_el3">Честные</p>
                <p class="about_counter_el4">Взаимоотношения</p>
            </div>
        </div>

        <script>
            $('.dial1').knob();
            var control1  =0;
            $(window).scroll(function(){
                var offsset1 = $('.dial1').offset().top - 600;
                var scroll1 = $(window).scrollTop();
                if (scroll1 > offsset1 && control1===0) {
                    control1++;
                    $({animatedVal: 0}).animate({animatedVal: 100}, {
                        duration: 2000,
                        easing: "swing",
                        step: function() {
                            $(".dial1").val(Math.ceil(this.animatedVal)).trigger("change");
//
                        }
                    });
                }
            })
        </script>
    </div>


    <div class="col-sm-6 recommend_record" >
        <div class="recommend_in">
            <p><span class="markh2w">Современные методики лечения </span> </p>
            <p><span class="markh4o">Нам можно доверять! </span> </p>
            <p>Вы доверяйте нам, а мы в свою очередь предоставляем Вам максимально точную диагностику и наиболее эффективные методики лечения </p>
            <a href="../directions.php" class="button_o hvr-grow-shadow">Узнать о нас больше</a>

        </div>
    </div>

<!--</div>-->
<!--<div  style="width: 100%; height: 50px; background-color: #0ba5a3"></div>-->
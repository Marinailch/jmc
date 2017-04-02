<div>
    <div class="directions_header">
        <p>Диагностические исследования</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="directions_menu">
                    <div class="doctor_info">
                        <ul style="list-style-type: none; padding-left: 0; margin-top: 50px; text-align: left;">
                            <li class="hvr-grow-shadow"><a href="pages/diagnostics/uzi.php" class="directions_button">УЗИ</a>
                            </li>
                            <li class="hvr-grow-shadow"><a href="pages/diagnostics/laboratory.php"
                                                           class="directions_button">Лабораторная диагностика</a></li>
                            <li class="hvr-grow-shadow"><a href="pages/diagnostics/functional.php"
                                                           class="directions_button">Функциональная диагностика</a></li>
                            <li class="hvr-grow-shadow"><a href="pages/diagnostics/appar.php" class="directions_button">Аппаратная
                                    диагностика</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 text-doc">
                <nav>
                    <!-- ЭТО КАРТИНКА НАПРАВЛЕНИЯ-->
                    <img src="img/diractions/<?= $id['link_foto_direction'] ?>" class="diractions_main_img">
                    <!-- ЭТО ОПИСАНИЕ НАПРАВЛЕНИЯ-->
                    <?php
                    echo $id['description_direction'];
                    $doctors = $foo->getDoctorsByDirection($id['id']);
                    var_dump($doctors);
                    ?>

                    <h4><b>У нас работают лучшие специалисты города</b></h4>
                    <hr>
                    <div class="media">
                        <div class="media-left">
                            <img src="img/vrach_card/<?php echo "$img"; ?>.jpg" class="media-object"
                                 style="width:150px">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Иванов Иван Иванович</h4>
                            <p>Врач, высшей категории, имеет богатейший двадцатилетний опыт работы в лучших клиниках
                                нашего города. Область его профессиональной деятельности довольно широка. В нашей
                                клинике Игорь Васильевич проводит консультативный прием, гинекологический осмотр,
                                цитологическое исследование, мазки и посевы на флору, обследвание на ТОРЧ инфекции,
                                профилактические осмотры.</p>
                        </div>
                    </div>


                    <table class="table diractions_service">
                        <tbody>
                        <tr>
                            <td>Консультация гинеколога</td>
                            <td class="diractions_service_price">Первичный прием - 320 грн</td>
                            <td class="diractions_service_price">Вторичный прием - 220 грн</td>

                        </tr>
                        </tbody>
                    </table>
                    <hr>


                    <h4><b>В нашей клинике Вы можите получить следующие услуги</b></h4>
                    <table class="table diractions_service">
                        <tbody>
                        <tr>
                            <td>Консультация гинеколога</td>
                            <td class="diractions_service_price">220 грн</td>

                        </tr>
                        <tr>
                            <td>УЗИ молочных желез</td>
                            <td class="diractions_service_price">220 грн</td>
                        </tr>
                        <tr>
                            <td>Кольпоскопия</td>
                            <td class="diractions_service_price">220 грн</td>
                        </tr>
                        </tbody>
                    </table>

                    <h4><b>Гинекологическая панель анализов</b></h4>
                    <table class="table">
                        <tbody>
                        <tr>
                            <td class="diractions_laboratory_name">Лабораторная оценка гормональной регуляции функции
                                репродуктивной системы и мониторинг беременности
                            </td>
                            <td>1-5 дней</td>
                            <td>220 грн</td>

                        </tr>
                        <tr>
                            <td class="diractions_laboratory_name">Лабораторная оценка гормональной регуляции функции
                                репродуктивной системы и мониторинг беременности
                            </td>
                            <td>1-5 дней</td>
                            <td>220 грн</td>
                        </tr>
                        <tr>
                            <td class="diractions_laboratory_name">Лабораторная оценка гормональной регуляции функции
                                репродуктивной системы и мониторинг беременности
                            </td>
                            <td>1-5 дней</td>
                            <td>220 грн</td>
                        </tr>
                        </tbody>
                    </table>


                </nav>
            </div>
        </div>
        <div class="diraction_form">
            <h2>Запишитесь на приём!</h2>
            <form class="form-horizontal ">

                <div class="form-group">
                    <label class="control-label col-sm-2" for="name"></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="Ваше Имя">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="phone"></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" placeholder="Телефон">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email"></label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Электронный адрес">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="data"></label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="date" name="date" placeholder="Дата" required>

                    </div>
                </div>

                <div class="form-group">
                    <label for="diractions_select" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <select class="form-control" id="diractions_select">
                            <option>Ваберите из списка гинеколога</option>
                            <option>Прокофьева Анна Семеновна</option>
                            <option>Прокофьева Анна Семеновна</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default diraction_form_button">Записаться</button>
                    </div>
                </div>
            </form>

        </div>
    </div>




<?php
//Получаем массив из ГЕТ запроса
//Если его нет - возвращает массив с фото и описанием главной страницы
//Если есть - массив с описанием искомого направления
$id = $request->getGET();



//Получаем ТРУ или ФОЛС в зависимости от наличия или отсутствия ГЕТ
$request->getReqByGet();


//Получаем все направления
$res = $directions->getDirections();

?>
    <div class="directions_header">
        <p>Консультативный прием</p>
    </div>
<div class="container">
    <div class="row">
            <div class="col-sm-4">
                <div class="directions_menu">
                    <div class="doctor_info">

                        <ul style="list-style-type: none;padding-left: 0;margin-top: 10px;">
                            <?php foreach ($res as $item => $value): ?>
                                <li class="hvr-grow-shadow"><a
                                            href="/index.php?page=directions&id=<?= $value['name_of_direction'] ?>"
                                            class="directions_button"><?= $value['name_of_direction'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>

                    </div>
                </div>
            </div>

        <div class="col-sm-8 text-doc">
            <nav>
<!-- Если есть ГЕТ запрос данная функция вернет ТРУ и загрузится направление-->
<?php if($request->getReqByGet()):?>
                    <!-- Это начало-->
                    <!-- ЭТО КАРТИНКА НАПРАВЛЕНИЯ-->
                        <img src="img/diractions/<?= $id['link_foto_direction'] ?>" class="diractions_main_img">
                    <!-- ЭТО ОПИСАНИЕ НАПРАВЛЕНИЯ-->
                    <p class="description_direction">
                            <?php
                                    echo $id['description_direction'];
                                    $doctors = $doctors->getDoctorsByDirection($id['id']);
//                                    var_dump($doctors);
                            ?>
                    </p>

                    <h4 class="diractions_title"><b>У нас работают лучшие специалисты города</b></h4>
                    <hr>
                    <div class="media">
                        <div class="media-left">
                            <img src="../img/vrach_card/d1.jpg" class="media-object"
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

                    <hr>
                    <div class="row diractions_service">
                        <tbody>

                            <div class="col-md-4 markh4o">Консультация гинеколога</div>
                            <div class="col-md-4 markh4o">Первичный прием - 320 грн</div>
                            <div class="col-md-4 markh4o">Вторичный прием - 220 грн</div>


                        </tbody>
                    </div>



                    <h4 class="diractions_title"><b>В нашей клинике Вы можите получить следующие услуги</b></h4>
                    <table class="table ">
                        <tbody>
                        <tr>
                            <td>Консультация гинеколога</td>
                            <td></td>
                            <td class="diractions_service_price">220 грн</td>

                        </tr>
                        <tr>
                            <td>УЗИ молочных желез</td>
                            <td></td>
                            <td class="diractions_service_price">220 грн</td>
                        </tr>
                        <tr>
                            <td>Кольпоскопия</td>
                            <td></td>
                            <td class="diractions_service_price">220 грн</td>
                        </tr>
                        </tbody>
                    </table>

                    <h4 class="diractions_title"><b>Гинекологическая панель анализов</b></h4>
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




            <!-- Это конец-->
    <!-- Если нет ГЕТ запроса данная функция вернет ФОЛС и загрузится Главная страница-->
<?php else: ?>

            <!-- Это начало-->


            <!-- ЭТО КАРТИНКА НАПРАВЛЕНИЯ-->
            <img src="img/diractions/<?= $id[0]['foto_main'] ?>" class="diractions_main_img"><br>
            <!-- ЭТО ОПИСАНИЕ НАПРАВЛЕНИЯ-->

            <div><?= $id[0]['descr_main'] ?></div>


    <!-- Теперь получаем прайс всех консультаций-->
    <?php

    $price1 = $price->getPriceMain();
    $price2 = $price->getPriceMainWithHome();

    ?>

        <table class="table_price">
            <caption>Прайс лист на услуги</caption>
            <tr>
                <th>Направление</th>
                <th style="padding-top: 25px;">Цена, грн<br> <span style="font-weight: 100; font-size:12px;">первое      посещение</span></th>
                <th style="padding-top: 25px;">Цена, грн<br>  <span style="font-weight: 100; font-size: 12px;">последующее посещение</span></th>
            </tr>

            <?php foreach ($price1 as $key=>$value):?>
                <tr>
                    <td><?=$value['specialty'] ?></td>
                    <td><?=$value['price_first_time'].' грн' ?></td>
                    <td><?=$value['price_after'].' грн' ?></td>
                </tr>
            <?php endforeach; ?>
<!--            --><?php //foreach ($price2 as $item=>$value):?>
<!--                <tr>-->
<!--                    <td>--><?//= $value['specialty'] ?><!--</td>-->
<!--                    <td colspan="2">--><?//= $value['consulting_at_home'].' грн' ?><!--</td>-->
<!--                </tr>-->
<!--            --><?php //endforeach; ?>
        </table>

    <!-- Конец прайса-->


<?php endif ?>


        <div class="diraction_form">
            <p class=" markh2b">Запишитесь на приём!</p>
            <form class="form-horizontal ">

                <div class="form-group">
<!--                    <label class="control-label col-sm-2" for="name"></label>-->
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" placeholder="Ваше Имя">
                    </div>
                </div>
                <div class="form-group">
<!--                    <label class="control-label col-sm-2" for="phone"></label>-->
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" placeholder="Телефон">
                    </div>
                </div>
                <div class="form-group">
<!--                    <label class="control-label col-sm-2" for="email"></label>-->
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Электронный адрес">
                    </div>
                </div>
                <div class="form-group">
<!--                    <label class="control-label col-sm-2" for="data"></label>-->
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="date" name="date" placeholder="Дата" required>

                    </div>
                </div>

                <div class="form-group">
<!--                    <label for="diractions_select" class="col-sm-2 control-label"></label>-->
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

            </nav>
        </div>
    </div>
</div>




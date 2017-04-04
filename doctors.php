<?php

include_once "header.php";
include_once 'Config/config.php';
$doctors = new Doctors($db);
$doctors = $doctors->getDoctorsShort();
//var_dump($doctors);

?>
    <div class="directions_header">
        <p>Наша команда</p>
    </div>

    <div class="container" id="doctors">

        <div class="row">

            <!-- Это карточка одного доктора-->


<?php foreach($doctors as $key=>$value):?>

    <a  href="">
        <div class="col-sm-3 " >
                    <div class="doctor_card hvr-grow-shadow">
                        <img class="" src="img/doctors_foto/<?= $value['link_foto_doctor']?>">

                                <div class="doctor_info">


                            <?php
                            // не удаляй этот код он мне нужен
                                    $fio  = $value['name_of_doctor'];
                                    $fio_pieces = explode(" ", $fio);
                            ?>
                            <h5><?= $fio_pieces[0]?></h5>
                            <h5><?= $fio_pieces[1]." ".$fio_pieces[2]?></h5>
                            <h6><?= $value['specialty_of_doctor']?></h6>
                            <h4><?= $value['science_degree']?></h4>
                        </div>
                    </div>
                </div>
    </a>
<?endforeach; ?>

            <!-- Это конец карточки доктора-->

<!--            <a class="" href="">
                <div class="col-sm-3">
                    <div class="doctor_card"><img class="" src="img/vrach_card/avatar.png">
                        <div class="doctor_info"><h4>Иванов Иван Иванович</h4><h5>Гинеколог</h5>
                            <button type="submit" class="btn btn-default doctors_cart_button">Записаться</button>
                        </div>
                    </div>
                </div>
            </a>
            <a class="" href="">
                <div class="col-sm-3">
                    <div class="doctor_card"><img class="" src="img/vrach_card/avatar.png">
                        <div class="doctor_info"><h4>Иванов Иван Иванович</h4><h5>Гинеколог</h5>
                            <button type="submit" class="btn btn-default doctors_cart_button">Записаться
                            </button>
                        </div>
                    </div>
                </div>
            </a>
            <a class="" href="">
                <div class="col-sm-3">
                    <div class="doctor_card"><img class="" src="img/vrach_card/avatar.png">
                        <div class="doctor_info"><h4>Иванов Иван Иванович</h4><h5>Гинеколог</h5>
                            <button type="submit" class="btn btn-default doctors_cart_button">Записаться
                            </button>
                        </div>
                    </div>
                </div>
            </a>
            <a class="" href="">
                <div class="col-sm-3">
                    <div class="doctor_card"><img class="" src="img/vrach_card/avatar.png">
                        <div class="doctor_info"><h4>Иванов Иван Иванович</h4><h5>Гинеколог</h5>
                            <button type="submit" class="btn btn-default doctors_cart_button">Записаться
                            </button>
                        </div>
                    </div>
                </div>
            </a>
            <a class="" href="">
                <div class="col-sm-3">
                    <div class="doctor_card"><img class="" src="img/vrach_card/avatar.png">
                        <div class="doctor_info"><h4>Иванов Иван Иванович</h4><h5>Гинеколог</h5>
                            <button type="submit" class="btn btn-default doctors_cart_button">
                                Записаться
                            </button>
                        </div>
                    </div>
                </div>
            </a>
            <a class="" href="">
                <div class="col-sm-3">
                    <div class="doctor_card"><img class="" src="img/vrach_card/avatar.png">
                        <div class="doctor_info"><h4>Иванов Иван Иванович</h4><h5>Гинеколог</h5>
                            <button type="submit" class="btn btn-default doctors_cart_button">
                                Записаться
                            </button>
                        </div>
                    </div>
                </div>
            </a>
            <a class="" href="">
                <div class="col-sm-3">
                    <div class="doctor_card"><img class="" src="img/vrach_card/avatar.png">
                        <div class="doctor_info"><h4>Иванов Иван Иванович</h4><h5>Гинеколог</h5>
                            <button type="submit" class="btn btn-default doctors_cart_button">
                                Записаться
                            </button>
                        </div>
                    </div>
                </div>
            </a>
            <a class="" href="">
                <div class="col-sm-3">
                    <div class="doctor_card"><img class="" src="img/vrach_card/avatar.png">
                        <div class="doctor_info"><h4>Иванов Иван Иванович</h4><h5>Гинеколог</h5>
                            <button type="submit" class="btn btn-default doctors_cart_button">
                                Записаться
                            </button>
                        </div>
                    </div>
                </div>
            </a>
            <a class="" href="">
                <div class="col-sm-3">
                    <div class="doctor_card"><img class="" src="img/vrach_card/avatar.png">
                        <div class="doctor_info"><h4>Иванов Иван Иванович</h4><h5>
                                Гинеколог</h5>
                            <button type="submit"
                                    class="btn btn-default doctors_cart_button">Записаться
                            </button>
                        </div>
                    </div>
                </div>
            </a>
            <a class="" href="">
                <div class="col-sm-3">
                    <div class="doctor_card"><img class=""
                                                  src="img/vrach_card/avatar.png">
                        <div class="doctor_info"><h4>Иванов Иван Иванович</h4><h5>
                                Гинеколог</h5>
                            <button type="submit"
                                    class="btn btn-default doctors_cart_button">
                                Записаться
                            </button>
                        </div>
                    </div>
                </div>
            </a>
            <a class="" href="">
                <div class="col-sm-3">
                    <div class="doctor_card"><img class=""
                                                  src="img/vrach_card/avatar.png">
                        <div class="doctor_info"><h4>Иванов Иван Иванович</h4><h5>
                                Гинеколог</h5>
                            <button type="submit"
                                    class="btn btn-default doctors_cart_button">
                                Записаться
                            </button>
                        </div>
                    </div>
                </div>
            </a>
-->
        </div>

    </div>

<?php
include "footer.php"
?>
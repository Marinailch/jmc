<?php

include_once "header.php";
include_once 'Config/config.php';
$doctors = new Doctors($db);
$doctors = $doctors->getDoctorsShort();

?>
    <div class="directions_header">
        <p>Наша команда</p>
    </div>

    <div class="container" id="doctors">

        <div class="row">

            <!-- Это карточка одного доктора-->

            <a class="" href="">
                <div class="col-sm-3">
                    <div class="doctor_card"><img class="" src="img/vrach_card/avatar.png">
                        <div class="doctor_info"><h4>Иванов Иван Иванович</h4><h5>Гинеколог</h5>
                            <button type="submit" class="btn btn-default doctors_cart_button">Записаться</button>
                        </div>
                    </div>
                </div>
            </a>

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
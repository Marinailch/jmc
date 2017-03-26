<?php
include_once "header.php";
if (isset($_GET['id'])) {
    $id = strtolower(strip_tags(trim($_GET['id'])));
  }else{
    $id='';
  }
?>
    <div>
        <div class="directions_header">
            <p>Функциональные направления</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="doctor_card">
                        <div class="doctor_info">
<!--                            <h3>Наша клиника специализируется</h3>-->
                            <ul style=" list-style-type: none;     padding-left: 0;     margin-top: 10px;">
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c1"  class="directions_button">Гинекология</a></li>
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c2"  class="directions_button">Хирургия</a></li>
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c3"  class="directions_button">Педиатрия</a></li>
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c4"  class="directions_button">Терапия</a></li>
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c5"  class="directions_button">Педиатрия</a></li>
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c6"  class="directions_button">Диетология</a></li>
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c7"  class="directions_button">Травматология</a></li>
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c8"  class="directions_button">Мануальная терапия</a></li>
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c9"  class="directions_button">Массаж</a></li>
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c10" class="directions_button">Урология</a></li>
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c11" class="directions_button">Дерматология</a></li>
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c12" class="directions_button">Косметология</a></li>
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c13" class="directions_button">Гастроэнтерология</a></li>
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c14" class="directions_button">Эндокринология</a></li>
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c15" class="directions_button">Неврология</a></li>
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c16" class="directions_button">Офтальмология</a></li>
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c17" class="directions_button">Пульмонология</a></li>
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c18" class="directions_button">Отоларингология</a></li>
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c19" class="directions_button">Детская неврология</a></li>
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c20" class="directions_button">Кардиология</a></li>
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c21" class="directions_button">Проктология</a></li>
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c22" class="directions_button">Ревматология</a></li>
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c23" class="directions_button">Сосудистая хирургия</a></li>
                                <li class="hvr-grow-shadow "><a href="directions.php?id=c23" class="directions_button">Профилактика</a></li>
                            </ul>

<!--                            <p class="spaising07"></p>-->
<!--                            <p class="spaising07"></p>-->
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 text-doc">
                        <nav>

                            <?php  switch($id){


                                case 'c1':
                                    $img="dr1";
                                    break;
                                case 'c2':
                                    $img="dr3";
                                    break;
                                case 'c3':
                                    $img="dr2";
                                    break;
                                case 'c4':
                                    $img="dr5";
                                    break;
                                case 'c5':
                                    $img="dr4";
                                    break;
                                case 'c6':
                                    $img="dr1";
                                    break;
                                case 'c7':
                                    $img="dr3";
                                    break;
                                case 'c8':
                                    $img="dr6";
                                    break;
                                default:
                                    $img="dr";
                                    break;
                            }
                            ?>

                            <img src="img/diractions/<?="$img"?>.jpg" class="diractions_main_img">

                                        <?php  switch($id){


                                                case 'c1':
                                                  include 'pages/directions/c1.php';
                                                break;
                                                case 'c2':
                                                  include 'pages/directions/c2.php';
                                                break;
                                                case 'c3':
                                                  include 'pages/directions/c3.php';
                                                break;
                                                case 'c4':
                                                  include 'pages/directions/c4.php';
                                                break;
                                                case 'c5':
                                                  include 'pages/directions/c5.php';
                                                break;
                                                 case 'c6':
                                                  include 'pages/directions/c6.php';
                                                break;
                                                 case 'c7':
                                                  include 'pages/directions/c7.php';
                                                break;
                                                case 'c8':
                                                  include 'pages/directions/c8.php';
                                                break;
                                            default:
                                                include 'pages/directions/c.php';
                                                break;

                                                    }
                                          ?>
                        </nav>
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
                                <option>Ваберите из списка гениколога</option>
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


<?php include "footer.php" ?>
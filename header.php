<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>JMC - Еврейский Медицинский Центр</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Еврейский Медицинский Центр">
    <meta name="author" content="">
    <meta name="keywords" content="Клиника">
    <link rel="stylesheet" href="css/bootstrap.min.css" media="all"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.knob.min.js"></script>
    <link rel="stylesheet" href="css/slider-pro.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles2.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic' rel='stylesheet'
          type='text/css'>
    <link href="css/hover-min.css" rel="stylesheet" media="all"> <!--hover animaition affect-->

</head>
<body>
<header>

    <div class="main-container">
        <header class="mdc-header mdc-style-01">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4 head_logo">
                            <a href="index.php"><img src="img/logo.gif"></a>
                            <div id="menu_mob" onclick="block();"><img src="img/12.png" alt="menu"></div>
                            <div id="menu">
                                <ul><a href=""><img src="img/13.png" id="back" onclick="none();"></a>
                                    <li onclick="none();"><a href="index.php#map">Контакты</a></li>
                                    <li onclick="none();"><a href="index.php" class="">Главная</a></li>
                                    <li onclick="none();"><a href="consult.php?id=с1">Консультации</a></li>
                                    <li onclick="none();"><a href="servise.php">Услуги</a></li>
                                    <li onclick="none();"><a href="index.php#about">О Нас</a></li>
                                    <li onclick="none();"><a href="blog.php">Блог</a></li>
                                    <li onclick="none();"><a href="">Магазин</a></li>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="phone_block col-sm-6">
                            <div class="col-md-6   head_time">
                                <div class="head_phone_icon ">
                                    <span class="head_phone_one"></span>
                                </div>
                                <div class="head_phone_number"
                                <span>+38-050-900-76-61<br>+38-096-551-75-65</span>
                            </div>
                        </div>
                        <div class="col-6  head_adress">
                            <span class="geo">717-70-58<br> 717-70-59</span><br>
                        </div>
                    </div>


                </div>
            </div>

    </div>

    <div class="header-bottom">
        <div class="container">

            <div class="row mdc-custom-row-02">
                <div class="col-md-11 col-sm-12 col-xs-12 mdc-col-left" style="margin-left: -20px;
">
                    <nav class="mdc-main-menu">
                        <ul>
                            <li><a href="index.php">Главная</a></li>
                            <li><a href="directions.php?id=c">Консультации</a></li>
                            <li><a href="diagnostics.php">Диагностика</a>
                                <ul class="menu_item_plus">
                                    <li><a href="pages/diagnostics/uzi.php"          class="hvr-grow-shadow"><i class="ti-angle-right"></i>УЗИ</a></li>
                                    <li><a href="laboratory.php"                     class="hvr-grow-shadow"><i class="ti-angle-right"></i>Лабораторная</a> </li>
                                    <li><a href="pages/diagnostics/functional.php" class="hvr-grow-shadow"><i class="ti-angle-right"></i>Функциональная</a>  </li>
                                </ul>
                            </li>
                            <li><a href="doctors.php">Врачи</a></li>
                            <li><a href="blog.php">Новости</a> </li>
                            <li><a href="about.php">О Нас</a>
                                <ul style="width:200px;">
                                    <li><a href="about.php" class="hvr-grow-shadow"><i class="ti-angle-right"></i>О клинике</a></li>
                                    <li><a href="about.php" class="hvr-grow-shadow"><i class="ti-angle-right"></i>Руководство</a>
                                    <li><a href="about.php" class="hvr-grow-shadow"><i class="ti-angle-right"></i>Обращение Раввина</a></li>
                                </ul>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- MENU -->

    <div id="main">

        <ul id="navigationMenu">
            <li>
                <a class="home" href="#">
                    <span>Главная</span>
                </a>
            </li>

            <li>
                <a class="about" href="#">
                    <span>Консультации</span>
                </a>
            </li>

            <li>
                <a class="services" href="#">
                    <span>Диагностика</span>
                </a>
            </li>

            <li>
                <a class="portfolio" href="#">
                    <span>Врачи</span>
                </a>
            </li>

            <li>
                <a class="contact" href="#">
                    <span>О нас</span>
                </a>
            </li>
        </ul>

    </div>



    <!-- MENU2 -->
</header>



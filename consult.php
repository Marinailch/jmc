<?php include "header.php" ?>
<? if (isset($_GET['id'])) {
    $id = strtolower(strip_tags(trim($_GET['id'])));
  }
  else{
    $id='';
  }?>
    <div class="doctor">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="doctor_card">
<?php  switch($id){

    default:
        $img="d1";
        break;
    case 'c1':
        $img="d1";
        break;
    case 'c2':
        $img="d3";
        break;
    case 'c3':
        $img="d2";
        break;
    case 'c4':
        $img="d5";
        break;
    case 'c5':
        $img="d4";
        break;
    case 'c6':
        $img="d1";
        break;
    case 'c7':
        $img="d3";
        break;
    case 'c8':
        $img="d6";
        break;}
?>

                        <img src="img/vrach_card/<?php echo"$img";?>.jpg">
                        <div class="social">
                            <img src="img/vrach_card/ok.png">
                            <img src="img/vrach_card/fb.png">
                            <img src="img/vrach_card/vk.png">
                        </div>
                        <div class="doctor_info">

                            <h3>часы работы</h3>
                            <p><span style="margin-right: 15px;">пн-пт</span>    9:00 - 19:00</p>

                            <p><span style="margin-right: 40px;">сб</span>9:00 - 15:00</p>

                            <p><span style="margin-right: 40px;">вс</span><span style="letter-spacing: 0.05em;">выходной</span></p>


                            <h3>контакты</h3>
                            <p class="spaising07">+38  066-267-32-72</p>
                            <p>ул. Херсонская, 10а</p>
                            <p class="spaising07">г. Днепр, Украина</p>

                        </div>
                    </div>
                </div>
                <div class="col-sm-8 text-doc">

                <nav>
                <h2>Консультация</h2>

<?php  switch($id){

         default:
          include 'pages/consult/c1.php';
        break;
        case 'c1':
          include 'pages/consult/c1.php';
        break;
        case 'c2':
          include 'pages/consult/c2.php';
        break;
        case 'c3':
          include 'pages/consult/c3.php';
        break;
        case 'c4':
          include 'pages/consult/c4.php';
        break;
        case 'c5':
          include 'pages/consult/c5.php';
        break;
         case 'c6':
          include 'pages/consult/c6.php';
        break;
         case 'c7':
          include 'pages/consult/c7.php';
        break;
        case 'c8':
          include 'pages/consult/c8.php';
        break;
        
               // case 'shop':
        //   include 'shop/admin/add2cat.php';
            }
  ?>
</nav>

<?php include "footer.php" ?>
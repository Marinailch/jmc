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
                    
<!--                         <img src="img/vrach_card/<?php echo "$id";?>.jpg">
                        <div class="social">
                            <a href="https://ok.ru/profile/571221007200" target="_blank"><img src="img/vrach_card/ok.png" width="auto"></a>
                            <a href="https://www.facebook.com/dnipromedical/" target="_blank"><img src="img/vrach_card/fb.png" style="width:auto;"></a>
                            <a href="https://vk.com/public136244461" target="_blank"><img src="img/vrach_card/vk.png" style="width:auto;"></a>
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
 -->

                         <img src="img/vrach_card/<?php echo"$id";?>.jpg">
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

<?php  switch($id){

         default:
          include 'pages/doctors/d1.php';
        break;
        case 'd1':
          include 'pages/doctors/d1.php';
        break;
        case 'd2':
          include 'pages/doctors/d2.php';
        break;
        case 'd3':
          include 'pages/doctors/d3.php';
        break;
        case 'd4':
          include 'pages/doctors/d4.php';
        break;
        case 'd5':
          include 'pages/doctors/d5.php';
        break;
        
               // case 'shop':
        //   include 'shop/admin/add2cat.php';
            }
  ?>
</nav>

<?php include "footer.php" ?>
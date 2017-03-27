<?php
include "header.php"
?>

    <div class="directions_header">
        <p>Функциональная диагностика</p>
    </div>

    <div class="container" id="lab">
        <!--<div>-->
        <!--  <img src="img/lab.jpg">-->
        <!--</div>-->
        <h4>В нашей клинике Вы можите пройти следующие обследования</h4>
        <table class="table table-bordered lab_table_header">
            <thead>
            <tr>
                <th>Название исследования</th>

                <th>Цена</th>
            </tr>
            </thead>
        </table>
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Узи</a>
                    </p>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <table class="table table-bordered lab_table_header">
                        <tbody class="">
                        <tr>
                            <td>Клинический анализ крови: общий анализ, лейкоформула, СОЭ</td>

                            <td>60 грн</td>
                        </tr>
                        <tr>
                            <td>Ретикулоциты</td>

                            <td>50 грн</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">ЭХОКГ</a>
                    </p>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <table class="table table-bordered lab_table_header">
                        <tbody class="">
                        <tr>
                            <td>Клинический анализ крови: общий анализ, лейкоформула, СОЭ</td>

                            <td>60 грн</td>
                        </tr>
                        <tr>
                            <td>Ретикулоциты</td>

                            <td>50 грн</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <p class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Коагулологические исследования</a>
                    </p>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <table class="table table-bordered lab_table_header">
                        <tbody class="">
                        <tr>
                            <td>Клинический анализ крови: общий анализ, лейкоформула, СОЭ</td>

                            <td>60 грн</td>
                        </tr>
                        <tr>
                            <td>Ретикулоциты</td>

                            <td>50 грн</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php
include "footer.php"
?>
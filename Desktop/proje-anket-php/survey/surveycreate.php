<?php
include 'connect.php';

if (!isset($_SESSION['mysesi']) && !isset($_SESSION['mytype']) === 1)
{
    header("Location: ../users/login.php");
}
?>
<?php

@$getadminid = $_GET['adminid'];

if($_POST){
        
    $surveytitle = $_POST['surveytitle'];
    $surveydesc = $_POST['surveydesc'];
    $surveystartdate = $_POST['surveystartdate'];
    $surveyfinishdate = $_POST['surveyfinishdate'];

    /* Anket Ekleme */
    $surveySorgu = $db->prepare("INSERT INTO surveys (u_id, survey_title, survey_desc, survey_start_date, survey_finish_date) VALUES ( ?, ?, ?, ?, ? )");
    $surveySorgu -> execute(array($getadminid, $surveytitle, $surveydesc, $surveystartdate, $surveyfinishdate));
    $surveyId = $db->lastInsertId();

    /* Anket Ekleme */
  $questions = $_POST['questions'];
  foreach($questions as $k => $v){
      $questionsName = $v['name'];
      /* Soru Ekleme */
      $questionSorgu = $db->prepare("INSERT INTO questions (s_id, question_title) VALUES ( ?, ? )");
      $questionSorgu -> execute(array($surveyId, $questionsName));
      $questionId = $db -> lastInsertId();
      /* Soru Ekleme */
      foreach($v['answers'] as $k2 => $v2){
        $answerType = $v['answertype'];
        /* Cevap Ekleme */
        $answerSorgu = $db -> prepare("INSERT INTO answers (q_id, answer_title, answer_type) VALUES ( ?, ?, ? )");
        $answerSorgu -> execute(array($questionId, $v2, $answerType));
        /* Cevap Ekleme */
      }
}
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="style/surveycreate.css" rel="stylesheet" type="text/css" media="all">

    <title>Admin Panel</title>
</head>

<body>

    <div class='DashboardContainer'>
        <div class='DashboardAside'>
            <input type='checkbox' id='AsideToggler'></input>
            <label for='AsideToggler'><i class="fa fa-sort-desc Desc"></i></label>
            <div class='DashboardAsideMenu'>
                <h2><i class="fa fa-dashboard"></i> &nbsp;Anket Dashboard</h2>
                <hr>
                </hr>
                <ul class='AsideNavbarList'>
                    <li><a href="dashboard.php" class='active'><i class="fa fa-cubes"></i> &nbsp; Anasayfa</a></li>
                    <li><a href="adminlist.php"><i class="fa fa-cubes"></i> &nbsp; Admin Listesi</a></li>
                    <li><a href='a.js'><i class="fa fa-cubes"></i> &nbsp;Menu 3</a></li>
                    <li><a href='a.js'><i class="fa fa-cubes"></i> &nbsp;Menu 4</a></li>
                </ul>
                <div class='DashboardAsideMenuButton'>
                    <a href='../users/logout.php'>Çıkış Yap <i class="fa fa-sign-out"></i></a>
                </div>
            </div>

        </div>
        <div class='DashboardMain'>
            <div class='DashboardNavbar'>

                <a href='a.js' class='DashboardNavbarLogo'>Hoşgeldin <h3></h3></a>
                <input type='checkbox' id='NavbarToggler'></input>
                <label for='NavbarToggler'><i class="fa fa-bars"></i></label>
                <div class='DashboardNavbarMenu'>
                    <ul class='DashboardNavbarList'>
                        <li><a href='a.js'>Menu 1</a></li>
                        <li><a href='a.js'>Menu 2</a></li>
                        <li><a href='a.js'>Menu 3</a></li>
                    </ul>
                </div>
            </div>
            <div class="surveybody">
                <div class="createanswerquestions">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="" method="POST">
                    <div class="form-group">
                        <input required type="text" name="surveytitle" placeholder="Anket Adı"><br><br>
                        <input required type="text" name="surveydesc" placeholder="Anket Açıklaması"><br><br>
                        <p>Anket Başlangıç Tarihi</p>
                        <input type="date" name="surveystartdate"><br><br>
                        <p>Anket Bitiş Tarihi</p>
                        <input type="date" name="surveyfinishdate"><br><br>
                    </div>
                    <div class="visiblebutton">
                        <input type="radio">&nbsp;&nbsp;Aktif&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio">&nbsp;&nbsp;Pasif

                    </div><br>
                    <button id="new-questions" type="button" style="font-weight: bold;">Yeni Soru</button>
                    <div class="questions--row">

                    </div>
                    <button style="font-weight: bold;">Oluştur</button>
                </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class='DashboardFooter'>
                <div class='DashboardFooterIcon'>
                    Logo
                </div>
                <div class='DashboardFooterContent'>
                    <i class="fa fa-copyright"></i> 2022 Copyright: anket.tech
                </div>
                <div class='DashboardFooterCopyright'>
                    <a href='a.js'><i class="fa fa-github"></i></a>
                </div>
            </div>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        var i = $(".questions--item").length;
        $("#new-questions").click(function() {
            var html = '<div class="row questions--item" style="background-color: #ccc; border-radius:10px; padding:5px; margin-top:10px;">' +
                '<div class="col-md-12">' +
                '<input type="text" name="questions['+i+'][name]" placeholder="Soru Adı">' +
                '<p>Cevap Tipi Seç</p>' +
                '<select id="selectsurveyitem" name="questions['+i+'][answertype]">' +
                '<option value="radio">Tek Seçim Cevap</option>' +
                '<option value="check">Çoklu Seçim Cevap</option>' +
                '</select>' +
                '</div>' +
                '<div class="col-md-12">'+
                '<button data-id="'+i+'" type="button" id="new-answers">Yeni Cevap</button>' +
                '</div>' +
                '<div class="answers--row"></div>' +
                '</div>';
            $(".questions--row").append(html);
            i++;
        });
        var i2 = $(".answers--item").length;
        $("body").on("click", "#new-answers", function() {
            var id = $(this).data("id");

            var radio = '<div class="col-md-12 answers--item">' +
                '<input type="radio" name="questions[' + id + ']" value="'+i2+'">' +
                '<input type="text" name="questions['+id+'][answers]['+i2+']" placeholder="Cevap Adı">' +
                '</div>';

            var check = '<div class="col-md-12 answers--item">' +
                '<input type="checkbox" name="questions['+id+']" value="'+i2+'">' +
                '<input type="text" name="questions['+id+'][answers]['+i2+']" placeholder="Cevap Adı">' +
                '</div>';


            selectElement = document.querySelector('#selectsurveyitem');
            if (selectElement.value == "radio") {
                $(this).closest(".questions--item").find('.answers--row').append(radio);
            } else if (selectElement.value == "check") {
                $(this).closest(".questions--item").find('.answers--row').append(check);
            }

            i2++;
        });
    });
    </script>
</body>

</html>
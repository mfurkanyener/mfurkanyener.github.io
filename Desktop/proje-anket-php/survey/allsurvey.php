<?php

include 'connect.php';


$id = $_GET['id'];


$s_id = $id;
if($_POST){
    print_r($_POST);
    $answers = $_POST['answers'];
    foreach($answers as $question => $answer){
        $sonucSorgu = $db->prepare("INSERT INTO surveyanswers (sur_sur_id, sur_que_id, sur_ans_title) VALUES (?, ?, ?)");
        $sonucSorgu ->execute(array($s_id, $question, $answers));
        $sonuc = $sonucSorgu->fetch(PDO::FETCH_ASSOC);
        print_r($sonuc);
        die();
        
        //'SELECT * FROM questions JOIN answers ON questions.question_id = answers.q_id WHERE questions.question_id = ? and questions.s_id = ? '
       
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="style/allsurvey.css" rel="stylesheet" type="text/css" media="all">

    <title>Anasayfa</title>
    <style>
        .answerlist{
            padding: 2px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="body">
            <div class="navbar">
                <a href="#" class="logo">

                    <h2>anket</h2>
                </a>
                <input type="checkbox" id="toggler">
                <label for="toggler"><i class="fa fa-bars"></i></label>
                <div class="menu">
                    <ul class="list">
                        <li>

                            <div class="dropdown">

                                <button class="dropbtn">anket</button>
                                <div class="dropdown-content">
                                    <a href="survey/survey.php">tüm anketler</a>
                                    <a href='survey/surveycreate.php?action=admin&adminid='>anket
                                        oluştur</a>
                                </div>

                            </div>
                        </li>
                        <li>
                            <a href="#">nasıl çalışır</a>
                        </li>
                        <li>
                            <a href="#">hakkımızda</a>
                        </li>
                        <li>
                            <a href="#">bize yazın</a>
                        </li>
                    </ul>
                </div>

                <div class="login"><a href="users/login.php">Giriş Yap</a></div>

            </div>
            <div class="search">
                <div class="surveySearch">
                    <div class="surveySearchTitile">
                        <h2>Kodunuz var mı?&nbsp;&nbsp;&nbsp;</h2>
                    </div>
                    <div class="surveySearchInput"><input type="search" placeholder=" # Kodu Girniz"></div>
                    <div class="surveySearchButton"><input type="submit" value="&#10132;"></div>
                </div>
            </div>



            <form method="POST">
<?php 


$sorularSorgu = $db->prepare('SELECT * FROM questions WHERE s_id = ?');
$sorularSorgu -> execute(array($s_id));
$sorular = $sorularSorgu -> fetchAll(PDO::FETCH_ASSOC);
foreach($sorular as $k => $v){ 

    $questionid = $v['question_id'];
echo '<br><div class="list" >'. $v['question_title'] .'</div><br>';
$cevaplarSorgu = $db->prepare('SELECT * FROM answers WHERE q_id = ?');
$cevaplarSorgu->execute(array($questionid));
$cevaplar = $cevaplarSorgu->fetchAll(PDO::FETCH_ASSOC);

foreach($cevaplar as $k2 => $v2){
    if ($v2['answer_type'] == 'radio'){
    echo '<div class="answer--list answerlist"><input required type="radio" value="'. $v2['answer_title'] .'" name="answers['. $questionid .']">'. $v2['answer_title'] .'</div>';
    }else{
        echo '<div class="answer--list" answerlist><input type="checkbox" value="'. $v2['answer_title'] .'" name="answers['. $questionid .']">'. $v2['answer_title'] .'</div>';
    }
}

} 
?>

<button class="endsurvey">Anketi Bitir</button>
</form>




        </div>
        <div class="footer">
            <div class="footerTop">
                <div class="footerBox">
                    <h1>SLOGAN</h1>
                </div>
                <div class="footerBox">
                    <h3>Başlık 1</h3>
                    <a href="#">Menü 1</a>
                    <a href="#">Menü 2</a>
                </div>
                <div class="footerBox">
                    <h3>Başlık 2</h3>
                    <a href="#">Menü 1</a>
                    <a href="#">Menü 2</a>
                </div>
                <div class="footerBox">
                    <h3>Başlık 3</h3>
                    <a href="#">Menü 1</a>
                    <a href="#">Menü 2</a>
                </div>
            </div>
            <hr>
            <div class="footerBottom">
                <i class="fa fa-copyright"></i> Copyright anket <span>Furkan Doğancan İpek</span>
            </div>
        </div>
    </div>

</body>

</html>
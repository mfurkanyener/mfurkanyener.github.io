<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="style/survey.css" rel="stylesheet" type="text/css" media="all">

    <title>Anasayfa</title>
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
                                    <a href="survey.php">tüm anketler</a>
                                    <a href='../users/login.php'>anket
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



            <div class="allsurveymain">
            <?php 
            include '../connection.php';
            $result = mysqli_query($db, "SELECT * FROM surveys");
            while($row = mysqli_fetch_assoc($result)){ 
            ?>
                <div class="allsurveybody">
                    
                    <div class="allsurveytitle">
                    <?php echo $row['survey_title']; ?>
                    </div>
                    <div class="allsurveydesc">
                    <?php echo $row['survey_desc']; ?>
                    </div>
                    <div class="allsurveydate">
                        <div class="allsurveystarthdate">
                        <i class="fa fa-calendar-check-o"></i> <?php echo $row['survey_start_date']; ?>
                        </div>
                        <div class="allsurveyfinishdate">
                        <i class="fa fa-calendar-times-o"></i> <?php echo $row['survey_finish_date']; ?>
                        </div>
                    </div>
                    <div class="allsurveygo">
                        <a href='allsurvey.php?action=survey&id=<?= $row['survey_id'] ?>'>Ankete Gir</a>
                    </div>
                </div>
                <?php } ?>
            </div>




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
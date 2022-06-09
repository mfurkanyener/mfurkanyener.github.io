<?php
include 'connection.php';

if (!isset($_SESSION['mysesi']) && !isset($_SESSION['mytype']) == 2 && !isset($_SESSION['mytype']) == 1 && !isset($_SESSION['mytype']) == 0)
{
    header("Location: users/login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="style/index.css" rel="stylesheet" type="text/css" media="all">

    <title>Anasayfa</title>
</head>

<body>

    <div class="container">
        <div class="body">
            <div class="navbar">
                <a href="#" class="logo">

                    <h2>Hoşgeldin <?php echo $_SESSION['mysesi']; ?></h2>
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
                                    <a href='survey/surveycreate.php?action=admin&adminid=<?= $_SESSION['adminid']; ?>'>anket
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

                <div class="logout"><a href="users/logout.php">Çıkış Yap</a></div>

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
            <div class="surveyBox">

                <div class="Box">

                    <h1 class="BoxTitilePopuler">&nbsp;Popüler Anketler</h1>
                    <?php 
            $result = mysqli_query($db, "SELECT * FROM surveys ORDER BY survey_title DESC LIMIT 4 ");
            while($row = mysqli_fetch_assoc($result)){ 
            ?>
                    <a href='survey/allsurvey.php?action=survey&id=<?= $row['survey_id'] ?>'><?php echo $row['survey_title'] ?></a>

                    <?php } ?>
                </div>

                <div class="Box">
                    <h1 class="BoxTitileLast">&nbsp;Son Eklenen Anketler</h1>
                    <?php 
            $result = mysqli_query($db, "SELECT * FROM surveys ORDER BY survey_title DESC LIMIT 4 ");
            while($row = mysqli_fetch_assoc($result)){ 
            ?>
            
                    <a href='survey/allsurvey.php?action=survey&id=<?= $row['survey_id'] ?>'><?php echo $row['survey_title'] ?></a>

                    <?php } ?>
                </div>
            </div>
            <div class="surveyProperty">
                <div class="surveyPropertyTitle">
                    <h1>Özellikler</h1>
                </div>
                <div class="surveyProperty1">
                    <div class="surveyPropertyImg1">
                        <img src="https://via.placeholder.com/200x200" alt="Img 1" />
                    </div>
                    <div class="surveyPropertyContent1">
                        <h1>Özellik1</h1><br>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into electronic
                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                            release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.</p>
                    </div>
                </div>
                <div class="surveyProperty2">
                    <div class="surveyPropertyImg2">
                        <img src="https://via.placeholder.com/200x200" alt="Img 2" />
                    </div>
                    <div class="surveyPropertyContent2">
                        <h1>Özellik2</h1><br>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type
                            specimen book. It has survived not only five centuries, but also the leap into electronic
                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                            release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.</p>
                    </div>
                </div>
            </div>
            <div class='HomepageSurveyComment'>
                <div class='SurveyComment'>
                    <div class="SignInTop">
                        <h1>Image1</h1><br></br>
                        <p>
                            <a href="a.js"></a><br><br>
                        </p>
                    </div>
                    <div class="SignInForm">
                        <p class="speech-bubble">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur erat
                            lacus, pharetra quis mollis eget, tempor sit amet justo. Praesent in sem lorem. Sed
                            convallis velit ut semper molestie. Cum sociis natoque penatibus et magnis
                            dis parturient montes, nascetur ridiculus mus. Nunc dignissim finibus ipsum et ultrices.</p>
                    </div>
                </div>
                <div class='SurveyComment'>
                    <div class="SignInTop">
                        <h1>Image2</h1><br></br>
                        <p>
                            <a href="a.js"></a><br><br>
                        </p>
                    </div>
                    <div class="SignInForm">
                        <p class="speech-bubble">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur erat
                            lacus, pharetra quis mollis eget, tempor sit amet justo. Praesent in sem lorem. Sed
                            convallis velit ut semper molestie. Cum sociis natoque penatibus et magnis
                            dis parturient montes, nascetur ridiculus mus. Nunc dignissim finibus ipsum et ultrices.</p>
                    </div>
                </div>
                <div class='SurveyComment'>
                    <div class="SignInTop">
                        <h1>Image3</h1><br></br>
                        <p>
                            <a href="a.js"></a><br><br>
                        </p>
                    </div>
                    <div class="SignInForm">
                        <p class="speech-bubble">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur erat
                            lacus, pharetra quis mollis eget, tempor sit amet justo. Praesent in sem lorem. Sed
                            convallis velit ut semper molestie. Cum sociis natoque penatibus et magnis
                            dis parturient montes, nascetur ridiculus mus. Nunc dignissim finibus ipsum et ultrices.</p>
                    </div>
                </div>
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
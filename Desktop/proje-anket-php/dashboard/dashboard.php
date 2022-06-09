<?php
include '../connection.php';

if (!isset($_SESSION['mysesi']) && !isset($_SESSION['mytype']) == 2)
{
    header("Location: ../users/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="style/dashboard.css" rel="stylesheet" type="text/css" media="all">

    <title>Admin Panel</title>
</head>

<body>

    <div class='DashboardContainer'>
        <div class='DashboardAside'>
            <input type='checkbox' id='AsideToggler'></input>
            <label for='AsideToggler'><i class="fa fa-sort-desc Desc"></i></label>
            <div class='DashboardAsideMenu'>
                <h2><i class="fa fa-dashboard"></i> &nbsp;Anket Dashboard</h2>
                <hr></hr>
                <ul class='AsideNavbarList'>
                    <li><a href="dashboard.php"><i class="fa fa-cubes"></i> &nbsp; Anasayfa</a></li>
                    <li><a href="adminlist.php"><i class="fa fa-cubes"></i> &nbsp; Admin Listesi</a></li>
                </ul><br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>

                <div class='DashboardAsideMenuButton'>
                    <a href='../users/logout.php'>Çıkış Yap <i class="fa fa-sign-out"></i></a>
                </div>
            </div>

        </div>
        <div class='DashboardMain'>
            <div class='DashboardNavbar'>
                
                <a href='a.js' class='DashboardNavbarLogo'>Hoşgeldin <h3><?php echo @$_SESSION['username']; ?></h3></a>
                <input type='checkbox' id='NavbarToggler'></input>
                <label for='NavbarToggler'><i class="fa fa-bars"></i></label>
                
            </div>
            <div class='DashboardInfo'>
                <div class='DashboardInfoBox'>
                    <i class="fa fa-user icon"></i>
                    <div class='DashboardInfoContent'>
                        <?php
                        $result = mysqli_query($db, "SELECT * FROM admin");
                        $row_cnt = mysqli_num_rows($result);
                        ?>
                        <p>Toplam</p>
                        <p><?php echo $row_cnt; ?></p>
                    </div>
                    <hr></hr>
                    <div class='DashboardInfoFooter'>
                        <p>Content</p>
                    </div>
                </div>
                <div class='DashboardInfoBox'>
                    <i class="fa fa-user icon"></i>
                    <div class='DashboardInfoContent'>
                        <?php
                        $result = mysqli_query($db, "SELECT * FROM admin WHERE admin_type='1'");
                        $row_cnt = mysqli_num_rows($result);
                        ?>
                        <p>Admin</p>
                        <p><?php echo $row_cnt; ?></p>
                    </div>
                    <hr></hr>
                    <div class='DashboardInfoFooter'>
                        <p>Content</p>
                    </div>
                </div>
                <div class='DashboardInfoBox'>
                    <i class="fa fa-user icon"></i>
                    <div class='DashboardInfoContent'>
                        <?php
                        $result = mysqli_query($db, "SELECT * FROM admin WHERE admin_type='0'");
                        $row_cnt = mysqli_num_rows($result);
                        ?>
                        <p>Kullanıcı</p>
                        <p><?php echo $row_cnt; ?></p>
                    </div>
                    <hr></hr>
                    <div class='DashboardInfoFooter'>
                        <p>Content</p>
                    </div>
                </div>
            </div>
            
            <div class='DashboardMixContainer'>
                <div class='DashboardMixBoxContainer'>
                    <div class='DashboardMixBox'>
                        <h6>Anket Id</h6>
                    </div>
                    <div class='DashboardMixBox'>
                        <i class="fa fa-asterisk"></i> 1
                    </div>
                    <div class='DashboardMixBox'>
                        <i class="fa fa-asterisk"></i> 2
                    </div>
                    <div class='DashboardMixBox'>
                        <i class="fa fa-asterisk"></i> 3
                    </div>
                    <div class='DashboardMixBox'>
                        <i class="fa fa-asterisk"></i> 4
                    </div>
                    <div class='DashboardMixBox'>
                        <i class="fa fa-asterisk"></i> 5
                    </div>
                </div>
                <div class='DashboardMixBoxContainer'>
                    <div class='DashboardMixBox'>
                        <h6>Anket Başlığı</h6>
                    </div>
                    <div class='DashboardMixBox'>
                        <span>deneme anket 1</span>
                    </div>
                    <div class='DashboardMixBox'>
                    <span>deneme anket 2</span>
                    </div>
                    <div class='DashboardMixBox'>
                    <span>deneme anket 3</span>
                    </div>
                    <div class='DashboardMixBox'>
                    <span>deneme anket 4</span>
                    </div>
                    <div class='DashboardMixBox'>
                    <span>deneme anket 5</span>
                    </div>
                    
                </div>
                <div class='DashboardMixBoxContainer'>
                    <div class='DashboardMixBox'>
                        <h6>Anket Açıklaması</h6>
                    </div>
                    <div class='DashboardMixBox'>
                    <span>deneme anketi 1 açıklama</span>
                    </div>
                    <div class='DashboardMixBox'>
                    <span>deneme anketi 2 açıklama</span>
                    </div>
                    <div class='DashboardMixBox'>
                    <span>deneme anketi 3 açıklama</span>
                    </div>
                    <div class='DashboardMixBox'>
                    <span>deneme anketi 4 açıklama</span>
                    </div>
                    <div class='DashboardMixBox'>
                    <span>deneme anketi 5 açıklama</span>
                    </div>
                </div>
                <div class='DashboardMixBoxContainer'>
                    <div class='DashboardMixBox'>
                        <h6>Anket Oluşturulma Tarihi</h6>
                    </div>
                    <div class='DashboardMixBox'>
                        27 - 05 - 2022
                    </div>
                    <div class='DashboardMixBox'>
                        27 - 05 - 2022
                    </div>
                    <div class='DashboardMixBox'>
                    27 - 05 - 2022
                    </div>
                    <div class='DashboardMixBox'>
                    27 - 05 - 2022
                    </div>
                    <div class='DashboardMixBox'>
                    27 - 05 - 2022
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

</body>

</html>
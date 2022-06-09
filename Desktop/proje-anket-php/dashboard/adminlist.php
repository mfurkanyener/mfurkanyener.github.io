<?php
include '../connection.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="style/adminlist.css" rel="stylesheet" type="text/css" media="all">

    <title>Admin Listesi</title>
</head>

<body>

    <div class='DashboardContainer'>
        <div class='BaslikContainer'>
            <div class='Baslik'>
                <h1><a href="dashboard.php">Super Admin Paneli</a></h1>
            </div>
            <div class='Button'>
                <div class='DashboardAsideMenuButton'>
                    <a href='../users/logout.php'>Çıkış Yap</a>
                </div>
            </div>
        </div>
        <div class='AdminRequest'>
            <h2>Onay Bekleyen Admin İstekleri</h2>
            <hr>
            </hr>
            <div class="DataTitle">
                <div class="ColumData">İsim</div>
                <div class="ColumData">Soyisim</div>
                <div class="ColumData">Kullanıcı Adı</div>
                <div class="ColumData">E-Mail</div>
                <div class="ColumData">Oluşturma Tarihi</div>
                <div class="ColumData">Aksiyon</div>
            </div>
            <?php 
            $result = mysqli_query($db, "SELECT * FROM admin WHERE admin_type='0'");
            while($row = mysqli_fetch_assoc($result)){ 
            ?>
            <div class="TableData">
                <div class="ColumData"><?php echo $row['name'] ?></div>
                <div class="ColumData"><?php echo $row['surname'] ?></div>
                <div class="ColumData"><?php echo $row['username'] ?></div>
                <div class="ColumData"><?php echo $row['email'] ?></div>
                <div class="ColumData"><?php echo $row['create_date'] ?></div>
                <div class="ColumData">
                    <div class="actionbutton" style="background:red;">
                        <div class="actionupdate" ><a
                                href='adminupdate.php?action=add&id=<?= $row['admin_id'] ?>' style="border: solid 1px red">Add</a></div>
                        <div class="actiondelete"><a
                                href='admindelete.php?action=add&id=<?= $row['admin_id'] ?>' style="border: solid 1px red">Delete</a></div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class='AdminRequest'>
            <h2>Admin Listesi</h2>
            <hr>
            </hr>
            <div class="DataTitle">
                <div class="ColumData">İsim</div>
                <div class="ColumData">Soyisim</div>
                <div class="ColumData">Kullanıcı Adı</div>
                <div class="ColumData">E-Mail</div>
                <div class="ColumData">Oluşturma Tarihi</div>
                <div class="ColumData">Aksiyon</div>
            </div>
            <?php 
            $result = mysqli_query($db, "SELECT * FROM admin WHERE admin_type='1'");
            while($row = mysqli_fetch_assoc($result)){ 
            ?>
            <div class="TableData">
                <div class="ColumData"><?php echo $row['name'] ?></div>
                <div class="ColumData"><?php echo $row['surname'] ?></div>
                <div class="ColumData"><?php echo $row['username'] ?></div>
                <div class="ColumData"><?php echo $row['email'] ?></div>
                <div class="ColumData"><?php echo $row['create_date'] ?></div>
                <div class="ColumData"> - </div>
            </div>
            <?php } ?>
        </div>
    </div>
    </div>
</body>

</html>
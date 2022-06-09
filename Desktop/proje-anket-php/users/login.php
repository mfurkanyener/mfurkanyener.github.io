<?php
include '../connection.php';
if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $select = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($db, $select);
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0){
        $user = $row['username'];
        $pass = $row['password'];
        $type = $row['admin_type'];
        $adminid = $row['admin_id'];
        if($user == $username && $pass == $password){
            if($type == 2){
                $_SESSION['mysesi'] = $user;
                $_SESSION['admintype'] = $type;
                $_SESSION['adminid'] = $adminid;
                header('Location:../dashboard/dashboard.php');
            }else if($type == 1){
                $_SESSION['mysesi']=$user;
                $_SESSION['admintype']=$type;
                $_SESSION['adminid'] = $adminid;
                header('Location:../home.php');
            }else if($type == 0){
                $_SESSION['mysesi']=$user;
                $_SESSION['admintype']=$type;
                header('Location:../home.php');
            }else{
                echo "Kullanıcı Kayıtlı Değil !";
            }
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

    <link href="../style/login.css" rel="stylesheet" type="text/css" media="all">

    <title>Giriş Yap</title>
</head>

<body>

    <div class="SignInContainer">
        <div class="SignInBody">
            <div class="SignInTop">
                <h1>Giriş Yap</h1><br></br>
                <p><a href="../index.php"><i class="fa fa-github"></i></a></p>
            </div>
            <form class="SignInForm" method="POST">
                <input type="text" name="username" placeholder="Kullanıcı Adı"></input>
                <input type="password" name="password" placeholder='Şifre'></input>

                <div class="SignInSubmit">
                    <input type="submit" name="submit" value="Giriş Yap"></input>
                </div>
                <p>Hesabınız yok mu ? <a href="register.php">Kayıt Ol</a></p><br></br>
            </form>
        </div>
    </div>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="../style/register.css" rel="stylesheet" type="text/css" media="all">

    <title>Kayıt Ol</title>
</head>

<body>

    <div class="SignUpContainer">
        <div class="SignUpBody">
            <div class="SignUpTop">
                <h1>Kayıt Ol</h1><br></br>
                <p><a href="../index.php"><i class="fa fa-github"></i></a></p>
            </div>
            <form class="SignUpForm" method="POST">
                <input type="text" name="username" placeholder="Kullanıcı Adı"></input>
                <input type="text" name="name" placeholder="İsim"></input>
                <input type="text" name="surname" placeholder="Soyisim"></input>
                <input type="email" name="email" placeholder='Email'></input>
                <input type="password" name="password" placeholder='Şifre'></input>
                <input type="password" name="passwordConfirm" placeholder='Şifre (tekrar)'></input>

                <div class="SignUpSubmit">
                    <input type="submit" name="submit" value="Kayıt Ol"></input>
                </div>
                <p>Hesabınız var mı? <a href="login.php">Giriş Yap</a></p><br></br>
            </form>
        </div>
    </div>

</body>

</html>
<?php
      include '../connection.php';
if(isset($_POST['submit'])){
$username = $_POST['username'];
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$passwordConfirm = md5($_POST['passwordConfirm']);
if ((empty($username)) or (empty($email)) or (empty($password)) or (empty($passwordConfirm))){
    echo '<script>alert("Boş Alanaları Doldurunuz !")</script>';
}else if ($password != $passwordConfirm){
    echo '<script>alert("Şifreler Uyuşmuyor !")</script>';
}else{
    $query=mysqli_query($db, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
  $num_rows=mysqli_num_rows($query);
  $row=mysqli_fetch_array($query);
  if ($num_rows > 0){
    echo '<script>alert("Böyle Bir Kullanıcı Bulunmakta !")</script>';
  }else{
    $query = "INSERT INTO admin (username, name, surname, email, password) VALUES ('".$username."','".$name."','".$surname."','".$email."','".$password."')";
    mysqli_query($db, $query)or die ('Error in updating Database');
    if ($query){
        echo '<script>alert("Başarılı")</script>';
    }else{
        echo '<script>alert("Kayıt Yapılamadı...")</script>';
    }
  }
}
}
?>
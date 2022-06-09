<?php
include '../connection.php';

if(!isset($_SESSION['superadmin'])){
    header("Location: ../users/login.php");
}

$sql = "";
$action = mysqli_real_escape_string($db, $_GET['action']);
$id = mysqli_real_escape_string($db, $_GET['id']);
if($action == "add") {
    $sql = "UPDATE admin SET admin_type='1' WHERE admin_id='".$id."'";
} else {
    echo "HATA";
}

if (mysqli_query($db, $sql)) {
    echo "Record updated successfully";
    header("Location: adminlist.php");
} else {
    echo "Error updating record: " . mysqli_error($db);
    header("Location: adminlist.php");
}
?>
<?php
include '../connection.php';



$sql = "";
$action = mysqli_real_escape_string($db, $_GET['action']);
$id = mysqli_real_escape_string($db, $_GET['id']);
if($action == "add") {
    $sql = "DELETE FROM admin WHERE admin_id='".$id."'";
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
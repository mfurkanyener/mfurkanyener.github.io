<?php
session_start();


$db = mysqli_connect('localhost', 'root', '') or
        die ('Bağlanılamadı. Bağlantı parametrelerinizi kontrol edin.');
        mysqli_select_db($db, 'survey_database' ) or die(mysqli_error($db));

?>
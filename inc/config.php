<?php
define('SITE', true);
// Site Root
define('SITE_ROOT', 'C:\\XAMPP\\htdocs\\dentist_project\\' );

$db_server = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_database = 'dentcontact_db';
$conn = mysqli_connect($db_server,$db_user,$db_pass,$db_database) or die('connection failed');


if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number =  $_POST['number'];
    $date =  $_POST['date'];
 
    $insert = mysqli_query($conn, " insert into `apointments`(name, email, number, date)
    VALUES('$name','$email','$number','$date')") or die('query failed');
 
    if ($insert) {
       $message[] = 'успешно запитване';
    } else {
       $message[] = 'неуспешно запитване';
    }
 }
 ?>
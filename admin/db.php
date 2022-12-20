<?php
define('SITE', true);
// Site Root
define('ADMIN_ROOT', 'C:\\XAMPP\\htdocs\\dentist_project\\admin\\' );

$db_server = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_database = 'dentcontact_db';
$conn = mysqli_connect($db_server,$db_user,$db_pass,$db_database) or die('connection failed');

?>
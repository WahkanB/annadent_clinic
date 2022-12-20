<?php
define('ADMIN', true);
session_start();
if (!isset($_SESSION['name']['loged']) or $_SESSION['name']['loged'] !== true) {
  header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="bg">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>eAnnaDent</title>
</head>

<body>
  <header class="header fixed-top">
    <div class="container">
      <div class="top-row ">
        <a href="#home" class="logo">admin Anna<span>Dent</span></a>

        <nav class="nav">

          <a href="http://localhost/dentist_project/admin/apointments.php">Запитвания</a>
          <a href="http://localhost/dentist_project/admin/servicesadmin.php">Услуги</a>
          <a href="http://localhost/dentist_project/admin/reviewsadmin.php">Отзиви</a>
          <a href="logout.php">Изход!</a>
        </nav>
      </div>
    </div>
  </header>


  

  <div class="box">
    <div class="letters">AnnaDent</div>
    <div class="logoanime">
    <h1 style="font-size: 1.5rem;">Добре дошъл, <?= $_SESSION['name']['username'] ?> !</h1>
  </div>

  </div>
</body>
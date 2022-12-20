<?php
include 'db.php';


if (isset($_POST['sumbit'])) {
  $idsrv = $_POST['id'];
  $titlesrv = $_POST['title'];
  $imagesrv = $_POST['image'];


  $sql = "INSERT INTO `services` (`id`, `title`, `image`)
  VALUES ('$idsrv' , '$titlesrv' , '$imagesrv')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "Успешно добавяне";
  } else {
    die('connection failed');
  }
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
  <header class="header ">
    <div class="container">
      <div class="top-row ">
        <a href="index.php" class="logo" style="font-size: 2.5rem;">add services <span style="font-size:3.5rem;"> AnnaDent</span></a>
        <button onclick="window.history.back()" class="btn btn-secondary" style="font-size:1.5rem;" >Назад</button>
      </div>
    </div>
  </header>

  <form method="POST">
  <h1 class="text-center">УСЛУГИ</h1>
    <div class="container my-3" style="font-size: 2.5rem;">
      <div class="mb-3">
        <label>въведете текст</label>
        <input type="text" class="form-control " placeholder="текст" name="title" autocomplete="off">

      </div>

      <div class="mb-3">
        <label>снимка</label>
        <input type="text" class="form-control " placeholder="снимка" name="image" autocomplete="off">

      </div>


      <button type="submit" style="font-size: 2rem;" class="btn btn-primary" name="submit">Добави</button>
    </div>
  </form>
</body>

</html>
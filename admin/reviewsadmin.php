<?php
include 'db.php';



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
        <a href="index.php" class="logo" style="font-size: 2.5rem;">Login form <span style="font-size:3.5rem;"> AnnaDent</span></a>
        <button onclick="window.history.back()" class="btn btn-secondary" style="font-size:1.5rem;" >Назад</button>
      </div>
    </div>
  </header>

  <div class="data-table my-3">
    <h1 class="text-center">ОТЗИВИ</h1>
   <button class="btn btn-primary my-5" style="font-size: 1.7rem;"> <a href="addreview.php" class="text-light"> Добави отзив</a></button>


    <table class="table table-sm">
      <thead>
        <tr style="font-size:1.5rem;">
          <th scope="col">#</th>
          <th scope="col">Автор</th>
          <th scope="col">Снимка</th>
          <th scope="col">Текст</th>

        </tr>
      </thead>
      <tbody style="font-size: 1.3rem;">
        <?php
        $sql = "Select * from `reviews`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          $idnumber = $row['review_id'];
          $autor = $row['review_autor'];
          $image = $row['review_img'];
          $text = $row['review_text'];

          echo '<tr>
    <th scope="row">' . $idnumber . '</th>
    <td>' . $autor . '</td>
    <td>' . $image . '</td>
    <td>' . $text . '</td>
    
    <td>
   
    <button class="btn btn-danger" style="font-size: 1.3rem;" ><a href="deletereview.php?
    deleteidnumber=' . $idnumber . '" class="text-light">Изтриване</a></button>
</td>
  </tr>';
        }
        ?>


      </tbody>
    </table>
  </div>


</body>

</html>
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

  <div class="datatable ">
    <table class="table table-sm">
      <thead>
        <tr style="font-size:1.5rem;">
          <th scope="col">#</th>
          <th scope="col">Име</th>
          <th scope="col">Имейл</th>
          <th scope="col">Номер</th>
          <th scope="col">Дата на запитване</th>

        </tr>
      </thead>
      <tbody style="font-size: 1.3rem;">
        <?php
        $sql = "Select * from `apointments`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          $id = $row['id'];
          $name = $row['name'];
          $email = $row['email'];
          $number = $row['number'];
          $date = $row['date'];
          $comment = $row['comment'];
          echo '<tr>
    <th scope="row">' . $id . '</th>
    <td>' . $name . '</td>
    <td>' . $email . '</td>
    <td>' . $number . '</td>
    <td>' . $date . '</td>
    <td>' . $comment . '</td>
    <td>
    
    <button class="btn btn-danger" style="font-size:1.3rem;" ><a href="delete.php?
    deleteid=' . $id . '" class="text-light">Изтриване</a></button>
</td>
  </tr>';
        }
        ?>


      </tbody>
    </table>
  </div>


</body>

</html>
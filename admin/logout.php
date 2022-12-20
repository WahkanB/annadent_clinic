<?php
session_start();
if(isset($_SESSION['name']['loged'])){
    unset($_SESSION['name']);

    //header('Location:login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
    <title>Изход</title>
</head>
<body>
    
<header class="header " style="display: flex; ">
        <div class="container" >
            <div class="top-row ">
                <a href="#home" class="logo"><span>Благодаря!</span> </a>
             <h2>Вие излязохте успешно!</h2>
            </div>
        </div>
   


        <button class="btn btn-primary"><a href="login.php" style="font-size:2rem ; color:white;">Вход!</a></button>
    </header>
</body>
</html>
<?php }else{
     header('Location:login.php');
}
?>
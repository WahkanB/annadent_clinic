<?php 
if (!defined('SITE'))
    exit('Direct access not allowed!');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <header class="header ">
        <div class="container">
            <div class="top-row ">
                <a href="#home" class="logo">Login form Anna<span>Dent</span></a>

            </div>
        </div>
    </header>

    <?php if (isset($errors)) : ?>
        <div class="alert alert-danger">
            <strong>Error!</strong> <?= implode('<br>', $errors) ?>
        </div>
    <?php endif ?>
    <!-- success -->
    <?php if (isset($success)) : ?>
        <div class="alert alert-success">
            <b>Success!</b> <?= $success ?>
        </div>
    <?php endif ?>


    
    <div class="row">
        <form action="login.php" method="post">
            <input type="hidden" name="csrf-token" value='<?= $_SESSION['csrf-token'] ?>'>
            <div class="col-md-3 offset-4 ">
                <div class="form-group">
                    <label for="user" class="form-label">Потребител:<span style="color:red">*</span></label>
                    <input type="text" name="name" class="form-control" id="name" required value="<?= (isset($name)) ? $name : '' ?>">
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Парола:<span style="color:red">*</span></label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>

                <button type="submit" class="btn btn-success btn-sm" name="submit" value="login">Вход</button>
            </div>

        </form>
    </div>
    </div>
   

</body>

</html>
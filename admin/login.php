
 <?php
// Session start
session_start();
// define SITE
define('SITE',true);


if(isset($_SESSION['name']['loged']) AND $_SESSION['name']['loged']){
    header('Location:index.php');
}

// if POST
if(isset($_POST['submit'])){
    // check post data
    if(strlen(trim($_POST['name']))>0){
        $name = trim($_POST['name']);
    }else{
        $errors[] = "Полето User трябва да съдържа поне една буква.";
    }

    if(strlen($_POST['password'])>0){
        $password = $_POST['password'];
    }else{
        $errors[] = "Полето Password трябва да съдържа поне един символ.";
    }

    // check user
    if(!isset($errors)){
        //connect to DB ($db)
        require "db.php";

        //escape data
        $name = mysqli_real_escape_string($conn,$name);
        //$password = mysqli_real_escape_string($db,$password);
        $password = md5($password);

        //get data
        $sql = "SELECT * FROM users WHERE active = 1 AND username = '$name' AND password = '$password'";
        // check POST vs DB
        $result = mysqli_query($conn,$sql);
        if($result AND mysqli_num_rows($result)==1){
            //we have valid user
            // write to Session
            $name = mysqli_fetch_all($result,MYSQLI_ASSOC);
            $_SESSION['name']['loged'] = true;
            $_SESSION['name']['username'] = $name[0]['username'];
          
            
            // redirct to index.php
            header('Location:index.php');

        }else{
            // no valid user
            $errors[] = "Невалидни данни за вход.";
        }

        
    }        
}
// load view
include 'view/loginview.php';


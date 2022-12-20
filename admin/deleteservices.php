<?php
require 'db.php';

if(isset($_GET['deleteidsrv'])){
    $idsrv=$_GET['deleteidsrv'];

    $sql ="DELETE FROM `services` WHERE `services`.`id` = $idsrv";
    $result = mysqli_query($conn, $sql);
    if($result){
        //echo "успешно изтриване";
        header('location:servicesadmin.php');
    }else{
        die('грешка при изтриването');
    }
}
?>
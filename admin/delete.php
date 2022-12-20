<?php
require 'db.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql ="DELETE FROM `apointments` WHERE `apointments`.`id` = $id";
    $result = mysqli_query($conn,$sql);
    if($result){
        //echo "успешно изтриване";
        header('location:apointments.php');
    }else{
        die('грешка при изтриването');
    }
}


?>
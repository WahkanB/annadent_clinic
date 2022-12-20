<?php
require 'db.php';

if(isset($_GET['deleteidnumber'])){
    $idnumber=$_GET['deleteidnumber'];

    $sql ="DELETE FROM `reviews` WHERE `reviews`.`review_id` = $idnumber";
    $result = mysqli_query($conn, $sql);
    if($result){
        //echo "успешно изтриване";
        header('location:reviewsadmin.php');
    }else{
        die('грешка при изтриването');
    }
}
?>
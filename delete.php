<?php
    include_once('./config.php');
    $id2=$_GET['pro_id'];
    $sql="DELETE FROM createtable WHERE `createtable`.`id` = '$id2'";
    $result=mysqli_query($conn,$sql);

    if(!$result){
        die('erorr'.($conn));
    }
    else{

    }
    include_once('formdata.php');
?>
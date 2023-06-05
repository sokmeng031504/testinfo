<?php

include_once('./config.php');
$id1=isset($_REQUEST['pro_id'])? $_REQUEST['pro_id']:'';


// $folder="../images/";
// $name1=isset($_POST['txtname'])?$_POST['txtname']:'';
// $img1=isset($_FILES['files']['name'])? $_FILES['files']['name']:'';
$fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
 
include_once('./config.php');
// move_uploaded_file($_FILES['files']['tmp_name'],$folder.$img1);
$sql="UPDATE `createtable` SET `createtable`.`fullname`= $fullname ,`gender`=$gender,`email`=$email,`phone`= $phone WHERE `id`='$id1'";
// $sql="UPDATE `createtable` SET `fullname`= 'sokmengSQL'  WHERE `id`= 10";
// sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

$retval=mysqli_query($conn,$sql);
if(!$retval){
}
echo"upated";
// include_once('selete.php');
?>
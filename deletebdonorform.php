<?php
include ("connection.php");
?>

<?php

if(isset($_GET['id'])){
$id=$_GET['id'];


$qry="delete from blood_donor where id=$id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"DELETED";
    header('Location:deletebdonor.php');
}else{
    echo"ERROR!!";
}
}
?>
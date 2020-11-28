<?php
include ("connection.php");
?>

<?php

if(isset($_GET['id'])){
$id=$_GET['id'];


$qry="delete from organ_patient where id=$id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"DELETED";
    header('Location:deleteopatient.php');
}else{
    echo"ERROR!!";
}
}
?>
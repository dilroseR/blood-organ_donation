<?php

$server='localhost';
$username='root';
$password='';
$database='savelife';
$conn=mysqli_connect($server,$username,$password,$database);

 if($conn)   {
        echo 'Connection ok!';
 }

?>
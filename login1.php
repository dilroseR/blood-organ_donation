<?php
include ("connection.php");
?>

<html><head><title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
<?php

// get values passed from login.php
// LOGIN SUCCESS!! Welcome".$row['uname']; 

$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);
//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password)     WHERE uname='$username' AND pword='$password';

$conn=mysqli_connect("localhost","root","","savelife");
//mysql_select_db("savelife");

$query=( "SELECT uname, pword FROM users where id=1")
               or die("Failed to query db");
  $result=mysqli_query($conn,$query);
               $row = mysqli_fetch_array($result);
  if ($row['uname'] == $username &&  $row['pword']== $password)
  {  
    header("Location:admin.php"); 
  } 

  else{
    echo '<script>alert("Incorrect username or password!")</script>'; 
    //header("Location:login.php"); 
   
}
    
   
  

?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>   

</body>
</html>
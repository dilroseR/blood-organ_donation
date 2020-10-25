<?php
// get values passed from login.php
$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);
//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);

$conn=mysqli_connect("localhost","root","","savelife");
//mysql_select_db("savelife");

$query=( "SELECT uname, pword FROM USERS WHERE uname='$username' AND pword='$password' ")
               or die("Failed to query db");
  $result=mysqli_query($conn,$query);
               $row = mysqli_fetch_array($result);
  if ($row['uname'] == $username && $row['pword'] == $password)
  { echo "LOGIN SUCCESS!! Welcome".$row['uname'];}
  else
  {echo "FAILED...TRY AGAIN!!!!";}     

?>
<html>
<head></head>
<body>
    <p> Hiiiiiiiiiiiiiiiii uuuu </p>
</body>
</html>
1 ,testuser ,testpass
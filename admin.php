<?php
include ("connection.php");
?>

<?php
/*
// get values passed from login.php
// LOGIN SUCCESS!! Welcome".$row['uname']; 

$username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);
//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);

$conn=mysqli_connect("localhost","root","","savelife");
//mysql_select_db("savelife");

$query=( "SELECT uname, pword FROM users WHERE uname='$username' AND pword='$password' ")
               or die("Failed to query db");
  $result=mysqli_query($conn,$query);
               $row = mysqli_fetch_array($result);
 # if ($row['uname'] == $username && $row['pword'] == $password)
 # {  header("Location:admin.php"); 
#}
  #else
  #{echo "FAILED...TRY AGAIN!!!!";}     
*/
?>

<?php
$sql = "SELECT * FROM bd";
$query = $conn->query($sql);
$total=$query->num_rows;

?>

<?php
$sql = "SELECT * FROM od";
$query = $conn->query($sql);
$t=$query->num_rows;

?>

<?php
$sql = "SELECT * FROM bp";
$query = $conn->query($sql);
$tot=$query->num_rows;

?>

<?php
$sql = "SELECT * FROM op";
$query = $conn->query($sql);
$t1=$query->num_rows;

?>



<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="css/admin.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>


</head>
<body>



<nav class="navbar navbar-light" style="background-color:#DB1F2A;">
  <p class="navbar-brand">SIMPLE BLOOD & ORGAN DONOR MANAGEMENT SYSTEM</p>
  <a href="admin.php" style="color:black;"><b><i>Hello admin!</i></b></a>
</nav>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <aside id="leftsidebar" class="sidebar">
  <div class="menu">
                <ul class="list">
                   
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                           
                            <span>Blood Donors</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="viewbdonor.php">View Donors</a>
                            </li>
                            <li>
                                <a href="editbdonor.php">Edit Donors</a>
                            </li>
                            <li>
                                <a href="deletebdonor.php">Remove Donors</a>
                            </li>
                           
                        </ul>
                    </li>
                    </ul>

                    <ul class="list">
                   
                   <li>
                       <a href="javascript:void(0);" class="menu-toggle">
                          
                           <span>Organ Donors</span>
                       </a>
                       <ul class="ml-menu">
                           <li>
                               <a href="viewodonor.php">View Donors</a>
                           </li>
                           <li>
                               <a href="editodonor.php">Edit Donors</a>
                           </li>
                           <li>
                               <a href="deleteodonor.php">Remove Donors</a>
                           </li>
                          
                       </ul>
                   </li>
                   </ul>

                   <ul class="list">
                   
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                           
                            <span>Patients in need of blood</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="viewbpatient.php">View Patients</a>
                            </li>
                            <li>
                                <a href="editbpatient.php">Edit Patients</a>
                            </li>
                            <li>
                                <a href="deletebpatient.php">Remove Patients</a>
                            </li>
                           
                        </ul>
                    </li>
                    </ul>

                    <ul class="list">
                   
                   <li>
                       <a href="javascript:void(0);" class="menu-toggle">
                          
                           <span>Patients in need of organs</span>
                       </a>
                       <ul class="ml-menu">
                           <li>
                               <a href="viewopatient.php">View Patients</a>
                           </li>
                           <li>
                               <a href="editopatient.php">Edit Patients</a>
                           </li>
                           <li>
                               <a href="deleteopatient.php">Remove Patients</a>
                           </li>
                          
                       </ul>
                   </li>
                   </ul>
            </div>
 
</div>


<span style="font-size:20px;cursor:pointer;font-family:georgia;" onclick="openNav()">&#9776; Navigation Menu</span>

<div  style="background-color:#BD6142; width:200px; height:100px; padding-top:8px; margin-top:30px;
position:relative; left:450px; ">
<h4 style="text-align:center; font-family:georgia;"> Blood Donors</h4>
<p style="text-align:center; font-family:georgia;"><b><?php echo $total; ?></b></p>
</div>

<div  style="background-color:#BD6142; width:200px; height:100px; padding-top:8px; margin-top:30px;
position:relative; left:450px;">
<h4 style="text-align:center; font-family:georgia;"> Organ Donors</h4>
<p style="text-align:center; font-family:georgia;"><b><?php echo $t; ?></b></p>
</div>

<div  style="background-color:#BD6142; width:200px; height:100px; padding-top:8px; margin-top:30px;
position:relative; left:750px; bottom:129px;">
<h4 style="text-align:center; font-family:georgia;"> Blood Patients</h4>
<p style="text-align:center; font-family:georgia;"><b><?php echo $tot; ?></b></p>
</div>

<div  style="background-color:#BD6142; width:200px; height:100px; padding-top:8px; margin-top:30px;
position:relative; left:750px; bottom:390px;">
<h4 style="text-align:center; font-family:georgia;"> Organ Patients</h4>
<p style="text-align:center; font-family:georgia;"><b><?php echo $t1; ?></b></p>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>   
<script>

</script>
</body>
</html>


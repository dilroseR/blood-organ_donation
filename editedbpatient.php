<?php
include ("connection.php");
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

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<?php
$fullname = $_POST["fullname"];   
$weight = $_POST["weight"];
$height = $_POST["height"]; 
$bloodgrp = $_POST["bloodgrp"];
$state = $_POST["state"];
$city = $_POST["city"];

$pno = $_POST["pno"];
$gender = $_POST["gender"];
$id=$_POST['id'];
//update query
$qry = "update blood_patient set fullname='$fullname', weight='$weight', height='$height',bloodgrp='$bloodgrp',state='$state',city='$city',pno='$pno', gender='$gender'  where id='$id'";
$result = mysqli_query($conn,$qry); //query executes
if(!$result){
    echo"ERROR". mysqli_error();
}else {
    echo"<h1>SUCCESSFULLY UPDATED<h1>";
    // header ("Location:editdonor.php");
}
?>
   

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>   
<script>

</script>
</body>
</html>
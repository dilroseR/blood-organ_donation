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
<br>
<br>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   


<div class="container">

<?php

$id=$_GET['id'];
$qry= "select * from blood_patient where id='$id'";
$result=mysqli_query($conn,$qry);
while($row=mysqli_fetch_array($result)){
    ?>
     
    
                                
        <form role="form" action = "editedbpatient.php" method = "post">
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Full Name</label>
              <input type="text" class="form-control" name="fullname" placeholder="Enter Name" value='<?php echo $row['fullname']; ?>' required>
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Weight</label>
                <input type="number" class="form-control" name="weight" placeholder="Weight" value='<?php echo $row['weight']; ?>' required>
              </div> 

              <div class="form-group">
                <label for="exampleInputPassword1">Height</label>
                <input type="number" class="form-control" name="height" placeholder="Height" value='<?php echo $row['height']; ?>' required>
              </div> 

              <div class="form-group">
                <label for="exampleInputPassword1">Blood Type</label>
                <input type="text" class="form-control" name="bloodgrp" placeholder="BloodType" value='<?php echo $row['bloodgrp']; ?>' required>
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">State</label>
                <input type="text" class="form-control" name="state" placeholder=" " value='<?php echo $row['state']; ?>' required>
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">City</label>
                <input type="text" class="form-control" name="city" placeholder=" " value='<?php echo $row['city']; ?>' required>
              </div>

              

              <div class="form-group">
                <label for="exampleInputPassword1">Contact</label>
                <input type="text" class="form-control" name="pno" placeholder=" Phone no." value='<?php echo $row['pno']; ?>' required>
              </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Gender</label>
              <input type="text" class="form-control" name="gender" placeholder="Gender" value='<?php echo $row['gender']; ?>' required>
            </div>

            </div>
          <!-- /.box-body -->
                            <!-- id hidden grna input type ma "hidden" -->
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" 

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <?php
}
?>
          </div>
          </form>
        </form> 
           
</div>


<?php
/*
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fullname = $_POST["fullname"];   
    $weight = $_POST["weight"];
    $height = $_POST["height"]; 
    $bloodgrp = $_POST["bloodgrp"];
    $state = $_POST["state"];
    $town = $_POST["town"];
    $pincode = $_POST["pincode"];
    $pno = $_POST["pno"];
    $gender = $_POST["gender"];
    
    
    $id=$_POST['id'];
    //update query
    $qry = "update blood_donor set fullname='$fullname', weight='$weight', height='$height',bloodgrp='$bloodgrp',state='$state',town='$town',pincode='$pincode' ,pno='$pno', gender='$gender'  where id='$id'";
    $result = mysqli_query($conn,$qry); //query executes
    if(!$result){
        echo"ERROR". mysqli_error();
    }else {
        echo"<h2>SUCCESSFULLY UPDATED</h2>";
        // header ("Location:editdonor.php");
    }}
   */ 
?>

<script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>   



</script>
</body>
</html>
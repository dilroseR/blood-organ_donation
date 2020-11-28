<?php
include ("connection.php");
echo '<br>';
?>


<html><head><title>Donate Blood</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="css/registration.css">
</head>
<body>
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="main.html">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="blood_info.php">In need of blood?</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="organ_info.php">In need of organs?</a>
  </li>
  <li class="nav-item">
  <div class="dropdown">
  <a class="btn btn-danger dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Become a donor
  </a>

  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="b_donor.php">Blood Donor</a>
    <a class="dropdown-item" href="o_donor.php">Organ Donor</a>
  
  </div>
</div>
  </li> 
  </ul>

<!-- Jennifer content yaha daalde  (blood donation form)-->
 
        <link rel="icon" href="images/blood.png" type="image/icon type">
        
     <div class="container">
    <form action="" method="POST">
        <h1>Register Today!<br>You're Somebody's Type</h1>
        <hr> 
        <div class="row">
            <div class="col-25">
                <label for="name"><b>Full Name</b></label>
            </div>
            <div class="col-25">
                <input type="text" placeholder="Name" name="fullname" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="age"><b>Age</b></label>
            </div>
            <div class="col-75">
                <input type="text" placeholder="in years" name="age" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="weight"><b>Weight</b></label>
            </div>
            <div class="col-75">
                <input type="text" placeholder="in kgs" name="weight" required>
            </div>
        </div>
      <div class="row">
            <div class="col-25">
                <label for="height"><b>Height</b></label>
            </div>
            <div class="col-75">
                <input type="text" placeholder="in cms" name="height" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="bloodgroup"><b>Blood Group</b></label>
            </div>
            <div class="col-75">
                <input type="text" placeholder="A+" name="bloodgroup" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="repwd"><b>Address</b></label><br/>
            </div>
            <div class="col-25">
                <select id="state" name="state">
                    <option>Andhra Pradesh</option>
                    <option>Arunachal Pradesh</option>
                    <option>Assam</option>
                    <option>Bihar</option>
                    <option>Chhattisgarh</option>
                    <option>Goa</option>
                    <option>Haryana</option>
                    <option>Himachal Pradesh</option>
                    <option>Jammu and Kashmir</option>
                    <option>Jharkhand</option>
                    <option>Karnataka</option>
                    <option>Kerala</option>
                    <option>Madhya Pradesh</option>
                    <option>Maharashtra</option>
                    <option>Manipur</option>
                    <option>Meghalaya</option>
                    <option>Mizoram</option>
                    <option>Nagaland</option>
                    <option>Odisha</option>
                    <option>Punjab</option>
                    <option>Rajasthan</option>
                    <option>Sikkim</option>
                    <option>Tamil Nadu</option>
                    <option>Telangana</option>
                    <option>Tripura</option>
                    <option>Uttar Pradesh</option>
                    <option>Uttarakhand</option>
                    <option>West Bengal</option>
                </select>
            </div>
            <div class="col-25">
                <input type="text" placeholder="Town" name="town" required>
            </div>
            <div class="col-25">
                <input type="text" placeholder="Pincode" name="pincode" required>
            </div>
        </div>
      <div class="row">
            <div class="col-25">
                <label for="repwd"><b>Phone No.</b></label>
            </div>
            <div class="col-75">
                <input type="text" placeholder="" name="phone" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="gender"><b> Gender</b></label><br/>
            </div>
            <div class="col-75">
                <select id="genderSelect" name="genderSelect">
                    <option value="default" selected="selected"> I am...</option>
                    <option value="female"> Female</option>
                    <option value="male">Male</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>
      <div class="row">
            <div class="col-25">
                <label for="date"><b>Registration Date</b></label><br/>
            </div>
    
            <div class="col-25">
                <input type="text" placeholder="YYYY-MM-DD" name="date" required>
            </div>
        </div>
        <div class="row" align="right">
            <button type="submit" class="registerbtn"><strong>Register</strong></button>
            <button type="cancel" class="cancelbtn"><strong>Cancel</strong></button>
        </div>
    </form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fullname=$_POST['fullname'];
    $age=$_POST['age'];
    $weight=$_POST['weight'];
    $height=$_POST['height'];
    $bloodgrp=$_POST['bloodgroup'];
    $state=$_POST['state'];
    $town=$_POST['town'];
    $pincode=$_POST['pincode'];
    $phone=$_POST['phone'];
    $genderSelect=$_POST['genderSelect'];
    $date=$_POST['date'];
    
    
    // && $lname!="" && $age!="" && $weight!="" && $height="" && $bloodgrp!=""
    //&& $state!="" && $town!="" && $pincode!="" && $phone!="" && $genderSelect!="" 
    //&& $month!="" && $day!="" && $year!=""
    //echo 'hello';
    
    $query="INSERT INTO blood_donor(fullname,age,weight,height,bloodgrp,state,town,pincode,pno,gender,date) values('$fullname','$age','$weight','$height','$bloodgrp',
    '$state','$town','$pincode','$phone','$genderSelect','$date')";


    $data=mysqli_query($conn,$query);
    if($data)
        {
            echo '<script>alert("Successfully registered!")</script>';
        }
    
    else
        echo 'insert all data';
    //echo $fname .'<br>';
    //echo $lname .'<br>';
    //echo $age .'<br>';
    }

?>




    </div> 
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>   
</body>
</html>

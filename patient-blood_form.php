<html>
    <head><title>  </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/patient-blood_form.css">
</head>
    <body>
    <ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="main.php">Home</a>
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
   
<div class="container">
<h3>Fill up the form and we will contact you soon!</h3>
<br>
<form>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01" class="lists">First name</label>
      <input type="text" class="form-control" id="validationDefault01" name="fname" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02" class="lists">Last name</label>
      <input type="text" class="form-control" id="validationDefault02" name="lname" required>
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01" class="lists">Weight</label>
      <input type="text" class="form-control" id="validationDefault01" name="weight" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault02" class="lists">Height</label>
      <input type="text" class="form-control" id="validationDefault02" name="height" required>
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01" class="lists">Age</label>
      <input type="text" class="form-control" id="validationDefault01" name="age" required>
    </div>
</div>

<div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01" class="lists">Blood Group</label>
      <input type="text" class="form-control" id="validationDefault01" name="bloodgrp" required>
    </div>
</div>

<div class="form-group">
    <label for="exampleFormControlSelect1" class="lists">Gender</label>
    <select class="form-control" id="exampleFormControlSelect1" name="option">
      <option>Male</option>
      <option>Female</option>
      <option>Other</option>
    </select>
  </div>

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault01" class="lists">State</label>
      <input type="text" class="form-control" id="validationDefault01" name="state" required>
    </div>
    <div class="col-md-6 mb-3">
      <label for="validationDefault01" class="lists">City</label>
      <input type="text" class="form-control" id="validationDefault01" name="city" required>
    </div>

</div>
<button type="button" class="btn btn-danger">Submit</button>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>   
</div>
</body>
  </html>
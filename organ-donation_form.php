<html><head><title>Donate Organ</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link rel="stylesheet" href="css/registration.css">
</head>
<body>
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="main.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="blood_info.php">Why give blood</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="organ_info.php">Why give organ</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="donor.php">Become a donor</a>
  </li> 
  </ul>

<!-- Jennifer content yaha daalde  (organ donation form)-->
  
        <link rel="icon" href="images/organ.png" type="image/icon type">
       
    
    <div class="container">
    <form action="">
        <h1>Register Today!<br>Save A Life After Life</h1>
        <hr> 
        <div class="row">
            <div class="col-25">
                <label for="email"><b>Name</b></label>
            </div>
            <div class="col-25">
                <input type="text" placeholder="First" name="fname" required>
            </div>
            <div class="col-25">
                <input type="text" placeholder="Last" name="lname" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="username"><b>Choose your username</b></label>
            </div>
            <div class="col-75">
                <input type="text" name="domain"  required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="password"><b>Create a password</b></label>
            </div>
            <div class="col-75">
                <input type="text" placeholder="" name="password" required>
            </div>
        </div>
        <div class="row">
            <div class="col-25">
                <label for="repwd"><b>Confirm password</b></label>
            </div>
            <div class="col-75">
                <input type="text" placeholder="" name="repwd" required>
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
        <div class="row" align="right">
            <button type="submit" class="registerbtn"><strong>Register</strong></button>
            <button type="cancel" class="cancelbtn"><strong>Cancel</strong></button>
        </div>
    </form>
    </div> 
    <p> Already have an account? <a href="#">Sign In</a></p>
       
 


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>   
</body>
</html>

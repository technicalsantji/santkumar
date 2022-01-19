<?php 
$server="127.0.0.1:3308";
$username="root";
$password="";
$database="tech2";
$conn=mysqli_connect($server,$username,$password,$database);
if(!$conn)
{
  die("connection is not successfully");
}
else{
  ?>
  <Script>alert("connection success!!");</Script>
  <?php
}
if(isset($_POST['sumit']))
{
  $username=$_POST['username'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $city=$_POST['city'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];
  
  $userquery="SELECT * FROM `registration` WHERE username='$username'";
  $check1=mysqli_query($conn,$userquery);
  $result23=mysqli_num_rows($check1);
  if($result23>0)
  {
    ?> <script>alert('user already exist')</script><?php
  }
  else
{

  $query="INSERT INTO `registration` (`username`, `email`, `phone`, `city`, `password`, `cpassword`) VALUES ('$username', '$email', '$phone','$city','$password','$cpassword')";
  $result=mysqli_query($conn,$query);
  if($result)
  {
    ?> <script>alert('Your Registration Successfully')</script><?php
  }
  else{

    ?> <script>alert('Your Registration  Not Successfully')</script><?php
     }
}
}
?>



<doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>


  <title>Hello, world!</title>
  
</head>
<body>
  
<nav class="navbar navbar-expand-lg navbar-light bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">tech</a></li>
            <li><a class="dropdown-item" href="#">video</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
  <div class="container">
    <div class="card bg-info">
        <div class="card-body mx-auto text-center" >
            <h1 class="text-center">Create Account</h1>
            <p class="text-center">Create new Account for only new students</p>
            <a class="btn btn-danger" href="#" style="width:100%;"><i class="fab fa-google"></i>
            Login By Google</a>
            <a class="btn btn-success mt-2" href="#" style="width:100%;"><i class="fab fa-facebook"></i>Login by Facebook</a>
            <div class="tech mt-3"><span>----------OR----------</span></div>
            <!-- form part start  -->
            <form action="#" method="post" autocomplete="off">
            <!-- Username part -->
            <div class="col-auto mt-3">
  <label class="visually-hidden" for="username">Username</label>
  <div class="input-group">
    <div class="input-group-text"><i class="fas fa-user"></i></div>
    <input type="text" class="form-control" id="username" placeholder="Username" name="username" Required value="">

  </div>
  <span id="umessage"></span>
</div>
              <!-- Email part  -->
              <div class="col-auto mt-3">
  <label class="visually-hidden" for="email">Email Address</label>
  <div class="input-group">
    <div class="input-group-text"><i class="fas fa-envelope"></i></div>
    <input type="email" class="form-control" id="email" placeholder="Email address" name="email" Required value="">

  </div>
  <span id="emessage"></span>
</div>
              <!-- phone number -->
              <div class="col-auto mt-3">
  <label class="visually-hidden" for="phone">Phone number</label>
  <div class="input-group">
    <div class="input-group-text"><i class="fas fa-phone-square-alt"></i></div>
          
    <select name="phone" Required >
        <option value="+91">+91</option>
        <option value="+41">+41</option>
        <option value="+61">+61</option>
        <option value="+977">+977</option>
        <option value="+1-684">+1-684</option>
    </select>
    <input type="number" class="form-control" id="phone" placeholder="Phone Number" name="phone" Required value="">
            </div>
            <span id="phmessage"></span>
          </div>
          <!-- city part  -->
          <div class="col-auto mt-3">
  <label class="visually-hidden" for="city">City</label>
  <div class="input-group">
    <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
          
    <select class="form-select" name="city" Required value="" id=city>
    <option selected >choose City</option>
        <option value="patna">Patna</option>
        <option value="gurugram">Gurugram</option>
        <option value="Delhi" >Delhi</option>
        <option value="Delhi" >PUNHANA</option>
        
        <option value="chandigarh">Chandigarh</option>
    <select>

    </div>
    <span id="cimessage"></span>
  </div>
     <!-- password part  -->
  <div class="col-auto mt-3">
  <label class="visually-hidden" for="username">Password</label>
  <div class="input-group">
    <div class="input-group-text"><i class="fas fa-lock"></i></div>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password" Required value="">
  </div>
  <span id="pmessage"></span>
</div>

       <!-- Confirm password    -->
       <div class="col-auto mt-3">
  <label class="visually-hidden" for="cpassword"> Confirm Password</label>
  <div class="input-group">
    <div class="input-group-text"><i class="fas fa-lock"></i></div>
    <input type="password" class="form-control" id="cpassword" placeholder="Confirm password" name="cpassword" Required value="">
  </div>
  <span id="cmessage" style="color:red;"></span>
</div>
      <!-- button part -->
      <div class="col-auto mt-3">
      <div class="d-grid gap-2">
  <button class="btn btn-primary" type="submit" name="sumit" value="sumit" onclick="return check()">Create Account</button>
  <button class="btn btn-danger" type="reset" name="reset">Reset</button>
</div>
</div>
<!-- login part  -->
<p>Have an Account <a href="login.php" style="text-decoration:none; ">Login In</a></p>


</form>
            <!-- form part end  -->
        </div>

    </div>

  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
  
</body>
<script>
    function check()
    {
      var a=document.getElementById("password").value;
      var b=document.getElementById("cpassword").value;
     if(a==b)
     {
       document.getElementById("cmessage").innerHTML="password doest not match";
       return true;
     }
     else
     {
      document.getElementById("cmessage").innerHTML="password doest not match";
      return false;
     }
    }
  </script>
</html>
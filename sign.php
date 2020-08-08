<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign up</title>
  <meta charset="utf-8">
  <link rel="icon" href="photos/logo.png" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="design.css" rel="stylesheet">
  <style>
   input[type="file"] {
   height:45px
}
</style>
</head>
<body style="background:url(photos/homes.jpg)no-repeat;background-position:center;background-size:cover;">

<form action="includes/sign.inc.php" method="POST" enctype="multipart/form-data">

<div class="container" style="text-align:center;color:black">
            <div class="row">
                <div class="col-sm-12">
                <h1 class="heading">Create Account</h1>
                </div>
            </div>
        </div>
        
        <br>

        <div>
        <hr width="100%" style="border-bottom: solid 2px black;border-color:black;box-shadow:2px 2px 2px black">
        <p class="subheading">Personal Details</p>
        <hr width="100%" style="border-bottom: solid 2px black;border-color:black;box-shadow:2px 2px 2px black">
        </div>
<div>
<?php
    if(isset($_GET['error']))
        {
            if($_GET['error']=="emptyfeilds")
                {
                     echo '<p style="color:red;font-weight:bolder;text-align:center;font-size:20px;font-style:italic;">All Fields Are Empty!</p>';
                }
                else if($_GET['error']=="success"){

                    echo'<script>
    swal({
        title: "Are you sure?",
        text: "Once Submitted Data Cannot Be changed!",
        icon: "warning",
        button: true,
        dangerMode: false,
      })
        .then((willDelete) => {
        if (willDelete) {
          swal("Data Entered Successfully", {
            icon: "success",
          }).then(function (result) {
            if (true) {
              window.location = "login.php";
            }
          });
        }});
    </script>';

                }
        }
?>
        </div>
  <br>

  <div class="container" style="margin-right:25%;text-align:left;margin-left:1%;color:whitesmoke">

    <div class="row" >
        <div class="col-sm-2">
            <label>Name:</label>
        </div>
        <div class="col-sm-4">
           <input type="text" class="form-control" placeholder="Full Name" name="name"> 
        </div>
    </div>
<br>
    
    <div class="row">
        <div class="col-sm-2">
          <label>Email:</label>
        </div>
        <div class="col-sm-4">
           <input type="text" class="form-control" placeholder="Enter Valid Email-Id"  name="email"> 
           <?php
           if(isset($_GET['error']))
           {
            if($_GET['error']=="invalidemail")
            {
                echo '<p style="color:red;font-weight:bolder;text-align:center;font-size:18px;font-style:italic;">Invalid Mail! </p>';
            }
        }
        ?>
         </div>
    </div>

<br>

    <div class="row" >
        <div class="col-sm-2">
          <label>D.O.B:</label>
        </div>
        <div class="col-sm-4">
           <input type="date" class="form-control" placeholder="Enter date of birth"  name="date"> 
        </div>
    </div>
<br>

<div class="row" >
        <div class="col-sm-2">
          <label>Phone:</label>
        </div>
   
        <div class="col-sm-4">
           <input type="number" class="form-control" placeholder="Enter Phone No."  name="phone"> 
        </div>
    </div>
<br>

<div class="row">
        <div class="col-sm-2">
          <label>Nationality:</label>
        </div>
   
        <div class="col-sm-4">
           <input type="text" class="form-control" placeholder=" Nationality"  name="nation"> 
        </div>
    </div>
<br>

<div class="row" >
    <div class="col-sm-2">
          <label>Gender:</label>
    </div>
    <div class="col-sm-4">
        <select input type="text" class="form-control" name="gender">
            <option>Male</option>
            <option>Female</option>
        </select>
    </div>
</div>
<br>

<div class="row" >
        <div class="col-sm-2">
          <label>Image:</label>
        </div>
   
        <div class="col-sm-4">
           <input type="file" class="form-control" placeholder=" Image"  name="files" required> 
        </div>
    </div>
    </div>
<br>
<br>

<div>
        <hr width="100%" style="border-bottom: solid 2px black;border-color:black;box-shadow:2px 2px 2px black">
        <p class="subheading">Login Details</p>
        <hr width="100%" style="border-bottom: solid 2px black;border-color:black;box-shadow:2px 2px 2px black">
        </div>

<br>
<div class="container" style="margin-right:25%;text-align:left;margin-left:1%;color:whitesmoke">
<div class="row" >
        <div class="col-sm-2">
          <label>User Name:</label>
        </div>
   
        <div class="col-sm-4">
           <input type="text" class="form-control" placeholder="Enter User-Name"  name="user_name"> 
           <?php
           if(isset($_GET['error']))
           {
            if($_GET['error']=="invalidusername")
            {
                echo '<p style="color:red;font-weight:bolder;text-align:center;font-size:18px;font-style:italic;">Invalid User Name! </p>';
            }
           else if($_GET['error']=="usernametaken")
            {
                echo '<p style="color:red;font-weight:bolder;text-align:center;font-size:18px;font-style:italic;"> User Name Taken!</p>';
            }
        }

           ?>
        </div>
    </div>

    <br>

    <div class="row"  >
        <div class="col-sm-2">
          <label>Password:</label>
        </div>
   
        <div class="col-sm-4">
           <input type="password" class="form-control" placeholder="Enter Password"  name="password"> 
        </div>
    </div>
<br>

<div class="row">
        <div class="col-sm-2">
          <label>Re-Password:</label>
        </div>
   
        <div class="col-sm-4">
           <input type="password" class="form-control" placeholder="Enter Re-Password"  name="repass"> 
           <?php
           if(isset($_GET['error']))
           {
            if($_GET['error']=="paswordnotmatch")
            {
                echo '<p style="color:red;font-weight:bolder;text-align:center;font-size:18px;font-style:italic;">Password Not Match!</p>';
            }
        }
        ?>
        </div>
    </div>
</div>

<br>
<hr width="100%" style="border-bottom: solid 2px black;border-color:black;box-shadow:2px 2px 2px black">
<div class="container">
          <div class="row">
                <div class="col-sm-8" style="margin-left:30%;margin-bottom:30px">
                    <input type="submit" value="Register" class="btn btn-dark" name="submit" style="width:150px;height:40px;border-radius:20px;font-style:italic;color:white;font-weight:bold;margin-bottom:5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" value="Reset" class="btn btn-dark" name="reset" style="width:150px;height:40px;border-radius:20px;font-style:italic;color:white;font-weight:bold;">
                </div>
        </div>
</div>
<br>
<br>
</body>
</html>
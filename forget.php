<!DOCTYPE html>
<html lang="en">
<head>
  <title>Forgot Password</title>
  <meta charset="utf-8">
  <link rel="icon" href="photos/logo.png" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 
  <style>

   input[type="file"] {
   height:45px
}
.heading{
    color:black;
   margin-top:20px;
    text-align:center;
    font-size:30px;
    font-weight:bold;
    font-style:oblique;
    font-family:Helvetica Narrow, sans-serif;
   text-shadow:1px 1px black;
}
</style>
</head>
<body style="background:url(photos/homes.jpg)no-repeat;background-position:center;background-size:cover;height:650px">

<form action="includes/forgot.inc.php" method="POST" enctype="multipart/form-data">

<div class="container" style="margin-top:60px">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="heading">Change Password </h1>  <br> 
         <div style="text-align:center"><img src="photos/forgot.png" style="max-width:60px;border-radius:30px;background-color:white;"></div>
       </div>
    </div>
    <hr style="border-bottom:solid 2.5px black;width:320px;box-shadow:1px 3px 3px black">
    
<br>

<?php
            if(isset($_GET['error']))
            {
                if($_GET['error']=="emptyfields")
                {
                    echo '<p style="color:red;font-weight:bolder;font-size:20px;font-style:italic;text-align:center">All Fields Are Empty!</p>';
                }
                else if($_GET['error']=="passnotmatch")
                {
                    echo '<p style="color:red;font-weight:bolder;text-align:center;font-size:20px;font-style:italic"> Password Not Match!</p>';
                }
                else if($_GET['error']=="nouser")
                {
                    echo '<p style="color:red;font-weight:bolder;text-align:center;font-size:20px;font-style:italic">No User Name!</p>';
                }
            }
            ?>
      <br>
<div class="d-flex justify-content-center">
<div class="row">
<div class="col-sm-12">
<div style="text-align:center"><img src="photos/user.png" style="margin-bottom:5px"></div>
           <input type="text" class="form-control" placeholder=" Registered User Name" name="nam"> </div>
        </div>
    </div>
<br>

<div class="d-flex justify-content-center">
<div class="row">
<div class="col-sm-12">
<div style="text-align:center"><img src="photos/pass.png" style="margin-bottom:5px"></div>
           <input type="password" class="form-control" placeholder="Enter New Password " name="pass"> </div>
    </div>
</div>
    <br>

    <div class="d-flex justify-content-center">
<div class="row">
<div class="col-sm-12">

           <input type="password" class="form-control" placeholder="Re Enter Password " name="repass"> </div>
    </div>
</div>
    <br>
<br>
    <div class="row">
    <div class="col-sm-12">
     <div style="text-align:center">
        <input type="submit" value="Submit" class="btn btn-dark" name="yes" style="width:200px;height:40px;border-radius:20px;font-style:italic;color:white;font-weight:bold">
        </div>
       
     </div>
</div>
</div>
</form>
</body>

</html>
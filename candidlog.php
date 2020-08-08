<!DOCTYPE html>
<html lang="en">
<head>
  <title>Candidate Login</title>
  <meta charset="utf-8">
  <link rel="icon" href="photos/login.png" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
.heading{
    color:black;
   
    text-align:center;
    font-size:32px;
    font-weight:bold;
    font-style:oblique;
    font-family:Helvetica Narrow, sans-serif;
    
    text-shadow:1px 1px black;
}
label{
    font-size:20px;
    font-style:oblique;
    font-weight:bold;
    color:black;
   
}
::placeholder{
   
   font-size:15px;
   font-style:bold;
}

  </style>
  </head>
<body style="background:url(photos/homes.jpg)no-repeat;background-position:center;background-size:cover;">

<form action="includes/candidlogs.inc.php" method="POST">

<div class="container" style="margin-top:100px">
<div class="row">
        <div class="col-sm-12">
            <h1 class="heading">Candidate login </h1>   
         <div style="text-align:center"><img src="photos/logo1.png" style="max-width:60px;border-radius:30px;background-color:blue;"></div>
       </div>
    </div>
 <hr style="border-bottom:solid 2.5px black;width:400px;box-shadow:1px 3px 3px black">
            <?php
            if(isset($_GET['error']))
            {
                if($_GET['error']=="emptyfeilds")
                {
                    echo '<p style="color:red;font-weight:bolder;text-align:center;font-size:20px;font-style:italic;">All Fields Are Empty! </p>';
                }
                else if($_GET['error']=="usernameorpasswordiswrong")
                {
                    echo '<p style="color:red;font-weight:bolder;text-align:center;font-size:20px;font-style:italic;">Name Or Password Is Wrong ! </p>';
                }
            }
                ?>
        </div>
    </div>
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
           <input type="password" class="form-control" placeholder="Enter Password Given" name="pass"> </div>
    </div>
</div>
    <br>

    <div class="row">
    <div class="col-sm-12">
     <div style="text-align:center">
        <input type="submit" value="Login" class="btn btn-dark" name="yes" style="width:150px;height:40px;border-radius:20px;font-style:italic;color:white;font-weight:bold">
        </div>
       
     </div>
</div>
</div>
        </form>
  </body>
  </html>
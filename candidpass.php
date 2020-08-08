<!DOCTYPE html>
<html lang="en">
<head>
  <title>Candidate Entry</title>
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
<body style="background:url(photos/homes.jpg)no-repeat;background-position:center;background-size:cover;height:700px">

<form action="includes/candidlog.inc.php" method="POST">

<div class="container" style="margin-top:100px">
<div class="row">
        <div class="col-sm-12">
            <h1 class="heading">Candid Reg </h1>   
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
                else if($_GET['error']=="passwordfilled")
                {
                    echo '<p style="color:red;font-weight:bolder;text-align:center;font-size:20px;font-style:italic;">Already Registered! </p>';
                }
                else if($_GET['error']=="usernotfound")
                {
                    echo '<p style="color:red;font-weight:bolder;text-align:center;font-size:20px;font-style:italic;">No User! </p>';
                }
            }
            ?>
        </div>
    </div>
<br>

<div class="d-flex justify-content-center">
<div class="row">
<div class="col-sm-12">
<div style="text-align:center"><img src="photos/person.png" style="margin-bottom:5px"></div>
<input type="text" class="form-control" placeholder=" Registered User Name" name="name"> 
</div>
</div>
</div>
<br>

<div class="d-flex justify-content-center">
<div class="row">
<div class="col-sm-12">
<div style="text-align:center"><img src="photos/password.png" style="margin-bottom:5px"></div>
<input type="password" class="form-control" placeholder=" Password Generated" name="passw"> 
</div>
</div>
</div>
    <br>


   

    <div class="row">
        <div class="col-sm-12">
        <div style="text-align:center">
                <input type="submit" value="Submit" class="btn btn-dark" name="sub" style="width:150px;height:40px;border-radius:20px;font-style:italic;color:whitesmoke;font-weight:bold">
            </div>
        </div>
    </div>
    </form>
    <br>
    <hr style="border-bottom:solid 2.5px black;width:300px;box-shadow:1px 3px 3px black">
    <form action="candidpass.php" method="POST">
    <div class="row">
        <div class="col-sm-12">
        <div style="text-align:center">
                <input type="submit" value="Generate Password" class="btn btn-dark" name="subs" style="width:250px;height:40px;border-radius:20px;font-style:italic;color:whitesmoke;font-weight:bold"></div>
                <br>
             
                <?php
                if(isset($_POST['subs']))
                {
                    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                    $password = substr( str_shuffle( $chars ), 0, 8 );
                    echo'<p style="color:black;text-align:center;font-size:20px;hieght:40px;">'.$password.'</p>';
                  
                }
                ?>
            </div>
            
    </div>
</div>

  </body>
  </html>
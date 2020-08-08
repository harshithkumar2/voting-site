<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <link rel="icon" href="photos/login.png" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
      ::placeholder{
          color:black;
          font-weight:300px;
          font-size:18px;
      }
      label{
    font-size:15px;
    font-style:oblique;
    font-weight:bold;
    color:black;
  

}
.heading{
    color:black;
   margin-top:20px;
    text-align:center;
    font-size:32px;
    font-weight:bold;
    font-style:oblique;
    font-family:Helvetica Narrow, sans-serif;
   text-shadow:1px 1px black;
}
.names{
    background:transparent;
    outline:0;
    border:none;
    border-bottom:solid 2px black;
    width:250px;
    text-align:center;
    font-style:italic;
    font-size:22px;
    color:black;
    font-weight:bold;
  }
  .pass{
    background:transparent;
    outline:0;
    border:none;
    border-bottom:solid 2px black;
    width:250px;
    text-align:center;
    font-style:italic;
    font-size:20px;
    color:black;
    font-weight:bold;
}

      </style>
 </head>

<body style="background:url(photos/homes.jpg)no-repeat;background-position:center;background-size:cover;">

<form action="includes/log.inc.php" method="POST">
<div class="container" style="margin-top:100px">


<div class="row">
        <div class="col-sm-12">
            <h1 class="heading">User Login </h1>
         <div style="text-align:center"> <img src="photos/log.jpg" style="max-width:60px;border-radius:30px;background-color:blue;">
       </div>
        </div>
    </div>
  
    <hr style="border-bottom:solid 2.5px black;width:300px;box-shadow:1px 3px 3px black">
  <br>
            <?php
            if(isset($_GET['error']))
            {
                if($_GET['error']=="emptyfields")
                {
                    echo '<p style="color:red;font-weight:bolder;font-size:20px;font-style:italic;text-align:center">All Fields Are Empty!</p>';
                }
                else if($_GET['error']=="wrongpassword")
                {
                    echo '<p style="color:red;font-weight:bolder;text-align:center;font-size:20px;font-style:italic">Wrong Password!</p>';
                }
                else if($_GET['error']=="nousername")
                {
                    echo '<p style="color:red;font-weight:bolder;text-align:center;font-size:20px;font-style:italic">No User Name!</p>';
                }
            }
            ?>
      <br>
      
 
<div class="row">
    <div class="col-sm-12">
        <div style="text-align:center">
                <img src="photos/person.png">&nbsp;&nbsp;
                    <input type="text" class="names" placeholder="user Name" name="names">
         </div>
    </div>
</div>
<br>
<br>
   

<div class="row">
    <div class="col-sm-12">
        <div style="text-align:center">
            <img src="photos/password.png">&nbsp;&nbsp;
                <input type="password" class="pass" placeholder="password" name="passes"><br>
             
                    
        </div>
    </div>
</div>
<br>

<br>


<div class="row">
    <div class="col-sm-12">
     <div style="text-align:center">
        <input type="submit" value="Login" class="btn btn-dark" name="login" style="width:200px;height:40px;border-radius:20px;font-style:italic;color:white;font-weight:bold">
        </div>
       
     </div>
</div>
<br>
<div class="row" >
    <div class="col-sm-12">
    <div style="text-align:center">
     <a href="forget.php" style="font-style:italic;font-size:14px;color: black;color:black;font-weight:bold">Forgot your password ?</a>
     </div>
     </div>
        </div>
    </div>
</form>
</body>
<html>
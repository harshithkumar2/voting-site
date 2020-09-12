<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <link rel="icon" href="photos/home.png" type="image/x-icon" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"  crossorigin="anonymous"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
.carousel-inner{
        height: 500px;
       
        
    }

  
    </style>
  </head>
<body  style="background:url(photos/homs2.jpg)no-repeat;background-position:center;background-size:cover;height:630px">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
<a class="navbar-brand" href="#" style="font-weight:600px"><i class='fas fa-vote-yea'></i>&nbsp;Voter Poll</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <a href="#" class="nav-link"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home</a>
      </li>
      <li class="nav-item">
      <a href="#" class="nav-link"><i class="fa fa-info-circle"></i>&nbsp;About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminlog.php"><i class="fa fa-user"></i>&nbsp; Admin</a>
      </li>
      <li class="nav-item">
        <a href="candidlog.php" class="nav-link"><i class="fa fa-address-card" aria-hidden="true"></i>&nbsp;&nbsp;Candidate-form</a>
        </li>
      </ul>

                                       <!-- Image display code-->
<?php
  if(isset($_SESSION['id']))
  {
    require 'includes/data.inc.php';
    $user=$_SESSION['user'];
    $sql="SELECT * FROM detail WHERE user_name='$user'";
    $fet=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($fet))
    {
      $images=$row['image'];
    echo'<ul class="navbar-nav ">
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img src="./image/'.$images.'" style="height:38px;width:38px;border-radius:50%;">
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href="#"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;'.$_SESSION['user'].'</a>
    <a class="dropdown-item" href="#"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;'.$_SESSION['email'].'</a>
<div class="dropdown-divider"></div>
    <a class="dropdown-item" href="changepic.php"><i class="fa fa-images" aria-hidden="true"></i>&nbsp;Change Photo</a>
  
</div>
</li>
</ul>';
    }
}
 ?> 
                        <!--end-->

                        <!--sign up and in -->
                        &nbsp;
<?php
if(isset($_SESSION['id']))
{
 
 
}
else
{
    echo'
    <ul class="navbar-nav">
    <li class="nav-item">
    <a href="sign.php" class="nav-link"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Sign Up</a>
    </li>
    </ul>';
   
}
?>
                                                 <!--end-->

                                                 <!--login up and in -->
                                                

  <?php
if(isset($_SESSION['id']))
{
  echo'<ul class="navbar-nav">
    <li  class="nav-item" >
    <a href="includes/logout.inc.php"class="nav-link" ><button type="button" class="btn btn-danger" style="color:white;width:150px"><i class="fa fa-sign-out-alt"></i>&nbsp;&nbsp;Logout</button></a>
    </li>';
}
else
{
    echo'<ul class="navbar-nav">
    <li  class="nav-item" >
    <a href="login.php"class="nav-link"><i class="fa fa-sign-in-alt"></i>&nbsp;&nbsp;Login</a>
    </li>
    </ul>';
  
  
}
?>
                                                   <!--end-->
</div>
</nav>



<?php
if(isset($_SESSION['user']))
{
  require 'includes/data.inc.php';
    $user=$_SESSION['user'];
    $sql="SELECT * FROM detail WHERE user_name='$user'";
    $fet=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($fet);
    $row1=$row['status'];
    if($row1==0)
    {
 echo'
 <div class="col text-center">
 <a href="voting.php"><input type="button" class="btn btn-dangers" value="Click Here To Vote" 
 style="width:300px;height:70px;color:white;font-weight:bold;background-color:#2ECC71;margin-top:250px;box-shadow:  -1px 3px 10px 10px  black;"></a>
 </div>';
 
    }
    else{
      echo'
      <div class="col text-center">
      <a href=""><input type="button" class="btn btn-dangers " value=" Voted" 
      style="width:300px;height:70px;color:white;font-weight:bold;background-color:#CB4335;margin-top:250px;box-shadow:  -1px 3px 10px 10px  black;"></a>
      </div>
      ';
    }
 
}

else{
  echo'
  <div class="col text-center">
  <a href="sign.php"><input type="button" class="btn btn-dangesr" value="Get Started" 
  style="width:300px;height:70px;color:white;font-weight:bold;background-color:#2ECC71;margin-top:250px;box-shadow:  -1px 3px 10px 10px  black;"></a>
  </div>';
 
}
?>

</div>


</body>
</html>
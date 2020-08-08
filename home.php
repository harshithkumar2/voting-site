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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <style>
   .active{
      font-style:oblique;
      font-family:'Courier New', Courier, monospace;
      font-size:15px;
      font-weight: 530px;
      color:lightyellow;
      position:relative;
     }
  
  </style>
  
  </head>
<body  style="background:url(photos/homs2.jpg)no-repeat;background-position:center;background-size:cover;height:800px">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white;font-weight:600px;font-style:italic">
      <i class='fas fa-vote-yea'></i>&nbsp;Voter Poll</a>
    </div>
    <ul class="nav navbar-nav">
     <li class="active"><a href="#"><i class="glyphicon glyphicon-exclamation-sign"></i>&nbsp;About</a></li>
      <li class="active"><a href="#"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;Our Team</a></li>
      <li class="active"><a href="adminlog.php"><span class="glyphicon glyphicon-book"></span> Admin</a></li>
      </ul>
      <?php
    require 'includes/data.inc.php';
     $var="";
     if(isset($_SESSION['id']))
     {
     $data=$_SESSION['user'];
    $data1=$_SESSION['user'];
    $sql="SELECT * FROM candidate WHERE user_name='$data1'";
     $fet=mysqli_query($conn,$sql);
     while($row=mysqli_fetch_assoc($fet))
     {
    $var=1;
   }
    if($var==1)
    {
    echo' <ul class="nav navbar-nav">
    <li class="active"><a href="#" style="color:red"><i class="fa fa-close" aria-hidden="true"></i>&nbsp;Candidate-form</a></li>
    </ul>';
    }
    else
    {

        echo'<ul class="nav navbar-nav">
        <li class="active"><a href="candidlog.php" style="color:greenyellow"><i class="fa fa-check" aria-hidden="true"></i>&nbsp;Candidate-form</a></li>
        </ul>';
    }
    }
  ?>

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
    echo'<ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="./image/'.$images.'" style="height:25px;width:25px;border-radius:50%;"><span class="caret"></span></a>
    <ul class="dropdown-menu">
      <li><a href="#"><img src="./image/'.$images.'" style="height:40px;width:40px;border-radius:50%;">&nbsp;&nbsp;'.$_SESSION['user'].'</a></li>
      <li><a href="#"><p style="font-size:13px;">'.$_SESSION['email'].'</p></a></li>
      <li><a href="changepic.php"><p style="font-size:13px;">Change Photo</p></a></li>
     
    </ul>
  </li></ul>';
    }
}
 ?> 
    

    <?php
if(isset($_SESSION['id']))
{
  echo' 
  <ul class="nav navbar-nav navbar-right">
  <li class="active"><a href="includes/logout.inc.php" style="color:red"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
  <li class="active"><a href="" style="color:red"><i class="fa fa-close" aria-hidden="true"></i>&nbsp;Sign Up</a></li>
  </ul>';
}
else
{
    echo'<ul class="nav navbar-nav navbar-right">
    <li  class="active" ><a href="login.php" style="color:greenyellow"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a></li>
    <li class="active"><a href="sign.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li></ul>';
    echo'<script>alert("You Are Logged Out")</script>';
}
?>
</div>
</nav>
  
<div class="container" style="background:url(photos/homs1.jpg)no-repeat;height:400px;width:430px;background-position:center;background-size:cover;margin-top:100px;margin-right:1000px">
  <div class="row">
    <div class="col-sm-12">
        <h3 style="color:black;font-size:50px;font-style:italic;font-family:bold;font-weight:bold;text-shadow:1px 1px black">Electronic</h3>
             <h3 style="color:black;font-size:30px;font-style:italic;font-family:bold;font-weight:bold;text-shadow:1px 1px black">Voting</h3>
                <hr style="border-bottom:solid 2px black;width:350px;margin-left:-10px"> 
        </div>
    </div>
<div class="row">
    <div class="col-sm-6">
        <h4  style="color:black;font-style:italic;font-family:bold;font-weight:bold">It has survived not only five centuries,<br>but
           also the leap into electronic, <br>typesettingremaining essentially unchanged</h4>
    </div>
</div>
<br>
<div class="row">
<div class="col-sm-12">
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
 echo'<a href="voting.php"><input type="button" class="btn btn-danger " value="Click Here To Vote" style="width:250px;height:50px;border-radius:20px;
  font-style:italic;color:white;font-weight:bold;margin-bottom:50px"></a>';
    }
    else{
      echo'<input type="button" class="btn btn-danger disabled" value=" Voted" style="width:250px;height:50px;border-radius:20px;
  font-style:italic;color:white;font-weight:bold;margin-bottom:50px">';
    }
 
}

else{
  echo'<a href="sign.php"><input type="button" class="btn btn-danger" value="Get Started" style="width:250px;height:50px;border-radius:20px;
  font-style:italic;color:white;font-weight:bold;margin-bottom:50px"></a>';
 
}
?>

</div>


</body>
</html>
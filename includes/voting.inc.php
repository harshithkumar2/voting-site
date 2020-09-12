<?php
session_start();
?>
<?php
if(isset($_POST['vote1']))
{
    require "data.inc.php";
    $user=$_SESSION['user'];
    $sql3="UPDATE detail SET status=1 WHERE user_name='$user'";
    mysqli_query($conn,$sql3);
    $sql4="UPDATE detail SET status1=1 WHERE user_name='$user'";
    mysqli_query($conn,$sql4);
    header("location: ../home.php?error=succ");
    exit();
 
 
}
if(isset($_POST['vote2']))
{
    require "data.inc.php";
    $user=$_SESSION['user'];
   $sql3="UPDATE detail SET status=1 WHERE user_name='$user'";
   mysqli_query($conn,$sql3);
   $sql4="UPDATE detail SET status2=1 WHERE user_name='$user'";
   mysqli_query($conn,$sql4);
   header("location: ../home.php?error=succ");
   exit();

    
}
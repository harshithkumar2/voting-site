<?php
session_start();
?>
<?php
require "includes/data.inc.php";
$user=$_SESSION['user'];
$sql="SELECT * FROM detail WHERE user_name='$user'";
$run=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($run);
$img=$row['image'];
$sql1="DELETE image FROM detail WHERE user_name='$user'";
$run1=mysqli_query($conn,$sql1);
print_r($run1);



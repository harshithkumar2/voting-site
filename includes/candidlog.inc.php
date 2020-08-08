<?php
if(isset($_POST['sub']))
{
    require 'data.inc.php';
   $name=$_POST['name'];

   $pass=$_POST['passw'];
   
   if(empty($name) || empty($pass))
   {
       header("location: ../candidpass.php?error=emptyfeilds");
       exit();
   }
else{
    $sql="SELECT * FROM detail WHERE user_name='$name'";
    $run=mysqli_query($conn,$sql);
    $run1=mysqli_num_rows($run);
    if($run1==1)
   {
    $row=mysqli_fetch_assoc($run);
    if($row['candidpass']==NULL)
    {
  $sq="UPDATE detail SET candidpass='$pass' WHERE user_name='$name'";
  mysqli_query($conn,$sq);
  header("Location: ../admin.php?error=success");
  exit();
    }
   
   else
   {
    header("Location: ../candidpass.php?error=passwordfilled");
    exit();
}

}
else
{
 header("Location: ../candidpass.php?error=usernotfound");
 exit();
}
}
}
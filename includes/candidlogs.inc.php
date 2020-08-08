<?php
if(isset($_POST['yes']))
{
   require 'data.inc.php';
   $user=$_POST['nam'];
   $pass=$_POST['pass'];
   if(empty($user) || empty($pass))
   {
       header("location: ../candidlog.php?error=emptyfeilds");
       exit();
   }
   else{
       $sql="SELECT * FROM detail WHERE user_name='$user' AND candidpass='$pass'";
       $run=mysqli_query($conn,$sql);
       $run1=mysqli_num_rows($run);
       if($run1==1)
       {
         
       header("location: ../votereg.php?login=done");
       exit();
       }
       else{
        header("location: ../candidlog.php?error=usernameorpasswordiswrong");
        exit();
       }
   }
}
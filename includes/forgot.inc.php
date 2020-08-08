<?php
if(isset($_POST['yes']))
{
    require "data.inc.php";
    $user=$_POST['nam'];
    $pass=$_POST['pass'];
    $repass=$_POST['repass'];

    if(empty($user)||empty($pass)||empty($repass))
    {
        header("location: ../forget.php?error=emptyfields");
        exit();
    }
    else if($pass!=$repass)
    {
        header("location: ../forget.php?error=passnotmatch");
        exit();
    }
    else{
        $sql="SELECT * FROM detail WHERE user_name='$user'";
        $run=mysqli_query($conn,$sql);
        if(mysqli_num_rows($run)==1)
        {
          $password=md5($pass);
          $sql1="UPDATE detail SET password='$password' WHERE user_name='$user'";
          $run1=mysqli_query($conn,$sql1);
          header("location: ../login.php?error=success");
          exit();
         
        }
        else{
            header("location: ../forget.php?error=nouser");
            exit();
        }
    }
}
<?php 
if(isset($_POST['login']))
{
    require 'data.inc.php';

$uid=$_POST['names'];
$pwd=$_POST['passes'];

    if(empty($uid) || empty($pwd))
    {
        header("Location: ../login.php?error=emptyfields");
        exit();

    }

    else
    {
        $sql="SELECT * FROM detail WHERE user_name='$uid'";
        $conne=mysqli_query($conn,$sql);
        $num=mysqli_num_rows($conne);
      if($num==1)
      {
          $row=mysqli_fetch_assoc($conne);
          $ver=md5($pwd);
          $result = substr($ver, 0, 30);
     
    
          if($result==$row['password'])
          {
             session_start();
             $_SESSION['id']=$row['id'];
             $_SESSION['user']=$row['user_name'];
             $_SESSION['photo']=$row['image'];
             $_SESSION['email']=$row['email'];
            header("Location: ../home.php?success=done");
             exit();
          }
      else
           {
              header("Location: ../login.php?error=wrongpassword");
                  exit();

          }
      }
      else
      {
         header("Location: ../login.php?error=nousername");
             exit();

     }

  }
}


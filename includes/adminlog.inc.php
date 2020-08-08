<?php
if(isset($_POST['yes']))
{
    $user=$_POST['nam'];
    $pass=$_POST['pass'];
    if(empty($user) || empty($pass))
    {
        header("location: ../adminlog.php?error=emptyfeilds");
        exit();
    }
    else
    {
        if(($user=='adithya')&&($pass==21082000))
        {

            header("location: ../admin.php?login=success");
            exit();
        }
        else{
            
            header("location: ../adminlog.php?error=usernameorpasswordiswrong");
            exit();
        }
    }
}
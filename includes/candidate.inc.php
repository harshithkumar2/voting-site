<?php

if(isset($_POST['submits']))
{
   require "data.inc.php";

    $status=1;
    $name=$_POST['names'];
    $user=$_POST['user'];
    $email=$_POST['emails'];
    $phone=$_POST['phones'];
    $date=$_POST['dates'];
    $adress=$_POST['address'];
    $nation=$_POST['nation'];
    $adhar=$_POST['adhar'];
    $gender=$_POST['genders'];
    $occup=$_POST['occu'];
    $party=$_POST['party'];
    $filename=$_FILES['files']['name'];
    $filetmpname=$_FILES['files']['tmp_name'];
    $des="../image/";
    move_uploaded_file($filetmpname,$des.$filename);

    if(empty($name) || empty($email) || empty($date) ||empty($phone) ||empty($nation) ||empty($gender) ||empty($adress) ||empty($adhar) ||empty($occup) || empty($party))
    {
        header("location: ../votereg.php?error=emptyfeilds");
        exit();
    }
   
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        header("location: ../votereg.php?error=invalidemail");
        exit();
    }
  else{
$sql="INSERT INTO candidate(name,user_name,email,phone,dob,address,nation,adhar,gender,occupation,Party_name,logo)
VALUES('$name','$user','$email','$phone','$date','$adress','$nation','$adhar','$gender','$occup','$party','$filename')";
mysqli_query($conn,$sql);

header("Location: ../votereg.php?error=success");
  }
}



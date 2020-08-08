<?php
if(isset($_POST['submit']))
{
    require 'data.inc.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $date=$_POST['date'];
    $phone=$_POST['phone'];
    $nation=$_POST['nation'];
    $gender=$_POST['gender'];
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    $repass=$_POST['repass'];
    $filename=$_FILES['files']['name'];
    $filetmpname=$_FILES['files']['tmp_name'];
    $des="../image/";
    move_uploaded_file($filetmpname,$des.$filename);
    if(empty($name) || empty($email) || empty($date) ||empty($phone) ||empty($nation) ||empty($gender) ||empty($user_name) ||empty($password) ||empty($repass))
    {
        header("location: ../sign.php?error=emptyfeilds",$user_name);
        exit();
    }
   
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        header("location: ../sign.php?error=invalidemail&username=",$user_name);
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/", $user_name))
    {
        header("location: ../sign.php?error=invalidusername");
        exit();
    }
    else if($password!=$repass)
    {
        header("location: ../sign.php?error=paswordnotmatch");
        exit();
    }
    else{
    $sql="SELECT * FROM detail WHERE user_name='$user_name'";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0)
    {
        header("location: ../sign.php?error=usernametaken");
        exit();
    
    }


else
{
 $hashedpass=md5($password);
$sql="INSERT INTO detail(name,email,DOB,phone_number,nation,gender,user_name,password,image)VALUES('$name','$email','$date','$phone','$nation','$gender','$user_name','$hashedpass','$filename');";
mysqli_query($conn,$sql);

header("Location: ../sign.php?error=success");

}
}
}

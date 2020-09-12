<?php
session_start();
?>
<!DOCTYPE html>
<html  lang="en">
<head>
<title>change Photo</title>
<meta charset="utf-8">
<link rel="icon" href="photos/logo.png" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<style>
.card-header{
    font-size:22px;
    font-weight:bold;
    color:black;
   
   
}
.sign-form{
    padding-top:50px;
}
.card{
    border:solid 1px #d6ed17;
    box-shadow:  -1px 3px 10px 10px  black;
  
}
.card-header{
    border-bottom:solid 1px #d6ed17;
    background-color:#d6ed17 ;
}
.error{
    color:red;
    text-align:center;
    font-weight:bold;
}
</style>
</head>
<body style="background-color:#606060">

<main class="sign-form">

<div class="container">
<br><br><br><br><br><br>
<form action="changepic.php" method="POST" enctype="multipart/form-data">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-header">Change Photo</div>
                        <div class="card-body"><br>
                        <label>Change Image:</label><br>
                        <input type="file" class="form-control" placeholder=" Image"  name="files" style="height:40px" required> <br>
                        <button type="submit" class="btn btn-secondary" name="submit" style="color:black;font-weight:bold;background-color:#d6ed17">Upload</button>
                        </div>
                        </div>
                        </div>
                        </div>
                        </form>
                        <?php
if(isset($_POST['submit']))
{
    require "includes/data.inc.php";
$filename=$_FILES['files']['name'];
$filetempname=$_FILES['files']['tmp_name'];
$des="./image/";
move_uploaded_file($filetempname,$des.$filename);
$user=$_SESSION['user'];
$sql="UPDATE detail SET image='$filename' WHERE user_name='$user'";
mysqli_query($conn,$sql);
header("location: ./home.php");

}

?>
                        </div>
                        </main>
                       
                        </body>
                        </html>
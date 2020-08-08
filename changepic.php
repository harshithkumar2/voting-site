<?php
session_start();
?>
<html>

    <head>
        <title>Change Photo</title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:skyblue">
<form action="changepic.php" method="POST" enctype="multipart/form-data">
<div class="container" style="text-align:center;margin-top:250px;margin-right:15px">
<div class="row" >
        <div class="col-sm-2">
          <label>Change Image:</label>
        </div>
   
        <div class="col-sm-4">
           <input type="file" class="form-control" placeholder=" Image"  name="files" required> <br>
           <input type="submit" value="Register" class="btn btn-primary" name="submit" style="width:150px;height:40px;border-radius:20px;font-style:italic;font-weight:bold;margin-bottom:5px;background-color:black">
        </div>
    </div>
    </div>
<br>
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
</body>
</html>
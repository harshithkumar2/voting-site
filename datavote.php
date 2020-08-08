<!DOCTYPE html>
<html lang="en">
<head>
  <title>Result</title>
  <meta charset="utf-8">
  <link rel="icon" href="photos/vote.jpeg" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
  .heading{
    color:black;
    margin-top:20px;
    text-align:center;
    font-size:40px;
    font-weight:bold;
    font-style:oblique;
    font-family:Helvetica Narrow, sans-serif;
   text-shadow:1px 1px black;
  }
.headings{
    color:black;
   text-align:center;
    font-size:30px;
    font-weight:bold;
    font-style:oblique;
    font-family:Helvetica Narrow, sans-serif;
   text-shadow:1px 1px black;
  }
.style{
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width:80%;
  text-align:center;
  height: 130px;
  box-shadow:1px 1px 5px 8px black;
  margin-left:40px;
  }
  .style th{
    font-size:22px;
    font-style:italic;

  }
  .style td{
    font-size:18px;
    font-style:bold;
    font-weight:bolder;
  }
.style th,.style td{
  border: 2px solid black;
  padding: 15px;

}
.style tr:nth-child(even){
  background:url(photos/home2.jpg)no-repeat;
  background-position:center;
  background-size:cover;
}
  .style tr:hover {background-color: skyblue;}
  .style td:hover {background-color: skyblue;}
  .style th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
 
}
.head{
    color:greenyellow;
  text-align:center;
    font-size:35px;
    font-weight:bold;
    font-style:oblique;
    font-family:Helvetica Narrow, sans-serif;
   text-shadow:2px 2px black;
}
.heads{
    color:white;
   text-align:center;
    font-size:30px;
    font-weight:bold;
    font-style:oblique;
    font-family:Helvetica Narrow, sans-serif;
   text-shadow:2px 2px black;
}

</style>
  </head>
<body style="background:url(photos/homes.jpg)no-repeat;background-position:center;background-size:cover;">

<div class="container">
<div class="row">
  <div class="col-sm-12">
        <p class="heading">Result</p>
      </div>
  </div>
</div>


<div>
<hr style="border-bottom:solid 2px black;box-shadow:1px 3px 3px black;">
</div>


<div class="container">
<div class="d-flex justify-content-center">
<div class="row">
<div class="col-sm-12">
<?php
require "includes/data.inc.php";
$sql3="SELECT SUM(status) as 'total' FROM detail";
$run=mysqli_query($conn,$sql3);
$row3=mysqli_fetch_assoc($run);
echo'
<p class="headings">Total Votes</p>
<hr style="border-bottom:solid 2px black;box-shadow:1px 3px 3px black;width:320px"><br>

<table border="2" class="style">
<tr>
<th style="text-align:center">Total Votes</th>
</tr><tr>
<td>'.$row3['total'].'</td>
</tr></table>';

?>
</div>
</div>
</div>


<br><br>

<div class="d-flex justify-content-center">
<div class="row">
<div class="col-sm-12">
<?php
require "includes/data.inc.php";
$sql="SELECT * FROM candidate WHERE id='1'";
$run=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($run);
$sql1="SELECT SUM(status1) as 'total' FROM detail";
$run=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($run);
echo'
<p class="headings">Candidate 1 Result</p>
<hr style="border-bottom:solid 2px black;box-shadow:1px 3px 3px black;width:320px"><br>
<table border="2" class="style">
<tr>
<th>Party Name:</th>
<th>Name:</th>
<th>Total No. of Votes:</th>
</tr><tr>
<td>'.$row['Party_name'].'</td>
<td>'.$row['user_name'].'</td>
<td>'.$row1['total'].'</td>
</tr></table>';

?>
</div>
</div>
</div>
<br><br>

<div class="d-flex justify-content-center">
<div class="row">
<div class="col-sm-12">
<?php
require "includes/data.inc.php";
$sql="SELECT * FROM candidate WHERE id='2'";
$run=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($run);
$sql1="SELECT SUM(status2) as 'total' FROM detail";
$run=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($run);
echo'
<p class="headings">Candidate 2 Result</p>
<hr style="border-bottom:solid 2px black;box-shadow:1px 3px 3px black;width:320px"><br>
<table border="2" class="style">
<tr>
<th>Party Name:</th>
<th>Name:</th>
<th>Total No. of Votes:</th>
</tr><tr>
<td>'.$row['Party_name'].'</td>
<td>'.$row['user_name'].'</td>
<td>'.$row1['total'].'</td>
</tr></table>';
?>
</div>
</div>
</div>
<br>

<div class="d-flex justify-content-center">
<div class="row">
<div class="col-sm-12">
<?php
$sql1="SELECT SUM(status1) as 'total' FROM detail";
$run=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($run);
$no1=$row1['total'];
$sql1="SELECT SUM(status2) as 'total' FROM detail";
$run=mysqli_query($conn,$sql1);
$row1=mysqli_fetch_assoc($run);
$no2=$row1['total'];
if($no1<$no2)
{
    echo'<p class="head">Candidate 2 Won</p>';
    echo'<p class="heads">*********************************</p>';
}
else{
    echo'<p class="heads">Candidate 1 Won</p>';
    echo'*********************************';
}
?>
</div>
</div>
</div>
</div>
</body>
</html>
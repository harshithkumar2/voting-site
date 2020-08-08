<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vote</title>
  <meta charset="utf-8">
  <link rel="icon" href="photos/vote.jpeg" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <style>
  .heading{
    color:black;
   margin-top:10px;
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
  width:110%;
 text-align:center;
  height: 130px;
  box-shadow:1px 1px 5px 8px black;
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
</style>
</head>
<body style="background:url(photos/homes.jpg)no-repeat;background-position:center;background-size:cover">

<div class="container">
    <div class="row">
      <div class="col-sm-12">
        <p class="heading">Vote Here</p>
      </div>
  </div>
</div>



<hr style="border-bottom:solid 2px black;box-shadow:1px 3px 3px black;">

<?php
    if(isset($_GET['error']))
        {
           if($_GET['error']=="succ"){

                    echo'<script>
                    swal({
                      title: "Are you sure?",
                      text: "Once Voted Cannot Be changed!",
                      icon: "warning",
                      button: true,
                      dangerMode: false,
                    })
                      .then((willDelete) => {
                      if (willDelete) {
                        swal(" Successfully Voted", {
                          icon: "success",
                        }).then(function (result) {
                          if (true) {
                            window.location = "home.php";
                          }
                        });
                      }});
    </script>';

                }
        }
?>
      
<div class="container">
    <div class="d-flex justify-content-center">
      <div class="row">
        <div class="col-sm-12">
          <form action="includes/voting.inc.php" method="POST">
<?php
require "includes/data.inc.php";
$sql="SELECT * FROM candidate WHERE id='1'";
$run=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($run);
$images=$row['logo'];
echo'
<p class="headings">Candidate 1</p>
<hr style="border-bottom:solid 2px black;box-shadow:1px 3px 3px black;width:250px"><br>
<table border="2" class="style">
<tr>
<th>Party Logo:</th>
<th>Party Name:</th>
<th>Name:</th>
</tr><tr>
<td><img src="./image/'.$images.'" style="height:60px;width:60px;border-radius:50%;"></td>
<td>'.$row['Party_name'].'</td>
<td>'.$row['user_name'].'</td>
</tr></table>';
?>
<br>
              <div style="text-align:center">
                    <input type="submit" value="Vote 1" class="btn btn-dark" name="vote1" style="width:200px;height:40px;border-radius:20px;font-style:italic;color:white;font-weight:bold;align:center">
              </div>
          </form>
        </div>
      </div>
    </div>
</div>    

<hr style="border-bottom:solid 2px black;box-shadow:1px 3px 3px black">
<br>


<div class="container">
    <div class="d-flex justify-content-center">
      <div class="row">
        <div class="col-sm-12">
            <form action="includes/voting.inc.php" method="POST">
<?php
require "includes/data.inc.php";
$sql="SELECT * FROM candidate WHERE id='2'";
$run=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($run);
$images=$row['logo'];
echo'
<p class="headings">Candidate 2</p>
<hr style="border-bottom:solid 2px black;box-shadow:1px 3px 3px black;width:250px"><br>
<table border="2" class="style">
<tr>
<th>Party Logo</th>
<th>Party Name</th>
<th>Name</th>
</tr><tr>
<td><img src="./image/'.$images.'" style="height:40px;width:40px;border-radius:50%;"></td>
<td>'.$row['Party_name'].'</td>
<td>'.$row['user_name'].'</td>
</tr></table>';
?>
<br>

            <div style="text-align:center">
                <input type="submit" value="Vote 2" class="btn btn-dark" name="vote2" style="width:200px;height:40px;border-radius:20px;font-style:italic;color:white;font-weight:bold">
           </div>
        </form>
      </div>
    </div>
  </div>
</div>  
<hr style="border-bottom:solid 2px black;box-shadow:1px 3px 3px black">




</body>
</html>
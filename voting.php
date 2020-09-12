<?php
session_start();
?>
<html>
<head>
<title>Vote Here</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
.card-header{
    font-size:20px;
    font-weight:bold;
   
}
.login-form{
    padding-top:130px;
}
.card{
    border:solid 1px #F5B041;
    box-shadow:  -1px 3px 10px 10px  black;
  
}
.card-header{
    border-bottom:solid 1px #F5B041;
    background-color:#F5B041;
}
.heading{
    color:white;
    position:relative;
    top:35px;
    text-align:center;
    font-size:35px;
    font-weight:bold;
    text-shadow:1px 1px black;
}



</style>
</head>
<body style="background-color:#1F618D">
<div class="container">

<div class="row">
        <div class="col-sm-12">
            <p class="heading">Vote Here</p><br>
      </div>
    </div>
    </div>
<hr width="320px" style="border-bottom:solid 2.5px white;box-shadow:1px 3px 3px black"><br><br>

<div class="container">

<div class="row justify-content-center">
          <div class="col-sm-5">
            <div class="card">
              <div class="card-header">Candidate 1</div>
                <div class="card-body">
                <form action="includes/voting.inc.php" method="POST">
                <table class="table">
          <thead>
            <tr>
            <th scope="col">Party Logo</th>
              <th scope="col">Party Name</th>
               <th scope="col">Name</th>
                <th scope="col">Vote</th>
            </tr>
          </thead>
    <tr>
  
    <?php
        require "includes/data.inc.php";
        $sql="SELECT * FROM candidate WHERE id='3'";
        $run=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($run);
        $images=$row['logo'];
      echo'
          <td><img src="./image/'.$images.'" style="height:50px;width:50px;border-radius:50%;filter:drop-shadow(1px 10px 10px black)"></td>
          <td>'.$row['party_name'].'</td>
          <td>'.$row['user_name'].'</td>
          <td> <button type="submit" class="btn btn-success" name="vote1"><i class="fas fa-vote-yea"></i></button></td>';
?>
</form>
    </tr>
  </tbody>
</table>

            </div>
        </div>
    </div>
</div><br><br><br>

<div class="row justify-content-center">
          <div class="col-sm-5">
            <div class="card">
              <div class="card-header">Candidate 2</div>
                <div class="card-body">
                <form action="includes/voting.inc.php" method="POST">
                <table class="table">
          <thead>
            <tr>
            <th scope="col">Party Logo</th>
              <th scope="col">Party Name</th>
               <th scope="col">Name</th>
                <th scope="col">Vote</th>
            </tr>
          </thead>
    <tr>
  
    <?php
        require "includes/data.inc.php";
        $sql="SELECT * FROM candidate WHERE id='4'";
        $run=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($run);
        $images=$row['logo'];
      echo'
          <td><img src="./image/'.$images.'" style="height:50px;width:50px;border-radius:50%; filter:drop-shadow(1px 10px 10px black); "></td>
          <td>'.$row['party_name'].'</td>
          <td>'.$row['user_name'].'</td>
          <td> <button type="submit" class="btn btn-success" name="vote2"><i class="fas fa-vote-yea"></i></button></td>';
?>
</form>
    </tr>
  </tbody>
</table>
</div>
            </div>
        </div>
    </div>
    </div><br><br>
    </body>
    </html>
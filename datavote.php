<html>
<head>
<title>Result</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
.card-header{
    font-size:20px;
    font-weight:bold;
   
}
.login-form{
    padding-top:130px;
}
.card{
    border:solid 1px #76D7C4;
    box-shadow:  -1px 3px 10px 10px  black;
  
}
.card-header{
    border-bottom:solid 1px #76D7C4;
    background-color:#76D7C4;
}
.heading{
    color:white;
    position:relative;
    top:35px;
    text-align:center;
    font-size:35px;
    font-weight:bold;
    font-family:Helvetica Narrow, sans-serif;
   text-shadow:1px 1px black;
}



</style>
</head>
<body style="background-color:#2874A6">
<div class="container">

<div class="row">
        <div class="col-sm-12">
            <p class="heading">Result</p><br>
          
            </div>
    </div>
    </div>
    <hr width="320px" style="border-bottom:solid 2.5px white;box-shadow:1px 3px 3px black">

    
<br><br>
<div class="container">
<div class="row justify-content-center">
          <div class="col-sm-5">
            <div class="card">
              <div class="card-header">Total Votes</div>
                <div class="card-body">
                  <div class="text-center">
                  <?php
                    require "includes/data.inc.php";
                    $sql3="SELECT SUM(status) as 'total' FROM detail";
                    $run=mysqli_query($conn,$sql3);
                    $row3=mysqli_fetch_assoc($run);
                  echo'<p style="font-size:20px">'.$row3['total'].'</p>';
                  ?>
                 </div>
            </div>
        </div>
    </div>
</div><br><br><br>

<div class="row justify-content-center">
  <div class="col-sm-5">
    <div class="card">
    <div class="card-header">Candidate 1</div>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Party Name</th>
               <th scope="col">Name</th>
                <th scope="col">Votes</th>
            </tr>
          </thead>
    <tr>
    <?php
        require "includes/data.inc.php";
        $sql="SELECT * FROM candidate WHERE id='3'";
        $run=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($run);
        $sql1="SELECT SUM(status1) as 'total' FROM detail";
        $run=mysqli_query($conn,$sql1);
        $row1=mysqli_fetch_assoc($run);
        echo'
          <td>'.$row['party_name'].'</td>
          <td>'.$row['user_name'].'</td>
          <td>'.$row1['total'].'</td>';
?>
    </tr>
  </tbody>
</table>
      </div>
    </div>
  </div>
</div><br><br>
<div class="row justify-content-center">
  <div class="col-sm-5">
    <div class="card">
      <div class="card-header">Candidate 2</div>
        <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Party Name</th>
                  <th scope="col">Name</th>
                  <th scope="col">Votes</th>
                  </tr>
                </thead>
    <tr>
    <?php
        require "includes/data.inc.php";
        $sql="SELECT * FROM candidate WHERE id='4'";
        $run=mysqli_query($conn,$sql);
        $row=mysqli_fetch_assoc($run);
        $sql1="SELECT SUM(status2) as 'total' FROM detail";
        $run=mysqli_query($conn,$sql1);
        $row1=mysqli_fetch_assoc($run);
        echo'
          <td>'.$row['party_name'].'</td>
          <td>'.$row['user_name'].'</td>
          <td>'.$row1['total'].'</td>';
          ?>
    </tr>
  </tbody>
</table>
      </div>
     </div>
  </div>
</div>
</div>
<br><br>
    </body>
</html>
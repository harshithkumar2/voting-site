<!DOCTYPE html>
<html lang="en">
<head>
  <title>Candidate Registration</title>
  <meta charset="utf-8">
  <link rel="icon" href="photos/logo.png" type="image/x-icon" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <style>
.heading
{
    color:black;
    position:relative;
    top:15px;
    text-align:center;
    font-size: 40px;
    font-weight:bold;
    font-style:oblique;
    font-family:Helvetica Narrow, sans-serif;
    text-shadow:1px 1px black;
}
label{
    font-size:20px;
    font-style:oblique;
    font-weight:bold;
    color:black;
 

}
input[type="file"] {
   height:45px
}
::placeholder{
   color:black;
   font-size:15px;
   font-style:bold;
}

  </style>
</head>
<body style="background:url(photos/homes.jpg)no-repeat;background-position:center;background-size:cover;">

<form action="includes/candidate.inc.php" method="POST" enctype="multipart/form-data">



<div class="container" style="text-align:center;color:black">
            <div class="row">
                <div class="col-sm-12">
                  <h1 class="heading">Candidate details</h1>
                </div>
            </div>
        </div>
<br>
<div>
  <hr width="100%" style="border-bottom: solid 2px black;border-color:black;box-shadow:2px 2px 2px black">
</div>
      <br>
    <?php
    if(isset($_GET['error']))
        {
            if($_GET['error']=="emptyfeilds")
                {
                     echo '<p style="color:red;font-weight:bolder;position:relative;left:40%;font-size:20px;font-style:italic;">All Fields Are Empty!</p>';
                }
                else if($_GET['error']=="success"){

                    echo'<script>
    swal({
        title: "Are you sure?",
        text: "Once Submitted Data Cannot Be changed!",
        icon: "warning",
        button: true,
        dangerMode: false,
      })
        .then((willDelete) => {
        if (willDelete) {
          swal("Data Entered Successfully", {
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
?><br>
<div class="container" style="margin-right:25%;text-align:left;margin-left:1%;">
    <div class="row">
        <div class="col-sm-2">
            <label>Name:</label>
        </div>
        <div class="col-sm-4">
           <input type="text" class="form-control" placeholder="Full Name" name="names"> 
        </div>
    </div>
<br>

<div class="row">
        <div class="col-sm-2">
            <label>User Name:</label>
        </div>
        <div class="col-sm-4">
           <input type="text" class="form-control" placeholder="Enter Same User Name" name="user"> 
        </div>
    </div>
<br>


<div class="row" >
    <div class="col-sm-2">
          <label>Email:</label>
    </div>
    <div class="col-sm-4">
           <input type="text" class="form-control" placeholder="Enter Valid Email-Id"  name="emails"> 
           <?php
           if(isset($_GET['error']))
           {
            if($_GET['error']=="invalidemail")
            {
                echo '<p style="color:red;font-weight:bolder;text-align:center;font-size:18px;font-style:italic;">Invalid Mail! </p>';
            }
        }
        ?>
    </div>
</div>
<br>

<div class="row"  >
        <div class="col-sm-2">
          <label>Phone:</label>
        </div>
   
        <div class="col-sm-4">
           <input type="number" class="form-control" placeholder="Enter Phone No."  name="phones"> 
        </div>
    </div>
<br>

<div class="row" >
        <div class="col-sm-2">
          <label>D.O.B:</label>
        </div>
        <div class="col-sm-4">
           <input type="date" class="form-control" placeholder="Enter date of birth"  name="dates"> 
        </div>
    </div>
<br>


<div class="row"  >
        <div class="col-sm-2">
          <label>Address:</label>
        </div>
   
        <div class="col-sm-4">
           <input type="text" class="form-control" placeholder=" Enter Your Address"  name="address"> 
        </div>
    </div>
<br>

<div class="row"  >
        <div class="col-sm-2">
          <label>Nationality:</label>
        </div>
   
        <div class="col-sm-4">
           <input type="text" class="form-control" placeholder=" Nationality"  name="nation"> 
        </div>
    </div>
<br>

<div class="row">
        <div class="col-sm-2">
          <label>Aadhar No.:</label>
        </div>
   
        <div class="col-sm-4">
           <input type="number" class="form-control" placeholder="Enter Aadhar Number"  name="adhar"> 
        </div>
    </div>
<br>

<div class="row">
    <div class="col-sm-2">
          <label>Gender:</label>
    </div>
    <div class="col-sm-4">
        <select input type="text" class="form-control" name="genders">
            <option>Male</option>
            <option>Female</option>
        </select>
    </div>
</div>
<br>

<div class="row">
        <div class="col-sm-2">
          <label>Occupation:</label>
        </div>
   
        <div class="col-sm-4">
           <input type="text" class="form-control" placeholder="Enter Occupation"  name="occu"> 
        </div>
    </div>
<br>

<div class="row">
        <div class="col-sm-2">
          <label>Party Name:</label>
        </div>
   
        <div class="col-sm-4">
           <input type="text" class="form-control" placeholder=" Enter Party Name"  name="party"> 
        </div>
    </div>
<br>


<div class="row">
        <div class="col-sm-2">
          <label>Party Logo:</label>
        </div>
   
        <div class="col-sm-4">
           <input type="file" class="form-control" placeholder=" Image"  name="files" required> 
        </div>
    </div>
      </div>

<br>

<hr width="100%" style="border-bottom: solid 2px black;border-color:black;box-shadow:2px 2px 2px black">
<br>
<div class="container">
<div class="row">
             <div class="row-sm-12" style="margin-left:30%;margin-bottom:30px">
                <input type="submit" value="Register" class="btn btn-dark" name="submits" style="width:150px;height:40px;border-radius:20px;font-style:italic;color:white;font-weight:bold;margin-bottom:5px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" value="Reset" class="btn btn-dark" name="reset" style="width:150px;height:40px;border-radius:20px;font-style:italic;color:white;font-weight:bold">
            </div>
        </div>

</div>



</form>
</body>
</html>
<!DOCTYPE html>
<html  lang="en">
<head>
<title>Candidate Registration</title>
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
    border:solid 1px #eea47f;
    box-shadow:  -1px 3px 10px 10px  black;
  
}
.card-header{
    border-bottom:solid 1px #eea47f;
    background-color:#eea47f ;
}
.error{
    color:red;
    text-align:center;
    font-weight:bold;
}
</style>
</head>
<body style="background-color:#00539c">

<main class="sign-form">

<div class="container">

        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">Candidate Details</div>
                  
                    <div class="card-body">
<br>
                    <?php
    if(isset($_GET['error']))
        {
          if($_GET['error']=="emptyfeilds")
            {
                echo '<div class="alert alert-danger" role="alert">
                <a href="#" class="alert-link">Empty Fields!</a>
                  </div>';
             }
            else if($_GET['error']=="invalidemail")
             {
               echo '<div class="alert alert-danger" role="alert">
               <a href="#" class="alert-link">Invalid Email !</a>
                 </div>';
             }
            else if($_GET['error']=="success")
            {
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
              window.location = "login.php";
            }
          });
        }});
    </script>';
}
}
?>
<form action="includes/candidate.inc.php"  method="POST" enctype="multipart/form-data">
                  
                <div class="row">
                    <div class="col-sm-6">
                        <div style="margin-bottom: 20px" class="input-group">
                          <label>Name:</label>
                          <input type="text" class="form-control" placeholder="Full Name" name="names"> 
                    </div>
                  </div>
                  <div class="col-sm-6">
                        <div style="margin-bottom: 25px" class="input-group">
                            <label>User Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Same User Name" name="user"> 
                        </div>
                    </div>
                 </div>

                    <div class="row">
                    <div class="col-sm-6">
                  <div style="margin-bottom: 25px" class="input-group">
                      <label>E-mail:</label>
                      <input type="text" class="form-control" placeholder="Enter Valid Email-Id"  name="emails">                                   
                        </div>
                    </div>
                    <div class="col-sm-6">
                    <div style="margin-bottom: 25px" class="input-group">
                    <label>Party Logo:</label>
                    <input type="file" class="form-control" placeholder="Enter Valid Email-Id"  name="files">
                    </div>
                    </div>
                     </div>
                  
                    <div class="row">
                
                    <div class="col-sm-6">
                        <div style="margin-bottom: 25px" class="input-group">
                            <label>D.O.B:</label>
                            <input type="date" class="form-control" placeholder="Enter date of birth"  name="dates">                                  
                           </div>
                        </div>
                        <div class="col-sm-6">
                        <div style="margin-bottom: 25px" class="input-group">
                            <label>Phone:</label>
                            <input type="number" class="form-control" placeholder="Enter Phone No."  name="phones"> 
                             </div>
                        </div>
                        
                    
                  </div>
                <div class="row">
                <div class="col-sm-6">
                      <div style="margin-bottom: 25px" class="input-group">
                        <label>Address:</label>
                        <input type="text" class="form-control" placeholder=" Enter Your Address"  name="address"> 
                           </div>
                        </div>
                    
                        <div class="col-sm-6">
                        <div style="margin-bottom: 25px" class="input-group">
                            <label>Nationality:</label>
                            <input type="text" class="form-control" placeholder=" Nationality"  name="nation"> 
                        </div>
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-sm-6">
                        <div style="margin-bottom: 25px" class="input-group">
                          <label>Gender:</label>
                            <select class="form-control" name="genders" value="">                   
                            <option>Male</option>
                            <option>Female</option>   
                            </select>                   
                        </div>
                    </div>
                     
                  <div class="col-sm-6">
                      <div style="margin-bottom: 25px" class="input-group">
                        <label>Aadhar No.:</label>
                        <input type="number" class="form-control" placeholder="Enter Aadhar Number"  name="adhar"> 
                        </div>
                      </div>
                    </div>

                    <div class="row">
                <div class="col-sm-6">
                      <div style="margin-bottom: 25px" class="input-group">
                        <label>Occupation:</label>
                        <input type="text" class="form-control" placeholder="Enter Occupation"  name="occu"> 
                           </div>
                        </div>
                    
                        <div class="col-sm-6">
                        <div style="margin-bottom: 25px" class="input-group">
                            <label>Party Name:</label>
                            <input type="text" class="form-control" placeholder=" Enter Party Name"  name="party"> 
                        </div>
                    </div>
                    </div>
<br>
  <div class="d-flex justify-content-center">
                      <input type="submit" value="Register" class="btn btn-dark" name="submits" style="color:black;font-weight:bold;background-color:#eea47f">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="reset" value="Reset" class="btn btn-dark" name="reset" style="color:black;font-weight:bold;background-color:#eea47f">
  </div><br>
      </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
</body>
</html>
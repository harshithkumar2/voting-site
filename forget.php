<html>
<head>
<title>Forgot Password</title>
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
    border:solid 1px #adefd1;
    box-shadow:  -1px 3px 10px 10px  black;
  
}
.card-header{
    border-bottom:solid 1px #adefd1;
    background-color:#adefd1;
}
.error{
    color:red;
    text-align:center;
    font-weight:bold;
    font-size:13px;
}
</style>
</head>
<body style="background-color:#00203f">
<main class="login-form">
<div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header">Forgot Password</div>
                    <div class="card-body">
                    <?php
            if(isset($_GET['error']))
            {
                if($_GET['error']=="emptyfields")
                {
                    echo '<div class="alert alert-danger" role="alert">
                    <a href="#" class="alert-link">Empty Fields!</a>
                      </div>';
                }
                else if($_GET['error']=="passnotmatch")
                {
                    echo '<div class="alert alert-danger" role="alert">
                    <a href="#" class="alert-link">Password Not Match!</a>
                      </div>';
                }
                else if($_GET['error']=="nouser")
                {
                    echo '<div class="alert alert-danger" role="alert">
                    <a href="#" class="alert-link">User Name Not Found!</a>
                      </div>';
                }
            }
            ?>
                    <form action="includes/forgot.inc.php" class="form-horizontal" method="POST">
                  
<br>
                        
                        <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input type="text" class="form-control" placeholder=" Registered User Name" name="nam">
                            
                        </div>
                                
                        
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Enter New Password " name="pass"> 
                        </div>
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Re Enter Password " name="repass"> 
                        </div>
                       
                        <div class="d-flex align-items-center">	
                            <input type="submit" value="submit" class="btn btn-dark" name="yes" style="color:black;font-weight:bold;background-color:#adefd1">
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
</body>
</html>
<html>
<head>
<title>Admin Panel</title>
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
    border:solid 1px #d6ed17;
    box-shadow:  -1px 3px 10px 10px  black;
  
}
.card-header{
    border-bottom:solid 1px #d6ed17;
    background-color:#d6ed17;
}
.error{
    color:red;
    text-align:center;
    font-weight:bold;
    font-size:13px;
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
<body style="background-color:#00539c">
<div class="container">

<div class="row">
        <div class="col-sm-12">
            <p class="heading">Admin Panel</p><br>
          
            </div>
    </div>
    </div>
    <hr width="320px" style="border-bottom:solid 2.5px white;box-shadow:1px 3px 3px black">
<main class="login-form">

<div class="container">

        <div class="row justify-content-center">
            <div class="col-sm-4">
                <div class="card">
                     <div class="card-body">
                        <div class="text-center">
                             <a href="candidpass.php"><input type="button" class="btn btn-dark" value="Register" id="btn" 
                             style="width:200px;height:40px;color:black;font-weight:bold;background-color:#eea47f;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>

        <div class="row justify-content-center">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <a href="datavote.php"><input type="button" class="btn btn-dark" value="Data" id="btn" 
                            style="width:200px;height:40px;color:black;font-weight:bold;background-color:#eea47f;"></a>
                        </div>
                     </div>
                </div>
            </div>
</div>


</main>

</body>
</html>

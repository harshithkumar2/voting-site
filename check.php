<html>
<head>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
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
    ?>
    </body>
    </html>
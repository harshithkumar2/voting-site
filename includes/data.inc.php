<?php
$servername="localhost";
$dbusername="root";
$dbpassword="";
$dbname="polling";

$conn=mysqli_connect($servername,$dbusername,$dbpassword,$dbname);
if(!$conn)
{
    header("connection failed" .mysqli_connect_error());
    exit();
}
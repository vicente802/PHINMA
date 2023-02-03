<?php
$localhost = "localhost";
$user="root";
$pass = "";
$database="form";
$con = mysqli_connect($localhost,$user,$pass,$database);
if($con -> connect_error){
    echo 'Connection Error';
}
else{
}

?>
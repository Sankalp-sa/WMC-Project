<?php

$servername = "sql109.epizy.com";
$username = "epiz_32492013";
$password = "VO20uDgViSKtx7r";
$dbname="epiz_32492013_pakedata";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn){
    //echo"ok";
}else{
    echo"no".mysqli_connect_error();
}

$un =$_GET['username'];
$fn =$_GET['FirstName'];
$ln =$_GET['LastName'];
$e =$_GET['eamil'];
$pwd =$_GET['Password'];
$cpwd =$_GET['ConfirmPassword'];

//echo "$un";
//echo "$fn";
//echo "$ln";
//echo "$e";
//echo "$pwd";
//echo "$cpwd";

$query ="INSERT INTO student VALUes('$un','$fn','$ln','$e','$pwd','$cpwd')";
$Data = mysqli_query($conn,$query);
if($Data){
    header("Location: index.php");
    }
?>
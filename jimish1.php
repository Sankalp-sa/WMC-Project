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
$uname =$_GET['username1'];
$password =$_GET['password2'];

$sql="select * from student where Username='".$uname."'AND Password='".$password."'limit 1";
$result = mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)==1){
    echo '<script>alert("You are succssfully regiter."); 
            </script>';
    exit();
 }
 else{
    echo '<script>alert("You are not registered. Please Sign Up before Login.");
    window.location.href="index.php"; 
    </script>';
 }
?>
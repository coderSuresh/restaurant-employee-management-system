<?php
@include('config.php');
if(isset($_POST['login'])) {
$name = 'Parash Bhandari';
$password = md5(mysqli_real_escape_string($conn,$_POST['password']));
$username =mysqli_real_escape_string($conn,$_POST['username']);
$sql = "Insert into admin values(default,'$name','$username','$password')";
$res = mysqli_query($conn,$sql) or die("Error");
}
?>
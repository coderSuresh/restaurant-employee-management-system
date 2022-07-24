<?php
session_start();
@include('config.php');
if(isset($_POST['login'])){   
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = md5(mysqli_real_escape_string($conn,$_POST['password']));
    
    $sql = "SELECT * FROM admin";
    $result = mysqli_query($conn,$sql);//To  execute query.
    while ($data = mysqli_fetch_array($result)) {
      if ($username !=  $data['username']){
            $_SESSION['username'] = "Invalid Username";
              header("Location:index.php");
      }
      elseif ($password != $data['password']){
            $_SESSION['password'] = "Invalid password";
              header("Location:index.php");
      }
      else {
            header("Location:employees.php");
      }           
    }
}
 else {
            header("Location:index.php");
      }
?>
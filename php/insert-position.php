<?php
session_start();
@include('config.php');
if (isset($_POST['add-position']))
{   
    $pos_name=mysqli_real_escape_string($conn, $_POST['name']);
    $salary = mysqli_real_escape_string($conn, $_POST['salary']);    
    $sql1 = "INSERT INTO salary values(default,$salary)";
    $result = mysqli_query($conn,$sql1) or die("Error:Could not connect");
    if(!empty($_POST['department']))
    {
        $dept = $_POST['department'];
    }
    $sql = "INSERT INTO position values(default,'$pos_name')";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        $_SESSION['position-insert'] = "Inserted succesfully";
         header("Location:add-position.php");
    }   
}
else
{
    header("Location:add-position.php");
}
?>
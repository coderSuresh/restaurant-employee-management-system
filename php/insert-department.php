<?php
session_start();
@include('config.php');
if (isset($_POST['add-department']))
{   
    $dept_name=mysqli_real_escape_string($conn, $_POST['name']);
    $sql = "INSERT INTO department values(default,'$dept_name')";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        $_SESSION['deptartment-insert'] = "Inserted succesfully";
         header("Location:add-department.php");
    }   
}
else
{
    header("Location:add-department.php");
}
?>
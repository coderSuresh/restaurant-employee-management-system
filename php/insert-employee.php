<?php
session_start();
@include('config.php');
if (isset($_POST['add-employee']))
{   
    $emp_name=mysqli_real_escape_string($conn, $_POST['name']);
    $sql = "INSERT INTO employee values(default,'$emp_name')";
    $result1 = mysqli_query($conn,$sql) or die("Error:Could not connect");
    
    $emp_address=mysqli_real_escape_string($conn, $_POST['address']);
    $sql1 = "INSERT INTO address values(default,'$emp_address')";
    $result2 = mysqli_query($conn,$sql1) or die("Error:Could not connect");

    $emp_phone=mysqli_real_escape_string($conn, $_POST['phone']);
    $sql2 = "INSERT INTO contact values(default,$emp_phone)";
    $result3 = mysqli_query($conn,$sql2) or die("Error:Could not connect");    
    
    if(!empty($_POST['department']))
    {
        $dept = $_POST['department'];
    }  

    if($result1&&$result2&&$result3)
    {
        $_SESSION['employee-insert'] = "Inserted succesfully";
         header("Location:add-employee.php");
    }   
}
else
{
    header("Location:add-employee.php");
}
?>
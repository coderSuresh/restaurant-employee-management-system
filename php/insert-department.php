<?php
session_start();
@include('config.php');

if (isset($_POST['add-department']))
{
      $dept_name=mysqli_real_escape_string($conn, $_POST['name']);  
    if(!preg_match("/^[A-Z a-z]{2,30}$/", $dept_name))
    {
         $_SESSION["invalid_department"] = "Department name should contain alphabaet only";
            header("Location:add-department");
    }
    else
    {
    $sql = "INSERT INTO department values(default,'$dept_name')";
    $result = mysqli_query($conn,$sql);
     if($result)
    {
        $_SESSION['deptartment-insert'] = "Inserted succesfully";
         header("Location:add-department");
    }  
    else {echo "error";} 
    }      
}

else
{
    header("Location:add-department");
}
?>
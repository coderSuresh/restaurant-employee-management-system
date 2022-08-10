<?php
session_start();
@include('config.php');
if (isset($_POST['add-position']))
{   
    $pos_name=mysqli_real_escape_string($conn, $_POST['name']);
    $salary = mysqli_real_escape_string($conn, $_POST['salary']);   
    $sql_dept_id = "select dept_id from department where dept_name = '$dept'"; 
    $ql_sal = "insert into salary values(default, $salary)";
    
    if(!empty($_POST['department']))
    {
        $dept = $_POST['department'];
    }      
 
    $res_dept_id = mysqli_query($conn, $sql_dept_id) or die(mysqli_error($conn));
    $row = mysqli_fetch_assoc($res_dept_id);
    $dept_id = $row['dept_id'];  
    if(!preg_match("/^[a-z A-Z]{1,}$/", $pos_name))
    {
        $_SESSION["invalid_position"] = "Position should contain alaphabate only";
        header("Location:add-position.php");
    }
    else if(!preg_match("/^[0-9]{1,}$/", $salary))  
    {
        $_SESSION["invalid_salary"] = "Salary should contain digit only";
        header("Location:add-position.php");
    }
    else
    {
    $res_sal = mysqli_query($conn, $sql_sal) or die (mysqli_error($conn));
    $sal_id= mysqli_insert_id($conn);
    $sql = "INSERT INTO position values(default,'$pos_name', '.$sal_id.', $dept_id)";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        $_SESSION['position-insert'] = "Inserted succesfully";
        header("Location:add-position.php");
    }   
}    
}
else
{
    header("Location:add-position.php");
}
?>
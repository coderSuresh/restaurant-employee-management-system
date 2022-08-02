<?php
session_start();
@include('config.php');
if (isset($_POST['add-position']))
{   
    $pos_name=mysqli_real_escape_string($conn, $_POST['name']);
    $salary = mysqli_real_escape_string($conn, $_POST['salary']);    
    
    if(!empty($_POST['department']))
    {
        $dept = $_POST['department'];
    }
    $sql_dept_id = "select dept_id from department where dept_name = '$dept'";
    $res_dept_id = mysqli_query($conn, $sql_dept_id) or die(mysqli_error($conn));
    $row = mysqli_fetch_assoc($res_dept_id);

    $dept_id = $row['dept_id'];

    $sql_sal = "insert into salary values(default, $salary)";
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
else
{
    header("Location:add-position.php");
}
?>
<?php
    if(isset($_POST['delete_employee'])) {
        include('config.php');
        $emp_id = $_POST['emp_id'];
        $sql = "delete from employee where emp_id=$emp_id";
        $res = mysqli_query($conn, $sql) or die("Could not delete from database.");
        header('location:./employees.php');
    }
    else header("location:./employees.php");
?>
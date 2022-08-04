<?php
    if(isset($_POST['delete_department'])) {
        include('config.php');
        $dept_id = $_POST['dept_id'];
        $sql = "delete from department where dept_id=$dept_id";
        $res = mysqli_query($conn, $sql) or die("Could not delete from database.");
        header('location:./departments.php');
    }
    else header("location:./departments.php");
?>
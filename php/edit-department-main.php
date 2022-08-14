<?php
    include('config.php');
    if(isset($_POST['edit-department'])) {
        $new_dept_name = $_POST['dept-name'];
        $dept_id = $_POST['dept_id'];
        $sql = "update department set dept_name = '$new_dept_name' where dept_id = $dept_id";
        mysqli_query($conn, $sql) or die("Could not update department name " . mysqli_error($conn));
        header('location:./departments');
    } 
    else header('location:./departments');
?>
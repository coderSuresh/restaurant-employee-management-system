<?php
    session_start();
    include('config.php');
    if(isset($_POST['view_department'])) {
        $dept_id = $_POST['dept_id'];
        $_SESSION['dept_emp_list'] = $dept_id;
        header("location:./filter-by-department.php");
    }
    else header("location:./departments.php");
?>
<?php
    session_start();
    if(isset($_POST['sort-by'])) {
        $filter_query = $_POST['sort-by'];
        // set session based on DB
        if($filter_query === "a-z") {
            $_SESSION['filter-msg'] = "employee.emp_name asc";
        }
        else if($filter_query === "z-a") {
            $_SESSION['filter-msg'] = "employee.emp_name desc";
        }
        else if($filter_query === "latest-added") {
            $_SESSION['filter-msg'] = "employee.emp_id desc";
        } 
        else if($filter_query === "first-added") {
            $_SESSION['filter-msg'] = "employee.emp_id asc";
        }    
        header('location:./filter-by-department.php');
    } else header('location:./filter-by-department.php');
?>
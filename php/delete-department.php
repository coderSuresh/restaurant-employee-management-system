<?php
    session_start();
    if(isset($_POST['delete_department'])) {
        include('config.php');
        $dept_id = $_POST['dept_id'];
        $sql = "delete from department where dept_id=$dept_id";
        
        $sql_check = "select position.p_id,
                             employee.emp_id
                             from employee
                             inner join position on employee.p_id = position.p_id
                             where employee.dept_id = $dept_id";
        
        $res_check = mysqli_query($conn, $sql_check) or die("Could not fetch from database");

       if(mysqli_num_rows($res_check) > 0) {
            $_SESSION['non-empty-dept'] = "Can't delete department!";
            header("location:./departments.php");
       }
       else {
            $res = mysqli_query($conn, $sql) or die("Could not delete from database.");
            header('location:./departments.php');
       } 
    }
    else header("location:./departments.php");
?>
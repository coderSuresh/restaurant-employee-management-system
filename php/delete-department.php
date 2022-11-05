<?php
    session_start();
    if(isset($_POST['delete_department'])) {
        include('config.php');
        $dept_id = $_POST['dept_id'];
        $sql = "delete from department where dept_id=$dept_id";
        
     //    check associated employees
        $sql_check_emp = "select position.p_id,
                             employee.emp_id
                             from employee
                             inner join position on employee.p_id = position.p_id
                             where employee.dept_id = $dept_id";
        
        $res_check = mysqli_query($conn, $sql_check_emp) or die("Could not fetch from database");

     // check associated positions
     $sql_check_pos = "select p_id from position where dept_id = $dept_id";
     $res_check_pos = mysqli_query($conn, $sql_check_pos) or die("Could not fetch from database");

       if(mysqli_num_rows($res_check) > 0 || mysqli_num_rows($res_check_pos) > 0) {
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
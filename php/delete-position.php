<?php
    session_start();
    if(isset($_POST['delete_position'])) {
        include('config.php');
        $p_id = $_POST['p_id'];

        $sql_check = "select position.p_id,
                             employee.emp_id
                             from employee
                             inner join position on employee.p_id = position.p_id
                             where employee.p_id = $p_id";
        
        $res_check = mysqli_query($conn, $sql_check) or die("Could not fetch from database");

       if(mysqli_num_rows($res_check) > 0) {
            $_SESSION['non-empty-pos'] = "Can't delete position!";
            header("location:./positions.php");
       }
       else {
            $sql = "delete from position where p_id=$p_id";
            $res = mysqli_query($conn, $sql) or die("Could not delete from database.");
            header('location:./positions.php');
       } 

        header('location:./positions.php');
    }
    else header("location:./positions.php");
?>
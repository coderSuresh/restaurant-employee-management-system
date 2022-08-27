<?php
    session_start();
    include('config.php');
    if(isset($_POST['view_position'])) {
        $p_id = $_POST['p_id'];
        $_SESSION['p_emp_list'] = $p_id;
        header("location:./filter-by-position.php");
    }
    else header("location:./positions.php");
?>
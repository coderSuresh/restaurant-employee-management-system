<?php
    if(isset($_POST['edit-position'])) {
        include('config.php');
        $name = $_POST['name'];
        $id = $_POST['p_id'];
        $salary = $_POST['salary'];
        $dept_name = $_POST['department'];
        $sal_id = $_POST['sal_id'];

        // fetch dept id
        $sql_dept = "select dept_id from department where dept_name='$dept_name'";
        $res_dept = mysqli_query($conn,$sql_dept) or die("Error:Could not connect");  
        $row = mysqli_fetch_assoc($res_dept);
        $dept_id = $row['dept_id'];

        // update salary
        $sql_sal = "update salary set salary = $salary where sal_id=$sal_id";
        mysqli_query($conn, $sql_sal) or die(mysqli_error($conn));

        // update position and department
        $sql_pos = "UPDATE position set p_name = '$name', dept_id = $dept_id where p_id = $id";
        mysqli_query($conn, $sql_pos) or die(mysqli_error($conn));

        header("location:./positions");
    } 
    else header("location:./positions");
?>
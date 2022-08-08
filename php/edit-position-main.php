<?php
    if(isset($_POST['edit-position'])) {
        include('config.php');
        $name = $_POST['name'];
        $id = $_POST['p_id'];
        $salary = $_POST['salary'];
        $dept_name = $_POST['department'];

        // fetch salary id
        $sql = "select salary.sal_id
                       FROM position
                       INNER JOIN salary on position.sal_id = salary.sal_id
                       where p_id = $id";
        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

        $data = mysqli_fetch_assoc($res);
        $sal_id = $data['sal_id'];

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

        header("location:./positions.php");
    } 
    else header("location:./positions.php");
?>
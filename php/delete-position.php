<?php
    if(isset($_POST['delete_position'])) {
        include('config.php');
        $p_id = $_POST['p_id'];
        $sql = "delete from position where p_id=$p_id";
        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        header('location:./positions');
    }
    else header("location:./positions");
?>
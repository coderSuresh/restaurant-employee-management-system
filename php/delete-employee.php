<?php
    if(isset($_POST['delete_employee'])) {
        include('config.php');
        $emp_id = $_POST['emp_id'];

        // fetch IDs of respective contact and address
        $sql_fetch_id = "select contact.ct_id, 
                                address.addr_id 
                                from employee
                                inner join contact on employee.ct_id = contact.ct_id
                                inner join address on employee.addr_id = address.addr_id
                                where employee.emp_id = $emp_id";

        $res_fetch_id = mysqli_query($conn, $sql_fetch_id) or die("Could not fetch id " . mysqli_error($conn));
        $row_id = mysqli_fetch_assoc($res_fetch_id);

        $ct_id = $row_id['ct_id'];
        $addr_id = $row_id['addr_id'];

        // delete respective address
        $sql_addr = "delete from address where addr_id = $addr_id";
        mysqli_query($conn, $sql_addr)  or die("Could not delete address " . mysqli_error($conn));

        // delete respective phone number
        $sql_ct = "delete from contact where ct_id = $ct_id";
        mysqli_query($conn, $sql_ct)  or die("Could not delete contact " . mysqli_error($conn));

        // delete employee
        $sql = "delete from employee where emp_id=$emp_id";
        mysqli_query($conn, $sql) or die("Could not delete from database.");

        header('location:./employees.php');
    }
    else header("location:./employees.php");
?>
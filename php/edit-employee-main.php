<?php
    if(isset($_POST['edit-employee'])) {
        include('config.php');
        $name = $_POST['name'];
        $address = $_POST['address'];
        $addr_id = $_POST['addr_id'];
        $phone = $_POST['phone'];
        $ct_id = $_POST['ct_id'];
        $department = $_POST['department'];
        $position = $_POST['position'];
        $emp_id = $_POST['emp_id'];      

        $sql_dept = "select * from department where dept_name = '$department'";
        $res_dept = mysqli_query($conn,$sql_dept) or die("Error:Could not connect");  
        $row = mysqli_fetch_assoc($res_dept);
        $dept_id = $row['dept_id'];

        // fetch position id
        $sql_pos = "select p_id from position where p_name='$position'";
        $res_pos  = mysqli_query($conn,$sql_pos) or die("Error:Could not connect");  
        $row = mysqli_fetch_assoc($res_pos);
        $p_id = $row['p_id'];
        if(!preg_match("/^[A-Z a-z]{2,30}$/", $name))
    {
         $_SESSION["invalid_name"] = "Employee name sould contain alphabaet only";
         header("Location:employees");
    }
    
    else if(!preg_match("/^[0-9A-Z a-z]{2,30}$/", $address))
    {
        $_SESSION["invalid_address"] = "Address shouldn't contain special characters";
        header("Location:employees");
    }
    else if(!preg_match("/^[0-9]{10}$/", $phone))
    {
        $_SESSION["invlaid_phone"] = "Phone number shouldn't contain alphabaet";
        header("Location:employees");
    }
    else
    {      
        // update contact
        $sql_ct = "update contact set ct_number = $phone where ct_id = $ct_id";
        mysqli_query($conn, $sql_ct) or die(mysqli_error($conn));

        // update address
        $sql_addr = "update address set addr_name = '$address' where addr_id = $addr_id";
        mysqli_query($conn, $sql_addr) or die(mysqli_error($conn));

        // update name, department & position ids
        $sql = "update employee set emp_name = '$name', dept_id = $dept_id, p_id = $p_id where emp_id = $emp_id";
        mysqli_query($conn, $sql) or die(mysqli_error($conn));
        header("location:./employees");
    }              
    } 
    else header("location:./employees");
?>
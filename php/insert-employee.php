<?php
session_start();
@include('config.php');
if (isset($_POST['add-employee'])){
    $emp_phone=mysqli_real_escape_string($conn, $_POST['phone']);
    $emp_address=mysqli_real_escape_string($conn, $_POST['address']);
    $emp_name = mysqli_real_escape_string($conn, $_POST['name']); 
    $dep_name = mysqli_real_escape_string($conn, $_POST['department']);
    $pos_name = mysqli_real_escape_string($conn, $_POST['position']);

    if(!preg_match("/^[A-Z a-z]{2,30}$/", $emp_name))
    {
         $_SESSION["invalid_name"] = "Employee name sould contain alphabaet only";
         header("Location:add-employee.php");
    }
    
    else if(!preg_match("/^[0-9A-Z a-z]{2,30}$/", $emp_address))
    {
        $_SESSION["invalid_address"] = "Address shouldn't contain special characters";
        header("Location:add-employee.php");
    }
    else if(!preg_match("/^[0-9]{10}$/", $emp_phone))
    {
        $_SESSION["invlaid_phone"] = "Phone number shouldn't contain alphabaet";
        header("Location:add-employee.php");
    }
    else 
    {
        $sql2 = "INSERT INTO contact values(default,$emp_phone)";
        $result3 = mysqli_query($conn,$sql2) or die("Error:Could not connect"); 
        $phone_id= mysqli_insert_id($conn);
            
        $sql1 = "INSERT INTO address values(default,'$emp_address')";
        $result2 = mysqli_query($conn,$sql1) or die("Error:Could not connect");
        $addr_id= mysqli_insert_id($conn);

        $sql3 = "select dept_id from department where dept_name='$dep_name'";//kun deparment ko id
        $result4 = mysqli_query($conn,$sql3) or die("Error:Could not connect");  
        $row = mysqli_fetch_assoc($result4);
        $dept_id = $row['dept_id'];
    
        $sql4 = "select p_id from position where p_name='$pos_name'";//kun position ko id
        $result5 = mysqli_query($conn,$sql4) or die("Error:Could not connect");  
        $row = mysqli_fetch_assoc($result5);
        $pos_id = $row['p_id'];   

        $sql = "INSERT INTO employee values(default,'$emp_name','.$phone_id.','.$addr_id.',$dept_id,$pos_id)"; 
        $result1 = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        
        if($result1&&$result2&&$result3&&$result4&&$result5)
        {
            $_SESSION['employee-insert'] = "Inserted succesfully";
            header("Location:add-employee.php");       
        }
        else echo "Failed";        
    } 

  
}
else
{
   header("Location:add-employee.php");
}
?>
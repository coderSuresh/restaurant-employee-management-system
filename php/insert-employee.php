<?php
session_start();
@include('config.php');
if (isset($_POST['add-employee']))
{      
    
    $emp_address=mysqli_real_escape_string($conn, $_POST['address']);
    $sql1 = "INSERT INTO address values(default,'$emp_address')";
    $result2 = mysqli_query($conn,$sql1) or die("Error:Could not connect");

    $emp_phone=mysqli_real_escape_string($conn, $_POST['phone']);
    $sql2 = "INSERT INTO contact values(default,$emp_phone)";
    $result3 = mysqli_query($conn,$sql2) or die("Error:Could not connect");    
       
    $dep_name = mysqli_real_escape_string($conn, $_POST['department']);
    $sql3 = "select dept_id from department where dept_name='$dep_name'";//kun deparment ko id
    $result4 = mysqli_query($conn,$sql3) or die("Error:Could not connect");  
    $row = mysqli_fetch_assoc($result4);
    $dept_id = $row['dept_id'];
    

    $pos_name = mysqli_real_escape_string($conn, $_POST['position']);
    $sql4 = "select p_id from position where p_name='$pos_name'";//kun deparment ko id
    $result5 = mysqli_query($conn,$sql4) or die("Error:Could not connect");  
    $row = mysqli_fetch_assoc($result5);
    $pos_id = $row['p_id'];


    if($result2&&$result3&&$result4&&$result5)
    {
        $_SESSION['employee-insert'] = "Inserted succesfully";
       //  header("Location:add-employee.php");       
         $addr_id= mysqli_insert_id($conn);//Get Id from Database
         $phone_id= mysqli_insert_id($conn);
         $emp_name =mysqli_real_escape_string($conn, $_POST['name']); 
         $sql = "INSERT INTO employee(emp_id,emp_name,ct_id,addr_id,dept_id,p_id) values(default,'$emp_name','".$phone_id."','".$addr_id."',$dept_id,$pos_id)";     
         echo $pos_id;
         echo $dept_id;    
         $result1 = mysqli_query($conn,$sql) or die("Error:Could not connect");
    }
    else{
        echo "Result fail";
    }

}
else
{
   //header("Location:add-employee.php");
}
?>
// $query1= "INSERT INTO employee ( username, email,...)
//             VALUES ('".$_POST["username"]."', ...)";
//         if($result1 = mysql_query($query1))
//         {
//             $emp_id = mysql_insert_id(); // last created id by above query

//             $query2= "INSERT INTO dept ( emp_id, dept_name, ...)
//             VALUES ('".$emp_id."', '".$_POST["dept_name"]."',...)";

//             if($result2 = mysql_query($query2))
//             {
//                 //success msg
//             }
//         }
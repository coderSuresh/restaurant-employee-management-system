<?php session_start();
      include('config.php');
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Suresh Dahal, Parash Kumar Bhandari">
    <meta name="description"
        content="Restaurant employee management system admin dashboard to store and manage employee records">
    <title>Edit Employee</title>
    <link rel="stylesheet" href="../styles/style.css">
    <script src="../js/app.js" defer></script>
</head>

<body>
    <main>
        <!-- ======siderbar start====== -->
         <?php include('sidebar.php'); ?>
        <!-- ======siderbar end====== -->

        <!-- ======main body start====== -->
        <div class="body">
                <?php include('header.php'); ?>
        
            <div class="table-container">
                <?php
               

                    if(isset($_POST['edit_employee'])) {
                        $_SESSION['id'] = $_POST['emp_id'];                       
                    }
                      $emp_id = $_SESSION['id'];
                        $sql = "select employee.emp_id, 
                                    employee.emp_name, 
                                    department.dept_name,
                                    position.p_name, 
                                    salary.salary, 
                                    address.addr_name, 
                                    address.addr_id,
                                    contact.ct_number,
                                    contact.ct_id
                                    from employee
                                    INNER JOIN department on employee.dept_id = department.dept_id
                                    INNER JOIN position on employee.p_id = position.p_id
                                    INNER JOIN salary on position.sal_id = salary.sal_id
                                    INNER JOIN address on employee.addr_id = address.addr_id
                                    INNER JOIN contact on employee.ct_id = contact.ct_id
                                    where employee.emp_id = $emp_id";
                        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                        $row = mysqli_fetch_assoc($res);
                ?>
                <form action="./edit-employee-main" method="post" class="add-form">
                     <p>
                    <?php
                        
                        if(isset($_SESSION["invalid_name"]))
                        {
                            echo $_SESSION["invalid_name"];
                            unset($_SESSION["invalid_name"]);
                        }
                       if(isset($_SESSION["invalid_address"]))
                        {
                            echo $_SESSION["invalid_address"];
                            unset($_SESSION["invalid_address"]);
                        }
                       if(isset($_SESSION["invalid_phone"]))
                        {
                            echo $_SESSION["invalid_phone"];
                            unset($_SESSION["invalid_phone"]);
                        }
                      
                        
                    ?>
                </p>
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="<?php echo $row['emp_name']; ?>">
                    <label for="address">Address:</label>
                    <input type="text" name="address" value="<?php echo $row['addr_name']; ?>">
                    <label for="tel">Phone:</label>
                    <input type="tel" name="phone" value="<?php echo $row['ct_number']; ?>">
                    <label for="department">Department:</label>
                    <select name="department" id="department">
                    <?php
                        // select all department
                        $sql_dept = "SELECT dept_name FROM department";
                        $res_dept = mysqli_query($conn, $sql_dept);

                       while ($data=mysqli_fetch_assoc($res_dept)) {?>
                        <option value="<?php echo $data['dept_name'];?>" <?php if($row['dept_name']===$data['dept_name']) echo "selected";?>><?php echo $data['dept_name'];?></option>
                      <?php }
                       ?>                      
                    </select>
                    <label for="department">Position:</label>
                    <select name="position" id="position" required>
                        <?php
                       $sql = "SELECT p_name FROM position";
                       $res = mysqli_query($conn, $sql);
                       while ($data=mysqli_fetch_assoc($res)) {?>
                        <option value="<?php echo $data['p_name'];?>" <?php if($row['p_name']===$data['p_name']) echo "selected";?>><?php echo $data['p_name'];?></option>
                      <?php }
                       ?>   
                   </select>

                    <input type="hidden" name="ct_id" value = "<?php echo $row['ct_id']; ?>">
                    <input type="hidden" name="emp_id" value = "<?php echo $row['emp_id']; ?>">
                    <input type="hidden" name="addr_id" value = "<?php echo $row['addr_id']; ?>">
                    <input type="submit" value="Edit Employee" name="edit-employee">

                </form>
            </div>
        </div>
        <!-- ======main body end====== -->
    </main>
</body>

</html>
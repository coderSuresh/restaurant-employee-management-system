<?php 
    session_start();                    
    $_SESSION['which-page'] = "Departments";
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
    <title>Departments</title>
    <link rel="stylesheet" href="../styles/style.css">
    <script src="../js/app.js" defer></script>
</head>

<body>
    <main>
        <!-- ======siderbar start====== -->
     <?php 
        include('sidebar.php'); 
     ?>
        <!-- ======siderbar end====== -->

        <!-- ======main body start====== -->
        <div class="body">
              <?php include('header.php'); 
                if(isset($_SESSION['non-empty-dept'])) { 
                    echo "<script>
                          alert('Can not delete non-empty department! Please delete associated employees and positions first.');
                          </script>";
                  }
              ?>
            <div class="table-container">
                <div class="grid-container">
                     <?php
                        include('config.php');
                        $sql = "select dept_id, dept_name from department";
                        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                        if(mysqli_num_rows($res) > 0) {
                        while($row = mysqli_fetch_assoc($res)) {
                    ?>
                    <div class="department-grid-item">
                        <h2><?php echo $row['dept_name']; ?></h2>
                        <hr>
                        <div class="department-grid-employee-count">
                            <h2>
                                <?php
                                    $dept_name = $row['dept_name'];
                                    $sql_emp_no = "select count(employee.emp_name) as total
                                                   from department
                                                   inner join employee on department.dept_id = employee.dept_id
                                                   where dept_name = '$dept_name'";

                                    $res_emp_no = mysqli_query($conn, $sql_emp_no) or die(mysqli_error($conn));
                                    $data = mysqli_fetch_assoc($res_emp_no);
                                    echo $data['total'];
                                ?>
                            </h2>
                            <p>Employees</p>
                        </div>
                        <div class="overlay">
                            <!-- ======edit department====== -->
                            <form action="./edit-department.php" method="post">
                                <input type="hidden" name="dept_id" value="<?php echo $row['dept_id']; ?>">
                                <input type="submit" name="edit_department" value="Edit">
                            </form>
                            <!-- =======view department====== -->
                             <form action="./view-department.php" method="post">
                                <input type="hidden" name="dept_id" value="<?php echo $row['dept_id']; ?>">
                                <input type="submit" name="view_department" value="View">
                            </form>
                            <!-- ======delete department====== -->
                            <form action="./delete-department.php" method="post">
                              <?php   
                                $_SESSION['dept_id'] = $row['dept_id'];
                              ?>
                    
                                
                                <input type="hidden" name="dept_id" value="<?php echo $_SESSION['dept_id']; ?>">
                                <input type="submit" name="delete_department" value="Delete" class="delete_warn">
                            </form>
                        </div>
                    </div>
                    <?php 
                        }
                    } else echo "No records found";
                    ?>
                </div>
            </div>
        </div>
        <!-- ======main body end====== -->
    </main>
</body>

</html>
<?php unset($_SESSION['non-empty-dept']); ?>
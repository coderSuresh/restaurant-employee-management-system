<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Suresh Dahal, Parash Kumar Bhandari">
    <meta name="description"
        content="Restaurant employee management system admin dashboard to store and manage employee records">
    <title>Positions</title>
    <link rel="stylesheet" href="../styles/style.css">
    <script src="../js/app.js" defer></script>
</head>

<body>
    <main>
        <!-- ======siderbar start====== -->
         <?php @include('sidebar.php'); ?>
        <!-- ======siderbar end====== -->

        <!-- ======main body start====== -->
        <div class="body">
                <?php @include('header.php'); ?>

            <div class="table-container">
                <!--======table starts======-->
                <table>
                    <tr>
                        <th>SN</th>
                        <th>Position</th>
                        <th>Department</th>
                        <th>Salary</th>
                        <th>Total Employees</th>
                        <th>Action</th>
                    </tr>

                    <?php
                        include("config.php");
                        $sql = "SELECT salary.salary, 
                                position.p_name, 
                                department.dept_name
                                from position
                                inner join salary on position.sal_id = salary.sal_id
                                inner join department on position.dept_id = department.dept_id
                                order by dept_name ASC";
                        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

                        $i = 1;
                        while($row = mysqli_fetch_assoc($res)) {
                    ?>

                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['p_name'];?></td>
                        <td><?php echo $row['dept_name'];?></td>
                        <td><?php echo $row['salary'];?></td>
                        <td>

                            <?php
                                $pos_name = $row['p_name'];
                                $sql_emp_no = "SELECT COUNT(employee.emp_name) as total FROM position INNER JOIN employee on position.p_id = employee.p_id where position.p_name = '$pos_name'";
                                $result = mysqli_query($conn, $sql_emp_no) or die(mysqli_error($conn));
                                $row = mysqli_fetch_assoc($result);
                                echo $row['total'];
                            ?>

                        </td>
                        <!-- *****action menu start***** -->
                        <td class="action">
                            <div class="action-menu">
                                <img src="../images/options.svg" alt="action menu">
                                <div class="action-menu-items">
                                    <span class="edit"><a href="./edit-position.php">Edit</a></span>
                                    <span class="delete"><a href="#">Delete</a></span>
                                </div>
                            </div>
                        </td>
                        <!-- *****action menu end***** -->
                    </tr>

                    <?php
                        $i++;
                        }
                    ?>
                </table>
                <!--======table ends======-->
            </div>
        </div>
        <!-- ======main body end====== -->
    </main>
</body>

</html>
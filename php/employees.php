<?php session_start();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Suresh Dahal, Parash Kumar Bhandari">
    <meta name="description"
        content="Restaurant employee management system admin dashboard to store and manage employee records">
    <title>Employees Record</title>
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

            <div class="filter-row">
                <!-- ======filter section start====== -->
                <div class="filter-drop-menu">
                     <form action="#" method="post">
                        <select name="sort-by" value="Sort by">
                            <option name="latest-added" value="latest-added">Latest added</option>
                            <option name="first-added" value="first-added">First added</option>
                            <option name="a-z" value="a-z">Name (A-Z)</option>
                            <option name="z-a" value="z-a">Name (Z-A)</option>
                        </select>
                    </form>
                </div>
                <!-- ======filter section end====== -->

                <!-- ======search start -->
                <form action="./search.php" method="post" class="form search-form">
                    <div class="search">
                        <input type="text" name="search" placeholder="Search...">
                        <button type="submit" name="search-icon">
                            <img src="../images/search.svg" alt="search">
                        </button>
                    </div>
                </form>
                <!-- ======search end====== -->
            </div>

            <div class="table-container">
                <!--======table starts======-->
                <table>
                    <tr>
                        <th>SN</th>
                        <th>Employee Name</th>
                        <th>Department</th>
                        <th>Position</th>
                        <th>Salary</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>

                    <?php
                        include("config.php");
                        if(isset($_SESSION['search-query'])) {
                            $name = $_SESSION['search-query'];
                            $sql = "select employee.emp_id, 
                                           employee.emp_name, 
                                           department.dept_name, 
                                           position.p_name, 
                                           salary.salary, 
                                           address.addr_name, 
                                           contact.ct_number
                                           from employee
                                           INNER JOIN department on employee.dept_id = department.dept_id
                                           INNER JOIN position on employee.p_id = position.p_id
                                           INNER JOIN salary on position.sal_id = salary.sal_id
                                           INNER JOIN address on employee.addr_id = address.addr_id
                                           INNER JOIN contact on employee.ct_id = contact.ct_id
                                           where employee.emp_name like '%$name%'
                                           order by employee.emp_id desc";
                        } 
                        else if(isset($_SESSION['dept_emp_list'])) {
                            $dept_id = $_SESSION['dept_emp_list'];
                             $sql = "select employee.emp_id, 
                                            employee.emp_name, 
                                            department.dept_name, 
                                            position.p_name, 
                                            salary.salary, 
                                            address.addr_name, 
                                            contact.ct_number
                                            from employee
                                            INNER JOIN department on employee.dept_id = department.dept_id
                                            INNER JOIN position on employee.p_id = position.p_id
                                            INNER JOIN salary on position.sal_id = salary.sal_id
                                            INNER JOIN address on employee.addr_id = address.addr_id
                                            INNER JOIN contact on employee.ct_id = contact.ct_id
                                            where department.dept_id = $dept_id
                                            ORDER BY employee.emp_id DESC";
                        }
                        else {
                            $sql = "select employee.emp_id, 
                                           employee.emp_name, 
                                           department.dept_name, 
                                           position.p_name, 
                                           salary.salary, 
                                           address.addr_name, 
                                           contact.ct_number
                                           from employee
                                           INNER JOIN department on employee.dept_id = department.dept_id
                                           INNER JOIN position on employee.p_id = position.p_id
                                           INNER JOIN salary on position.sal_id = salary.sal_id
                                           INNER JOIN address on employee.addr_id = address.addr_id
                                           INNER JOIN contact on employee.ct_id = contact.ct_id
                                           ORDER BY employee.emp_id DESC";
                        }
                        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

                        if(mysqli_num_rows($res) > 0) {
                            $i = 1;
                            while($row = mysqli_fetch_assoc($res)) {
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['emp_name']; ?></td>
                        <td><?php echo $row['dept_name'];?></td>
                        <td><?php echo $row['p_name'];?></td>
                        <td><?php echo $row['salary'];?></td>
                        <td><?php echo $row['addr_name'];?></td>
                        <td><?php echo $row['ct_number'];?></td>

                        <!-- *****action menu start***** -->
                        <td class="action">
                            <div class="action-menu">
                                <img src="../images/options.svg" alt="action menu">
                                <div class="action-menu-items">
                                    <form action="./edit-employee.php" method="post">
                                            <input type="hidden" name="emp_id" value = "<?php echo $row['emp_id']; ?>">
                                            <input type="submit" name="edit_employee" value="Edit">
                                    </form>
                                    
                                    <form action="./delete-employee.php" method="post">
                                        <input type="hidden" name="emp_id" value = "<?php echo $row['emp_id']; ?>">
                                        <input type="submit" name="delete_employee" value="Delete" class="delete_warn">
                                    </form>
                                </div>
                            </div>
                        </td>
                        <!-- *****action menu end***** -->
                    </tr>
                    <?php
                        $i++;
                        }
                    }
                    else echo "No records found";
                    ?>
                </table>
                <!--======table ends======-->
            </div>
        </div>
        <!-- ======main body end====== -->
    </main>
</body>

</html>
<?php unset($_SESSION['search-query'], $_SESSION['dept_emp_list']);?>
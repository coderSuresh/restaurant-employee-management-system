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
                    <p>Departments</p>
                    <div class="filter-drop-menu-content">
                        <ul>
                        <li><a href="#">Test</a></li>
                        <li>
                            <div class="filter-drop-sub-menu">
                                <p>test with sub test</p>
                               <div class="filter-drop-sub-menu-content">
                                 <ul>
                                    <li><a href="#">sub test 1</a></li>
                                    <li><a href="#">sub test 2</a></li>
                                    <li><a href="#">sub test 3</a></li>
                                    <li><a href="#">sub test 4</a></li>
                                    <li><a href="#">sub test 5</a></li>
                                </ul>
                               </div>
                            </div>
                        </li>
                        <li><a href="#">Test</a></li>
                        <li><a href="#">Test</a></li>
                        <li><a href="#">Test</a></li>
                    </ul>
                    </div>
                </div>
                <!-- ======filter section end====== -->

                <!-- ======search start -->
                <form action="#" method="post" class="form search-form">
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
                        $sql = "select employee.emp_name, 
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
                                INNER JOIN contact on employee.ct_id = contact.ct_id";
                        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

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
                                    <span class="edit"><a href="./edit-employee.php">Edit</a></span>
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
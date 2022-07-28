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
                <!-- <div class="filter-drop-menu">
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
                </div> -->
                <!-- ======filter section end====== -->

                <!-- ======search start -->
                <!-- <form action="#" method="post" class="form search-form">
                    <div class="search">
                        <input type="text" name="search" placeholder="Search...">
                        <button type="submit" name="search-icon">
                            <img src="../images/search.svg" alt="search">
                        </button>
                    </div>
                </form> -->
                <!-- ======search end====== -->
            </div>

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
                    <tr>
                        <td>1</td>
                        <td>Test Position</td>
                        <td>Test Depart</td>
                        <td>13254</td>
                        <td>69</td>
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
                </table>
                <!--======table ends======-->
            </div>
        </div>
        <!-- ======main body end====== -->
    </main>
</body>

</html>
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
    <link rel="stylesheet" href="./styles/style.css">
    <script src="./js/app.js" defer></script>
</head>

<body>
    <main>
        <!-- ======siderbar start====== -->
         <?php @include('sidebar.php'); ?>
        <!-- ======siderbar end====== -->

        <!-- ======main body start====== -->
        <div class="body">
            <header>
                <h1><a href="./index.html">Dashboard</a></h1>
                <div class="logout">
                    <img src="./images/log-out.svg" alt="log out" class="logout">
                    <p>Log out</p>
                </div>
            </header>

            <div class="filter-row">
                <!-- ======filter section start====== -->
                <form action="#" method="post" class="form emp-form">
                    <select name="department-dropdown" id="department-dropdown">
                        <option id="department" value="Department" selected>Department</option>
                        <option id="kitchen" value="Kitchen">Kitchen</option>
                        <option id="cleaning" value="Cleaning">Cleaning</option>
                        <option id="delivery" value="Delivery">Delivery</option>
                        <option id="bar" value="bar">Bar</option>
                        <option id="managerial" value="Managerial">Managerial</option>
                    </select>
                    <select name="position-dropdown" id="position-dropdown">
                        <option id="position" value="position" selected>Position</option>
                        <option id="kitchen_sub" value="Kitchen">Kitchen</option>
                        <option id="cleaning_sub" value="Cleaning">Cleaning</option>
                        <option id="delivery_sub" value="Delivery">Delivery</option>
                        <option id="bar_sub" value="bar">Bar</option>
                        <option id="managerial_sub" value="Managerial">Managerial</option>
                    </select>

                    <input type="submit" name="Search" id="emp-filter" value="Filter">
                </form>
                <!-- ======filter section end====== -->

                <!-- ======search start -->
                <form action="#" method="post" class="form search-form">
                    <div class="search">
                        <input type="text" name="search" placeholder="Search...">
                        <button type="submit" name="search-icon">
                            <img src="./images/search.svg" alt="search">
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
                        <th>Salary</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><a href="#" class="emp-name">Test Name</a></td>
                        <td>Test Depart</td>
                        <td>13254</td>
                        <td>Test Addr</td>
                        <td>9856521457</td>
                        <!-- *****action menu start***** -->
                        <td class="action">
                            <div class="action-menu">
                                <img src="./images/options.svg" alt="action menu">
                                <div class="action-menu-items">
                                    <span class="edit"><a href="./edit-employee.html">Edit</a></span>
                                    <span class="delete"><a href="#">Delete</a></span>
                                </div>
                            </div>
                        </td>
                        <!-- *****action menu end***** -->
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Test Name</td>
                        <td>Test Depart</td>
                        <td>13254</td>
                        <td>Test Addr</td>
                        <td>9856521457</td>
                        <!-- *****action menu start***** -->
                        <td class="action">
                            <div class="action-menu">
                                <img src="./images/options.svg" alt="action menu">
                                <div class="action-menu-items">
                                    <span class="edit"><a href="./edit-employee.html">Edit</a></span>
                                    <span class="delete"><a href="#">Delete</a></span>
                                </div>
                            </div>
                        </td>
                        <!-- *****action menu end***** -->
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Test Name</td>
                        <td>Test Depart</td>
                        <td>13254</td>
                        <td>Test Addr</td>
                        <td>9856521457</td>
                        <!-- *****action menu start***** -->
                        <td class="action">
                            <div class="action-menu">
                                <img src="./images/options.svg" alt="action menu">
                                <div class="action-menu-items">
                                    <span class="edit"><a href="./edit-employee.html">Edit</a></span>
                                    <span class="delete"><a href="#">Delete</a></span>
                                </div>
                            </div>
                        </td>
                        <!-- *****action menu end***** -->
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Test Name</td>
                        <td>Test Depart</td>
                        <td>13254</td>
                        <td>Test Addr</td>
                        <td>9856521457</td>
                        <!-- *****action menu start***** -->
                        <td class="action">
                            <div class="action-menu">
                                <img src="./images/options.svg" alt="action menu">
                                <div class="action-menu-items">
                                    <span class="edit"><a href="./edit-employee.html">Edit</a></span>
                                    <span class="delete"><a href="#">Delete</a></span>
                                </div>
                            </div>
                        </td>
                        <!-- *****action menu end***** -->
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Test Name</td>
                        <td>Test Depart</td>
                        <td>13254</td>
                        <td>Test Addr</td>
                        <td>9856521457</td>
                        <!-- *****action menu start***** -->
                        <td class="action">
                            <div class="action-menu">
                                <img src="./images/options.svg" alt="action menu">
                                <div class="action-menu-items">
                                    <span class="edit"><a href="./edit-employee.html">Edit</a></span>
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
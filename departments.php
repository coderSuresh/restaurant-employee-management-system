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
              <?php @include('header.php'); ?>
            <div class="table-container">
                <div class="grid-container">
                    <div class="department-grid-item">
                        <h2>Kitchen</h2>
                        <hr>
                        <div class="department-grid-employee-count">
                            <h2>69</h2>
                            <p>Employees</p>
                        </div>
                        <div class="overlay">
                            <a href="./edit-department.html">
                                <span>Edit</span>
                            </a>
                            <a href="./employees.html">
                                <span>View</span>
                            </a>
                            <a href="#">
                                <span>Delete</span>
                            </a>
                        </div>
                    </div>

                    <div class="department-grid-item">
                        <h2>Kitchen</h2>
                        <hr>
                        <div class="department-grid-employee-count">
                            <h2>69</h2>
                            <p>Employees</p>
                        </div>
                        <div class="overlay">
                            <a href="./edit-department.html">
                                <span>Edit</span>
                            </a>
                            <a href="./employees.html">
                                <span>View</span>
                            </a>
                            <a href="#">
                                <span>Delete</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ======main body end====== -->
    </main>
</body>

</html>
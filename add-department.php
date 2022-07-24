<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Suresh Dahal, Parash Kumar Bhandari">
    <meta name="description"
        content="Restaurant employee management system admin dashboard to store and manage employee records">
    <title>Add Department</title>
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
            <div class="table-container">
                <form action="#" method="post" class="add-form add-department">
                    <label for="name">Department Name:</label>
                    <input type="text" name="name" id="name">

                    <input type="submit" value="Add Department" name="add-department">

                </form>
            </div>
        </div>
        <!-- ======main body end====== -->
    </main>
</body>

</html>
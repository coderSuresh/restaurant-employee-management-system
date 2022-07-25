<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Suresh Dahal, Parash Kumar Bhandari">
    <meta name="description"
        content="Restaurant employee management system admin dashboard to store and manage employee records">
    <title>Edit Department</title>
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
                <form action="#" method="post" class="add-form add-department">
                    <label for="name">Department Name:</label>
                    <input type="text" name="name" id="name">

                    <input type="submit" value="Edit Department" name="edit-department">

                </form>
            </div>
        </div>
        <!-- ======main body end====== -->
    </main>
</body>

</html>
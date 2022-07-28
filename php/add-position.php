<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Suresh Dahal, Parash Kumar Bhandari">
    <meta name="description"
        content="Restaurant employee management system admin dashboard to store and manage employee records">
    <title>Add Position</title>
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
                <form action="#" method="post" class="add-form">
                    <label for="name">Department:</label>
                    <select name="department" id="department">
                        <option value="kitchen">Kitchen</option>
                        <option value="kitchen">Kitchen</option>
                        <option value="kitchen">Kitchen</option>
                        <option value="kitchen">Kitchen</option>
                        <option value="kitchen">Kitchen</option>
                        <option value="kitchen">Kitchen</option>
                    </select>

                    <label for="name">Position Name:</label>
                    <input type="text" name="name" id="name"> 
                    
                    <label for="name">Salary:</label>
                    <input type="text" name="salary" id="salary">

                    <input type="submit" value="Add Position" name="add-position">

                </form>
            </div>
        </div>
        <!-- ======main body end====== -->
    </main>
</body>

</html>
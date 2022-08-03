<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Suresh Dahal, Parash Kumar Bhandari">
    <meta name="description"
        content="Restaurant employee management system admin dashboard to store and manage employee records">
    <title>Edit Employee</title>
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
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                    <label for="address">Address:</label>
                    <input type="text" name="address" id="address">
                    <label for="tel">Phone:</label>
                    <input type="tel" name="phone" id="tel">
                    <label for="department">Department:</label>
                    <select name="department" id="department">
                       <?php
                       include('config.php');
                       $sql = "SELECT dept_name FROM department";
                       $res = mysqli_query($conn, $sql);
                       while ($data=mysqli_fetch_array($res)) {?>
                        <option value="<?php echo $data['dept_name'];?>"><?php echo $data['dept_name'];?></option>
                      <?php }
                       ?>                      
                    </select>
                    <label for="department">Position:</label>
                    <select name="position" id="position" required>
                        <?php
                       include('config.php');
                       $sql = "SELECT p_name FROM position";
                       $res = mysqli_query($conn, $sql);
                       while ($data=mysqli_fetch_array($res)) {?>
                        <option value="<?php echo $data['p_name'];?>"><?php echo $data['p_name'];?></option>
                      <?php }
                       ?>   
                   </select>


                    <input type="submit" value="Edit Employee" name="edit-employee">

                </form>
            </div>
        </div>
        <!-- ======main body end====== -->
    </main>
</body>

</html>
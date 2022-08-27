<?php 
    session_start();                    
    $_SESSION['which-page'] = "Add Department";
?>
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
    <link rel="stylesheet" href="../styles/style.css">
    <script src="../js/app.js" defer></script>
</head>

<body>
    <main>
        <!-- ======siderbar start====== -->
      <?php include('sidebar.php'); ?>
        <!-- ======siderbar end====== -->

        <!-- ======main body start====== -->
        <div class="body">
               <?php include('header.php'); ?>
            <div class="table-container">
                <form action="insert-department.php" method="post" class="add-form add-department">
                    <?php                        
                        if(isset($_SESSION["invalid_department"]))
                        {
                           echo $_SESSION["invalid_department"];
                           ?><br>
                            <?php unset($_SESSION["invalid_department"]);
                        }                                              
                    ?>                    
                    <label for="name">Department Name:</label>
                    <input type="text" name="name" id="name" required>

                    <input type="submit" value="Add Department" name="add-department">
                    
                </form>
                   <p>
                        <?php
                            if (isset($_SESSION['deptartment-insert'])) {
                              echo $_SESSION['deptartment-insert'];
                              
                            }
                             
                        ?>
                        
                    </p>
            </div>
        </div>
        <!-- ======main body end====== -->
    </main>
</body>

</html>
<?php
unset($_SESSION['deptartment-insert'], $_SESSION['which-page']); 
?>

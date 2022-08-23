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
       <?php include('sidebar.php'); ?>
        <!-- ======siderbar end====== -->

        <!-- ======main body start====== -->
        <div class="body">
                <?php 
                    include('header.php'); 
                    include('config.php');
                ?>
            <div class="table-container">
                <form action="./edit-department-main" method="post" class="add-form add-department">
                    <p>
                           <?php
                        
                        if(isset($_SESSION["invalid_name"]))
                        {
                            echo $_SESSION["invalid_name"];
                            unset($_SESSION["invalid_name"]);
                        }                
                      
                        
                    ?>
                    </p>
                    <label for="name">Department Name:</label>
                    <input type="text" name="dept-name" value="<?php 
                                                            if(isset($_POST['edit_department'])) {
                                                                $dept_id = $_POST['dept_id'];
                                                                $sql = "select dept_name from department where dept_id = $dept_id";
                                                                $res = mysqli_query($conn, $sql) or die("Could not fetch department name " . mysqli_error($conn));
                                                                $row = mysqli_fetch_assoc($res);
                                                                $dept_name = $row['dept_name'];
                                                                 echo $dept_name; 
                                                            }
                                                        ?>">
                    <input type="hidden" name="dept_id" value="<?php echo $dept_id; ?>">

                    <input type="submit" value="Edit Department" name="edit-department">

                </form>
            </div>
        </div>
        <!-- ======main body end====== -->
    </main>
</body>

</html>
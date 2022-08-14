<?php 
session_start();
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
                <form action="insert-position" method="post" class="add-form">
                      <p>
                            <?php
                        
                        if(isset($_SESSION["invalid_position"]))
                        {
                            echo $_SESSION["invalid_position"];
                            unset($_SESSION["invalid_position"]);
                        }
                       if(isset( $_SESSION["invalid_salary"]))
                        {
                            echo  $_SESSION["invalid_salary"] ;
                            unset($_SESSION["invalid_salary"]);
                        }                   
                    ?>
                    </p>
                    <label for="name">Department:</label>
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
                    <label for="name">Position Name:</label>
                    <input type="text" name="name" id="name" required> 
                    
                    <label for="name">Salary:</label>
                    <input type="text" name="salary" id="salary" required> 

                    <input type="submit" value="Add Position" name="add-position">

                </form>
                   <p>
                        <?php
                            if (isset($_SESSION['position-insert'])) {
                              echo $_SESSION['position-insert'];
                              
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
unset($_SESSION['position-insert']); 
?>

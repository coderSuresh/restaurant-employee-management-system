<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Suresh Dahal, Parash Kumar Bhandari">
    <meta name="description"
        content="Restaurant employee management system admin dashboard to store and manage employee records">
    <title>Edit Position</title>
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
                <form action="./edit-position-main" method="post" class="add-form">
                    <?php
                        include('config.php');
                        //selected position
                        if(isset($_POST['p_id'])) {
                            $_SESSION['selected_position_id'] = $_POST['p_id'];
                        }

                        //=====get all department======
                        $sql = "select dept_name from department";
                        $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
                        $id = $_SESSION['selected_position_id'];
                        //======get departments with selected position id=======
                        $sql1 = "select department.dept_name,
                                        department.dept_id,
                                        position.p_name,
                                        position.p_id,
                                        salary.salary,
                                        salary.sal_id
                                        from position 
                                        inner join department on position.dept_id = department.dept_id
                                        inner join salary on position.sal_id = salary.sal_id
                                        where position.p_id = $id";
                        $res1 = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
                        $data1 = mysqli_fetch_assoc($res1);
                    ?>
                    <label for="name">Department:</label>
                    <select name="department" id="department">    
                    <?php
                       while ($data=mysqli_fetch_assoc($res)) {
                    ?>
                        <option value="<?php echo $data['dept_name'];?>" <?php if($data['dept_name']===$data1['dept_name']) echo "selected"; ?>><?php echo $data['dept_name'];?></option>
                    <?php
                        }
                    ?>                      
                    </select>

                    <label for="name">Position Name:</label>
                    <input type="text" name="name" value="<?php echo $data1['p_name']; ?>"> 
                    
                    <label for="name">Salary:</label>
                    <input type="text" name="salary" value="<?php echo $data1['salary']; ?>">

                    <input type="hidden" name="sal_id" value = "<?php echo $data1['sal_id']; ?>">
                    <input type="hidden" name="p_id" value = "<?php echo $data1['p_id']; ?>">

                    
                    <input type="submit" value="Edit Position" name="edit-position">

                </form>
            </div>
        </div>
        <!-- ======main body end====== -->
    </main>
</body>

</html>
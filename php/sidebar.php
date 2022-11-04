  <?php @include "verification.php" ?> 
  <aside class="sidebar">
            <div class="menu-container">
                <div class="admin-info">
                    <div>
                        <p class="admin-name">
                            <?php 
                                @include 'config.php';
                                $sql = "select name from admin";
                                $res = mysqli_query($conn, $sql);
                                $data = mysqli_fetch_assoc($res);
                                $name = $data['name'];
                                echo $name;
                            ?>
                        </p>
                        <p class="admin-title">Admin</p>
                    </div>
                </div>
                <img src="../images/menu.svg" alt="menu" class="sidebar-menu">
            </div>
            <hr class="sidebar-hr">
            <div class="sidebar-items">
                <!-- ======employee start======= -->
                <div class="items-container">
                    <a href="#">
                        <img src="../images/employee.svg" alt="employee">
                        <p class="sidebar-label">Employee</p>
                    </a>
                    <span class="tooltip-text">Employee</span>
                </div>
                <hr class="sidebar-hr">
               <div class="items-container">
                     <a href="./add-employee.php">
                        <img src="../images/add.svg" alt="add employee">
                        <p class="sidebar-label">Add Employee</p>
                     </a>
                    <span class="tooltip-text">Add Employee</span>
                </div>
                <div class="items-container">
                    <a href="./employees.php">
                        <img src="../images/view.svg" alt="view employee">
                        <p class="sidebar-label">View Employee</p>
                    </a>
                    <span class="tooltip-text">View Employee</span>
                </div>
                <!-- ======employee end====== -->
                <hr class="sidebar-hr bold-hr">
                <!-- ======department start====== -->
                <div class="items-container">
                    <a href="#">
                        <img src="../images/department.svg" alt="department">
                        <p class="sidebar-label">Department</p>
                    </a>
                    <span class="tooltip-text">Department</span>
                </div>
                <hr class="sidebar-hr">
                <div class="items-container">
                    <a href="./add-department.php">
                        <img src="../images/add.svg" alt="add department">
                        <p class="sidebar-label">Add Department</p>
                    </a>
                    <span class="tooltip-text">Add Department</span>
                </div>
                <div class="items-container">
                    <a href="./departments.php">
                        <img src="../images/view.svg" alt="view department">
                        <p class="sidebar-label">View Department</p>
                    </a>
                    <span class="tooltip-text">View Department</span>
                </div>
                <!-- ======department end====== -->
                <hr class="sidebar-hr bold-hr">
                <!-- ======position start====== -->
                <div class="items-container">
                    <a href="#">
                        <img src="../images/position.svg" alt="position">
                        <p class="sidebar-label">Position</p>
                    </a>
                    <span class="tooltip-text">Position</span>
                </div>
                <hr class="sidebar-hr">
                <div class="items-container">
                    <a href="./add-position.php">
                        <img src="../images/add.svg" alt="add position">
                        <p class="sidebar-label">Add Position</p>
                    </a>
                    <span class="tooltip-text">Add Position</span>
                </div>
                <div class="items-container">
                    <a href="./positions.php">
                        <img src="../images/view.svg" alt="view positions">
                        <p class="sidebar-label">View Position</p>
                    </a>
                    <span class="tooltip-text">View Position</span>
                </div>
            </div>
        </aside>
<header>
    <h1>
        <?php 
            if(isset($_SESSION['which-page'])) echo $_SESSION['which-page']; 
        ?>
        <a href="./departments.php">Home</a>
    </h1>
    <a href="./logout.php">
        <div class="logout">
            <img src="../images/log-out.svg" alt="log out" class="logout">
            <p>Log out</p>
        </div>  
    </a>          
</header>
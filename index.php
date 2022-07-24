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
    <title>Login</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="./js/app.js" defer></script>
</head>

<body>

    <main class="login-main">
        <div class="left">
            <img src="./images/login.svg" alt="login vector graphics">
        </div>
        <div class="right">
            <div class="bar"></div>
            <h1>Login as an Admin</h1>
            <p> 
                <?php 
                  if (isset($_SESSION['username'])) {
                   echo $_SESSION['username'];
                  }
                  else if (isset($_SESSION['password']))
                    echo $_SESSION['password'];
                ?> 
             </p>            
            <form action="auth.php" method="post" class="">
                <div>
                    <input type="text" name="username" id="username" placeholder="Jane Doe" required>
                    <img src="./images/login-account.svg" alt="account icon">
                </div>
                <div>
                    <input type="password" name="password" id="password" placeholder="xxxxxx" required>
                    <img src="./images/login-pass.svg" alt="password icon">
                </div>
                <input type="submit" name="login" id="login" value="Login">
            </form>
        </div>
    </main>

</body>

</html>
<?php
session_unset();
?>
<?php
session_start();
include ('config.php');
if(isset($_POST['search-icon'])) {
    $search_query = mysqli_real_escape_string($conn, $_POST['search']);
    $_SESSION['search-query'] = $search_query;
    header('location:./employees.php');
} 
else header('location:./employees.php');
?>
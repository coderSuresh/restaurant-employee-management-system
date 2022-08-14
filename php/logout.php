<?php
session_start();
if (isset($_SESSION['success'])) {
    session_destroy();   
}
 header("location:../index");
?>
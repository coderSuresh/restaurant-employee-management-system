<?php
session_start();
include( 'config.php' );
if ( isset( $_POST[ 'edit-department' ] ) ) {  
         
    $dept_id  =  $_SESSION['dept_id'];    
    $new_dept_name = $_POST[ 'dept-name' ];

    if ( !preg_match( "/^[a-z A-Z]{2,30}$/", $new_dept_name ) )
    {
        $_SESSION[ 'invalid_name' ] = 'Department name sould contain characters only';
        header( 'location:edit-department.php' );

    } else {

        $sql = "update department set dept_name = '$new_dept_name' where dept_id = $dept_id";
        mysqli_query( $conn, $sql ) or die( 'Could not update department name ' . mysqli_error( $conn ) );
        header( 'location:./departments.php' );
    }
} else header( 'location:./departments.php' );
?>
<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * Establish a reusable database connection.
 * 
 * @return mysqli The database connection object.
 */
function getDbConnection() {
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $dbname = 'task_manager';

    $conn = mysqli_connect($host, $user, $password, $dbname);

    if (!$conn) {
        die('Connection error: ' . mysqli_connect_error());
    }

    return $conn;
}
?>
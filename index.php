<?php
 error_reporting(E_ALL);
ini_set('display_errors', 1);

 $conn = mysqli_connect('localhost', 'root', '', 'task_manager');

if (!$conn) {
    die('Connection error: ' . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task Manager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <?php include('templates/header.php'); ?>

   <?php include('home.php'); ?>

   <?php include('templates/footer.php'); ?>
</body>
</html>
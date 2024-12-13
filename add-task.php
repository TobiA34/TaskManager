<?php
// Include the reusable database connection file
include('database.php');

// Establish the database connection
$conn = getDbConnection();

// Retrieve form data safely
$title  = $_POST['title'];  
$desc   = $_POST['desc'];
$status = $_POST['status'];

// Validate inputs
if (empty($title) || empty($desc) || empty($status)) {
    die("All fields are required.");
}

 $sql = "INSERT INTO tasks (title, description, status) VALUES (?, ?, ?)";  
$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    die("Error preparing statement: " . mysqli_error($conn));
}

 mysqli_stmt_bind_param($stmt, "sss", $title, $desc, $status);

 if (mysqli_stmt_execute($stmt)) {
       header("Location:index.php");

} else {
    echo "<h3>Error: Unable to add task.</h3>";
    echo "Error details: " . mysqli_error($conn);
}

// Close the statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
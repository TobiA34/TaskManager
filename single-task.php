<?php
// Include the reusable database connection file
include('database.php');

// Check if the 'id' parameter exists in the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $task_id = intval($_GET['id']); // Sanitize the input (convert to integer)

    // Establish the database connection
    $conn = getDbConnection();

    // Prepare the SQL query to fetch the specific task
    $sql = "SELECT * FROM tasks WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "i", $task_id); // Bind the task ID
        mysqli_stmt_execute($stmt); // Execute the query
        $result = mysqli_stmt_get_result($stmt);

        // Fetch the task data
        $task = mysqli_fetch_assoc($result);

        if (!$task) {
            $error = "Task not found.";
        }
    } else {
        die("Error preparing statement: " . mysqli_error($conn));
    }
} else {
    $error = "Invalid or missing task ID.";
}

// Close the database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f9f9f9;
        }
        .task-card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }
        .badge {
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <?php include('templates/header.php'); ?>

    <!-- Task Details -->
    <div class="container mt-5 my-5">
        <?php if (isset($error)): ?>
            <!-- Display Error Message -->
            <div class="alert alert-danger text-center" role="alert">
                <?php echo htmlspecialchars($error); ?>
            </div>
        <?php else: ?>
            <!-- Display Task Details -->
            <div class="card task-card mx-auto p-4" style="max-width: 600px;">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4 text-primary">
                        <?php echo htmlspecialchars($task['title']); ?>
                    </h2>
                    <p class="card-text">
                        <strong>Description:</strong><br>
                        <?php echo nl2br(htmlspecialchars($task['description'])); ?>
                    </p>
                    <p class="card-text">
                        <strong>Status:</strong> 
                        <span class="badge 
                            <?php 
                                if ($task['status'] == 'Pending') echo 'bg-warning';
                                elseif ($task['status'] == 'In Progress') echo 'bg-primary';
                                elseif ($task['status'] == 'Completed') echo 'bg-success';
                            ?>">
                            <?php echo htmlspecialchars($task['status']); ?>
                        </span>
                    </p>
                    <div class="text-center mt-4">
                        <a href="edit-task.php?id=<?php echo $task_id; ?>" class="btn btn-warning me-2">
                            <i class="bi bi-pencil"></i> Edit Task
                        </a>
                        <a href="delete-task.php?id=<?php echo $task_id; ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this task?');">
                            <i class="bi bi-trash"></i> Delete Task
                        </a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- Footer -->
    <?php include('templates/footer.php'); ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
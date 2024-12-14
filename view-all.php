<?php
// Include the reusable database connection file
include('database.php');

// Establish the database connection
$conn = getDbConnection();

// Prepare the SQL query to fetch tasks
$sql = "SELECT * FROM tasks";
$result = mysqli_query($conn, $sql);

// Check for errors
if (!$result) {
    die("Error fetching tasks: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View All Tasks</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Custom Styles -->
    <style>
        body {
            background-color: #f8f9fa;
        }
        h1 {
            color: #0d6efd;
            font-weight: bold;
        }
        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }
        .action-buttons a {
            margin-right: 5px;
            transition: all 0.3s ease-in-out;
        }
        .action-buttons a:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <!-- Header -->
    <?php include('templates/header.php'); ?>

    <!-- Main Container -->
    <div class="container mt-5">
        <h1 class="text-center mb-4">Task List</h1>
        <div class="card shadow rounded">
            <div class="card-body">
                <?php if (mysqli_num_rows($result) > 0): ?>
                <!-- Tasks Table -->
                <div class="table-responsive">
                    <table class="table table-bordered table-hover text-center align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Task Title</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['id']); ?></td>
                                <td><?php echo htmlspecialchars($row['title']); ?></td>
                                <td><?php echo htmlspecialchars($row['description']); ?></td>
                                <td>
                                    <span class="badge 
                                        <?php 
                                            if ($row['status'] == 'Pending') echo 'bg-warning text-dark';
                                            elseif ($row['status'] == 'In Progress') echo 'bg-primary';
                                            elseif ($row['status'] == 'Completed') echo 'bg-success';
                                        ?>">
                                        <?php echo htmlspecialchars($row['status']); ?>
                                    </span>
                                </td>
                                <td class="action-buttons">

                                   <a href="single-task.php?id=<?php echo urlencode($row['id']); ?>" class="btn btn-primary btn-sm">
                                     <i class="bi bi-eye"></i> View
                                    </a>

                                    <a href="edit-task.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil"></i> Edit
                                    </a>

                                    <a href="delete-task.php?id=<?php echo htmlspecialchars($row['id']); ?>" 
                                       class="btn btn-danger btn-sm" 
                                       onclick="return confirm('Are you sure you want to delete this task?');">
                                        <i class="bi bi-trash"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
                <?php else: ?>
                    <!-- No Tasks Found -->
                    <div class="alert alert-warning text-center" role="alert">
                        <strong>No tasks found!</strong> Add a new task <a href="add-task.php" class="alert-link">here</a>.
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include('templates/footer.php'); ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
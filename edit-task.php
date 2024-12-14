<?php
include('database.php');
$conn = getDbConnection();

$title = $description = $status = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM tasks WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        $title = $row['title'];
        $description = $row['description'];
        $status = $row['status'];
    } else {
        // Redirect if task not found
        header("Location: view-all.php?error=task_not_found");
        exit();
    }
} else {
    // Redirect if no task id is provided
    header("Location: view-all.php?error=no_id_provided");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $status = $_POST['status'];

    // Debugging: Check the POST values
    var_dump($_POST);  // You can comment or remove this in production

    $sql = "UPDATE tasks SET title = ?, description = ?, status = ? WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sssi", $title, $description, $status, $id);

    if (mysqli_stmt_execute($stmt)) {
        header("Location: view-all.php?success=task_updated");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Task</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <?php include('templates/header.php'); ?>

  <div class="container mt-5">
    <h1 class="text-center mb-4">Edit Task</h1>

    <!-- Display the Task ID -->
    <div class="mb-3">
        <label for="task-id" class="form-label">Task ID</label>
        <input type="text" class="form-control" id="task-id" value="<?php echo $id; ?>" disabled>
    </div>

    <!-- Edit Task Form -->
    <form class="card p-5 my-5" action="" method="POST">
      <div class="mb-3">
        <label for="title" class="form-label">Task Title</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($title); ?>" required>
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Task Description</label>
        <textarea class="form-control" id="description" name="description" rows="4" required><?php echo htmlspecialchars($description); ?></textarea>
      </div>
      <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" name="status" required>
          <option value="Pending" <?php echo ($status == 'Pending') ? 'selected' : ''; ?>>Pending</option>
          <option value="In Progress" <?php echo ($status == 'In Progress') ? 'selected' : ''; ?>>In Progress</option>
          <option value="Completed" <?php echo ($status == 'Completed') ? 'selected' : ''; ?>>Completed</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Update Task</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <?php include('templates/footer.php'); ?>
</body>
</html>
<?php
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
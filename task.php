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
   <div class="container mt-5">
    <h1 class="text-center">Add a New Task</h1
    >
 <form action="add-task.php" method="POST" class="border border-3 p-5 my-5 rounded">
    <label for="title">Task Title:</label><br>
    <input type="text" id="title" name="title" class="form-control" required><br><br>

    <label for="desc">Task Description:</label><br>
    <textarea id="desc" class="form-control" name="desc" rows="4" required></textarea><br><br>

    <label for="status">Task Status:</label><br>
    <select id="status" name="status" class="form-control" required>
      <option value="Pending">Pending</option>
      <option value="In Progress">In Progress</option>
      <option value="Completed">Completed</option>
    </select><br><br>

    <button type="submit" class="btn btn-primary w-100">Add Task</button>
  </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
     <?php include('templates/footer.php'); ?>

</body>
</html>

 
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Task Manager - Add Task</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom Styles -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    h1 {
      color: #007BFF;
      font-weight: bold;
    }
    .form-container {
      max-width: 600px;
      margin: auto;
    }
    .card {
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      border: none;
    }
    .form-control:focus {
      border-color: #007BFF;
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
  </style>
</head>
<body>
   <?php include('templates/header.php'); ?>

   <!-- Form Container -->
   <div class="container mt-5">
      <h1 class="text-center mb-4">Add a New Task</h1>
      <div class="form-container">
        <!-- Card -->
        <div class="card p-4 rounded">
          <!-- Form -->
          <form action="add-task.php" method="POST">
            <!-- Task Title -->
            <div class="mb-3">
              <label for="title" class="form-label fw-bold">Task Title</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-pencil"></i></span>
                <input type="text" id="title" name="title" class="form-control" placeholder="Enter task title" required>
              </div>
            </div>

            <!-- Task Description -->
            <div class="mb-3">
              <label for="desc" class="form-label fw-bold">Task Description</label>
              <textarea id="desc" name="desc" class="form-control" rows="4" placeholder="Enter task description" required></textarea>
            </div>

            <!-- Task Status -->
            <div class="mb-4">
              <label for="status" class="form-label fw-bold">Task Status</label>
              <select id="status" name="status" class="form-select" required>
                <option value="" disabled selected>Select status</option>
                <option value="Pending">Pending</option>
                <option value="In Progress">In Progress</option>
                <option value="Completed">Completed</option>
              </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary w-100">Add Task</button>
          </form>
        </div>
      </div>
   </div>

   <!-- Bootstrap JS Bundle -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   <?php include('templates/footer.php'); ?>
</body>
</html>
<?php
// Get the current page filename (e.g., "index.php", "task.php")
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Task Manager</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <!-- Home Link -->
        <li class="nav-item">
          <a class="nav-link <?php echo ($currentPage == 'index.php') ? 'active border border-2' : ''; ?>" href="index.php">Home</a>
        </li>
        <!-- Tasks Link -->
        <li class="nav-item">
          <a class="nav-link <?php echo ($currentPage == 'task.php') ? 'active border border-2' : ''; ?>" href="task.php">Tasks</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
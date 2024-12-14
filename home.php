<link href="./css/style.css" rel="stylesheet">

<header class="bg-primary text-light text-center py-5">
  <div class="container">
    <h1 class="display-4 fw-bold">Welcome to Task Manager</h1>
    <p class="lead">Stay organized and productive by managing your tasks effortlessly.</p>
    <a href="task.php" class="btn btn-light btn-lg mt-3">Get Started</a>
  </div>
</header>
<section class="container my-5">
  <h2 class="text-center mb-4">Why Use Task Manager?</h2>
  <div class="row gy-4 text-center">
    <a href="task.php">  
    <div class="col-md-4">
      <div class="p-4 bg-light shadow rounded">
        <img src="https://img.icons8.com/ios-filled/50/000000/add-list.png" alt="Add Tasks">
        <h4 class="mt-3">Create Tasks</h4>
        <p>Easily add tasks with a title, description, and status.</p>
      </div>
        </a>

    </div>
    
  <div class="col-md-4">
  <a href="view-all.php">  
    <div class="p-4 bg-light shadow rounded">
      <img src="https://img.icons8.com/ios-filled/50/000000/view-details.png" alt="View Tasks">
      <h4 class="mt-3">View All Tasks</h4>
      <p>See all tasks at a glance in a simple table format.</p>
    </div>
  </a>
</div>

    <div class="col-md-4">
      <a href="view-all.php">  
      <div class="p-4 bg-light shadow rounded">
        <img src="https://img.icons8.com/ios-filled/50/000000/edit.png" alt="Manage Tasks">
        <h4 class="mt-3">Manage Tasks</h4>
        <p>Edit or delete tasks as needed to stay on top of your work.</p>
      </div>
            </a>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section id="faq" style="padding: 40px 0; background-color: #f9f9f9;">
  <div style="text-align: center; margin-bottom: 20px;">
    <h2>Frequently Asked Questions</h2>
    <p>Find answers to the most commonly asked questions below.</p>
  </div>
  
  <!-- FAQ Container -->
  <div style="max-width: 800px; margin: 0 auto;">
    <div>
      <!-- Question 1 -->
      <button class="faq-toggle" style="width: 100%; text-align: left; background-color: #fff; padding: 15px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 5px; cursor: pointer; font-weight: bold;">
        What is Task Manager?
      </button>
      <div class="faq-answer" style="display: none; padding: 10px; border-left: 3px solid #007BFF; margin-bottom: 10px; background-color: #fff;">
        Task Manager is a tool that helps you create, organize, and manage tasks efficiently, keeping you productive and organized.
      </div>
    </div>

    <div>
      <!-- Question 2 -->
      <button class="faq-toggle" style="width: 100%; text-align: left; background-color: #fff; padding: 15px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 5px; cursor: pointer; font-weight: bold;">
        Is Task Manager free to use?
      </button>
      <div class="faq-answer" style="display: none; padding: 10px; border-left: 3px solid #007BFF; margin-bottom: 10px; background-color: #fff;">
        Yes! Task Manager offers a free version with essential features. We also provide premium plans for advanced functionality.
      </div>
    </div>

    <div>
      <!-- Question 3 -->
      <button class="faq-toggle" style="width: 100%; text-align: left; background-color: #fff; padding: 15px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 5px; cursor: pointer; font-weight: bold;">
        How can I create a task?
      </button>
      <div class="faq-answer" style="display: none; padding: 10px; border-left: 3px solid #007BFF; margin-bottom: 10px; background-color: #fff;">
        Simply click on "Create Task" in the main menu, fill in the details like title, description, and status, and save the task.
      </div>
    </div>

    <div>
      <!-- Question 4 -->
      <button class="faq-toggle" style="width: 100%; text-align: left; background-color: #fff; padding: 15px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 5px; cursor: pointer; font-weight: bold;">
        Can I edit or delete tasks?
      </button>
      <div class="faq-answer" style="display: none; padding: 10px; border-left: 3px solid #007BFF; margin-bottom: 10px; background-color: #fff;">
        Yes, you can easily edit or delete tasks by navigating to the "Manage Tasks" section.
      </div>
    </div>

    <div>
      <!-- Question 5 -->
      <button class="faq-toggle" style="width: 100%; text-align: left; background-color: #fff; padding: 15px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 5px; cursor: pointer; font-weight: bold;">
        Do you offer support for Task Manager?
      </button>
      <div class="faq-answer" style="display: none; padding: 10px; border-left: 3px solid #007BFF; margin-bottom: 10px; background-color: #fff;">
        Absolutely! If you need help, feel free to reach out through our contact form, and we’ll assist you as soon as possible.
      </div>
    </div>
  </div>
</section>

<hr>

<!-- Contact Section -->
<section id="contact" style="padding: 40px 0; background-color: #f8f8f8;">
  <div style="text-align: center; margin-bottom: 20px;">
    <h2>Contact Us</h2>
    <p>Have questions or need help? Reach out to us!</p>
  </div>
  
  <div style="display: flex; justify-content: center; align-items: center;">
    <form action="#" method="POST" style="width: 100%; max-width: 500px; background: #fff; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius: 8px;">
      
      <!-- Name Field -->
      <div style="margin-bottom: 15px;">
        <label for="name" style="display: block; margin-bottom: 5px; font-weight: bold;">Your Name</label>
        <input type="text" id="name" name="name" required placeholder="Enter your name" 
          style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
      </div>
      
      <!-- Email Field -->
      <div style="margin-bottom: 15px;">
        <label for="email" style="display: block; margin-bottom: 5px; font-weight: bold;">Your Email</label>
        <input type="email" id="email" name="email" required placeholder="Enter your email"
          style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px;">
      </div>
      
      <!-- Message Field -->
      <div style="margin-bottom: 15px;">
        <label for="message" style="display: block; margin-bottom: 5px; font-weight: bold;">Message</label>
        <textarea id="message" name="message" rows="5" required placeholder="Write your message here..."
          style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; resize: none;"></textarea>
      </div>
      
      <!-- Submit Button -->
      <div style="text-align: center;">
        <button type="submit" style="padding: 10px 20px; border: none; background-color: #007BFF; color: #fff; border-radius: 4px; cursor: pointer; font-size: 16px;">
          Send Message
        </button>
      </div>
      
    </form>
  </div>
</section>



 <script src="./js/dropdown.js">

</script>

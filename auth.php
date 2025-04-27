<?php include('includes/header.php'); ?>

<section class="auth-wrapper">
  <div class="auth-box" id="authBox">
    <!-- Login Form -->
    <div class="form login-form">
      <h2>Login</h2>
      <form action="#" method="POST">
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Password" required>
        <button type="submit" class="btn">Login</button>
        <p class="switch-form">Don't have an account? <span onclick="toggleForm()">Register</span></p>
      </form>
    </div>

    <!-- Register Form -->
    <div class="form register-form">
      <h2>Register</h2>
      <form action="#" method="POST">
        <input type="text" placeholder="Username" required>
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Password" required>
        <button type="submit" class="btn">Register</button>
        <p class="switch-form">Already have an account? <span onclick="toggleForm()">Login</span></p>
      </form>
    </div>
  </div>
</section>

<?php include('includes/footer.php'); ?>
<script>
function toggleForm() {
  document.getElementById('authBox').classList.toggle('show-register');
}
</script>

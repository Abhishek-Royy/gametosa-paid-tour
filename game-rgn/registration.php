<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gaming Registration</title>
  <link rel="stylesheet" href="registration.css" />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet">
</head>
<body>
  <div class="registration-container">
    <h2>Enter the Arena</h2>
    <form id="registrationForm" action="process_registration.php" method="POST">
      <div class="form-group">
        <label for="username">Gamer Tag</label>
        <input type="text" id="username" name="username" required />
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" name="email" required />
      </div>
      <div class="form-group">
        <label for="password">Create Password</label>
        <input type="password" id="password" name="password" required />
      </div>
      <button type="submit" class="submit-btn">Register</button>
      <div class="success-message" id="successMsg" style="display: none;">Registration successful! Redirecting to payment...</div>
    </form>
  </div>

  <script>
    document.getElementById('registrationForm').addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Get form values
      const username = document.getElementById('username').value;
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;
      
      // Basic validation
      if (username && email && password) {
        // Show success message
        document.getElementById('successMsg').style.display = 'block';
        
        // Store registration data in sessionStorage
        sessionStorage.setItem('registrationData', JSON.stringify({
          username: username,
          email: email
        }));
        
        // Redirect to payment page after a short delay
        setTimeout(() => {
          window.location.href = '../payment.php';
        }, 1500);
      }
    });
  </script>
</body>
</html>
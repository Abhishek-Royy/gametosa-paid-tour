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
    <form id="registrationForm">
      <div class="form-group">
        <label for="username">Gamer Tag</label>
        <input type="text" id="username" required />
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" required />
      </div>
      <div class="form-group">
        <label for="password">Create Password</label>
        <input type="password" id="password" required />
      </div>
      <button type="submit" class="submit-btn">Register</button>
      <div class="success-message" id="successMsg">You're in!</div>
    </form>
  </div>

  <script src="registration.js"></script>
</body>
</html>
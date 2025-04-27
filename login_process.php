<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gametosa";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $referrer = $_POST['referrer'];

    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        
        // Verify password
        if (password_verify($password, $user['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['email'] = $email;
            $_SESSION['logged_in'] = true;

            // Set a success message
            $_SESSION['login_success'] = true;

            // Redirect to the referring page
            header("Location: " . $referrer);
            exit();
        } else {
            $_SESSION['login_error'] = "Invalid password";
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['login_error'] = "User not found";
        header("Location: login.php");
        exit();
    }
}

$conn->close();
?> 
<?php
// User registration logic
public function registerUser($email, $password) {
  // Hash the password
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
  // Save user data in the database
  $query = "INSERT INTO users (email, password) VALUES (?, ?)";
  $stmt = $this->db->prepare($query);
  $stmt->execute([$email, $hashedPassword]);
    // Additional logic or redirect to appropriate page
}
// User login logic
public function loginUser($email, $password) {
  // Retrieve user data from the database
  $query = "SELECT * FROM users WHERE email = ?";
  $stmt = $this->db->prepare($query);
  $stmt->execute([$email]);
<script
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/
 bootstrap.min.js"></script>
 $user = $stmt->fetch();
if ($user && password_verify($password, $user['password'])) {
    // User authentication successful
  } else {
    // Invalid credentials
    // Handle invalid login, show error message, or redirect to login page
} }
?>

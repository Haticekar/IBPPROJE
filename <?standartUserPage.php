Standard User Pages:
// User login logic (similar to the administrator login) // Password update
public function updatePassword($userId, $newPassword) { // Hash the new password
  $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

// Update user password in the database

  $query = "UPDATE users SET password = ? WHERE id = ?";
  $stmt = $this->db->prepare($query);
  $stmt->execute([$hashedPassword, $userId]);
}
// Data viewing (example with players)
public function viewPlayerData() { // Retrieve player data from the database
  $query = "SELECT * FROM players";
  $stmt = $this->db->prepare($query);
  $stmt->execute();
  $players = $stmt->fetchAll();
// Display player data in a grid or list
}

// Announcement display (similar to administrator) // Message sending and handling
public function sendMessage($userId, $message) {
  // Save message in the database
 $query = "INSERT INTO messages (user_id, message) VALUES (?, ?)";
  $stmt = $this->db->prepare($query);
  $stmt->execute([$userId, $message]);
  // Additional logic
}
public function readReply($messageId) {
// Retrieve message reply from the database
$query = "SELECT reply FROM messages WHERE id = ?";
$stmt = $this->db->prepare($query);
  $stmt->execute([$messageId]);
  $reply = $stmt->fetchColumn();
// Display reply to the user

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
    $user = $stmt->fetch();
    if ($user && password_verify($password, $user['password'])) {
        // User authentication successful
    } else {
        // Invalid credentials
        // Handle invalid login, show error message, or redirect to login page
} }
?>
// User registration logic
public function registerUser($email, $password) { // Hash the password
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
// Save user data in the database
  $query = "INSERT INTO users (email, password) VALUES (?, ?)";
  $stmt = $this->db->prepare($query);
  $stmt->execute([$email, $hashedPassword]);
// User login logic
public function loginUser($email, $password) {
    / Retrieve user data from the database
  $query = "SELECT * FROM users WHERE email = ?";
  $stmt = $this->db->prepare($query);
  $stmt->execute([$email]);
  $user = $stmt->fetch();
  if ($user && password_verify($password, $user['password'])) {
    // User authentication successful
  } else {
    // Invalid credentials
} }
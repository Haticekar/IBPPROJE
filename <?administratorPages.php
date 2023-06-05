// Insert user
public function insertUser($name, $email, $role) {
// Insert user into the database
  $query = "INSERT INTO users (name, email, role) VALUES (?, ?, ?)";
  $stmt = $this->db->prepare($query);
  $stmt->execute([$name, $email, $role]);
}
// Update announcement
public function updateAnnouncement($id, $content) {
// Update announcement in the database
$query = "UPDATE announcements SET content = ? WHERE id = ?";
  $stmt = $this->db->prepare($query);
  $stmt->execute([$content, $id]);
}
// Delete user
public function deleteUser($id) { // Delete user from the database
  $query = "DELETE FROM users WHERE id = ?";
  $stmt = $this->db->prepare($query);
  $stmt->execute([$id]);
}
// Read and reply to messages
public function readMessage($messageId) {
  // Retrieve message from the database
  $query = "SELECT * FROM messages WHERE id = ?";
  $stmt = $this->db->prepare($query);
  $stmt->execute([$messageId]);
  $message = $stmt->fetch();
}
public function replyToMessage($messageId, $reply) {
// Update message with reply in the database
  $query = "UPDATE messages SET reply = ? WHERE id = ?";
  $stmt = $this->db->prepare($query);
  $stmt->execute([$reply, $messageId]);

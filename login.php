
<?php
// Intentionally vulnerable training example.
// Never use this authentication pattern in production.

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Unsafe: user input is concatenated directly into SQL.
$query = "SELECT * FROM users WHERE username = ? AND password = ?";
$params = [$username, $password];

// In a real application, this query would be executed
// against a database. This example is for static analysis only.
?>

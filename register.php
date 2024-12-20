<?php
$conn = new mysqli('localhost', 'root', '', 'coba-spk');

if ($conn->connect_error) {
    die('Koneksi database gagal: ' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $fullname = trim($_POST['fullname']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($fullname) || empty($password)) {
        echo 'Semua kolom wajib diisi!';
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare('INSERT INTO users (username, fullname, password) VALUES (?, ?, ?)');
        $stmt->bind_param('sss', $username, $fullname, $hashed_password);

        if ($stmt->execute()) {
            header('Location: login.php');
            exit();
        } else {
            echo 'Error: ' . $conn->error;
        }
        $stmt->close();
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <style>
        
    </style>
</head>
<body>
    <div class="log-container">
        <h2>Sign Up</h2>
        <form action="signup.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="text" name="fullname" placeholder="Full Name" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Sign Up</button>
        </form>
        <div class="link">
            Punya akun? <a href="login.php">Login</a>
        </div>
    </div>
</body>
</html>

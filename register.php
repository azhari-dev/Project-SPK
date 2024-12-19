<?php
$conn = new mysqli('localhost', 'root', '', 'spk');

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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }

        h2 {
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #555;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #333;
        }

        .link {
            margin-top: 10px;
            font-size: 14px;
        }

        .link a {
            text-decoration: none;
            color: #007bff;
        }

        .link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div id="signup" class="container">
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

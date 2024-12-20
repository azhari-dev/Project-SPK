<?php
    // require_once 'database.php';
    // require_once 'validate.php';
    session_start();
    $conn = new mysqli('localhost', 'root', '', 'coba-spk');

    // Login logic
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        
        // $errors = [];
        // if (isset($_POST["login"])){
        //     $isLogin = authenticate($errors, $username, $password);

        //     if ($isLogin > 0){

        //     }
        // }

        $stmt = $conn->prepare('SELECT id, password, role FROM users WHERE username = ?');
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($id, $hashedPassword, $role);

        if ($stmt->num_rows > 0) {
            $stmt->fetch();
            if (password_verify($password, $hashedPassword)) {
                $_SESSION['user_id'] = $id;
                $_SESSION['role'] = $role;
                if ($role === 'admin') {
                    header('Location: dbadmin.php');
                } else {
                    header('Location: dbuser.php');
                }
                exit;
            } else {
                echo 'Invalid password.';
            }
        } else {
            echo 'User not found.';
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
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
    </style>
</head>
<body>
    <div class="log-container">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="login">Login</button>
        </form>
        <div class="link">
            Belum punya akun? <a href="register.php">Sign Up</a>
        </div>
    </div>
</body>
</html>

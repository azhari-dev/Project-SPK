<?php
    $conn = new mysqli('localhost', 'root', '', 'coba_spk');

    session_start();

    if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'user') {
        header('Location: ../index.php');
        exit;
    }

    if (isset($_GET['logout'])) {
        session_unset();
        session_destroy();
        header('Location: ../index.php');
        exit;
    }

    $user_id = $_SESSION['user_id'];
    $stmt = $conn->prepare('SELECT username, fullname FROM users WHERE user_id = ?');
    $stmt->bind_param('i', $user_id);
    $stmt->execute();
    $stmt->bind_result($username, $fullname);
    $stmt->fetch();
    $stmt->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <div class="db-container">
        <div class="navbar">
            <div class="logo">PICKLAP</div>
            <div class="menu">
                <a href="dashboard.php" class="active">Dashboard</a>
                <a href="cariLaptop.php">Cari Laptop</a>
                <a href="ranking.php">Ranking</a>
            </div>
        </div>
        <div class="container">
            <div class="heading">Dashboard</div>
            <div class="profile-card">
                <div class="avatar"></div>
                <div class="info">
                    <div class="username"><?= htmlspecialchars($username) ?></div>
                    <div class="fullname"><?= htmlspecialchars($fullname) ?></div>
                </div>
                <form action="" method="GET">
                    <button type="submit" name="logout" value="1" class="logout">Logout</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>

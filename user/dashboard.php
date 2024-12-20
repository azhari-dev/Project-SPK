<?php

    // require_once '../database.php';

    // $user = getUsers();
    // print_r($user);
    // die();

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
                    <div class="username">Username</div>
                    <div class="fullname">Nama Lengkap</div>
                </div>
                <form action="" method="GET">
                    <button type="submit" name="logout" value="1" class="logout">Logout</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>

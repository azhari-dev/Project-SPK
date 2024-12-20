<?php

    require_once "database.php";

    $getLaptop = getOneLaptop($id);
    

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
                <a href="dashboard.php">Dashboard</a>
                <a href="manage.php" class="active">Manage</a>
            </div>
        </div>
        <div class="view">
            <div class="v-container">
                <p class="heading">Laptop Gaming</p>
                <img src="../aset/web.png" alt="web">
                <div class="content">
                    <div class="spek">
                        <div class="in-spek-1">
                            <p>CPU</p>
                            <p>GPU</p>
                            <p>RAM</p>
                        </div>
                        <div class="in-spek-2">
                            <p>anjay kelas</p>
                            <p>anjay kelas</p>
                            <p>anjay kelas</p>
                        </div>
                    </div>
                    <div class="spek">
                        <div class="in-spek-1">
                            <p>CPU</p>
                            <p>GPU</p>
                            <p>RAM</p>
                            <p>Harga</p>
                        </div>
                        <div class="in-spek-2">
                            <p>anjay kelas</p>
                            <p>anjay kelas</p>
                            <p>anjay kelas</p>
                            <p>Rp. 12.000.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</body>

</html>

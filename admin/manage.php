<?php

    require_once "../database.php";
    $getRanking = getRanking();
    $temp = 0;

    $view = false;
    if (isset($_GET['deleteLaptop'])){
        $id = $_GET['deleteLaptop'];

        deleteAkhir($id);
        deleteUtility($id);
        deleteKriteria($id);
        deleteLaptop($id);
    }

    if (isset($_GET['view'])){
        $id = $_GET['view'];
        $view = true;

        $viewLaptop = getOneLaptop($id);
    }

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

        <?php if ($view): ?>
            <div class="view">
                <div class="v-container">
                    <p class="heading"><?= $viewLaptop['laptop_nama'] ?></p>
                    <img src="../aset/laptop.png" alt="web">
                    <div class="content">
                        <div class="spek">
                            <div class="in-spek-1">
                                <p>CPU</p>
                                <p>GPU</p>
                                <p>RAM (GB)</p>
                            </div>
                            <div class="in-spek-2">
                                <p><?= $viewLaptop['laptop_cpu'] ?></p>
                                <p><?= $viewLaptop['laptop_gpu'] ?></p>
                                <p><?= $viewLaptop['laptop_ram'] ?></p>
                            </div>
                        </div>
                        <div class="spek">
                            <div class="in-spek-1">
                                <p>Storage (GB)</p>
                                <p>Baterai (WH)</p>
                                <p>Layar</p>
                                <p>Harga</p>
                            </div>
                            <div class="in-spek-2">
                                <p><?= $viewLaptop['laptop_storage'] ?></p>
                                <p><?= $viewLaptop['laptop_baterai'] ?></p>
                                <p><?= $viewLaptop['laptop_layar'] ?></p>
                                <p><?= $viewLaptop['laptop_harga'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <form action="" method="GET" class="manage">
                <div class="m-container">
                    <p>Daftar Laptop Gaming</p>
                    <a href="tambah.php">Add+</a>
                </div>
                <table class="table-manage" border="1" cellspacing="0">
                    <tr>
                        <th class="no">No</th>
                        <th class="li">Laptop ID</th>
                        <th class="nl">Nama Laptop</th>
                        <th class="na">Nilai Akhir</th>
                        <th class="ac">Action</th>
                    </tr>
                    <?php foreach ($getRanking as $ranking): ?>
                        <?php $temp += 1 ?>
                    <tr>
                        <td><?= $temp ?></td>
                        <td><?= $ranking['laptop_id'] ?></td>
                        <td><?= $ranking['laptop_nama'] ?></td>
                        <td><?= $ranking['nilai_akhir'] ?></td>
                        <td>
                            <div class="action">
                                <button value="<?= $ranking['laptop_id'] ?>"  name="view" class="button-view">View</button>
                                <button type="submit" value="<?= $ranking['laptop_id'] ?>" name="deleteLaptop" class="button-delete">Delete</button>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </table>
            </form>
        <?php endif ?>
    </div>
    </div>
    </div>

</body>

</html>

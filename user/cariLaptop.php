<?php

    require_once "../database.php";

    $listLaptop = getListLaptop();
    // print_r($listLaptop);
    // die();

    // utility
    // minimum = cmax-cout/cmax-cmin
    // maskimum = cout-cmin/cmax-cmin

    // c
    // min/max harga = 10 60
    // min/max cpu = 10 40
    // min/max storage = 10 30
    // min/max ram = 10 30
    // min/max gpu = 10 30
    // min/max baterai = 10 50
    // min/max layar = 10 20

    

    // $bobot = [0.05, 0.25, 0.1, 0.15, 0.3, 0.05, 0.1];
    // $temp = 0;
    // $nilaiKriteria = getKriteria();

    // $daftarLaptop = [];
    // if (isset($_POST['cari']) && isset($_POST['laptop'])){
    //     echo $_POST['laptop'];
    //     print_r($daftarLaptop);
    //     die();
    // }
    // die();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Aplikasi</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="db-container">
        <div class="navbar">
            <div class="logo">PICKLAP</div>
            <div class="menu">
                <a href="dashboard.php">Dashboard</a>
                <a href="cariLaptop.php" class="active">Cari Laptop</a>
                <a href="ranking.php">Ranking</a>
            </div>
        </div>
        <form action="" method="POST" class="container">
            <div class="header-row">
                <h2>Rekomendasi Laptop Gaming</h2>
                 <!-- <a href="rekLaptop.php">Cari</a> -->
                  <button type="submit" name="cari">Cari</button>
            </div>
            
            <!-- <table class="table-cari-laptop">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Laptop ID</th>
                        <th>Nama Laptop</th>
                        <th>Harga</th>
                        <th>Nilai Akhir</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1</td>
                        <td>Lenovo macbook zenbook</td>
                        <td>Rp. 12.000.000</td>
                        <td>8.5</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>1</td>
                        <td>Lenovo macbook zenbook</td>
                        <td>Rp. 12.000.000</td>
                        <td>8.5</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>1</td>
                        <td>Lenovo macbook zenbook</td>
                        <td>Rp. 12.000.000</td>
                        <td>8.5</td>
                    </tr>
                </tbody>
            </table> -->
            <table>
                <thead>
                    <tr>
                        <th>Pilih</th>
                        <th>ID</th>
                        <th>Nama Laptop</th>
                        <th>Harga (IDR)</th>
                        <th>Processor</th>
                        <th>GPU</th>
                        <th>RAM (GB)</th>
                        <th>Storage (GB)</th>
                        <th>Baterai (WH)</th>
                        <th>Layar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($listLaptop as $laptop): ?>
                        <tr>
                            <td><input type="checkbox" name="laptop" value="<?= $laptop['laptop_id']?>"></td>
                            <?php
                                if (isset($_POST['laptop'])){
                                    $daftarLaptop['apa'] = $laptop['laptop_id'];
                                }
                            ?>
                            <td><?= $laptop['laptop_id']?></td>
                            <td><?= $laptop['laptop_nama']?></td>
                            <td><?= $laptop['laptop_harga']?></td>
                            <td><?= $laptop['laptop_cpu']?></td>
                            <td><?= $laptop['laptop_gpu']?></td>
                            <td><?= $laptop['laptop_ram']?></td>
                            <td><?= $laptop['laptop_storage']?></td>
                            <td><?= $laptop['laptop_baterai']?></td>
                            <td><?= $laptop['laptop_layar']?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </form>
    </div>
</body>

</html>

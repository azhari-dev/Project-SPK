<?php

    require_once "../database.php";

    // $listLaptop = getListLaptop();

    // $daftarLaptop = [];
    // if (isset($_POST['cari']) && isset($_POST['laptop'])){
    //     $pilih = $_POST['laptop'];
    //     $pilihLaptop = showLaptop($pilih);
    //     // print_r($pilihLaptop);
    //     // die();
    //     print_r($_POST['laptop']);
    //     print_r($daftarLaptop);
    //     die();
    // }
    // // die();

    require_once "../database.php";

    $listLaptop = getListLaptop();
    $daftarLaptop = [];
    $hasilCari = false; // Flag to check if search has been performed

    if (isset($_POST['cari']) && isset($_POST['laptop'])) {
        $pilih = $_POST['laptop'];
        $ranking = getRanking(); // Get ranking data

        $filteredRanking = array_filter($ranking, function ($laptop) use ($pilih) {
            return in_array($laptop['laptop_id'], $pilih);
        });

        usort($filteredRanking, function ($a, $b) {
            return $b['nilai_akhir'] <=> $a['nilai_akhir'];
        });

        // Combine ranking data with laptop details
        foreach ($filteredRanking as $rankedLaptop) {
            foreach ($listLaptop as $laptop) {
                if ($rankedLaptop['laptop_id'] === $laptop['laptop_id']) {
                    $rankedLaptop['laptop_id'] = $laptop['laptop_id'];
                    $rankedLaptop['laptop_harga'] = $laptop['laptop_harga'];
                    $rankedLaptop['laptop_cpu'] = $laptop['laptop_cpu'];
                    $rankedLaptop['laptop_gpu'] = $laptop['laptop_gpu'];
                    $rankedLaptop['laptop_ram'] = $laptop['laptop_ram'];
                    $rankedLaptop['laptop_storage'] = $laptop['laptop_storage'];
                    $rankedLaptop['laptop_baterai'] = $laptop['laptop_baterai'];
                    $rankedLaptop['laptop_layar'] = $laptop['laptop_layar'];
                    $daftarLaptop[] = $rankedLaptop;
                }
            }
        }

        $hasilCari = true; // Set search flag to true
    } 

    // Reset search when "Hapus" button is clicked
    if (isset($_POST['hapus'])) {
        $hasilCari = false; // Reset search flag
        $daftarLaptop = []; // Clear search results
    }

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
                <h2 class="list-laptop">Rekomendasi Laptop Gaming</h2>
                <?php if ($hasilCari) : ?>
                    <button type="submit" name="hapus" class="button-delete">Hapus</button> <!-- Button to reset search -->
                <?php endif; ?>
                <button type="submit" name="cari" class="=button-view">Cari</button> <!-- Button to start search -->
            </div>
            
            <?php if ($hasilCari) : ?>
                <table class="table-cari-laptop">
                    <thead>
                        <tr>
                            <th>Nilai Akhir</th>
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
                        <?php foreach ($daftarLaptop as $laptop) : ?>
                            <tr>
                                <td><?= $laptop['nilai_akhir'] ?></td>
                                <td><?= $laptop['laptop_id'] ?></td>
                                <td><?= $laptop['laptop_nama'] ?></td>
                                <td><?= $laptop['laptop_harga'] ?></td>
                                <td><?= $laptop['laptop_cpu'] ?></td>
                                <td><?= $laptop['laptop_gpu'] ?></td>
                                <td><?= $laptop['laptop_ram'] ?></td>
                                <td><?= $laptop['laptop_storage'] ?></td>
                                <td><?= $laptop['laptop_baterai'] ?></td>
                                <td><?= $laptop['laptop_layar'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif ?>
            <table class="table-cari-laptop">
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
                            <td><input type="checkbox" name="laptop[]" value="<?= $laptop['laptop_id']?>"></td>
                            <?php
                                // if (isset($_POST['laptop']) && in_array($laptop['laptop_id'],$laptop) ){
                                //     $daftarLaptop[] = $laptop['laptop_id'];
                                // }
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

<?php
require_once "../database.php";

$listLaptop = getListLaptop();
$daftarLaptop = [];
$hasilCari = false;

if (isset($_POST['cari'])) {
    $filters = [
        'cpu' => $_POST['cpu'],
        'ram' => $_POST['ram'],
        'gpu' => $_POST['gpu'],
        'storage' => $_POST['storage'],
        'baterai' => $_POST['baterai'],
        'layar' => $_POST['layar'],
        'nama-laptop' => $_POST['nama-laptop'],
        'harga' => $_POST['harga']
    ];

    // Filter listLaptop based on the selected filters
    $daftarLaptop = array_filter($listLaptop, function ($laptop) use ($filters) {
        $matches = true;
    
        // Filter berdasarkan CPU
        if (!empty($filters['cpu']) && $filters['cpu'] !== "-1") {
            $matches = $matches && stripos($laptop['laptop_cpu'], strtolower($filters['cpu'])) !== false;
        }
    
        // Filter berdasarkan RAM
        if (!empty($filters['ram']) && $filters['ram'] !== "-1") {
            $matches = $matches && (int)$laptop['laptop_ram'] == (int)$filters['ram'];
        }
    
        // Filter berdasarkan GPU
        if (!empty($filters['gpu']) && $filters['gpu'] !== "-1") {
            $matches = $matches && stripos($laptop['laptop_gpu'], strtolower($filters['gpu'])) !== false;
        }
    
        // Filter berdasarkan Storage
        if (!empty($filters['storage']) && $filters['storage'] !== "-1") {
            $matches = $matches && (int)$laptop['laptop_storage'] == (int)$filters['storage'];
        }
    
        // Filter berdasarkan Baterai
        if (!empty($filters['baterai']) && $filters['baterai'] !== "-1") {
            $matches = $matches && (int)$laptop['laptop_baterai'] == (int)$filters['baterai'];
        }
    
        // Filter berdasarkan Layar
        if (!empty($filters['layar']) && $filters['layar'] !== "-1") {
            $matches = $matches && stripos($laptop['laptop_layar'], strtolower($filters['layar'])) !== false;
        }
    
        // Filter berdasarkan Nama Laptop
        if (!empty($filters['nama-laptop'])) {
            $matches = $matches && stripos($laptop['laptop_nama'], strtolower($filters['nama-laptop'])) !== false;
        }
    
        // Filter berdasarkan Harga
        if (!empty($filters['harga'])) {
            $matches = $matches && $laptop['laptop_harga'] <= (int)$filters['harga'];
        }
    
        return $matches;
    });
    
    $hasilCari = true;
}

if (isset($_POST['hapus'])) {
    $hasilCari = false;
    $daftarLaptop = [];
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PICKLAP - Cari Laptop</title>
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

        <form action="" method="POST" class="search-form">
            <div class="header-row">
                <h2 class="list-laptop">Cari Laptop Berdasarkan Kategori</h2>
                <div class="form-group">
                    <label for="nama-laptop">Nama Laptop:</label>
                    <input type="text" name="nama-laptop" placeholder="Masukkan nama laptop...">
                </div>
                <div class="form-group">
                    <!-- Harga -->
                    <label for="harga">Harga (Maksimal):</label>
                    <input type="text" name="harga" placeholder="Masukkan harga maksimal...">
                </div>
                <div class="form-group">
                    <label for="cpu">Prosesor (CPU):</label>
                    <select name="cpu" id="cpu">
                        <option value="-1">Pilih CPU</option>
                        <option value="Core-i3">Core i3</option>
                        <option value="Core-i5">Core i5</option>
                        <option value="Core-i7">Core i7</option>
                        <option value="Core-i9">Core i9</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="ram">RAM (Minimal):</label>
                    <select name="ram" id="ram">
                        <option value="-1">Pilih RAM</option>
                        <option value="8">8 GB</option>
                        <option value="16">16 GB</option>
                        <option value="32">32 GB > </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="gpu">GPU:</label>
                    <select name="gpu" id="gpu">
                        <option value="-1">Pilih GPU</option>
                        <option value="1650">GTX 1650 - RTX 2060</option>
                        <option value="3070">RTX 3070 - 3090</option>
                        <option value="4070">RTX 4070 - 4090</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="storage">Storage (Minimal):</label>
                    <select name="storage" id="storage">
                        <option value="-1">Pilih Storage</option>
                        <option value="256">256 GB</option>
                        <option value="512">512 GB</option>
                        <option value="1024">1024 GB > </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="baterai">Baterai (Minimal):</label>
                    <select name="baterai" id="baterai">
                        <option value="-1">Pilih Baterai (WH)</option>
                        <option value="42">42 - 48</option>
                        <option value="49">49 - 52</option>
                        <option value="52">52 - 60</option>
                        <option value="61">61 - 72</option>
                        <option value="72">72 > </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="layar">Layar (Ukuran):</label>
                    <select name="layar" id="layar">
                        <option value="-1">Pilih Tipe Layar</option>
                        <option value="IPS">IPS</option>
                        <option value="OLED">OLED</option>
                    </select>
                </div>

                <div class="form-buttons">
                    <button type="submit" name="cari" class="button-view">Cari</button>
                    <?php if ($hasilCari) : ?>
                        <button type="submit" name="hapus" class="button-delete">Hapus</button>
                    <?php endif; ?>
                </div>
            </div>

            <?php if ($hasilCari) : ?>
                <table class="table-cari-laptop">
                    <thead>
                        <tr>
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
        </form>
    </div>
</body>

</html>
<style>
    /* Styling untuk memperbaiki tata letak form pencarian */
.search-form {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    margin: 20px auto;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.header-row {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
}

.header-row h2 {
    flex-basis: 100%;
    text-align: center;
    margin-bottom: 20px;
    font-size: 1.5em;
    color: #333;
}



.form-group label {
    font-weight: bold;
    font-size: 0.9em;
    color: #555;
}

.form-group input,
.form-group select {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1em;
    background-color: #fff;
    color: black;
    transition: border-color 0.3s;
}
.form-group {
    display: flex;
    flex-direction: column;
    gap: 5px;
    flex-basis: calc(33.333% - 20px);
    min-width: 200px;
    color: black;
}

.form-group input:focus,
.form-group select:focus {
    border-color: #224c29;
    outline: none;
}

.form-buttons {
    display: flex;
    gap: 10px;
    justify-content: center;
    flex-basis: 100%;
    margin-top: 20px;
}

.button-view,
.button-delete {
    padding: 10px 20px;
    font-size: 1em;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.button-view {
    background-color: #9dc74f;
    color: white;
}

.button-view:hover {
    background-color: #8cb441;
}

.button-delete {
    background-color: #ea3c18;
    color: white;
}

.button-delete:hover {
    background-color: #d63b1c;
}

.table-cari-laptop {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    font-size: 0.9em;
    text-align: left;
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
    
}

.table-cari-laptop th, .table-cari-laptop td {
    padding: 12px 15px;
    border: 1px solid #ddd;
}

.table-cari-laptop th {
    background-color: green;
    font-weight: bold;
    color: white;
}

.table-cari-laptop tbody tr:nth-child(even) {
    background-color: white;
}

.table-cari-laptop tbody tr:hover {
    background-color: white;
}
</style>

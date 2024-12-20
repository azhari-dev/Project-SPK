<?php

    require_once "../database.php";

    if (isset($_POST['submit'])){

        $namaLaptop = $_POST['nama-laptop'];
        $cpu = $_POST['cpu'];
        $ram = $_POST['ram'];
        $gpu = $_POST['gpu'];
        $storage = $_POST['storage'];
        $baterai = $_POST['baterai'];
        $layar = $_POST['layar'];
        $harga = $_POST['harga'];
        addLaptop($namaLaptop, $cpu, $ram, $gpu, $storage, $baterai, $layar, $harga);

        // $kriteria_id = 
        $kriteria_harga = $_POST['k-harga'];
        $kriteria_cpu = $_POST['k-cpu'];
        $kriteria_storage = $_POST['k-storage'];
        $kriteria_ram = $_POST['k-ram'];
        $kriteria_gpu = $_POST['k-gpu'];
        $kriteria_baterai = $_POST['k-baterai'];
        $kriteria_layar = $_POST['k-layar'];
        
        $utility_id = $kriteria['kriteria_laptop_id'];
        $utility_harga = (60 - $kriteria['kriteria_harga']) / (60 - 10);
        $utility_cpu = ($kriteria['kriteria_cpu'] - 10) / (60 - 10);
        $utility_storage = ($kriteria['kriteria_storage'] - 10) / (60 - 10);
        $utility_ram = ($kriteria['kriteria_ram'] - 10) / (60 - 10);
        $utility_gpu = ($kriteria['kriteria_gpu'] - 10) / (60 - 10);
        $utility_baterai = ($kriteria['kriteria_baterai'] - 10) / (60 - 1);
        $utility_layar = ($kriteria['kriteria_layar'] - 10) / (60 - 10);
     
        addUtility($utility_id, $utility_cpu, $utility_ram, $utility_gpu, $utility_storage, $utility_baterai, $utility_layar, $utility_harga);
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
        <div class="tambah">
            <div class="add-container">
                <p class="heading">Tambah Laptop</p>
                <form action="" method="POST">
                    <div class="content">
                        <div class="in-content">
                            <label for="cpu">CPU</label>
                            <div class="kriteria">
                                <select class="in-kriteria first" name="cpu">
                                    <option value="-1">Pilih Processor</option>
                                    <option value="Core-i3">Core i3</option>
                                    <option value="Core-i5">Core i5</option>
                                    <option value="Core-i7">Core i7</option>
                                    <option value="Core-i9">Core i9</option>
                                </select>
                                <select class="in-kriteria second" name="k-cpu">
                                    <option value="-1">Kriteria</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                </select>
                            </div>
                        </div>
                        <div class="in-content">
                            <label for="ram">RAM</label>
                            <div class="kriteria">
                                <select class="in-kriteria first" name="ram">
                                    <option value="-1">Pilih Kapasitas RAM</option>
                                    <option value="8">8 - 15</option>
                                    <option value="16">16 - 30</option>
                                    <option value="32">32 > </option>
                                </select>
                                <select class="in-kriteria second" name="k-ram">
                                    <option value="-1">Kriteria</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                        </div>
                        <div class="in-content">
                            <label for="gpu">GPU</label>
                            <div class="kriteria">
                                <select class="in-kriteria first" name="gpu">
                                    <option value="-1">Pilih GPU</option>
                                    <option value="1650">GTX 1650 - RTX 2060</option>
                                    <option value="3070">RTX 3070 - 3090</option>
                                    <option value="4070">RTX 4070 - 4090</option>
                                </select>
                                <select class="in-kriteria second" name="k-gpu">
                                    <option value="-1">Kriteria</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="in-content">
                            <label for="storage">Storage</label>
                            <div class="kriteria">
                                <select class="in-kriteria first" name="storage">
                                    <option value="-1">Pilih Kapasitas Storage (GB)</option>
                                    <option value="256">256</option>
                                    <option value="512">512</option>
                                    <option value="1024">1024 > </option>
                                </select>
                                <select class="in-kriteria second" name="k-storage">
                                    <option value="-1">Kriteria</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                </select>
                            </div>
                        </div>
                        <div class="in-content">
                            <label for="baterai">Baterai</label>
                            <div class="kriteria">
                                <select class="in-kriteria first" name="baterai">
                                    <option value="-1">Pilih Baterai (WH)</option>
                                    <option value="42">42 - 48</option>
                                    <option value="49">49 - 52</option>
                                    <option value="52">52 - 60</option>
                                    <option value="61">61 - 72</option>
                                    <option value="72">72 ></option>
                                </select>
                                <select class="in-kriteria second" name="k-baterai">
                                    <option value="-1">Kriteria</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                </select>
                            </div>
                        </div>
                        <div class="in-content">
                            <label for="layar">Tipe Layar</label>
                            <div class="kriteria">
                                <select class="in-kriteria first" name="layar">
                                    <option value="-1">Pilih Tipe Layar</option>
                                    <option value="IPS">IPS</option>
                                    <option value="OLED">OLED</option>
                                </select>
                                <select class="in-kriteria second" name="k-layar">
                                    <option value="-1">Kriteria</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="in-content">
                            <label for="nama-laptop">Nama Laptop</label>
                            <div class="kriteria">
                                <input type="text" name="nama-laptop" placeholder="Masukkan Nama Laptop" class="in-kriteria first">
                            </div>
                        </div>
                        <div class="in-content">
                            <label for="harga">Harga</label>
                            <div class="kriteria">
                                <input type="text" name="harga" placeholder="Masukkan Harga Laptop" class="in-kriteria first">
                                <select class="in-kriteria second" name="k-harga">
                                    <option value="-1">Kriteria</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                    <option value="60">60</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="submit">Tambah</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>

</body>

</html>

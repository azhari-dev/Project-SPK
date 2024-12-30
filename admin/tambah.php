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
        // menambahkan laptop
        addLaptop(1, $namaLaptop, $cpu, $ram, $gpu, $storage, $baterai, $layar, $harga);
        
        // // mendapatkan id laptop terakhir
        $getLastLaptop = getLastLaptop();
        // // mendapatkan kriteria laptop id
        // print_r($kriteria);
        // echo "<br>";
        // print_r($getLastLaptop);
        // die();
        
        $kriteria_id = $getLastLaptop['laptop_id'];
        $kriteria_harga = $_POST['k-harga'];
        $kriteria_cpu = $_POST['k-cpu'];
        $kriteria_storage = $_POST['k-storage'];
        $kriteria_ram = $_POST['k-ram'];
        $kriteria_gpu = $_POST['k-gpu'];
        $kriteria_baterai = $_POST['k-baterai'];
        $kriteria_layar = $_POST['k-layar'];
        
        addKriteria($kriteria_id, $kriteria_cpu, $kriteria_ram, $kriteria_gpu, $kriteria_storage, $kriteria_baterai, $kriteria_layar, $kriteria_harga);
        
        $kriteria = getKriteria($getLastLaptop['laptop_id']);
        
        $utility_id = $getLastLaptop['laptop_id'];
        $utility_harga = (60 - $kriteria['kriteria_harga']) / (60 - 10);
        $utility_cpu = ($kriteria['kriteria_cpu'] - 10) / (60 - 10);
        $utility_storage = ($kriteria['kriteria_storage'] - 10) / (60 - 10);
        $utility_ram = ($kriteria['kriteria_ram'] - 10) / (60 - 10);
        $utility_gpu = ($kriteria['kriteria_gpu'] - 10) / (60 - 10);
        $utility_baterai = ($kriteria['kriteria_baterai'] - 10) / (60 - 1);
        $utility_layar = ($kriteria['kriteria_layar'] - 10) / (60 - 10);

        // menambahkan nilai utility
        addUtility($utility_id, $utility_cpu, $utility_ram, $utility_gpu, $utility_storage, $utility_baterai, $utility_layar, $utility_harga);

        // mendapatkan utility laptop id
        $utility = getUtility($getLastLaptop['laptop_id']);
        
        $akhir_id = $getLastLaptop['laptop_id'];
        $akhir_harga = $utility['utility_harga'] * 0.05;
        $akhir_cpu = $utility['utility_cpu'] * 0.25;
        $akhir_storage = $utility['utility_storage'] * 0.1;
        $akhir_ram = $utility['utility_ram'] * 0.15;
        $akhir_gpu = $utility['utility_gpu'] * 0.3;
        $akhir_baterai = $utility['utility_baterai'] * 0.05;
        $akhir_layar = $utility['utility_layar'] * 0.1;
        
        addNilaiAkhir($akhir_id, $akhir_cpu, $akhir_ram, $akhir_gpu, $akhir_storage, $akhir_baterai, $akhir_layar, $akhir_harga);

        // menambahkan nilai akhir
        $nilaiAkhir = getNilaiAkhir($akhir_id);

        $akhir = getNilaiAkhir($getLastLaptop['laptop_id']);

        $hasil_akhir_id = $getLastLaptop['laptop_id'];
        $hasil_akhir_harga = $akhir['akhir_harga'] * 0.05;
        $hasil_akhir_cpu = $akhir['akhir_cpu'] * 0.25;
        $hasil_akhir_storage = $akhir['akhir_storage'] * 0.1;
        $hasil_akhir_ram = $akhir['akhir_ram'] * 0.15;
        $hasil_akhir_gpu = $akhir['akhir_gpu'] * 0.3;
        $hasil_akhir_baterai = $akhir['akhir_baterai'] * 0.05;
        $hasil_akhir_layar = $akhir['akhir_layar'] * 0.1;

        $hasil_akhir = $hasil_akhir_harga + $hasil_akhir_cpu + $hasil_akhir_storage + $hasil_akhir_ram + $hasil_akhir_gpu + $hasil_akhir_baterai + $hasil_akhir_layar;

        addHasilAkhir($hasil_akhir_id, $hasil_akhir);
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
        <form action="" method="POST" class="tambah">
            <div class="add-container head-first">
                <div class="nama-laptop">
                    <label for="nama-laptop">Nama Laptop</label>
                    <input type="text" name="nama-laptop" id="nama-laptop" placeholder="Masukkan Nama Laptop">
                </div>
                <p class="heading">Tambah Laptop</p>
            </div>
            <div class="add-container head-second">
                <table class="table-tambah">
                     <tr>
                        <th>Jenis Kriteria</th>
                        <th>Bobot</th>
                        <th>Pilihan</th>
                        <th>Nilai Kriteria</th>
                        <th>Normalisasi</th>
                     </tr>
                     <tr>
                        <td>
                            <p>Harga</p>
                        </td>
                        <td>
                            <p>5</p>
                        </td>
                        <td>
                            <input type="text" name="harga" placeholder="Masukkan Harga Laptop" class="in-kriteria first input-laptop">
                        </td>
                        <td>
                            <select class="in-kriteria second" name="k-harga">
                                <option value="-1">Kriteria</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                                <option value="60">60</option>
                            </select>
                        </td>
                        <td>
                            <p>0.05</p>
                        </td>
                    </tr>
                    <tr>
                         <td>
                             <p>CPU</p>
                         </td>
                         <td>
                             <p>25</p>
                         </td>
                         <td>
                            <select class="in-kriteria first" name="cpu">
                                <option value="-1">Pilih Processor</option>
                                <option value="Core-i3">Core i3</option>
                                <option value="Core-i5">Core i5</option>
                                <option value="Core-i7">Core i7</option>
                                <option value="Core-i9">Core i9</option>
                            </select>
                         </td>
                         <td>
                             <select class="in-kriteria second" name="k-cpu">
                                 <option value="-1">Kriteria</option>
                                 <option value="10">10</option>
                                 <option value="20">20</option>
                                 <option value="30">30</option>
                                 <option value="40">40</option>
                             </select>
                         </td>
                         <td>
                             <p>0.25</p>
                         </td>
                    </tr>
                    <tr>
                         <td>
                             <p>GPU</p>
                         </td>
                         <td>
                             <p>30</p>
                         </td>
                         <td>
                            <select class="in-kriteria first" name="gpu">
                                <option value="-1">Pilih GPU</option>
                                <option value="1650">GTX 1650 - RTX 2060</option>
                                <option value="3070">RTX 3070 - 3090</option>
                                <option value="4070">RTX 4070 - 4090</option>
                            </select>
                         </td>
                         <td>
                             <select class="in-kriteria second" name="k-gpu">
                                 <option value="-1">Kriteria</option>
                                 <option value="10">10</option>
                                 <option value="20">20</option>
                                 <option value="30">30</option>
                             </select>
                         </td>
                         <td>
                             <p>0.3</p>
                         </td>
                    </tr>
                    <tr>
                         <td>
                             <p>RAM</p>
                         </td>
                         <td>
                             <p>15</p>
                         </td>
                         <td>
                            <select class="in-kriteria first" name="ram">
                                <option value="-1">Pilih Kapasitas RAM</option>
                                <option value="8">8 - 15</option>
                                <option value="16">16 - 30</option>
                                <option value="32">32 > </option>
                            </select>
                         </td>
                         <td>
                             <select class="in-kriteria second" name="k-ram">
                                 <option value="-1">Kriteria</option>
                                 <option value="10">10</option>
                                 <option value="20">20</option>
                                 <option value="30">30</option>
                             </select>
                         </td>
                         <td>
                             <p>0.15</p>
                         </td>
                    </tr>
                    <tr>
                         <td>
                             <p>Storage</p>
                         </td>
                         <td>
                             <p>10</p>
                         </td>
                         <td>
                            <select class="in-kriteria first" name="storage">
                                <option value="-1">Pilih Kapasitas Storage (GB)</option>
                                <option value="256">256</option>
                                <option value="512">512</option>
                                <option value="1024">1024 > </option>
                            </select>
                         </td>
                         <td>
                             <select class="in-kriteria second" name="k-storage">
                                 <option value="-1">Kriteria</option>
                                 <option value="10">10</option>
                                 <option value="20">20</option>
                                 <option value="30">30</option>
                             </select>
                         </td>
                         <td>
                             <p>0.1</p>
                         </td>
                    </tr>
                    <tr>
                         <td>
                             <p>Baterai</p>
                         </td>
                         <td>
                             <p>5</p>
                         </td>
                         <td>
                            <select class="in-kriteria first" name="baterai">
                                <option value="-1">Pilih Baterai (WH)</option>
                                <option value="42">42 - 48</option>
                                <option value="49">49 - 52</option>
                                <option value="52">52 - 60</option>
                                <option value="61">61 - 72</option>
                                <option value="72">72 ></option>
                            </select>
                         </td>
                         <td>
                             <select class="in-kriteria second" name="k-baterai">
                                 <option value="-1">Kriteria</option>
                                 <option value="10">10</option>
                                 <option value="20">20</option>
                                 <option value="30">30</option>
                                 <option value="40">40</option>
                                 <option value="50">50</option>
                             </select>
                         </td>
                         <td>
                             <p>0.05</p>
                         </td>
                     </tr>
                     <tr>
                       <td>
                             <p>Layar</p>
                         </td>
                         <td>
                             <p>10</p>
                         </td>
                         <td>
                            <select class="in-kriteria first" name="layar">
                                <option value="-1">Pilih Tipe Layar</option>
                                <option value="IPS">IPS</option>
                                <option value="OLED">OLED</option>
                            </select>
                         </td>
                         <td>
                             <select class="in-kriteria second" name="k-layar">
                                 <option value="-1">Kriteria</option>
                                 <option value="10">10</option>
                                 <option value="20">20</option>
                             </select>
                         </td>
                         <td>
                             <p>0.1</p>
                         </td>
                     </tr>
                </table>
            </div>
            <div class="add-container head-third">
                <button type="submit" name="submit" class="btn-tambah">Tambah</button>
            </div>
        </form>
    </div>
    </div>
    </div>

</body>

</html>

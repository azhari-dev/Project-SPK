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
                <a href="#">Dashboard</a>
                <a href="#" class="active">Manage</a>
            </div>
        </div>
        <div class="tambah">
            <div class="add-container">
                <p class="heading">Tambah Laptop</p>
                <form action="">
                    <div class="content">
                        <div class="in-content">
                            <label for="cpu">CPU</label>
                            <div class="kriteria">
                                <select class="in-kriteria first" name="cpu">
                                    <option value="-1">Pilih Processor</option>
                                </select>
                                <select class="in-kriteria second" name="k-cpu">
                                    <option value="-1">Kriteria</option>
                                </select>
                            </div>
                        </div>
                        <div class="in-content">
                            <label for="ram">RAM</label>
                            <div class="kriteria">
                                <select class="in-kriteria first" name="ram">
                                    <option value="-1">Pilih Kapasitas RAM</option>
                                </select>
                                <select class="in-kriteria second" name="k-ram">
                                    <option value="-1">Kriteria</option>
                                </select>
                            </div>
                        </div>
                        <div class="in-content">
                            <label for="gpu">GPU</label>
                            <div class="kriteria">
                                <select class="in-kriteria first" name="gpu">
                                    <option value="-1">Pilih GPU</option>
                                </select>
                                <select class="in-kriteria second" name="k-gpu">
                                    <option value="-1">Kriteria</option>
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
                                </select>
                                <select class="in-kriteria second" name="k-storage">
                                    <option value="-1">Kriteria</option>
                                </select>
                            </div>
                        </div>
                        <div class="in-content">
                            <label for="baterai">Baterai</label>
                            <div class="kriteria">
                                <select class="in-kriteria first" name="baterai">
                                    <option value="-1">Pilih Baterai (WH)</option>
                                </select>
                                <select class="in-kriteria second" name="k-baterai">
                                    <option value="-1">Kriteria</option>
                                </select>
                            </div>
                        </div>
                        <div class="in-content">
                            <label for="layar">Tipe Layar</label>
                            <div class="kriteria">
                                <select class="in-kriteria first" name="layar">
                                    <option value="-1">Pilih Tipe Layar</option>
                                </select>
                                <select class="in-kriteria second" name="k-layar">
                                    <option value="-1">Kriteria</option>
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
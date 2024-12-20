<html>
<head>
    <title>Nama Aplikasi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .header {
            background-color: #e0e0e0;
            padding: 20px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header .title {
            font-size: 20px;
            font-weight: bold;
        }
        .header .nav {
            display: flex;
            align-items: center;
        }
        .header .nav a {
            margin-left: 20px;
            text-decoration: none;
            color: #000;
        }
        .container {
            padding: 20px;
        }
        .header-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .header-row h2 {
            margin: 0;
        }
        .search-section {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .search-bar {
            display: flex;
        }
        .search-bar input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
            width: 300px;
        }
        .search-bar button {
            padding: 10px 20px;
            border: none;
            background-color: #ccc;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }
        .btn-delete {
            padding: 10px 20px;
            background-color: #ff4c4c;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
        }
        table th, table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        table th {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>

    <div class="header">
        <div class="title">PikLap</div>
        <div class="nav">
            <a href="#">Dashboard</a>
            <a href="#">Cari Laptop</a>
        </div>
    </div>
    <!-- rekomendasi laptop start -->
    <!-- rekomendasi laptop end -->

    <!-- daftar laptop start -->
    <div class="container">
        <div class="header-row">
            <h2>Rekomendasi Laptop</h2>
            <div class="search-section">
                <div class="search-bar">
                    <input type="text" placeholder="Cari Laptop">
                    <button>Cari</button>
                </div>
            </div>
            <button class="btn-delete">Hapus Rekomendasi</button>
        </div>
        <table>
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
        </table>
        <br><br>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Laptop</th>
                    <th>Harga</th>
                    <th>Processor</th>
                    <th>RAM</th>
                    <th>Storage</th>
                    <th>Baterai</th>
                    <th>Layar</th>
                    <th>GPU</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Lenovo macbook zenbook</td>
                    <td>Rp. 12.000.000</td>
                    <td>Core i7</td>
                    <td>16 GB</td>
                    <td>500 GB</td>
                    <td>5000 Mah</td>
                    <td>AMOLED</td>
                    <td>RTX 1650</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Lenovo macbook zenbook</td>
                    <td>Rp. 12.000.000</td>
                    <td>Core i7</td>
                    <td>16 GB</td>
                    <td>500 GB</td>
                    <td>5000 Mah</td>
                    <td>AMOLED</td>
                    <td>RTX 1650</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Lenovo macbook zenbook</td>
                    <td>Rp. 12.000.000</td>
                    <td>Core i7</td>
                    <td>16 GB</td>
                    <td>500 GB</td>
                    <td>5000 Mah</td>
                    <td>AMOLED</td>
                    <td>RTX 1650</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- daftar laptop end -->
</body>
</html>

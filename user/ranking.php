<html>
<head>
    <title>NAMA APLIKASI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #e0e0e0;
            padding: 20px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header h1 {
            margin: 0;
            font-size: 20px;
        }
        .nav {
            display: flex;
            gap: 20px;
        }
        .nav a {
            text-decoration: none;
            color: black;
            font-size: 14px;
        }
        .content {
            padding: 20px;
        }
        .content-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .content h2 {
            font-size: 20px;
            margin: 0;
        }
        .filter-buttons {
            display: flex;
            gap: 10px;
        }
        .filter-buttons button {
            padding: 10px 20px;
            border: none;
            border-radius: 20px;
            background-color: #e0e0e0;
            cursor: pointer;
        }
        .filter-buttons button.active {
            background-color: #d0d0d0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #d0d0d0;
        }
        .spec-button {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            background-color: #b0b0b0;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>PickLap</h1>
        <div class="nav">
            <a href="#">Dashboard</a>
            <a href="#">Cari Laptop</a>
            <a href="#">Kriteria</a>
            <a href="#">Utility</a>
            <a href="#" class="active">Ranking</a>
        </div>
    </div>
    <div class="content">
        <div class="content-header">
            <h2>Daftar Laptop Terbaik</h2>
            <div class="filter-buttons">
                <button class="active">Gaming</button>
                <button>Office</button>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Laptop ID</th>
                    <th>Nama Laptop</th>
                    <th>Nilai Akhir</th>
                    <th>Spesifikasi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>Lenovo macbook zenbook</td>
                    <td>8.5</td>
                    <td><button class="spec-button">Lihat Spesifikasi</button></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>Lenovo macbook zenbook</td>
                    <td>8.5</td>
                    <td><button class="spec-button">Lihat Spesifikasi</button></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>Lenovo macbook zenbook</td>
                    <td>8.5</td>
                    <td><button class="spec-button">Lihat Spesifikasi</button></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>Lenovo macbook zenbook</td>
                    <td>8.5</td>
                    <td><button class="spec-button">Lihat Spesifikasi</button></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>Lenovo macbook zenbook</td>
                    <td>8.5</td>
                    <td><button class="spec-button">Lihat Spesifikasi</button></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>Lenovo macbook zenbook</td>
                    <td>8.5</td>
                    <td><button class="spec-button">Lihat Spesifikasi</button></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>Lenovo macbook zenbook</td>
                    <td>8.5</td>
                    <td><button class="spec-button">Lihat Spesifikasi</button></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>Lenovo macbook zenbook</td>
                    <td>8.5</td>
                    <td><button class="spec-button">Lihat Spesifikasi</button></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>Lenovo macbook zenbook</td>
                    <td>8.5</td>
                    <td><button class="spec-button">Lihat Spesifikasi</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

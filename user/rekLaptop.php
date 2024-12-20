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

        .search-bar {
            display: flex;
        }

        .search-bar input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px 0 0 5px;
            width: 200px;
        }

        .search-bar button {
            padding: 10px 20px;
            border: none;
            background-color: #ccc;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
        }

        table th,
        table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #e0e0e0;
        }

        @media (max-width: 768px) {

            .header,
            .header-row {
                flex-direction: column;
                align-items: flex-start;
            }

            .header .nav {
                margin-top: 10px;
            }

            .search-bar {
                margin-top: 10px;
                justify-content: flex-start;
            }
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
    <div class="container">
        <div class="header-row">
            <h2>Daftar Laptop Gaming</h2>
            <div class="search-bar">
                <input type="text" placeholder="Cari Laptop">
                <button>Cari</button>
            </div>
        </div>
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
                    <td>ASUS ROG Zephyrus</td>
                    <td>Rp. 20.000.000</td>
                    <td>Ryzen 7</td>
                    <td>32 GB</td>
                    <td>1 TB</td>
                    <td>6000 Mah</td>
                    <td>IPS</td>
                    <td>RTX 3060</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Acer Predator Helios</td>
                    <td>Rp. 18.000.000</td>
                    <td>Core i9</td>
                    <td>16 GB</td>
                    <td>1 TB</td>
                    <td>7000 Mah</td>
                    <td>OLED</td>
                    <td>RTX 3070</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
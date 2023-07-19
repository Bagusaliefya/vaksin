<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <style>
        body {
            display: flex;
        }

        .sidebar {
            background-color: #f8f9fa;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
            overflow-y: auto;
        }

        .sidebar .nav-link {
            color: #495057;
        }

        .sidebar .nav-link.active {
            background-color: #007bff;
            color: #fff;
        }

        .content {
            margin-left: 200px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="col-11">
        <div class="sidebar bg-black">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="dashboard.php">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tambahdata.php">
                            tambah data
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="laporan.php">
                            Laporan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="content">
            <div class="container">
                <div class="container">
                    <div class="row mt-3">
                        <div class="col-sm">
                            <h3>Tabel Laporan</h3>
                        </div>
                    </div>
                    <div class="row">

                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <table class="table table-striped table-hover table-sm">
                                <tr>
                                    <th>No</th>
                                    <th>ID Pasien</th>
                                    <th>Nama Pasien</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Alamat</th>

                                </tr>
                                <?php
                                include 'koneksi.php';
                                $no = 1;
                                $hasil = $koneksi->query("SELECT * FROM pasien");
                                ?>
                                <?php
                                while ($row = $hasil->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $row['idPasien']; ?></td>
                                        <td><?= $row['nmPasien']; ?></td>
                                        <td><?= $row['jk']; ?></td>
                                        <td><?= $row['alamat']; ?></td>
                                        <td>
                                    </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="assets/js/bootstrap.js"></script>
</body>

</html>
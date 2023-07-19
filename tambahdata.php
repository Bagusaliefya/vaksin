<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <style>
        body {
            display: flex;
        }

        .sidebar {
            background-color: #f8f9fa;
            /* Warna latar belakang sidebar */
            height: 100vh;
            /* Tinggi sidebar mengikuti tinggi layar */
            position: fixed;
            /* Mengatur sidebar agar tetap di posisi */
            top: 0;
            /* Menempatkan sidebar di bagian atas */
            left: 0;
            /* Menempatkan sidebar di bagian kiri */
            z-index: 100;
            /* Menentukan urutan tampilan (teratas) */
            overflow-y: auto;
            /* Mengaktifkan scrolling pada sidebar jika konten terlalu panjang */
        }

        .sidebar .nav-link {
            color: #495057;
            /* Warna teks tautan sidebar */
        }

        .sidebar .nav-link.active {
            background-color: #007bff;
            /* Warna latar belakang tautan aktif */
            color: #fff;
            /* Warna teks tautan aktif */
        }

        .content {
            margin-left: 200px;
            /* Mengatur margin kiri untuk memberikan ruang bagi sidebar */
            padding: 20px;
            /* Memberikan ruang pada konten utama */
        }
    </style>
</head>

<body>
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

    <div class="content col-10">
        <div class="container">
            <div class="row mt-3">
                <div class="col-4">
                    <h3>Tambah Data Pasien</h3>
                    <form action="koneksi.php" method="POST">
                        <div class="form-group">
                            <label for="idPasien">ID Pasien</label>

                            <input type="text" class="form-control mb-3" name="idPasien" placeholder="ID Pasien">

                        </div>
                        <div class="form-group">
                            <label for="nmPasien">Nama Pasien</label>

                            <input type="text" class="form-control mb-3" name="nmPasien" placeholder="Nama Pasien">

                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <div class="form-check">

                                <input type="radio" class="form-check-input" name="jk" value="perempuan"> Perempuan

                            </div>

                            <div class="form-check">

                                <input type="radio" class="form-check-input" name="jk" value="laki-laki"> Laki-laki

                            </div>
                            <div class="form-group mt-3">
                                <label for="alamat">Alamat</label>

                                <textarea class="form-control" name="alamat" id="alamat" cols="5" rows="3" placeholder="Alamat"></textarea>
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.js"></script>
</body>

</html>
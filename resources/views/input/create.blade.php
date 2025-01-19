<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedatren</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            background: #4B0082;
            color: white;
            padding: 20px 0;
        }

        .sidebar .logo {
            margin-bottom: 30px;
            text-align: center;
        }

        .sidebar .logo img {
            max-width: 80%;
        }

        .sidebar nav ul {
            list-style: none;
        }

        .sidebar nav ul li {
            padding: 12px 15px;
            margin: 8px 0;
            border-radius: 5px;
            cursor: pointer;
        }

        .sidebar nav ul li.active {
            background: rgba(255, 255, 255, 0.1);
        }

        /* Main Content Styles */
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Header Styles */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .search-bar {
            display: flex;
            align-items: center;
        }

        .search-bar input {
            padding: 8px 15px;
            border: 1px solid #ddd;
            border-radius: 20px;
            width: 300px;
        }

        .search-btn {
            background: #4a3b7c;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 20px;
            margin-left: -40px;
            cursor: pointer;
        }

        .header-icons {
            display: flex;
            gap: 20px;
        }

        .nav-tabs .nav-link {
            color: #6c757d;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            margin-right: 2px;
        }

        .nav-tabs .nav-link.active {
            background-color: #fff;
            border-bottom-color: transparent;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-group label {
            flex: 1;
            text-align: left;
            margin-right: 10px;
        }

        .form-group input,
        .form-group select {
            flex: 2;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .row {
            padding: 8px;
        }

        .profile-image img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <div class="container-fluid px-0">
        <aside class="sidebar">
            <div class="logo">
                <img src="img/Logo Pesantren.png" alt="Logo Pesantren">
            </div>
            <nav>
                <ul>
                    <li>Dashboard</li>
                    <li>Scan QRCode</li>
                    <li class="active">Formulir</li>
                </ul>
            </nav>
        </aside>
        <main class="main-content">
            <header>
                <h1>Formulir</h1>
                <div class="search-bar">
                    <input type="text" placeholder="Cari...">
                    <button class="search-btn">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <div class="header-icons">
                    <span class="far fa-bell"></span>
                    <span class="far fa-envelope"></span>
                    <span class="fas fa-user"></span>
                </div>
            </header>
            <div class="form-section">
                <ul class="nav nav-tabs mb-4">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Biodata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Keluarga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Santri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Domisili Santri</a>
                    </li>
                </ul>
                <form action="{{ url('input') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row">
                                <legend class="col-form-label col-sm-4 pt-0">Kewarganegaraan</legend>
                                <div class="col-sm-8">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kewarganegaraan" value="WNI" id="wni" checked>
                                        <label class="form-check-label" for="wni">WNI</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kewarganegaraan" value="WNA" id="wna">
                                        <label class="form-check-label" for="wna">WNA</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="passport" class="col-sm-4">No Paspor</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="passport" name="no_paspor" placeholder="Masukkan No Paspor">
                                </div>
                            </div>
                            <div class="row">
                                <label for="no_kk" class="col-sm-4">Nomor KK</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="no_kk" name="no_kk" maxlength="16" placeholder="Masukkan No KK" required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="nik" class="col-sm-4">NIK</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nik" name="nik" maxlength="16" placeholder="Masukkan NIK" required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="name" class="col-sm-4">Nama Lengkap</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nama" name="nama" maxlength="30" required placeholder="Masukkan Nama Lengkap">
                                </div>
                            </div>
                            <div class="row">
                                <label for="jenis_kelamin" class="col-sm-4">Jenis Kelamin</label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                                        <option value="laki-laki">Laki-Laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label for="tempat_lahir" class="col-sm-4">Tempat Lahir</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" maxlength="50" placeholder="Masukkan Tempat Lahir" required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="tanggal_lahir" class="col-sm-4">Tanggal Lahir</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="anak_keberapa" class="col-sm-4">Anak Ke</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="anak_keberapa" name="anak_keberapa" min="1" placeholder="Anak Keberapa" required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="berapa_bersaudara" class="col-sm-4">Jumlah Saudara</label>
                                <div class="col-sm-8">
                                    <input type="number" class="form-control" id="berapa_bersaudara" name="berapa_bersaudara" min="1" required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="jenjang_pendidikan_terakhir" class="col-sm-4">Jenjang Pendidikan Terakhir</label>
                                <div class="col-sm-8">
                                    <select class="form-control" id="jenjang_pendidikan_terakhir" name="jenjang_pendidikan_terakhir" required>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="D3">D3</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <label for="no_telpon" class="col-sm-4">Nomor Telepon</label>
                                <div class="col-sm-8">
                                    <input type="tel" class="form-control" id="no_telpon" name="no_telpon" maxlength="15" placeholder="+62..." required>
                                </div>
                            </div>
                            <div class="row">
                                <label for="email" class="col-sm-4">E-Mail</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="email" name="email" maxlength="100" placeholder="Masukkan Email Anda" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="profile-image bg-light d-flex align-items-center justify-content-center">
                                <img src="img/santri.jpg" alt="Foto Santri">
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>

</html>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>


<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-10 col-lg-8 col-xl-8">
            <div class="card mb-0" style="width: 100%; max-width: 900px; padding: 1.5rem; margin: auto;">
              <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                <img src="../assets/images/logos/ecozyne.png" width="60" alt="" />
                <span class="ms-1 fw-bolder  text-dark fs-8">Ecozyne</span>
              </a>
              <hr>
              <form method="POST" action="/register-post">
                @csrf
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-4 mb-3">
                      <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                      <input type="text" class="form-control" name="nama" id="namaLengkap" placeholder="Masukkan nama lengkap" required>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="email" class="form-label">Email</label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email" required>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="noTelp" class="form-label">No Telp</label>
                      <input type="number" class="form-control" name="no_telp" id="noTelp" placeholder="Masukkan nomor telepon" required>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="kecamatan" class="form-label" >Kecamatan</label>
                      <select class="form-control" name="kecamatan" id="kecamatan" required>
                        <option value="" disabled selected>Pilih Kecamatan</option>
                        <option value="batu ampar">Batu Ampar</option>
                        <option value="bengkong">Bengkong</option>
                        <option value="lubuk baja">Lubuk Baja</option>
                        <option value="sekar batu">Sekupang</option>
                        <option value="batam kota">Batam Kota</option>
                        <option value="sei beduk">Sei Beduk</option>
                        <option value="sagulung">Sagulung</option>
                        <option value="batu aji">Batu Aji</option>
                        <option value="nongsa">Nongsa</option>
                        <option value="galang">Galang</option>
                        <option value="bulang">Bulang</option>
                        <option value="belakang padang">Belakang Padang</option>
                      </select>
                    </div>
                    <div class="col-md-8 mb-3">
                      <label for="alamat" class="form-label">Alamat</label>
                      <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Masukkan alamat lengkap" required></textarea>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label for="namaPengguna" class="form-label">Nama Pengguna</label>
                      <input type="text" class="form-control" name="username" id="namaPengguna" placeholder="Masukkan nama pengguna" required>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="kataSandi" class="form-label">Kata Sandi</label>
                      <input type="password" class="form-control" name="password" id="kataSandi" placeholder="Masukkan kata sandi" required>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Daftar</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Sudah Punya Akun ?</p>
                    <a class="text-primary fw-bold ms-2" href="login">Masuk</a>
                  </div>
                </div>              
              </form>
              <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
              <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
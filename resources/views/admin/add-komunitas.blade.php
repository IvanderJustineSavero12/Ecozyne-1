<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/ecozyne.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Tambahkan Bootstrap Icons jika belum ada -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</head>

<body>

    <x-sidebar-admin /> <!-- Panggil Sidebar -->

    <!--  Main wrapper -->
    <div class="body-wrapper">

        <!--  Header Start -->
      <header class="app-header shadow">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-danger mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->

        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Tambah Komunitas</h5>
                    <hr>
                    <!-- Formulir Pendaftaran -->
                    <form method="POST" action="/register-post">
                        @csrf
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                                    <input type="text" class="form-control" name="nama" id="namaLengkap"
                                        placeholder="Masukkan nama lengkap" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Masukkan email" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="noTelp" class="form-label">No Telp</label>
                                    <input type="text" class="form-control" name="no_telp" id="noTelp"
                                        placeholder="Masukkan nomor telepon" required minlength="12" maxlength="12">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="kecamatan" class="form-label">Kecamatan</label>
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
                                    <textarea class="form-control" name="alamat" id="alamat" rows="3"
                                        placeholder="Masukkan alamat lengkap" required></textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="namaPengguna" class="form-label">Nama Pengguna</label>
                                    <input type="text" class="form-control" name="username" id="namaPengguna"
                                        placeholder="Masukkan nama pengguna" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="kataSandi" class="form-label">Kata Sandi</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" name="password" id="kataSandi"
                                            placeholder="Masukkan kata sandi" required>
                                        <button type="button" class="btn btn-outline-secondary"
                                            onclick="togglePassword()">
                                            <i id="eyeIcon" class="bi bi-eye-slash"></i>
                                        </button>
                                    </div>
                                </div>

                                <script>
                                    function togglePassword() {
                                        var passwordField = document.getElementById("kataSandi");
                                        var eyeIcon = document.getElementById("eyeIcon");

                                        if (passwordField.type === "password") {
                                            passwordField.type = "text";
                                            eyeIcon.classList.remove("bi-eye-slash");
                                            eyeIcon.classList.add("bi-eye");
                                        } else {
                                            passwordField.type = "password";
                                            eyeIcon.classList.remove("bi-eye");
                                            eyeIcon.classList.add("bi-eye-slash");
                                        }
                                    }
                                </script>

                            </div>

                            <button type="submit"
                                class="btn btn-primary w-100 py-8 fs-4 mb-4 mt-4 rounded-2">Daftar</button>
                        </div>
                    </form>

                    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
                    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

                    @if(session('success'))
                    <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: '{{ session("success") }}',
                            showConfirmButton: false, // Tidak perlu ditekan
                            timer: 2500 // SweetAlert akan otomatis hilang setelah 2.5 detik
                        });
                    
                        // Setelah 2500 ms (2.5 detik), tampilkan loader dan arahkan ke halaman lain
                        setTimeout(() => {
                            document.querySelector('.loader-container').style.display = 'block'; 
                            window.location.href = "/admin/view-komunitas"; // Ganti dengan halaman tujuan
                        }, 2500);
                    </script>
                    @endif                    

                    @if(session('error'))
                        <script>
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal Mendaftar!',
                                text: '{{ session("error") }}',
                                showConfirmButton: true
                            });
                        </script>
                    @endif
                </div>
            </div>
        </div>

    </div>
    </div>

    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>
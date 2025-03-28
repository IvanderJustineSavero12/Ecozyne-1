<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

</head>


<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-10 col-lg-8 col-xl-5">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logos/ecozyne.png" width="60" alt="" />
                  <span class="ms-1 fw-bolder  text-dark fs-8">Ecozyne</span>
                </a>
                <hr>
                <form>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Pengguna</label>
                    <input type="text" class="form-control" name="username" id="namaPengguna" aria-describedby="UsernameHelp">
                  </div>
                  <div class="mb-3">
                    <label for="kataSandi" class="form-label">Kata Sandi</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="password" id="kataSandi" placeholder="Masukkan kata sandi" required>
                        <button type="button" class="btn btn-outline-secondary" onclick="togglePassword()">
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
                
                  <div class="d-flex align-items-center justify-content-between mb-4">
                  
                    <a class="text-primary fw-bold" href="index">Lupa Kata Sandi ?</a>
                  </div>
                  <a href="./index.html" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Masuk</a>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Belum Punya Akun ?</p>
                    <a class="text-primary fw-bold ms-2" href="register">Buat Akun</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
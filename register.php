<!--
=========================================================
* Argon Dashboard 2 - v2.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="Assets_Tamplate/img/Pesawat.png">
  <link rel="icon" type="image/png" href="Assets_Tamplate/img/Pesawat.png">
  <title>
    Daftar
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="Assets_Tamplate/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="Assets_Tamplate/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="Assets_Tamplate/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="Assets_Tamplate/assets/css/argon-dashboard.css?v=2.0.0" rel="stylesheet" />
</head>

<body class="">
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('Assets_Tamplate/img/reg.png'); background-position: top;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Selamat Datang!</h1>
            <p class="text-lead text-white">Silakan Daftarkan Nama dan Nik Anda</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Daftar</h5>
            </div>
            <div class="row px-xl-5 px-sm-4 px-3">
              <div class="card-body">
                <form role="form" method="post" action="proses_register.php">
                  <div class="mb-3">
                    <input name="nik" required type="text" class="form-control" placeholder="Masukan NIK Anda" aria-label="Email">
                  </div>
                  <div class="mb-3">
                    <input name="nama_lengkap" required type="text" class="form-control" placeholder="Masukan Nama Lengkap Anda" aria-label="Password">
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Daftar Sekarang</button>
                  </div>
                  <p class="text-sm mt-3 mb-0">Sudah Punya Akun ? Silakan Masuk <a href="Index.php" class="text-dark font-weight-bolder">Di Sini</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary">
            Copyright © <script>
              document.write(new Date().getFullYear())
            </script> Soft by Start Bootstrap Tim. Design By Ananda.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="Assets_Tamplate/assets/js/core/popper.min.js"></script>
  <script src="Assets_Tamplate/assets/js/core/bootstrap.min.js"></script>
  <script src="Assets_Tamplate/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="Assets_Tamplate/assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="Assets_Tamplate/assets/js/argon-dashboard.min.js?v=2.0.0"></script>
</body>

</html>
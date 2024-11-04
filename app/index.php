<?php
session_start();
include 'conn.php';

if(isset($_POST['submit'])) {
	$nrp = $_POST['nrp'];
	$pw = md5($_POST['pw']);
	
	$sql = "SELECT * FROM user WHERE nrp='$nrp' AND password='$pw'";
	$result = mysqli_query($conn, $sql);
  $total = mysqli_fetch_array($result);
	if(is_array($total)){
    $_SESSION['nrp'] = $total['nrp'];
    $_SESSION['pw'] = $total['pw'];
    $_SESSION['nama'] = $total['nama'];
    $_SESSION['userLogin'] = "Loggedin";
  } else {
    echo "<script>alert('wrong nrp or wrong password.')</script>";
  } if(isset($_SESSION["nrp"])){
    header("Location:dashboard.php");
  }
  
}
?>
<!DOCTYPE html>
<html lang="en">
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Login</h3>
                <form action="" method="POST">
                  <div class="form-group">
                    <label>NRP *</label>
                    <input type="text" style="color: white" class="form-control p_input" placeholder="Masukkan NRP Pegawai" name="nrp" required>
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input type="password" style="color: white" class="form-control p_input" placeholder="Masukkan password" name="pw" required>
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                  </div>
                  <div class="text-center">
                    <button type="Submit" class="btn btn-primary btn-block enter-btn" name="submit">Login</button>
                  </div>
                  <p class="sign-up">Belum memiliki akun ?<a href="#"> Daftar</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>
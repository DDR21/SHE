<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="../assets/vendors/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="../assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/vendors/owl-carousel-2/owl.theme.default.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../assets/images/favicon.png" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
</head>
<?php
session_start();
include '../conn.php';
?>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html"><img src="../assets/images/logo.svg" alt="logo" /></a>
        <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="../assets/images/logo-mini.svg"
            alt="logo" /></a>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../assets/images/logo-mini1.svg"
              alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <!-- <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-bs-toggle="dropdown" aria-expanded="false" href="#">+ Export ?</a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                  <h6 class="p-3 mb-0">Projects</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-file-outline text-primary"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-web text-info"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">UI Development</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-layers text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject ellipsis mb-1">Software Testing</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all projects</p>
                </div>
              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-bs-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="../assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"></p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Settings</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Advanced settings</p>
                </div>
              </li>
            </ul> -->
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row ">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title" style="color: black">Status Inspeksi</h4>
                  <div class="row py-10">
                    <div class="col-lg-12 mx-auto">
                      <div class="card rounded shadow border-0">
                        <div class="card-body p-12 bg-white rounded">
                          <div class="table-responsive">
                            <table id="example" style="width:100%" class="table table-striped table-bordered">
                              <thead>
                                <tr>
                                  <th style="text-align:center">No.</th>
                                  <th style="text-align:center">Deviasi</th>
                                  <th style="text-align:center">Detail Perbaikan</th>
                                  <th style="text-align:center">Tanggal<br>Perbaikan</th>
                                  <th style="text-align:center">Penanggung Jawab</th>
                                  <th style="text-align:center">Tanggal<br>Selesai</th>
                                  <th style="text-align:center">Tanggal<br>Over Inspeksi</th>
                                </tr>
                              </thead>
                              <tbody>
<?php
include '../conn.php';
// $ID = $_GET['id_sap'];
$ID1 = $_GET['id_dev'];
$Record = mysqli_query($conn, "SELECT * FROM dev WHERE id_dev=$ID1");
$data = mysqli_fetch_array($Record);
$no=1;
// var_dump($data["id_dev"]);
?>

                              <tr>
                                <td style="text-align:center;"><?php echo $no++?></td>
                                <td style="text-align:center;"><?php echo $data['deviasi'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tndkn_prbkn'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_prbkn'] ?></td>
                                <td style="text-align:center;"><?php echo $data['pj'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_cmplt'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_ovrins'] ?></td>
                              </tr>
                              <tr>
                                <td style="text-align:center;"><?php echo $no++?></td>
                                <td style="text-align:center;"><?php echo $data['deviasi1'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tndkn_prbkn1'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_prbkn1'] ?></td>
                                <td style="text-align:center;"><?php echo $data['pj1'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_cmplt1'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_ovrins1'] ?></td>
                              </tr>
                              <tr>
                                <td style="text-align:center;"><?php echo $no++?></td>
                                <td style="text-align:center;"><?php echo $data['deviasi2'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tndkn_prbkn2'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_prbkn2'] ?></td>
                                <td style="text-align:center;"><?php echo $data['pj2'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_cmplt2'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_ovrins2'] ?></td>
                              </tr>
                              <tr>
                                <td style="text-align:center;"><?php echo $no++?></td>
                                <td style="text-align:center;"><?php echo $data['deviasi3'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tndkn_prbkn3'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_prbkn3'] ?></td>
                                <td style="text-align:center;"><?php echo $data['pj3'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_cmplt3'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_ovrins3'] ?></td>
                              </tr>
                              <tr>
                                <td style="text-align:center;"><?php echo $no++?></td>
                                <td style="text-align:center;"><?php echo $data['deviasi4'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tndkn_prbkn4'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_prbkn4'] ?></td>
                                <td style="text-align:center;"><?php echo $data['pj4'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_cmplt4'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_ovrins4'] ?></td>
                              </tr>
                              <tr>
                                <td style="text-align:center;"><?php echo $no++?></td>
                                <td style="text-align:center;"><?php echo $data['deviasi5'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tndkn_prbkn5'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_prbkn5'] ?></td>
                                <td style="text-align:center;"><?php echo $data['pj5'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_cmplt5'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_ovrins5'] ?></td>
                              </tr>
                              <tr>
                                <td style="text-align:center;"><?php echo $no++?></td>
                                <td style="text-align:center;"><?php echo $data['deviasi6'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tndkn_prbkn6'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_prbkn6'] ?></td>
                                <td style="text-align:center;"><?php echo $data['pj6'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_cmplt6'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_ovrins6'] ?></td>
                              </tr>
                              <tr>
                                <td style="text-align:center;"><?php echo $no++?></td>
                                <td style="text-align:center;"><?php echo $data['deviasi7'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tndkn_prbkn7'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_prbkn7'] ?></td>
                                <td style="text-align:center;"><?php echo $data['pj7'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_cmplt7'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_ovrins7'] ?></td>
                              </tr>
                              <tr>
                                <td style="text-align:center;"><?php echo $no++?></td>
                                <td style="text-align:center;"><?php echo $data['deviasi8'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tndkn_prbkn8'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_prbkn8'] ?></td>
                                <td style="text-align:center;"><?php echo $data['pj8'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_cmplt8'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_ovrins8'] ?></td>
                              </tr>
                              <tr>
                                <td style="text-align:center;"><?php echo $no++?></td>
                                <td style="text-align:center;"><?php echo $data['deviasi9'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tndkn_prbkn9'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_prbkn9'] ?></td>
                                <td style="text-align:center;"><?php echo $data['pj9'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_cmplt9'] ?></td>
                                <td style="text-align:center;"><?php echo $data['tgl_ovrins9'] ?></td>
                              </tr>

                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Angga
              Tri 2022</span>
          </div>
        </footer>
        <!-- partial -->
        <!--partial-->

        <!--partial-->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../assets/vendors/chart.js/Chart.min.js"></script>
  <script src="../assets/vendors/progressbar.js/progressbar.min.js"></script>
  <script src="../assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="../assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
  <script src="../assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
  <script src="../assets/js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../assets/js/off-canvas.js"></script>
  <script src="../assets/js/hoverable-collapse.js"></script>
  <script src="../assets/js/misc.js"></script>
  <script src="../assets/js/settings.js"></script>
  <script src="../assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src="../assets/js/dashboard.js"></script>
  <!-- End custom js for this page -->
  <script type="text/javascript" src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
  <link rel="stylesheet" href="tes.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
</body>

</html>
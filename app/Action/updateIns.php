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
    <link rel="stylesheet" href="../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
              </div>
              <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../index.html"><img src="../assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <?php
        include '../conn.php';
        $ID = $_GET['id_sap'];
        $Record = mysqli_query($conn, "SELECT * FROM `sap1` WHERE id_sap = $ID");
        $data = mysqli_fetch_array($Record);
        
        ?>
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
              </div>
              <div class="col-md-6 grid-margin stretch-card">
              </div>
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="color:black;">Edit Data Inspeksi Terencana </h4>
                    <form action="method/update1.php" method="POST" class="form-sample">
                      <p class="card-description" style="color:black;">Hal Untuk Diperiksa&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Poin Aktual&emsp;&emsp;&emsp;Kode Bahaya&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Poin Aktual&emsp;&emsp;&emsp;Kode Bahaya</p>
                      <input name="id_sap" type="hidden" value="<?php echo $data['id_sap'] ?>"></input>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">Bangunan, Atap, Dinding, Pintu, Jendela, Toilet, Tempat Cuci, dsb.</label>
                            <div class="col-sm-3">
                              <input type="text" name="a" class="form-control" value="<?php echo $data['a'] ?>" placeholder="Max:50" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="a1" class="form-control" value="<?php echo $data['a1'] ?>"  required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">Permukaan Tempat Jalan dan Lantai</label>
                            <div class="col-sm-3">
                              <input type="text" name="b" class="form-control" value="<?php echo $data['b'] ?>" placeholder="Max:20" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="b1" class="form-control" value="<?php echo $data['b1'] ?>"  required/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">Pencahayaan - Buatan/Alami</label>
                            <div class="col-sm-3">
                              <input type="text" name="c" class="form-control" value="<?php echo $data['c'] ?>" placeholder="Max:10" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="c1" class="form-control" value="<?php echo $data['c1'] ?>"  required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">Ventilasi - Buatan/Alami</label>
                            <div class="col-sm-3">
                              <input type="text" name="d" class="form-control" value="<?php echo $data['d'] ?>"  placeholder="Max:5" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="d1" class="form-control" value="<?php echo $data['d1'] ?>"   required/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">Penyimpanan dan Penumpukan di Halaman</label>
                            <div class="col-sm-3">
                              <input type="text" name="e" class="form-control" value="<?php echo $data['e'] ?>" placeholder="Max:10" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="e1" class="form-control" value="<?php echo $data['e1'] ?>"  required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">Housekeeping di Daerah Halaman dan Belakang</label>
                            <div class="col-sm-3">
                              <input type="text" name="f" class="form-control" value="<?php echo $data['f'] ?>" placeholder="Max:50" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="f1" class="form-control" value="<?php echo $data['f1'] ?>"  required/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">Penumpukan dan Penyimpanan</label>
                            <div class="col-sm-3">
                              <input type="text" name="g" class="form-control" value="<?php echo $data['g'] ?>" placeholder="Max:20" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="g1" class="form-control" value="<?php echo $data['g1'] ?>"  required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">Daerah Jalan / Tempat Parkir</label>
                            <div class="col-sm-3">
                              <input type="text" name="h" class="form-control" value="<?php echo $data['h'] ?>" placeholder="Max:5" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="h1" class="form-control" value="<?php echo $data['h1'] ?>"  required/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">Tempat Sampah - Mencukupi / Dikosongkan Secara Berkala</label>
                            <div class="col-sm-3">
                              <input type="text" name="i" class="form-control" value="<?php echo $data['i'] ?>" placeholder="Max:10" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="i1" class="form-control" value="<?php echo $data['i1'] ?>"  required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">Instalasi Listrik - Kabel, Saklar, dll</label>
                            <div class="col-sm-3">
                              <input type="text" name="j" class="form-control" value="<?php echo $data['j'] ?>" placeholder="Max:15" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="j1" class="form-control" value="<?php echo $data['j1'] ?>"  required/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">Tangga, Jalan Tangga, Pegangan Tangga & Pengaman Sisi</label>
                            <div class="col-sm-3">
                              <input type="text" name="k" class="form-control" value="<?php echo $data['k'] ?>" placeholder="Max:25" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="k1" class="form-control" value="<?php echo $data['k1'] ?>"  required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">Platform dan Jalan di Atas Ketinggian</label>
                            <div class="col-sm-3">
                              <input type="text" name="l" class="form-control" value="<?php echo $data['l'] ?>" placeholder="Max:5" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="l1" class="form-control" value="<?php echo $data['l1'] ?>"  required/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">Peralatan Pertolongan Pertama</label>
                            <div class="col-sm-3">
                              <input type="text" name="m" class="form-control" value="<?php echo $data['m'] ?>" placeholder="Max:15" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="m1" class="form-control" value="<?php echo $data['m1'] ?>"  required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">Penyimpanan Silinder Gas</label>
                            <div class="col-sm-3">
                              <input type="text" name="n" class="form-control" value="<?php echo $data['n'] ?>" placeholder="Max:30" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="n1" class="form-control" value="<?php echo $data['n1'] ?>"  required/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">Penyimpanan Cairan Mudah Terbakar</label>
                            <div class="col-sm-3">
                              <input type="text" name="o" class="form-control" value="<?php echo $data['o'] ?>" placeholder="Max:10" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="o1" class="form-control" value="<?php echo $data['o1'] ?>" required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">Furnitur Kantor & Ergonomi</label>
                            <div class="col-sm-3">
                              <input type="text" name="p" class="form-control" value="<?php echo $data['p'] ?>" placeholder="Max:25" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="p1" class="form-control" value="<?php echo $data['p1'] ?>" required/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">Penyimpanan & Pengendalian Bahan Kimia Berbahaya</label>
                            <div class="col-sm-3">
                              <input type="text" name="q" class="form-control" value="<?php echo $data['q'] ?>" placeholder="Max:20" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="q1" class="form-control" value="<?php echo $data['q1'] ?>" required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">Penyimpanan Kayu & Bahan Mudah Terbakar Lainnya</label>
                            <div class="col-sm-3">
                              <input type="text" name="r" class="form-control" value="<?php echo $data['r'] ?>" placeholder="Max:10" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="r1" class="form-control" value="<?php echo $data['r1'] ?>" required/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">Rambu-Rambu & Kode Warna</label>
                            <div class="col-sm-3">
                              <input type="text" name="s" class="form-control" value="<?php echo $data['s'] ?>" placeholder="Max:5" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="s1" class="form-control" value="<?php echo $data['s1'] ?>" required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">Alat Pelindung Diri</label>
                            <div class="col-sm-3">
                              <input type="text" name="t" class="form-control" value="<?php echo $data['t'] ?>" placeholder="Max:20" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="t1" class="form-control" value="<?php echo $data['t1'] ?>" required/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">No 'NO UNAUTHORIZED ENTRY'</label>
                            <div class="col-sm-3">
                              <input type="text" name="u" class="form-control" value="<?php echo $data['u'] ?>" placeholder="Max:5" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="u1" class="form-control" value="<?php echo $data['u1'] ?>" required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">Perlindungan Kebakaran - APAR, Hydrant & Selang</label>
                            <div class="col-sm-3">
                              <input type="text" name="v" class="form-control" value="<?php echo $data['v'] ?>" placeholder="Max:50" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="v1" class="form-control" value="<?php echo $data['v1'] ?>" required/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">Tempat Berkumpul Darurat & Sistem Alarm Kebakaran'</label>
                            <div class="col-sm-3">
                              <input type="text" name="w" class="form-control" value="<?php echo $data['w'] ?>" placeholder="Max:15" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="w1" class="form-control" value="<?php echo $data['w1'] ?>" required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-7 col-form-label">Papan Pengumuman K3 & LH<</label>
                            <div class="col-sm-3">
                              <input type="text" name="x" class="form-control" value="<?php echo $data['x'] ?>" placeholder="Max:30" required/>
                            </div>
                            <div class="col-sm-2">
                              <input type="text" name="x1" class="form-control" value="<?php echo $data['x1'] ?>" required/>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-8 col-form-label">Approve Inspeksi Kedua ?</label>
                            <div class="col-sm-2">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="stat1" id="membershipRadios" value="2" checked>Yes</label>
                              </div>
                            </div>
                            <div class="col-sm-2">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="stat1" id="membershipRadios1" value="1">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-8 col-form-label">Approve Inspeksi Ketiga ?</label>
                            <div class="col-sm-2">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="stat2" value="2" checked>Yes</label>
                              </div>
                            </div>
                            <div class="col-sm-2">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="stat2" value="1">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                        <label for="exampleTextarea1">Keterangan</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="Keterangan"></textarea>
                      </div>
                      </div>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Submit
                      </button>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Warning</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Apakah Anda Yakin dengan Data yang Telah Diinput ?
                            </div>
                            <div class="modal-footer">
                              <button type="submit" class="btn btn-primary" name="update">Submit</button>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button type="button" class="btn btn-dark" onclick="location='../dashboardIns.php'">Cancel</button>
                      </div>
                    </form>
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
          <!-- partial:../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          
          <!-- partial -->
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
    <script src="../assets/vendors/select2/select2.min.js"></script>
    <script src="../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/js/off-canvas.js"></script>
    <script src="../assets/js/hoverable-collapse.js"></script>
    <script src="../assets/js/misc.js"></script>
    <script src="../assets/js/settings.js"></script>
    <script src="../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../assets/js/file-upload.js"></script>
    <script src="../assets/js/typeahead.js"></script>
    <script src="../assets/js/select2.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- End custom js for this page -->
  </body>
</html>
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
        $ID = $_GET['id_step'];
        $Record = mysqli_query($conn, "SELECT * FROM `sap` WHERE id_step = $ID");
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
                    <h4 class="card-title" style="color:black;">Edit Data PTO</h4>
                    <form action="method/update.php" method="POST" class="form-sample">
                      <p class="card-description"> Personal info </p>
                      <input name="id_step" type="hidden" value="<?php echo $data['id_step'] ?>"></input>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-9 col-form-label">Apakah penutup dibuka perlahan dan dilipat rapi ?</label>
                            <div class="col-sm-3">
                              <select name="a1" class="form-control" style="color:black;">
                                <option value="<?php echo $data['a1'] == "No" ? 'No' : 'Yes';?>"><?php echo $data['a1'] == "No" ? 'No' : 'Yes';?></option>
                                <option value="<?php echo $data['a1'] == "No" ? 'Yes' : 'No';?>"><?php echo $data['a1'] == "No" ? 'Yes' : 'No';?></option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-9 col-form-label">Apakah alat dan peralatan diperiksa dan dipastikan baik ?</label>
                            <div class="col-sm-3">
                              <select name ="b1" class="form-control" style="color:black;">
                                <option value="<?php echo $data['b1'] == 'No' ? 'No' : 'Yes';?>"><?php echo $data['b1'] == 'No' ? 'No' : 'Yes';?></option>
                                <option value="<?php echo $data['b1'] == 'No' ? 'Yes' : 'No';?>"><?php echo $data['b1'] == 'No' ? 'Yes' : 'No';?></option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-9 col-form-label">Apakah Kabel dan steker diatur tidak mengganggu aktivitas ?</label>
                            <div class="col-sm-3">
                              <select name ="c1" class="form-control" style="color:black;">
                                <option value="<?php echo $data['c1'] == 'No' ? 'No' : 'Yes';?>"><?php echo $data['c1'] == 'No' ? 'No' : 'Yes';?></option>
                                <option value="<?php echo $data['c1'] == 'No' ? 'Yes' : 'No';?>"><?php echo $data['c1'] == 'No' ? 'Yes' : 'No';?></option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-9 col-form-label">Apakah komputer dihidupkan dengan tata cara yang benar ?</label>
                            <div class="col-sm-3">
                              <select name ="d1" class="form-control" style="color:black;">
                                <option value="<?php echo $data['d1'] == 'No' ? 'No' : 'Yes';?>"><?php echo $data['d1'] == 'No' ? 'No' : 'Yes';?></option>
                                <option value="<?php echo $data['d1'] == 'No' ? 'Yes' : 'No';?>"><?php echo $data['d1'] == 'No' ? 'Yes' : 'No';?></option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-9 col-form-label">Apakah tinggi monitor diatur sesuai dengan kondisi ruangan ?</label>
                            <div class="col-sm-3">
                              <select name ="e1" class="form-control" style="color:black;">
                                <option value="<?php echo $data['e1'] == 'No' ? 'No' : 'Yes';?>"><?php echo $data['e1'] == 'No' ? 'No' : 'Yes';?></option>
                                <option value="<?php echo $data['e1'] == 'No' ? 'Yes' : 'No';?>"><?php echo $data['e1'] == 'No' ? 'Yes' : 'No';?></option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-9 col-form-label">Apakah kontras layar disesuaikan dengan kondisi layar ?</label>
                            <div class="col-sm-3">
                              <select name ="f1" class="form-control" style="color:black;">
                                <option value="<?php echo $data['f1'] == 'No' ? 'No' : 'Yes';?>"><?php echo $data['f1'] == 'No' ? 'No' : 'Yes';?></option>
                                <option value="<?php echo $data['f1'] == 'No' ? 'Yes' : 'No';?>"><?php echo $data['f1'] == 'No' ? 'Yes' : 'No';?></option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-9 col-form-label">Apakah komputer dioperasikan sesuai tata cara yang benar ?</label>
                            <div class="col-sm-3">
                              <select name ="g1" class="form-control" style="color:black;">
                                <option value="<?php echo $data['g1'] == 'No' ? 'No' : 'Yes';?>"><?php echo $data['g1'] == 'No' ? 'No' : 'Yes';?></option>
                                <option value="<?php echo $data['g1'] == 'No' ? 'Yes' : 'No';?>"><?php echo $data['g1'] == 'No' ? 'Yes' : 'No';?></option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-9 col-form-label">Apakah posisi duduk dijaga dan tulang punggung dijaga tegak ?</label>
                            <div class="col-sm-3">
                              <select name ="h1" class="form-control" style="color:black;">
                                <option value="<?php echo $data['h1'] == 'No' ? 'No' : 'Yes';?>"><?php echo $data['h1'] == 'No' ? 'No' : 'Yes';?></option>
                                <option value="<?php echo $data['h1'] == 'No' ? 'Yes' : 'No';?>"><?php echo $data['h1'] == 'No' ? 'Yes' : 'No';?></option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-9 col-form-label">Apakah mata diistirahatkan secara teratur ?</label>
                            <div class="col-sm-3">
                              <select name ="i1" class="form-control" style="color:black;">
                                <option value="<?php echo $data['i1'] == 'No' ? 'No' : 'Yes';?>"><?php echo $data['i1'] == 'No' ? 'No' : 'Yes';?></option>
                                <option value="<?php echo $data['i1'] == 'No' ? 'Yes' : 'No';?>"><?php echo $data['i1'] == 'No' ? 'Yes' : 'No';?></option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-9 col-form-label">Apakah alat dirapikan kembali setelah dipakai ?</label>
                            <div class="col-sm-3">
                              <select name ="j1" class="form-control" style="color:black;">
                              <option value="<?php echo $data['j1'] == 'No' ? 'No' : 'Yes';?>"><?php echo $data['j1'] == 'No' ? 'No' : 'Yes';?></option>
                                <option value="<?php echo $data['j1'] == 'No' ? 'Yes' : 'No';?>"><?php echo $data['j1'] == 'No' ? 'Yes' : 'No';?></option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-9 col-form-label">Apakah kmputer ditutup kembali setelah dipakai ?</label>
                            <div class="col-sm-3">
                              <select name ="k1" class="form-control" style="color:black;">
                                <option value="<?php echo $data['k1'] == 'No' ? 'No' : 'Yes';?>"><?php echo $data['k1'] == 'No' ? 'No' : 'Yes';?></option>
                                <option value="<?php echo $data['k1'] == 'No' ? 'Yes' : 'No';?>"><?php echo $data['k1'] == 'No' ? 'Yes' : 'No';?></option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-8 col-form-label">Approve ?</label>
                            <div class="col-sm-2">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="stat_spv" id="membershipRadios" value="1" checked>Yes</label>
                              </div>
                            </div>
                            <div class="col-sm-2">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="stat_spv" id="membershipRadios1" value="0">No</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                        <label for="exampleTextarea1">Keterangan</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="Keterangan"></textarea>
                      </div>
                      </div>
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
                      <button type="button" class="btn btn-dark" onclick="location='../dashboardSAP.php'">Cancel</button>
                      </div>
                    </form>
                  </div>
                </div>
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
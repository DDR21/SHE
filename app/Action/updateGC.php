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
        $ID = $_GET['id_gc'];
        $Record = mysqli_query($conn, "SELECT * FROM `gc` WHERE id_gc = $ID");
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
                    <h4 class="card-title" style="color:black;">Edit Data Green Card</h4>
                    <form action="method/update2.php" method="POST" class="form-sample" enctype="multipart/form-data">
                      <p class="card-description"> Personal info </p>
                      <input name="id_gc" type="hidden" value="<?php echo $data['id_gc'] ?>"></input>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-5 col-form-label">Kriteria Temuan</label>
                            <div class="col-sm-7">
                              <select name="kritem" class="form-control" style="color:black;">
                                <option value="<?php echo $data['kritem'] == "Tindakan Tidak Aman" ? 'Tindakan Tidak Aman' : 'Kondisi Tidak Aman';?>"><?php echo $data['kritem'] == 'Tindakan Tidak Aman' ? 'Tindakan Tidak Aman' : 'Kondisi Tidak Aman';?></option>
                                <option value="<?php echo $data['kritem'] == "Tindakan Tidak Aman" ? 'Kondisi Tidak Aman' : 'Tindakan Tidak Aman';?>"><?php echo $data['kritem'] == 'Tindakan Tidak Aman' ? 'Kondisi Tidak Aman' : 'Tindakan Tidak Aman';?></option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-5 col-form-label">Kategori Temuan</label>
                            <div class="col-sm-7">
                              <select name ="katem" class="form-control" style="color:black;">
                                <option value="<?php echo $data['katem']?>"><?php echo $data['katem']?></option>
                                <option value="APD">APD</option>
                                <option value="Jalan Tambang">Jalan Tambang</option>
                                <option value="House Keeping">House Keeping</option>
                                <option value="SOP / JSA">SOP / JSA</option>
                                <option value="Tool">Tool</option>
                                <option value="Unit A2B / Sarana">Unit A2B / Sarana</option>
                                <option value="Inspeksi / Observasi">Inspeksi / Observasi</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      <div class="form-group">
                        <label for="exampleTextarekritem">Rincian dari Bahaya Diamati</label>
                        <textarea class="form-control" id="exampleTextarekritem" rows="4" name="det_bhya"><?php echo $data['det_bhya']?></textarea>
                      </div>
                        <div class="col-md-12">
                        <div class="form-group">
                        <label for="exampleTextarekritem">Tindakan Perbaikan Langsung </label>
                        <textarea class="form-control" id="exampleTextarekritem" rows="4" name="det_prbkn"><?php echo $data['det_prbkn']?></textarea>
                        </div>
                        </div>
                      </div>
                      <div class="row">
                      <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-5 col-form-label">Kode Bahaya</label>
                            <div class="col-sm-3">
                              <select name ="kd_bhya" class="form-control" style="color:black;">
                                <option value="<?php echo $data['kd_bhya']?>"><?php echo $data['kd_bhya']?></option>
                                <option value="AA">AA</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                        <div class="form-group">
                        <label for="exampleTextarekritem">Gambar Temuan</label>
                        <td><input type="file" name="image_found"><img src="<?php echo "../" . $data['image_found']?>"  width='100px' height='100px'></td><br>
                        </div>
                        </div>
                        <div class="col-md-3">
                        <div class="form-group">
                        <label for="exampleTextarekritem">Gambar Perbaikaan</label>
                        <td><input type="file" name="image_after" value="<?php echo "../" . $data['image_after']?>"><img src="<?php echo "../" . $data['image_after']?>" width='100px' height='100px'></td><br>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="exampleTextarekritem">Keterangan</label>
                        <textarea class="form-control" id="exampleTextarekritem" rows="4" name="Keterangan"><?php echo $data['Keterangan']?></textarea>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Close Case ?</label>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="status" id="membershipRadios" value="Close" checked>Close</label>
                              </div>
                            </div>
                            <div class="col-sm-4">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="status" id="membershipRadios1" value="Open">Open</label>
                              </div>
                            </div>
                          </div>
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
                      <button type="button" class="btn btn-dark" onclick="location='../dashboard.php'">Cancel</button>
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
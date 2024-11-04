<!DOCTYPE html>
<html lang="en">
  <head>
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
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--<script type="text/javascript" src="Editable/dist/jquery.tabledit.js"></script>-->
    </head>
    <?php 
  session_start ();
  include 'conn.php';
  ?>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal" style="color: white"><?php echo $_SESSION['nrp']; ?></h5>
                  <span>Status user</span>
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content"> 
                    <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="dashboard.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Dashboard (SAP)</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="dashboardSAP.php">Checklist Observation</a></li>
                <li class="nav-item"> <a class="nav-link" href="dashboardIns.php">Planned Inspection</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini1.svg" alt="logo" /></a>
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
                    <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $_SESSION['nrp']; ?></p>
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
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
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
                    <h4 class="card-title" style="color: black">SAP Status</h4>
                    <div class="row py-10" >
    <div class="col-lg-12 mx-auto">
      <div class="card rounded shadow border-0">
        <div class="card-body p-12 bg-white rounded" >
          <div class="table-responsive">
            <table id="example" style="width:100%" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th style="text-align:center">No.</th>
				          <th style="text-align:center">Nama</th>
                  <th style="text-align:center">NRP</th>
				          <th style="text-align:center">Tanggal</th>
                  <th style="text-align:center">Jabatan</th>
                  <th style="text-align:center">Status</th>
				          <th style="text-align:center">Detail</th>
                  <th style="text-align:center">Export</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "shedb";
                
                $connection = new mysqli($servername, $username, $password, $database);

                if ($connection->connect_error){
                  die("Connection failed : " . $connection->connect_error);
                }

                $sql = "SELECT * FROM sap";
                $result = $connection->query($sql);
                $no=1;

                if(!$result){
                  die("Invalid query: " . $connection->error);
                }
                
                
                while($row = $result->fetch_assoc()){
                  $stat1 = $row["stat_spv"]; 
                  $step1 = $row["a1"];
                  $step2 = $row["b1"];
                  $step3 = $row["c1"];
                  $step4 = $row["d1"];
                  $step5 = $row["e1"];
                  $step6 = $row["f1"];
                  $step7 = $row["g1"];
                  $step8 = $row["h1"];
                  $step9 = $row["i1"];
                  $step10 = $row["j1"];
                  $step11 = $row["k1"];
                  $KET = $row["Keterangan"];
                  $row["tanggal"] = date_format(date_create($row["tanggal"]), "d M Y");
                  
                  echo  "<tr>
                  <td style='text-align:center'>". $no++ ."</td>
				          <td style='text-align:center'>" . $row["nama"] ."</td>
                  <td style='text-align:center'>" . $row["nrp"] ."</td>
                  <td style='text-align:center'>" . $row["tanggal"] ."</td>
                  <td style='text-align:center'>" . $row["section"] ."</td>
                  <td style='text-align:center'>" . (
                    $stat1 == "Pending" ? '<label class="badge badge-warning">Pending</label>' :
                    ($stat1 == "Rejected" ? '<label class="badge badge-danger">Rejected</label>' :
                    ($stat1 == "Approved" ? '<label class="badge badge-success">Approved</label>' : '' ))
                  ) . "</td>
				          <td style='text-align:center'>
                  <div class='btn-group' role='group' aria-label='Basic example'>
                  <button type='button' class='btn btn-primary' data-toggle='modal' data-target='.bd-example-modal-lg" . $row["id_step"] . "'><i class='mdi mdi-alert-octagon'></i></button>
                  <div class='modal fade bd-example-modal-lg" . $row["id_step"] . "' tabindex='-1' role='dialog' aria-labelledby='myLargeModalLabel' aria-hidden='true'>
                    <div class='modal-dialog modal-lg'>
                      <div class='modal-content'>
                      <div class='modal-header'>
                      <h5 class='modal-title'>Planned Task Observation Checklist Ceklis Observasi Tugas Terencana</h5>
        					    <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          						  <span aria-hidden='true'>&times;</span>
        					</button>
      					    </div>
      					    <div class='modal-body'>
                      <table class='table table-hover' >
                        <thead>
                          <tr>
                            <th style='text-align:center'>#</th>
                            <th style='text-align:center'>Langkah-Langkah</th>
                            <th style='text-align:center'>Memenuhi ?</th>
                            <th style='text-align:center'>Kode Bahaya</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope='row'>1</th>
                            <td style='text-align:center'>Apakah  penutup dibuka perlahan dan dilipat rapi ?</td>
                            <td style='text-align:center'>" . ($step1 == 'No' ? '<label class="badge badge-danger">No</label>' : '<label class="badge badge-success">Yes</label>') . "</td>
                            <td text-align: center>C</td>
                          </tr>
                          <tr>
                            <th scope='row'>2</th>
                            <td style='text-align:center'>Apakah alat dan peralatan diperiksa dan dipastikan baik ?</td>
                            <td style='text-align:center'>" . ($step2 == 'No' ? '<label class="badge badge-danger">No</label>' : '<label class="badge badge-success">Yes</label>') . "</td>
                            <td text-align: center>A</td>
                          </tr>
                          <tr>
                            <th scope='row'>3</th>
                            <td style='text-align:center'>Apakah Kabel dan steker diatur tidak mengganggu aktivitas ?</td>
                            <td style='text-align:center'>" . ($step3 == 'No' ? '<label class="badge badge-danger">No</label>' : '<label class="badge badge-success">Yes</label>') . "</td>
                            <td text-align: center>A</td>
                          </tr>
                          <tr>
                            <th scope='row'>4</th>
                            <td style='text-align:center'>Apakah komputer dihidupkan dengan tata cara yang benar ?</td>
                            <td style='text-align:center'>" . ($step4 == 'No' ? '<label class="badge badge-danger">No</label>' : '<label class="badge badge-success">Yes</label>') . "</td>
                            <td text-align: center>B</td>
                          </tr>
                          <tr>
                            <th scope='row'>5</th>
                            <td style='text-align:center'>Apakah tinggi monitor diatur sesuai dengan kondisi ruangan ?</td>
                            <td style='text-align:center'>" . ($step5 == 'No' ? '<label class="badge badge-danger">No</label>' : '<label class="badge badge-success">Yes</label>') . "</td>
                            <td text-align: center>B</td>
                          </tr>
                          <tr>
                            <th scope='row'>6</th>
                            <td style='text-align:center'>Apakah kontras layar disesuaikan dengan kondisi layar ?</td>
                            <td style='text-align:center'>" . ($step6 == 'No' ? '<label class="badge badge-danger">No</label>' : '<label class="badge badge-success">Yes</label>') . "</td>
                            <td text-align: center>B</td>
                          </tr>
                          <tr>
                            <th scope='row'>7</th>
                            <td style='text-align:center'>Apakah komputer dioperasikan sesuai tata cara yang benar ?</td>
                            <td style='text-align:center'>" . ($step7 == 'No' ? '<label class="badge badge-danger">No</label>' : '<label class="badge badge-success">Yes</label>') . "</td>
                            <td text-align: center>B</td>
                          </tr>
                          <tr>
                            <th scope='row'>8</th>
                            <td style='text-align:center'>Apakah posisi duduk dijaga dan tulang punggung dijaga tegak ?</td>
                            <td style='text-align:center'>" . ($step8 == 'No' ? '<label class="badge badge-danger">No</label>' : '<label class="badge badge-success">Yes</label>') . "</td>
                            <td text-align: center>A</td>
                          </tr>
                          <tr>
                            <th scope='row'>9</th>
                            <td style='text-align:center'>Apakah mata diistirahatkan secara teratur ?</td>
                            <td style='text-align:center'>" . ($step9 == 'No' ? '<label class="badge badge-danger">No</label>' : '<label class="badge badge-success">Yes</label>') . "</td>
                            <td text-align: center>B</td>
                          </tr>
                          <tr>
                            <th scope='row'>10</th>
                            <td style='text-align:center'>Apakah alat dirapikan kembali setelah dipakai ?</td>
                            <td style='text-align:center'>" . ($step10 == 'No' ? '<label class="badge badge-danger">No</label>' : '<label class="badge badge-success">Yes</label>') . "</td>
                            <td text-align: center>B</td>
                          </tr>
                          <tr>
                            <th scope='row'>11</th>
                            <td style='text-align:center'>Apakah kmputer ditutup kembali setelah dipakai ?</td>
                            <td style='text-align:center'>" . ($step11 == 'No' ? '<label class="badge badge-danger">No</label>' : '<label class="badge badge-success">Yes</label>') . "</td>
                            <td text-align: center>B</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
      					    <div class='modal-footer'>
        				    <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
                      </div>
                      </div>
                    </div>
                  </div>
                    <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter" . $row["id_step"] . "'><i class='mdi mdi-note'></i></button>
                      <div class='modal fade' id='exampleModalCenter" . $row["id_step"] . "' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                        <div class='modal-dialog modal-dialog-centered' role='document'>
                          <div class='modal-content'>
                            <div class='modal-header'>
                              <h5 class='modal-title' id='exampleModalLongTitle'>Notes</h5>
                              <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                              </button>
                            </div>
                            <div class='modal-body'>
                            " . $row["Keterangan"] ."
                            </div>
                            <div class='modal-footer'>
                              <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cancel</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    <button type='button' class='btn btn-primary btn-dark'><a href = 'Action/updateSAP.php? id_step=$row[id_step]'><i class='mdi mdi-file-check btn-icon-append'></i></button>
					          <button type='button' class='btn btn-primary btn-danger'><a href = 'Action/deleteSAP.php? id_step=$row[id_step]'><i class='mdi mdi-delete'></i></button>
                    </div>
				            </td>
                    <td><button type='button' class='btn btn-success'><i class='mdi mdi-file-excel'></i></button></td>
                      </tr>";
                }
                ?>
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
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Angga Tri 2022</span>
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
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
	<script type="text/javascript" src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
  <!--<script type="text/javascript" src="Editable/custom_table_edit.js">-->
	<link rel="stylesheet" href="tes.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
  </body>
</html>
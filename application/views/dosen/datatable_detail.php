<?php
    include('layouts/layoutdosen.php');
    ?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="datatable">Tabel Data Mahasiswa</a></li>
              <li class="breadcrumb-item active">View</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Bimbingan Skripsi</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Judul Bimbingan</label>
                <input type="text" id="inputName" class="form-control" placeholder="Enter Judul">
              </div>
              <div class="form-group">
                <label for="inputDescription">Deskripsi</label>
                <textarea id="inputDescription" class="form-control" rows="4" placeholder="Deskripsi"></textarea>
              </div>
              <!-- Date -->
              <div class="form-group">
                <label>Tanggal:</label>
                  <div class="input-group date" id="reservationdate" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                      <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                  </div>
              </div>
              <!-- /.form group -->
             <!-- button submit -->
             <input type="submit" value="Submit" class="btn btn-primary float-left">
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary card-outline">
            <div class="card-header">
              <h3 class="card-title">Profil Mahasiswa</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body box-profile">
              <div class="form-group">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-block"
                       src="dist/img/DSC_2070(1).jpg"
                       alt="User profile picture">
                </div>
              </div>
              <div class="form-group">
                <h3 class="profile-username text-center">Hilmy Maulana Ilmy</h3>
                <p class="text-center">06.2017.1.06785</p>
              </div>
              <div class="form-group">
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Status:</b> <a class="float-right">Saya Sedang Bimbingan Skripsi</a>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card-primary">
            <div class="card-header">
              <h3 class="card-title">History Bimbingan Skripsi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Bimbingan ke-</th>
                      <th>Judul Bimbingan</th>
                      <th>Deskripsi</th>
                      <th>Tanggal Bimbingan</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Bimbingan Judul Skripsi</td>
                      <td>Bikin Judul Skripsi AI</td>
                      <td>9-7-2014</td>
                      <td>
                        <a href="#" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.card -->
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- InputMask -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Page script -->
<script>
  $(function () {

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date range picker
    $('#reservation').daterangepicker()

  })
</script>
</body>
</html>

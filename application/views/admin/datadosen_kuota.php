<?php
    include('layouts/layoutadmin.php');
    ?>
<!-- DataTables -->
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

<body class="hold-transition sidebar-mini">
<div class="wrapper">
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kuota Dosen Pembimbing</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="datadosen">Tabel Data Dosen</a></li>
              <li class="breadcrumb-item active">Kuota Dosen</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         <div class="col-md-6">
          <div class="card card-secondary card-outline">
            <div class="card-body box-profile">
              <div class="form-group">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-block"
                       src="dist/img/DSC_2070(1).jpg"
                       alt="User profile picture">
                </div>
              </div>
              <div class="form-group">
                <h3 class="profile-username text-center">Pak Andy</h3>
                <p class="text-center">1131232</p>
              </div>
              
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <div class="col-md-6">
        <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Tambah Kuota</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                  <p>PERHATIAN!! kuota maksimal hanya bisa ditambahkan maksimal 15 minimal 0.</p>
              </div>
              <div class="form-group">
                <label for="inputKuotaMaksimal">Kuota Maksimal</label>
                <input type="number" id="inputKuotaMaksimal" class="form-control" min="0" max="15"value="0" step="1">
              </div>
             <!-- button submit -->
             <input type="submit" value="Simpan" class="btn btn-primary float-left">
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
          <div class="col-12">
              
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Mahasiswa yang sedang dibimbing</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nomor Pokok</th>
                    <th>Nama</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>06.2017.1.06785</td>
                    <td>Hilmy Maulana Ilmy
                    </td>
                  </tr>
                  <tfoot>
                  <tr>
                    <th>Nomor Pokok</th>
                    <th>Nama</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- /.wrapper -->
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
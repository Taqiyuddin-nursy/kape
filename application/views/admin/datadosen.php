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
            <h1>Data Dosen Pembimbing Skripsi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tabel Data Dosen</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Dosen yang sedang membimbing Skripsi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nomor Induk</th>
                    <th>Nama</th>
                    <th>Mahasiswa yang Dibimbing</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1124567</td>
                    <td>Pak Andy
                    </td>
                    <td>15 Mahasiswa</td>
                    <td>
                    <a class="btn btn-primary btn-sm" href="datadosen_view">
                      <i class="fas fa-folder">
                      </i>
                      View
                      </a>
                      <a class="btn btn-success btn-sm" href="datadosen_kuota">
                      <i class="fas fa-plus">
                      </i>
                      Kuota
                      </a>
                    </td>
                  </tr>
                  <tr>
                    <td>1127654</td>
                    <td>Pak Rachman
                    </td>
                    <td>13 Mahasiswa</td>
                    <td>
                    <a class="btn btn-primary btn-sm" href="databimbingan_view">
                      <i class="fas fa-folder">
                      </i>
                      View
                      </a>
                      <a class="btn btn-success btn-sm" href="datadosen_kuota">
                      <i class="fas fa-plus">
                      </i>
                      Kuota
                      </a>
                    </td>
                  </tr>
                  <tfoot>
                  <tr>
                    <th>Nomor Induk</th>
                    <th>Nama</th>
                    <th>Mahasiswa yang Dibimbing</th>
                    <th>Action</th>
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
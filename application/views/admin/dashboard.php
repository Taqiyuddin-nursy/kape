<?php
    include("layouts/layoutadmin.php");
    ?>
<!-- DataTables -->
<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<section class="content">
 <div class="container-fluid">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-md-3 col-sm-6 col-12">
     <!-- small box -->
      <div class="info-box bg-info">
       <span class="info-box-icon"><i class="fas fa-users"></i></span>
       <div class="info-box-content">
        <span class="info-box-text">Mahasiswa yang aktif</span>
        <span class="info-box-number">110</span>
       </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-12">
     <!-- small box -->
      <div class="info-box bg-info">
       <span class="info-box-icon"><i class="fas fa-user-graduate"></i></span>
       <div class="info-box-content">
        <span class="info-box-text">Mahasiswa telah lulus</span>
        <span class="info-box-number">23</span>
       </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-12">
     <!-- small box -->
      <div class="info-box bg-success">
       <span class="info-box-icon"><i class="fas fa-chalkboard-teacher"></i></span>
       <div class="info-box-content">
        <span class="info-box-text">Dosen yang aktif</span>
        <span class="info-box-number">7</span>
       </div>
      </div>
    </div>
    <div class="col-md-3 col-sm-6 col-12">
     <!-- small box -->
      <div class="info-box bg-secondary">
       <span class="info-box-icon"><i class="fas fa-scroll"></i></span>
       <div class="info-box-content">
        <span class="info-box-text">Bimbingan yang aktif</span>
        <span class="info-box-number">1367</span>
       </div>
      </div>
    </div>
    <!-- grafik chart-->
    <div class="col-lg-6">
    <div class="card">
     <div class="card-header border-0">
      <div class="d-flex justify-content-between">
        <h3 class="card-title">Mahasiswa Aktif atau Lulus</h3>
         
      </div>
     </div>
     <div class="card-body">
      <!-- /.d-flex -->
      <div class="position-relative mb-4">
        <canvas id="sales-chart" height="200"></canvas>
      </div>

      <div class="d-flex flex-row justify-content-end">
        <span class="mr-2">
         <i class="fas fa-square text-primary"></i> Aktif
        </span>

        <span>
         <i class="fas fa-square text-gray"></i> Lulus
        </span>
      </div>
     </div>
    </div>
    </div>
    <!-- row -->
  </div>
 </div>
</section>
</div>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard3.js"></script>
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
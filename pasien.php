<?php
include_once 'header.php';
include_once 'sidebar.php'
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fixed Layout</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DATA PASIEN</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
<?php
require_once "class_pasien.php";
    $_submit = $_POST['submit'];
    $_kode = $_POST['kode'];
    $_nama = $_POST['nama'];
    $_tmp_lahir = $_POST['tmp_lahir'];
    $_tgl_lahir = $_POST['tgl_lahir'];
    $_email = $_POST['email'];
    $_jk = $_POST['jk'];
    $_id_pasien = $_POST['id_pasien'];
    $_tanggal_daftar = $_POST['tanggal_daftar'];
    $_tinggi_p = $_POST['tinggi_p'];
    $_berat_p = $_POST['berat_p'];
$supreme = new Pasien($_kode, $_nama, $_tmp_lahir, $_tgl_lahir, $_email, $_jk, $_id_pasien, $_tanggal_daftar, $_tinggi_p, $_berat_p);
?>
<?php  if (isset($_submit)) : ?>
    <div class="row mt-3" style="border: 1px solid green;">
        <div class="col-md-12 p-3">
<h4 class="text-center bg-primary">DATA YANG DIMASUKKAN</h4>
<table>

  <thead>
    <tr>
      <th scope="col">Tanggal Melakukan Test </th>
      <th scope="col">:</th>
      <th scope="col"><?= $supreme->tanggal ?></th>
    </tr>

    <tr>
      <th scope="col">Kode Pasien</th>
      <th scope="col">:</th>
      <th scope="col"><?= $supreme->kode ?></th>
    </tr>

    <tr>
      <th scope="col">Nama</th>
      <th scope="col">:</th>
      <th scope="col"><?= $supreme->nama ?></th>
    </tr>

    <tr>
      <th scope="col">Gender</th>
      <th scope="col">:</th>
      <th scope="col"><?= $supreme->gender ?></th>
    </tr>

    <tr>
      <th scope="col">Berat Pasien</th>
      <th scope="col">:</th>
      <th scope="col"><?= $supreme->berat ?></th>
    </tr>

    <tr>
      <th scope="col">Tinggi Pasien</th>
      <th scope="col">:</th>
      <th scope="col"><?= $supreme->tinggi ?></th>
    </tr>

    <tr>
      <th scope="col">Angka BMI</th>
      <th scope="col">:</th>
      <th scope="col"><?= $supreme->nilai_bmi() ?></th>
    </tr>

    <tr>
      <th scope="col">Hasil</th>
      <th scope="col">:</th>
      <th scope="col">Nilai BMI Pasien ini adalah <?= $supreme->status_bmi() ?>
      </th>
    </tr>

  </thead>


</table>

</div>
 </div>
<?php 
endif 
?>
<div class="row">
  <section class="col-lg-12 connectedSortable">
    <div class="card direct-chat direct-chat-primary">
      <div class="card-header">
        <h3 class="card-title">Daftar Pasien</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>

          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-3">
        
        <table class="table">
          <thead>
            <tr>
              <th scope="col">no</th>
              <th scope="col">Tanggal Periksa</th>
              <th scope="col">Kode Pasien</th>
              <th scope="col">Nama Pasien</th>
              <th scope="col">Gender</th>
              <th scope="col">Berat (kg)</th>
              <th scope="col">Tinggi (cm)</th>
              <th scope="col">Nilai BMI</th>
              <th scope="col">Status BMI</th>
            </tr>
            <?php
              $no = 1;
              foreach ($supreme as $k => $daftar) ?>
                <tr>
                  <td>
                    <?= $no++?>
                  </td>
                  <td>
                    <?= $supreme->tanggal ?>
                  </td>
                  <td>
                    <?= $supreme->kode ?>
                  </td>
                  <td>
                    <?= $supreme->nama ?>
                  </td>
                  <td>
                    <?= $supreme->gender ?>
                  </td>
                  <td>
                    <?= $supreme->berat ?>
                  </td>
                  <td>
                    <?= $supreme->tinggi ?>
                  </td>
                  <td>
                    <?= $supreme->nilai_bmi() ?>
                  </td>
                  <td>
                    <?= $supreme->status_bmi() ?>
                  </td>
                </tr>
                
              
          </thead>
          <tbody>
            </tbody>
        </table>

<?php
include_once 'footer.php'
?>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

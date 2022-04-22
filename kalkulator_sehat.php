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
            <h1>Kalkulator Sehat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Kalkulator sehat</li>
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
                <h3 class="card-title">Form Pengisian Data Pasien</h3>

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
              <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
      <form style="border: 1px solid orange;" class="p-3" action="pasien.php" method="POST">
      <div class="form-group row">
            <label for="id_pasien" class="col-4 col-form-label">ID Pasien</label>
            <div class="col-8">
              <input id="id_pasien" name="id_pasien" placeholder="Masukkan ID Pasien" type="text" class="form-control"
                required="required">
            </div>
          </div>
          <div class="form-group row">
            <label for="kode" class="col-4 col-form-label">Kode Pasien</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-500px"></i>
                  </div>
                </div>
                <input id="kode" name="kode" placeholder="Masukkan Kode Pasien" type="text" class="form-control"
                  required="required">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
              <input id="nama" name="nama" placeholder="Masukkan Nama Pasien" type="text" class="form-control"
                required="required">
            </div>
          </div>
          <div class="form-group row">
            <label for="tanggal_daftar" class="col-4 col-form-label">Tanggal Pemeriksaan</label>
            <div class="col-8">
              <input id="tanggal_daftar" name="tanggal_daftar" type="date" class="form-control" required="required">
            </div>
          </div>
          <div class="form-group row">
            <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-area-chart"></i>
                  </div>
                </div>
                <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan Tempat lahir " type="text" required="required" class="form-control">
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label>
            <div class="col-8">
              <input id="tgl_lahir" name="tgl_lahir" type="date" class="form-control" required="required">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label>
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-address-book"></i>
                  </div>
                </div>
                <input id="email" name="email" placeholder="Masukkan Email Pasien" type="text" class="form-control"
                  required="required">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-4">Gender</label>
            <div class="col-8">
              <div class="custom-control custom-radio custom-control-inline">
                <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L" required="required">
                <label for="jk_0" class="custom-control-label">Laki-Laki</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P" required="required">
                <label for="jk_1" class="custom-control-label">Perempuan</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="tinggi_p" class="col-4 col-form-label">Tinggi Pasien</label>
            <div class="col-8">
              <input id="tinggi_p" name="tinggi_p" placeholder="Masukkan Tinggi Pasien" type="number"
                class="form-control" required="required">
            </div>
          </div>
          <div class="form-group row">
            <label for="berat_p" class="col-4 col-form-label">Berat</label>
            <div class="col-8">
              <input id="berat_p" name="berat_p" placeholder="Masukkan Berat Pasien" type="number" class="form-control"
                required="required">
            </div>
          </div>
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary" value="submit">Submit</button>
            </div>
          </div>
        </form>

    </div>
      <!-- /.card-body -->
      <div class="card-footer">
      </div>       </div>
      
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
<?php
include_once 'footer.php'
?>

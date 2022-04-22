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
            <h1>Daftar Belanja</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Hasil</li>
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
                <h3 class="card-title">Hasil</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>

<?php
//$proses = $_POST['proses'];
$customer = $_POST['customer'];
$pilih = $_POST['produk'];
// $tv = $_POST['produk'];
// $kulkas = $_POST['produk'];
// $mesin_cuci = $_POST['produk'];
$jumlah = $_POST['jumlah'];
if($pilih == 'TV') {
    $harga = 4200000;
} elseif($pilih == 'KULKAS') {
    $harga = 3100000;
} elseif($pilih == 'MESIN CUCI') {
    $harga = 3800000;
}
$total = $jumlah * $harga;


//Menampilkan data
echo "Nama Customer : $customer";
echo "<br/>Produk Pilihan : $pilih";
echo "<br/>Jumlah : $jumlah";
echo "<br/>Total Harga : $total";
?>
</body>
</html>
<div class="card-body">
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

<?php
include 'auth.php';
if (!isset($_SESSION)) {
session_start();
}

$login = isset($_SESSION['login']); //harus pake isset untuk mengecek apakah variabel sudah diset atau belum
if ($login == 1) {
    include 'koneksi.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
    <title>Input Barang</title>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap4.min.css">
</head><body>
    <?php
    include 'menu_admin.php';
    ?>
<div class="container-fluid">
    <form method="post" class="form-data" id="form-data">
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Nama Barang</label>
                        <input type="text" name="nama_barang" id="nama_barang" class="form-control" required="true">
                        <p class="text-danger" id="err_nama_barang"></p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label>Harga Barang</label>
                        <input type="text" name="harga" id="harga" class="form-control" required="true">
                        <p class="text-danger" id="err_harga"></p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label> Jumlah Stok</label>
                        <input type="text" name="jml_stok" id="jml_stok" class="form-control" required="true">
                        <p class="text-danger" id="err_jml_stok"></p>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <input type="hidden" name="tgl_input" id="tgl_input" class="form-control" value="<?php echo date("Y-m-d"); ?>" required="true">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <button type="button" name="simpan" id="simpan" class="btn btn-primary">
                    <i class="fa fa-save"></i> Simpan
                </button>
            </div>          
        </form>
        <hr>
        <div class="data-barang"></div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js" type="text/javascript"></script>

</body>
</html>
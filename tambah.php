<?php
    // session start
    if(!empty($_SESSION)){ }else{ session_start(); }
    require 'koneksi.php';
    if(!empty($_SESSION['ADMIN'])){ }else{
        echo '<script>alert("Maaf Login Dahulu !");window.location="login.php"</script>';
    }
    include 'navbar.php';
?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            Tambah Data Barang
        </div>
        <div class="card-body">
            <form method="post" action="proses.php?aksi=tambah">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Kode barang</label>
                            <input type="text" class="form-control" required name="kd_barang" id="kd_barang" placeholder="">
                        </div>
                        
                        <div class="form-group">
                            <label for="">Jenis barang</label>
                            <input type="text" class="form-control" required name="jenis_barang" id="jenis_barang" placeholder="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="text" class="form-control" required name="jumlah" id="jumlah" placeholder="">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark btn-md btn-block">
                                Tambah
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include 'footer.php';?>
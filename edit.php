<?php
    // session start
    if(!empty($_SESSION)){ }else{ session_start(); }
    require 'koneksi.php';
    if(!empty($_SESSION['ADMIN'])){ }else{
        echo '<script>alert("Maaf Login Dahulu !");window.location="login.php"</script>';
    }
    include 'navbar.php';
    $id =  (int)$_GET["id"];
    $sql = "SELECT * FROM barang WHERE id = ?";
    $row = $koneksi->prepare($sql);
    $row->execute(array($id));
    $edit = $row->fetch(PDO::FETCH_OBJ);
?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            Edit Data Barang
        </div>
        <div class="card-body">
            <form method="post" action="proses.php?aksi=edit&id=<?=$id;?>">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Kode barang</label>
                            <input type="text" class="form-control" value="<?= $edit->kd_barang;?>" name="kd_barang" id="kd_barang" placeholder=""/>
                        </div>
                    
                        <div class="form-group">
                            <label for="">Jenis Barang</label>
                            <input type="text" class="form-control" value="<?= $edit->jenis_barang;?>" name="jenis_barang" id="jenis_barang" placeholder=""/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="">Jumlah Barang</label>
                            <input type="text" class="form-control" value="<?= $edit->jumlah;?>" name="jumlah" id="jumlah" placeholder=""/>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn btn-dark btn-md btn-block">
                                Edit
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include 'footer.php';?>
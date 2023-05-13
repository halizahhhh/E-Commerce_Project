<?php 
require_once "../layouts/header.php";
require_once "../layouts/menu.php";
require_once '../dbkoneksi.php';
?>
<div class="section-title">
    <h3>Form Merk</h3>
</div>                     
<form method="POST" action="proses_jenis_produk.php">
  <div class="form-group row">
    <label for="nama_merk" class="col-4 col-form-label">Merk Produk</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adjust"></i>
          </div>
        </div> 
        <input id="nama_merk" name="nama_merk" type="text" class="form-control" 
        value="">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-danger" value="Simpan"/>
    </div>
  </div>
</form>

<?php require_once "../layouts/footer.php"; ?>
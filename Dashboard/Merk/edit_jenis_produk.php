<?php 
require_once "../layouts/header.php";
require_once "../layouts/menu.php";
require_once '../dbkoneksi.php';
?>
<?php 
    $_idedit = $_GET['idedit'];
    if(!empty($_idedit)){
        // edit
        $sql = "SELECT * FROM Merk WHERE id=?";
        $st = $dbh->prepare($sql);
        $st->execute([$_idedit]);
        $row = $st->fetch();
    }else{
        // new data
        $row = [];
    }
?>    
<div class="section-title">
    <h3>Edit Merk</h3>
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
        value="<?= $row['nama_merk']?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" 
      class="btn btn-danger" value="Update"/>
      <input type="hidden" name="idedit" value="<?=$_idedit;?>">
    </div>
  </div>
</form>
<?php require_once "../layouts/footer.php"; ?>
<?php 
    require_once "../layouts/header.php";
    require_once "../layouts/menu.php";
    require_once '../dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM produk";
   $rs = $dbh->query($sql);
?>
<div class="container">
    <div class="section-title">
    <h3>List Produk</h3>
    </div> 
    <a class="btn btn-danger" href="form_produk.php" role="button">Tambah Produk</a>
        <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr class="table-danger text-uppercase">
                    <th>No</th>
                    <th>Id</th>
                    <th>Nama Produk</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Merek</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($rs as $row){
                ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$row['id']?></td>
                        <td><?=$row['nama']?></td>
                        <td><?=$row['stok']?></td>
                        <td><?=$row['harga']?></td>
                        <td><?=$row['merk_id']?></td>
                        <td>
<a class="btn btn-primary" href="view_produk.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-warning" href="edit_produk.php?idedit=<?=$row['id']?>">Edit</a>
<a class="btn btn-danger" href="delete_produk.php?iddel=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$row['nama']?>?')) {return false}"
>Delete</a>
</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
</div
<?php require_once "../layouts/footer.php"; ?>
<?php 
    require_once "../layouts/header.php";
    require_once "../layouts/menu.php";
    require_once '../dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM pesanan";
   $rs = $dbh->query($sql);
?>
    <div class="container">
    <div class="section-title">
    <h3>List Pesanan</h3>
    </div> 
        <table class="table table-hover table-bordered" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr class="table-danger text-uppercase">
                    <th>No</th>
                    <th>Id</th>
                    <th>Tanggal</th>
                    <th>Produk Id</th>
                    <th>Jumlah</th>
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
                        <td><?=$row['tanggal']?></td>
                        <td><?=$row['produk_id']?></td>
                        <td><?=$row['quantity']?></td>
                        <td>
<a class="btn btn-danger" href="view_pesanan.php?id=<?=$row['id']?>">View</a>
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
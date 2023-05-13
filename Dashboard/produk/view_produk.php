<?php 
require_once "../layouts/header.php";
require_once "../layouts/menu.php";
require_once '../dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    $sql = "SELECT * FROM produk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
?>
<div class="section-title">
    <h3>Detail Produk</h3>
</div>
<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td><?=$row['id']?></td></tr>
        <tr>   <td>Nama Produk</td><td><?=$row['nama']?></td></tr>
        <tr>   <td>Stok</td><td><?=$row['stok']?></td></tr>
        <tr>   <td>Harga</td><td><?=$row['harga']?></td></tr>
        <tr>   <td>Merk</td><td><?=$row['merk_id']?></td></tr>
    </tbody>
</table>
<?php require_once "../layouts/footer.php"; ?>
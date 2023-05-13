<?php 
require_once "../layouts/header.php";
require_once "../layouts/menu.php";
require_once '../dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    $sql = "SELECT * FROM Merk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
?>
<div class="section-title">
    <h3>Detail Merk</h3>
</div> 
<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td><?=$row['id']?></td></tr>
        <tr><td>Merk Produk</td><td><?=$row['nama_merk']?></td></tr>
    </tbody>
</table>
<?php require_once "../layouts/footer.php"; ?>
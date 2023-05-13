<?php 
require_once "../layouts/header.php";
require_once "../layouts/menu.php";
require_once '../dbkoneksi.php';
?>
<?php
    $_id = $_GET['id'];
    $sql = "SELECT * FROM pesanan WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
?>

<table class="table table-striped">
    <tbody>
        <tr><td>ID</td><td><?=$row['id']?></td></tr>
        <tr>   <td>Tanggal Pesanan</td><td><?=$row['tanggal']?></td></tr>
        <tr>   <td>Produk Id</td><td><?=$row['produk_id']?></td></tr>
        <tr>   <td>Jumlah</td><td><?=$row['quantity']?></td></tr>
    </tbody>
</table>
<?php require_once "../layouts/footer.php"; ?>
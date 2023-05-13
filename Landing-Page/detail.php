<?php
require_once "header.php";
require_once '../Dashboard/dbkoneksi.php';

    $_id = $_GET['id'];
    $sql = "SELECT * FROM produk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
?>

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2><br></h2>
            <h2 style="text-align: center;">Detail Produk</h2>
        </div>
        
        <div class="produ$produk">
            <div class="col-lg-12 ">
                <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pic"><img src="assets/img/menu/image.png" class="img-fluid" alt="" ></div>
                    <div class="member-info">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td><?=$row['id']?></td>
                                </tr>
                                <tr>
                                    <th>Nama</th>
                                    <td><?=$row['nama']?></td>
                                </tr>
                                <tr>
                                    <th>Stok</th>
                                    <td><?=$row['stok']?></td>
                                </tr>
                                <tr>
                                    <th>Harga</th>
                                    <td><?=$row['harga']?></td>
                                </tr>
                                <tr>
                                    <th>Merk</th>
                                    <td><?=$row['merk_id']?></td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="index.php" class="btn btn-danger mb-2">Kembali</a>
                        <a href="pesanan.php" class="btn btn-danger mb-2">Beli Produk</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section><!-- End Team Section -->

<?php 
require_once "foother.php";
?>
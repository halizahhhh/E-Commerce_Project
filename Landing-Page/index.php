<?php 
require_once "header.php";
require_once "hero.php";
require_once "../Dashboard/dbkoneksi.php";
?>
<?php 
   $sql = "SELECT * FROM produk";
   $rs = $dbh->query($sql);
?>

  <main id="main">
    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Produk Kami</h2>
          <p>Check Our <span>TAT Lisa Produk</span></p>
        </div>

      <div class="row gy-5">
        <?php foreach($rs as $row){?>
          <div class="col-lg-4 menu-item">
                <a href="#" class="glightbox"><img src="assets/img/menu/image.png" class="menu-img img-fluid" alt=""></a>
                <h4 style="text-align: center;"><?=$row['nama']?></h4>
                <h3 style="color:#dc3545;font-family:sans;text-align: center;">
                Rp <?=$row['harga']?>
                </h3>
                <p style="text-align: center;"><a href="/<?= $root ?>/Landing-Page/detail.php?id=<?=$row['id']?>" >Info Detail</a></p>
              </div><!-- Menu Item -->
        <?php }?>
      </div>
      </div>
    </section><!-- End Menu Section -->
    
  </main><!-- End #main -->
<?php 
require_once "foother.php";
?>
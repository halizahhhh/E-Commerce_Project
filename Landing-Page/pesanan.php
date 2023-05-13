<?php 
require_once "header.php";

require_once '../Dashboard/dbkoneksi.php';
?>
<section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><br></h2>
          <h2>Pesan</h2>
          <p>Pesan <span>Alat Tulis</span> di Kami</p>
        </div>


          <form method="POST" action="proses_pesanan.php">
            <div class="form-group row">
              <label for="tanggal" class="col-4 col-form-label">Tanggal Pesanan</label> 
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div> 
                  <input id="tanggal" name="tanggal" type="date" class="form-control" 
                  value="">
                </div>
              </div>
            </div>
            <div class="form-group row mt-2">
              <label for="produk_id" class="col-4 col-form-label">Produk Id</label> 
              <div class="col-8">
                <div class="input-group ">
                  <div class="input-group-prepend ">
                  </div> 
                  <select id="produk_id" name="produk_id" class="custom-select col-12">
                    <?php
                    $sql = "SELECT * FROM produk";
                    $rs = $dbh->query($sql);
                    foreach($rs as $row) {
                    ?>
                        <option value="<?=$row['id']?>"><?=$row['nama']?></option>
                    <?php
                    }
                    ?>
                </select>
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="quantity" class="col-4 col-form-label">Jumlah</label> 
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                  </div> 
                  <input id="quantity" name="quantity" value=""
                  type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group row mt-2">
              <div class="offset-4 col-8">
                <input type="submit" name="proses" type="submit" 
                class="btn btn-danger" value="pesan"/>
              </div>
            </div>
          </form>
          

      </div>
    </section><!-- End Book A Table Section -->
<?php 
require_once "foother.php";
?>
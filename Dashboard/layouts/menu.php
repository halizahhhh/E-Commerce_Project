<?php 
$root = "E-Commerce_Project";
?>
<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="/<?= $root ?>/Dashboard/index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Welcome
                            </a>
                            <div class="sb-sidenav-menu-heading">Produk</div>
                            <a class="nav-link" href="/<?= $root ?>/Dashboard/produk/list_produk.php" >
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Produk
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <a class="nav-link" href="/<?= $root ?>/Dashboard/Merk/list_jenis_produk.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Jenis Produk
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="sb-sidenav-menu-heading">Pesanan</div>
                            <a class="nav-link" href="/<?= $root ?>/Dashboard/pesanan/list_pesanan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Daftar Pesanan
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <a class="nav-link" href="/<?= $root ?>/Landing-page/index.php">
                            Landing Page
                        </a>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                
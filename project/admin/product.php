<?php
include_once("../database/koneksi.php");
$data = query("SELECT * FROM barang");
require_once 'layout/header.php';
?>

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php require_once 'layout/sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php require_once 'layout/topbar.php'; ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800"><b>Product List</b></h1>
                <p class="mb-4">Lakukan pengajuan penambahan stock bila product hanya tersisa kurang dari <b>3</b></a>.</p>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"> List All Product</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Kode Barang</th>
                                        <th>Nama Proudct</th>
                                        <th>Harga</th>
                                        <th>Stock</th>
                                        <th>Terjual</th>
                                        <th>Proses</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Kode Barang</th>
                                        <th>Nama Proudct</th>
                                        <th>Harga</th>
                                        <th>Stock</th>
                                        <th>Terjual</th>
                                        <th>Proses</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach ($data as $item) : ?>
                                        <tr>
                                            <td><?= $item['kode_barang']; ?></td>
                                            <td><?= $item['nama_barang']; ?></td>
                                            <td>Rp. <?= $item['harga']; ?></td>
                                            <td><?= $item['jumlah']; ?></td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                        </tr>
                                    <?php endforeach; ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php require_once 'layout/footer.php'; ?>
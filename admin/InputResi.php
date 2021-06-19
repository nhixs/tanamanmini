<?php
include 'header.php';
include '../koneksi.php';
?>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                Transaksi
                <small>Data Transaksi / Pesanan / Input Resi </small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <section class="col-lg-6 col-lg-offset-3">
                    <div class="box box-info">
                        <div class="box-header">
                            <h3 class="box-title">Update Nomer Resi</h3>
                            <a href="transaksi.php" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp Kembali</a>
                        </div>
                        <div class="box-body" style="align-items: center;">
                            <?php
                            $id = $_GET['id'];
                            $data = mysqli_query($koneksi, "select * from invoice where invoice_id = $id");
                            while($d = mysqli_fetch_array($data)){
                                ?>
                                <form method="post" action="update_resi.php" style="justify-content: center">
                                    <input type="hidden" name="id" value="<?php echo $d['invoice_id'];?>">
                                    <div class="form-group">

                                            <label>Tanggal</label>
                                            <p><?php echo $d['invoice_tanggal'];?></p>

                                    </div>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <p><?php echo $d['invoice_nama']; ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Hp</label>
                                        <p><?php echo $d['invoice_hp'];?></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <p><?php echo $d['invoice_alamat'];?></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Provinsi</label>
                                        <p><?php echo $d['invoice_provinsi'];?></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Kabupaten</label>
                                        <p><?php echo $d['invoice_kabupaten'];?></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Kurir</label>
                                        <p><?php echo $d['invoice_kurir'];?></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Berat</label>
                                        <p><?php echo $d['invoice_berat'];?></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Ongkir</label>
                                        <p><?php echo $d['invoice_ongkir'];?></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Total Bayar</label>
                                        <p><?php echo $d['invoice_total_bayar'];?></p>
                                    </div>
                                    <div class="form-group">
                                        <label>Resi</label>
                                        <input class="form-control" type="text" name="resi" value="<?php echo $d['invoice_resi'];?>" />
                                    </div>
                                    <div class="form-group">
                                        <input class="btn btn-primary" type="submit" value="Simpan"></td>
                                    </div>
                                </form>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>


<?php include 'footer.php'; ?>
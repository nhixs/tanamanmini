<!DOCTYPE html>
<html>
<head>
    <title>Crud invoice_resi</title>
</head>
<bod>
    <h2>CRUD RESI</h2>
    <br/>
    <a href="tambah.php">Tambah Resi</a>
    <br/>
    <table border="1">
        <tr>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>hp</th>
            <th>Alamat</th>
            <th>Provinsi</th>
            <th>Kabupaten</th>
            <th>Kurir</th>
            <th>Berat</th>
            <th>Ongkir</th>
            <th>Total bayar</th>
            <th>Resi</th>
            <th>Action</th>
        </tr>
        <?php
        include 'koneksi.php';

        $data = mysqli_query($koneksi,"select * from invoice");
        while($d = mysqli_fetch_array($data)){
            ?>
        <tr>
            <td><?php echo $d['invoice_tanggal']?></td>
            <td><?php echo $d['invoice_nama']?></td>
            <td><?php echo $d['invoice_hp']?></td>
            <td><?php echo $d['invoice_alamat']?></td>
            <td><?php echo $d['invoice_provinsi']?></td>
            <td><?php echo $d['invoice_kabupaten']?></td>
            <td><?php echo $d['invoice_kurir']?></td>
            <td><?php echo $d['invoice_berat']?></td>
            <td><?php echo $d['invoice_ongkir']?></td>
            <td><?php echo $d['invoice_total_bayar']?></td>
            <td><?php echo $d['invoice_resi']?></td>
            <td>
                <a href="add_resi.php?id=<?php echo $d['invoice_id']; ?>">EDIT</a>
                <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</bod>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Crud invoice_resi</title>
</head>
<body>
<h2>Update Resi</h2>
<br/>
<a href="index_resi.php">Kembali</a>

<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "select * from invoice where invoice_id = $id");
while($d = mysqli_fetch_array($data)){
    ?>
<form method="post" action="admin/update_resi.php">
    <table>
        <tr>
            <td>Tanggal</td>
            <td>
                <input type="hidden" name="id" value="<?php echo $d['invoice_id'];?>">
              <Label><?php echo $d['invoice_tanggal'];?></Label>
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>
                <label><?php echo $d['invoice_nama']; ?></label>
            </td>
        </tr>
        <tr>
            <td>Hp</td>
            <td>
                <label><?php echo $d['invoice_hp'];?></label>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <label><?php echo $d['invoice_alamat'];?></label>
            </td>
        </tr>
        <tr>
            <td>Provinsi</td>
            <td>
                <label><?php echo $d['invoice_provinsi'];?></label>
            </td>
        </tr>
        <tr>
            <td>Kabupaten</td>
            <td>
                <label><?php echo $d['invoice_kabupaten'];?></label>
            </td>
        </tr>
        <tr>
            <td>Kurir</td>
            <td>
                <label><?php echo $d['invoice_kurir'];?></label>
            </td>
        </tr>
        <tr>
            <td>Berat</td>
            <td>
                <label><?php echo $d['invoice_berat'];?></label>
            </td>
        </tr>
        <tr>
            <td>Ongkir</td>
            <td>
                <label><?php echo $d['invoice_ongkir'];?></label>
            </td>
        </tr>
        <tr>
            <td>Total Bayar</td>
            <td>
                <label><?php echo $d['invoice_total_bayar'];?></label>
            </td>
        </tr>
        <tr>
            <td>Resi</td>
            <td>
                <input type="text" name="resi" value="<?php echo $d['invoice_resi'];?>" />
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Simpan"></td>
            </td>
        </tr>
    </table>
</form>
<?php
}
?>
</body>

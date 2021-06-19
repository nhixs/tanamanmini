<?php
include '../koneksi.php';

$id = $_POST['id'];
/*$tanggal = $_POST['tanggal'];
$customer = $_POST['customer'];
$nama = $_POST['nama'];
$hp = $_POST['hp'];
$alamat = $_POST['alamat'];
$provinsi = $_POST['provinsi'];
$kabupaten = $_POST['kabupaten'];
$kurir = $_POST['kurir'];
$berat = $_POST['berat'];
$ongkir = $_POST['ongkir'];
$totalBayar = $_POST['total_bayar'];
$status = $_POST['status'];*/
$resi = $_POST['resi'];
//$bukti = $_POST['bukti'];

/* mysqli_query($koneksi,
    "update invoice set invoice_tanggal='$tanggal', invoice_customer='$customer',
                   invoice_nama='$nama', invoice_hp='$hp',
                   invoice_alamat='$alamat', invoice_provinsi='$provinsi',
                   invoice_kabupaten='$kabupaten', invoice_kurir='$kurir',
                   invoice_berat='$berat', invoice_ongkir='$ongkir',
                   invoice_total_bayar='$totalBayar', invoice_status='$status',
                   invoice_resi='$resi', invoice_bukti='$bukti'where invoice_id='$id'"); */
mysqli_query($koneksi,
"update invoice set invoice_resi = '$resi' where invoice_id = '$id'");

header("location: transaksi.php");



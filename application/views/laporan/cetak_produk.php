<!DOCTYPE html>
<html>
<head>
<title>Cetak Laporan Produk</title>

<style>

body{
    font-family:Arial;
}

table{
    width:100%;
    border-collapse:collapse;
}

table,th,td{
    border:1px solid black;
}

th,td{
    padding:8px;
}

</style>

</head>
<body>

<h3 align="center">
    Laporan Produk
</h3>

<?php if($produk): ?>

<p align="center">
    Produk :
    <b><?= $produk->nama_produk ?></b>
</p>

<?php else: ?>

<p align="center">
    Semua Produk
</p>

<?php endif; ?>

<table>

<tr>
    <th>No</th>
    <th>Nama Produk</th>
    <th>Total Terjual</th>
</tr>

<?php $no=1; foreach($data as $d): ?>

<tr>

    <td><?= $no++ ?></td>

    <td><?= $d->nama_produk ?></td>

    <td><?= $d->total_terjual ?></td>

</tr>

<?php endforeach; ?>

</table>

<script>
window.print();
</script>

</body>
</html>
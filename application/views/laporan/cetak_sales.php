<!DOCTYPE html>
<html>
<head>

<title>Cetak Laporan Sales</title>

<style>

body{
    font-family: Arial;
}

h3{
    text-align:center;
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
    text-align:center;
}

@media print{
    button{
        display:none;
    }
}

</style>

</head>
<body>

<h3>Laporan Sales</h3>

<table>

<tr>
    <th>No</th>
    <th>Nama Sales</th>
    <th>Total Order</th>
    <th>Total Penjualan</th>
</tr>

<?php
$no = 1;
$grand_order = 0;
$grand_penjualan = 0;
?>

<?php foreach($data as $d): ?>

<?php
$grand_order += $d->total_order;
$grand_penjualan += $d->total_penjualan;
?>

<tr>

    <td><?= $no++; ?></td>

    <td><?= $d->nama_sales; ?></td>

    <td><?= $d->total_order; ?></td>

    <td>
        Rp <?= number_format($d->total_penjualan,0,',','.'); ?>
    </td>

</tr>

<?php endforeach; ?>

<tr>

    <td colspan="2">
        <strong>Grand Total</strong>
    </td>

    <td>
        <strong><?= $grand_order; ?></strong>
    </td>

    <td>
        <strong>
            Rp <?= number_format($grand_penjualan,0,',','.'); ?>
        </strong>
    </td>

</tr>

</table>

<br><br>

<p style="text-align:right;">

    Tangerang, <?= date('d-m-Y'); ?>

    <br><br><br><br>

    (Manager)

</p>

<script>
window.print();
</script>

</body>
</html>
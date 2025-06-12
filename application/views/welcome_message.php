<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Selamat Datang</title>
</head>
<body>

<div id="container">
    <h1>Selamat Datang di Aplikasi Manajemen Penjualan!</h1>

    <div id="body">
        <p>Gunakan menu navigasi untuk mengakses fitur aplikasi:</p>
        <ul>
            <li><a href="<?php echo site_url('produk'); ?>">Manajemen Produk</a></li>
            <li><a href="<?php echo site_url('pelanggan'); ?>">Manajemen Pelanggan</a></li>
            <li><a href="<?php echo site_url('pesanan'); ?>">Manajemen Pesanan</a></li>
            <li><a href="<?php echo site_url('laporan'); ?>">Laporan Penjualan</a></li>
        </ul>
    </div>

    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds.</p>
</div>

</body>
</html>

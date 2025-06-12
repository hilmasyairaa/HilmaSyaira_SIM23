<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Laporan Penjualan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Laporan Penjualan</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Hasil Laporan</h3>
      </div>

      <div class="card-body">
        <h5>Laporan dari <strong><?= $tanggal_awal ?></strong> sampai <strong><?= $tanggal_akhir ?></strong></h5>
        <table id="datatable" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>Sales</th>
              <th>Produk</th>
              <th>Jumlah</th>
              <th>Total Harga</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($laporan)): ?>
              <?php $no = 1; foreach ($laporan as $row): ?>
                <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $row->tanggal ?></td>
                  <td><?= $row->nama_sales ?></td>
                  <td><?= $row->nama_produk ?></td>
                  <td><?= $row->jumlah ?></td>
                  <td><?= number_format($row->subtotal, 0, ',', '.') ?></td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="6" class="text-center">Tidak ada data ditemukan.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>
</div>

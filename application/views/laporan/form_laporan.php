<div class="content-wrapper">
  <section class="content-header">
    <h1 id="page-title">Laporan Sales Order</h1>
  </section>

  <section class="content">
    <div class="card">
      <div class="card-body">
        <form method="POST" action="<?= base_url('laporan/cetak_laporan') ?>">
          <div class="form-group">
            <label>Dari Tanggal:</label>
            <input type="date" name="tanggal_dari" class="form-control" required>
          </div>
          <div class="form-group">
            <label>Sampai Tanggal:</label>
            <input type="date" name="tanggal_sampai" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Produk:</label>
            <select name="produk_id" class="form-control">
              <option value="">-- Semua Produk --</option>
              <?php foreach($produk as $p): ?>
                <option value="<?= $p->idproduk ?>"><?= $p->nama_produk ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="form-group">
            <label>Sales:</label>
            <select name="sales_id" class="form-control">
              <option value="">-- Semua Sales --</option>
              <?php foreach($sales as $s): ?>
                <option value="<?= $s->idsales ?>"><?= $s->nama_sales ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <button type="submit" class="btn btn-primary">Tampilkan Laporan</button>
        </form>
      </div>
    </div>
  </section>
</div>

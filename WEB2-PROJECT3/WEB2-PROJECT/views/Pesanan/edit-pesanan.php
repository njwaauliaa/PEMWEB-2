<?php
require_once __DIR__ . '/../../models/Pesanan.php';

use models\Pesanan;

if (!isset($_GET['id'])) {
  header("Location: list-pesanan.php");
  exit;
}

$id = $_GET['id'];
$pesanan = Pesanan::find($id);

if (!$pesanan) {
  header("Location: list-pesanan.php");
  exit;
}

if (isset($_POST['submit'])) {
  $data = [
    'id' => $_GET['id'],
    'tanggal' => $_POST['tanggal'],
    'diskon' => $_POST['diskon'],
    'status_bayar' => $_POST['status_bayar'],
    'anggota_id' => $_POST['anggota_id'],
  ];

  Pesanan::update($id, $data);
  header("Location: list-pesanan.php");
  exit;
}

include __DIR__ . '/../template/header.php';
include __DIR__ . '/../template/sidebar.php';
?>


<body class="sb-nav-fixed">
  <div class="container-fluid px-4 mt-4">
    <h1 class="mb-4">Edit Pesanan</h1>
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-box-open me-1"></i>
        Edit Data Pesanan
      </div>
      <div class="card-body">
        <form action="edit-pesanan.php?id=<?= htmlspecialchars($id) ?>" method="POST">
          <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal pesanan</label>
            <input type="text" class="form-control" id="tanggal" name="tanggal" required
              value="<?= htmlspecialchars($pesanan['tanggal']) ?>">
          </div>
          <div class="mb-3">
            <label for="diskon" class="form-label">diskon</label>
            <input type="number" class="form-control" id="diskon" name="diskon" rows="3"
              value="<?= htmlspecialchars($pesanan['diskon']) ?>" required></input>
          </div>
          <div class="mb-3">
            <label for="status_bayar" class="form-label">Status bayar</label>
            <input type="number" class="form-control" id="status_bayar" name="status_bayar" min="0" required
              value="<?= htmlspecialchars($pesanan['status_bayar']) ?>">
          </div>
          <div class="mb-3">
            <label for="anggota_id" class="form-label">Anggota</label>
            <input type="number" class="form-control" id="anggota_id" name="anggota_id" min="0" required
              value="<?= htmlspecialchars($pesanan['anggota_id']) ?>">
          </div>

          <a href="list-pesanan.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
          <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
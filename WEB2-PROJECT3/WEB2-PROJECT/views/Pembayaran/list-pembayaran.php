<?php
session_start();

require_once __DIR__ . '/../../models/Pembayaran.php';

use models\Pembayaran;

$pembayaranList = Pembayaran::getAll();


include __DIR__ . '/../template/header.php';
include __DIR__ . '/../template/sidebar.php';
?>
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Pembayaran</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="../dashboard.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Pembayaran</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i> List Pembayaran
                        </div>
                        <div class="card-body">
                            <div class="mb-3 text-end">
                                <a href="create-pembayaran.php" class="btn btn-success">
                                    <i class="fas fa-plus"></i> Tambah Pembayaran
                                </a>
                            </div>
                            <table id="datatablesSimple" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jumlah Bayar</th>
                                        <th>Tanggal</th>
                                        <th>Pesanan id</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pembayaranList as $pembayaran): ?>
                                        <tr>
                                            <td><?= $pembayaran['id'] ?></td>
                                            <td><?= $pembayaran['jumlah_bayar'] ?></td>
                                            <td><?= $pembayaran['tanggal'] ?></td>
                                            <td><?= $pembayaran['pesanan_id'] ?></td>
                                            <td>
                                                <a href="detail-pegawai.php?id=<?= $user['id'] ?>" class="btn btn-primary btn-sm">
                                                    <i class="fas fa-eye"></i> Detail
                                                </a>
                                                <a href="edit-pegawai.php?id=<?= $user['id'] ?>" class="btn btn-warning btn-sm">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <a href="delete-pegawai.php?id=<?= $user['id'] ?>" 
                                                    class="btn btn-danger btn-sm delete-btn"
                                                    data-id="<?= $user['id'] ?>"
                                                    data-nama="<?= $user['nama'] ?>">
                                                    <i class="fas fa-trash"></i> Delete
                                                </a>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
<?php
include __DIR__ . '/../template/footer.php';
?>
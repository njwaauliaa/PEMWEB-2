<?php
namespace models;

require_once __DIR__ . '/../config/Connection.php';

use config\Connection;
use PDO;

class Pembayaran
{
  public static function getAll()
  {
    $pdo = Connection::make();
    $stmt = $pdo->query("SELECT * FROM pembayaran");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public static function find($id)
  {
    $pdo = Connection::make();
    $sql = "SELECT * FROM pembayaran WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public static function update($id, $data)
  {
    $pdo = Connection::make();
    $sql = "UPDATE pembayaran SET jumlah = :jumlah, tanggal = :tanggal, pesanan_id = :pesanan_id WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([
      ':id' => $id,
      ':jumlah' => $data['jumlah'],
      ':tanggal' => $data['tanggal'],
      ':pesanan_id' => $data['pesanan_id']
    ]);
  }

  public static function delete($id)
  {
    $pdo = Connection::make();
    $sql = "DELETE FROM pembayaran WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([':id' => $id]);
  }
}
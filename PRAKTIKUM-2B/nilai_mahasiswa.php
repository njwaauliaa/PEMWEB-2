<?php
if (isset($_POST['proses'])) {
    $proses = $_POST['proses'];
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];

    // Menghitung nilai total
    $nilai_total = ($nilai_uts * 0.30) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35);

    // Menentukan kelulusan
    $keterangan = ($nilai_total >= 55) ? "Lulus" : "Tidak Lulus";

    // Menentukan grade nilai
    if ($nilai_total >= 85) {
        $grade = "A";
    } elseif ($nilai_total >= 70) {
        $grade = "B";
    } elseif ($nilai_total >= 56) {
        $grade = "C";
    } elseif ($nilai_total >= 36) {
        $grade = "D";
    } elseif ($nilai_total >= 0) {
        $grade = "E";
    } else {
        $grade = "I";
    }

    // Output hasil
    echo "Proses: $proses<br>";
    echo "Nama Siswa: $nama_siswa<br>";
    echo "Mata Kuliah: $mata_kuliah<br>";
    echo "Nilai UTS: $nilai_uts<br>";
    echo "Nilai UAS: $nilai_uas<br>";
    echo "Nilai Tugas: $nilai_tugas<br>";
    echo "Nilai Total: $nilai_total<br>";
    echo "Keterangan: $keterangan<br>";
    echo "Grade: $grade<br>";
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
</head>
<body>
    <form method="POST" action="nilai_mahasiswa.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        <label for="matkul">Mata Kuliah:</label>
        <input type="text" id="matkul" name="matkul" required><br><br>
        <label for="nilai_uts">Nilai UTS:</label>
        <input type="number" id="nilai_uts" name="nilai_uts" required><br><br>
        <label for="nilai_uas">Nilai UAS:</label>
        <input type="number" id="nilai_uas" name="nilai_uas" required><br><br>
        <label for="nilai_tugas">Nilai Tugas:</label>
        <input type="number" id="nilai_tugas" name="nilai_tugas" required><br><br>
        <input type="submit" name="proses" value="Simpan">
    </form>
</body>
</html>
<?php

if(isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $tugas_pratikum = $_POST['tugas_pratikum'];
  
    echo "<p>Nama : $nama</p>";
    echo "<p>Mata Kuliah : $matkul</p>";
    echo "<p>Nilai UTS : $nilai_uts</p>";
    echo "<p>Nilai UAS : $nilai_uas</p>";
    echo "<p>Nilai Tugas/Praktikum : $tugas_pratikum</p>";


    //status kelulusan
    $nilai_total = ($tugas_pratikum * 0.35 ) + ($nilai_uas * 0.35) + ($nilai_uts * 0.3);

    //Check nilai total
    if ($nilai_total > 55) {
        echo "<h1>$nama dinyatakan lulus.</h1>";
    } else {
        echo "<h1>$nama dinyatakan tidak lulus.</h1>";
    }

    //predikat nilai
    switch (n) {
        case $nilai_total >= 85
    }
}
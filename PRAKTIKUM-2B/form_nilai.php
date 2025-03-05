<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Nilai Siswa</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Form Penilaian</h5>
        <form method="post" action="./nilai_mahasiswa.php">
          <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
            <div class="col-8">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fa fa-address-card"></i>
                  </div>
                </div> 
                <input id="nama" name="nama" type="text" class="form-control">
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
            <div class="col-8">
              <select id="matkul" name="matkul" class="custom-select">
                <option value="DDP">DASAR-DASAR PEMROGRAMAN</option>
                <option value="PEMWEB">PEMWEB</option>
                <option value="BASIS DATA">BASIS DATA</option>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="nilai_uts" class="col-4 col-form-label">NILAI UTS</label> 
            <div class="col-8">
              <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="nilai_uas" class="col-4 col-form-label">NILAI UAS</label> 
            <div class="col-8">
              <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
            </div>
          </div>
          <div class="form-group row">
            <label for="tugas_pratikum" class="col-4 col-form-label">Tugas/Praktikum</label> 
            <div class="col-8">
              <input id="tugas_pratikum" name="tugas_pratikum" type="text" class="form-control">
            </div>
          </div> 
          <div class="form-group row">
            <div class="offset-4 col-8">
              <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
        </form>
    </div>
    </div>



</body>
</html>
<?php 
  
  include('koneksimysql.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM mahasiswa WHERE no_pendaftaran = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Mahasiswa </title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT MAHASISWA
            </div>
            <div class="card-body">
              <form action="update.php" method="POST">
                
                <div class="form-group">
                  <label>NO PENDAFTARAN</label>
                  <input type="text" name="no_pendaftaran" value="<?php echo $row['no_pendaftaran'] ?>" placeholder="Masukkan NO PENDAFTARAN Siswa" class="form-control”>
                  <input type="hidden" name="no_pendaftaran" value="<?php echo $row['no_pendaftaran'] ?>">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" value="<?php echo $row['nama'] ?>" placeholder="Masukkan Nama Siswa" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat Siswa" rows="4"><?php echo $row['alamat'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Asal Sekolah </label>
                  <textarea class="form-control" name="asal_sekolah" placeholder="Masukkan asal sekolah Siswa" rows="4"><?php echo $row['asal_sekolah'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>tahun Kelulusan </label>
                  <textarea class="form-control" name="tahun_kelulusan" placeholder="Masukkan tahun Kelulusan" rows="4"><?php echo $row['tahun_kelulusan'] ?></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
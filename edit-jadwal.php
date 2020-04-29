<?php 
  
  include('koneksi.php');
  
  $id = $_GET['id'];
  
  $sql = "SELECT * FROM tbl_jadwal WHERE id_jadwal ='$id' LIMIT 1";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(":id", $id);
  $stmt->execute();

$result = $stmt->fetch();
  ?>

<!doctype html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit JADWAL</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT Jadwal
            </div>
            <div class="card-body">
              <form action="update-jadwal.php" method="POST">
                
                <div class="form-group">
                  <label>RW</label>
                  <input type="text" name="rw" value="<?php echo $result['rw'] ?>" placeholder="Masukkan RW" class="form-control">
                  <input type="hidden" name="id_jadwal" value="<?php echo $result['id_jadwal'] ?>">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" value="<?php echo $result['nama_lengkap'] ?>" placeholder="Masukkan Nama" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat" rows="4"><?php echo $result['alamat'] ?></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                <a href="loginpuasa.php" class="btn btn-success">KEMBALI</a>

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
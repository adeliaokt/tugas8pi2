<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">


<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Data Perawatan</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #9afee0;">
  <div class="container">
    <a class="navbar-brand" href="#"><b>Klinik Gigi Cirebon</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link active" href="index.php">Data Klinik</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="perawatan.php">Perawatan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="pasien.php">Pasien</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container-fluid"><br>
        <h3 align="center">Data Perawatan</h3><br>
        <a href="create_perawatan.php"><button type="button">Tambah Data</button></a><br>
        <br>
        <a href="print_perawatan.php" target="_blank"><button type="button">Cetak Data</button></a><br>
        <br>

        <table class="table table-bordered" style="background-color: #fffff;">
            <thead>
                <tr>
                    <th>ID Perawatan</th>                    
                    <th>Nama Pasien</th>
                    <th>Tanggal Pemeriksaan</th>
                    <th>Keluhan</th>
                    <th>Tanggal Perawatan</th>
                    <th>Jenis Perawatan</th>
                    <th>Biaya</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $result = $model->tampil_data_perawatan();
                    if (!empty($result)) {
                        foreach ($result as $data) : ?>
                <tr>
                    <td><?= $data->id_perawatan ?></td>                    
                    <td><?= $data->nama_pasien ?></td>
                    <td><?= $data->tgl_pemeriksaan ?></td>
                    <td><?= $data->keluhan ?></td>
                    <td><?= $data->tgl_perawatan ?></td>
                    <td><?= $data->jenis_perawatan ?></td>
                    <td><?= $data->biaya ?></td>
                    <td>
                        <a name="edit" id="edit" href="edit_perawatan.php?id=<?=$data->id_perawatan?>"><button type="button">Edit</button></a>
                        <a name="delete" id="delete" href="process.php?id=<?=$data->id_perawatan?>"><button type="button">Delete</button></a>
                    </td>
                </tr>
                <?php endforeach;
                    }else { ?>
                <tr>
                    <td colspan="9">Belum Ada Data Pada Tabel Perawatan</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
</body>
</html>
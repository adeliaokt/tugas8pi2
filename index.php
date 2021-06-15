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
    <title>Data Klinik</title>
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
        <li class="nav-item">
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
    <div class="container-fluid"> <br>
        <h3 align="center">Data Klinik</h3> <br>
        <a href="print_index.php" target="_blank"><button type="button">Cetak Data</button></a><br>
        <br>

        <table class="table table-bordered" style="background-color: #fffff;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Umur</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Tanggal Pemeriksaan</th>
                    <th>Tanggal Perawatan</th>
                    <th>Jenis Perawatan</th>
                    <th>Keluhan</th>
                </tr>
                </thead>
            <tbody>
                <?php
                    $result = $model->tampil_data();
                    if (!empty($result)) {
                        foreach ($result as $data) : ?>
                <tr>
                    <td><?= $index++ ?></td>
                    <td><?= $data->id_pasien ?></td>
                    <td><?= $data->nama_pasien ?></td>
                    <td><?= $data->umur ?></td>
                    <td><?= $data->jenis_kelamin ?></td>
                    <td><?= $data->alamat ?></td>
                    <td><?= $data->tgl_pemeriksaan ?></td>
                    <td><?= $data->tgl_perawatan ?></td>
                    <td><?= $data->jenis_perawatan ?></td>
                    <td><?= $data->keluhan ?></td>
                    </tr>
                <?php endforeach;
                    }else { ?>
                <tr>
                    <td colspan="9">Belum Ada Data Pada Tabel Data Klinik</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
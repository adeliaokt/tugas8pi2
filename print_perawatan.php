<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
    <title>Cetak Data</title>
    <style>
        h1 {
        text-align: center;
        }
        table,
        td,
        th {
        border: 1px solid #fb5607;
        text-align: left;
        }
        table {
        border-collapse: collapse;
        width: 100%;
        }
        th,
        td {
        padding: 10px;
        }
    </style>
</head>

<body>
    <h1>Laporan Data Perawatan</h1>
    <table>
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
            $result = $model->tampil_data();
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
                    </tr>
                <?php endforeach;
            } else { ?>
                <tr>
                     <td colspan="9">Belum Ada Data Pada Tabel Perawatan.</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>
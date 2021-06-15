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
    <h1>Laporan Data Klinik</h1>
    <table>
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
            } else { ?>
                <tr>
                     <td colspan="9">Belum Ada Data Pada Tabel Data Klinik.</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>
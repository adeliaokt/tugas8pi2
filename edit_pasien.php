<?php
$id_pasien = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_pasien($id_pasien);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Pasien</title>
</head>

<body>
    <h1>Edit Data Pasien</h1>
    <a href="pasien.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>ID Pasien</label>
        <br>
        <input type="text" name="id_pasien" value="<?php echo $data->id_pasien ?>">
        <br>
        <label>Nama Pasien</label>
        <br>
        <input type="text" name="nama_pasien" value="<?php echo $data->nama_pasien ?>">
        <br>
        <label>Umur</label>
        <br>
        <input type="text" name="umur" value="<?php echo $data->umur ?>">
        <br>
        <label>Jenis Kelamin</label>
        <br>
        <input type="text" name="jenis_kelamin" value="<?php echo $data->jenis_kelamin ?>">
        <br>
        <label>Alamat</label>
        <br>
        <input type="text" name="alamat" value="<?php echo $data->alamat ?>">
        <br>
        <label>Tanggal Pemeriksaan</label>
        <br>
        <input type="date" name="tgl_pemeriksaan" value="<?php echo $data->tgl_pemeriksaan ?>">
        <br>
        <label>Tanggal Perawatan</label>
        <br>
        <input type="date" name="tgl_perawatan" value="<?php echo $data->tgl_perawatan ?>">
        <br><br>
        <button type="submit" name="submit_edit_pasien">Submit</button>
    </form>
</body>

</html>
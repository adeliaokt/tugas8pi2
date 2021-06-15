<?php
$id_periksa = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_perawatan($id_perawatan);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Perawatan</title>
</head>

<body>
    <h1>Edit Data Perawatan</h1>
    <a href="perawatan.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>ID Perawatan</label>
        <br>
        <input type="text" name="no_pemeriksaan" value="<?php echo $data->id_perawatan ?>">
        <br>        
        <label>Nama Pasien</label>
        <br>
        <input type="text" name="nama_pasien" value="<?php echo $data->nama_pasien ?>">
        <br>
        <label>Tanggal Pemeriksaan</label>
        <br>
        <input type="date" name="tgl_pemeriksaan" value="<?php echo $data->tgl_pemeriksaan ?>">
        <br>        
        <label>Keluhan</label>
        <br>
        <input type="text" name="keluhan" value="<?php echo $data->keluhan ?>">
        <br>
        <label>Tanggal Perawatan</label>
        <br>
        <input type="date" name="tgl_perawatan" value="<?php echo $data->tgl_perawatan ?>">
        <br>         
        <label>Biaya</label>
        <br>
        <input type="text" name="biaya" value="<?php echo $data->biaya ?>">
        <br><br>
        <button type="submit" name="submit_edit_periksa">Submit</button>
    </form>
</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data Perawatan</title>
</head>

<body>
    <h1>Tambah</h1>
    <a href="perawatan.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
    <label>ID Perawatan</label>
        <br>
        <input type="text" name="id_perawatan">
        <br>        
        <label>Nama Pasien</label>
        <br>
        <input type="text" name="nama_pasien">
        <br>
        <label>Tanggal Pemeriksaan</label>
        <br>
        <input type="text" name="tgl_pemeriksaan">
        <br>
        <label>Keluhan</label>
        <br>
        <input type="text" name="keluhan">
        <br>
        <label>Tanggal Perawatan</label>
        <br>
        <input type="text" name="tgl_perawatan">
        <br>
        <label>Jenis Perawatan</label>
        <br>
        <input type="text" name="jenis_perawatan">
        <br>
        <label>Biaya</label>
        <br>
        <input type="text" name="biaya">
        <br><br>
        <button type="submit" name="submit_simpan_perawatan">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>
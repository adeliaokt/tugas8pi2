<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data Pasien</title>
</head>

<body>
    <h1>Tambah</h1>
    <a href="pasien.php">Kembali</a>
    <br><br>
    <form action="process.php" method="post">
        <label>ID Pasien</label>
        <br>
        <input type="text" name="id_pasien">
        <br>
        <label>Nama Pasien</label>
        <br>
        <input type="text" name="nama_pasien">
        <br>
        <label>Umur</label>
        <br>
        <input type="text" name="umur">
        <br>
        <label>Jenis Kelamin</label>
        <br>
        <input type="text" name="jenis_kelamin">
        <br>
        <label>Alamat</label>
        <br>
        <input type="text" name="alamat">
        <br>
        <label>Tanggal Pemeriksaan</label>
        <br>
        <input type="date" name="tgl_pemeriksaan">
        <br>
        <label>Tanggal Perawatan</label>
        <br>
        <input type="date" name="tgl_perawatan">
        <br>
        <button type="submit" name="submit_simpan_pasien">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>
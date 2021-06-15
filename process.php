<?php
include 'model.php';
if (isset($_POST['submit_simpan_pasien'])) {
 $id_pasien = $_POST['id_pasien'];
 $nama_pasien = $_POST['nama_pasien'];
 $umur = $_POST['umur'];
 $jenis_kelamin = $_POST['jenis_kelamin'];
 $alamat = $_POST['alamat'];
 $tgl_pemeriksaan = $_POST['tgl_pemeriksaan'];
 $tgl_perawatan = $_POST['tgl_perawatan'];
 $model = new Model();
 $model->insert_pasien($id_pasien, $nama_pasien, $umur, $jenis_kelamin, $alamat, $tgl_pemeriksaan , $tgl_perawatan);
 header('location:pasien.php');
}
if (isset($_POST['submit_edit_pasien'])) {
 $id_pasien = $_POST['id_pasien'];
 $nama_pasien = $_POST['nama_pasien'];
 $umur = $_POST['umur'];
 $jenis_kelamin = $_POST['jenis_kelamin'];
 $alamat = $_POST['alamat'];
 $tgl_pemeriksaan = $_POST['tgl_pemeriksaan'];
 $tgl_perawatan = $_POST['tgl_perawatan'];
 $model = new Model();
 $model->insert_pasien($id_pasien, $nama_pasien, $umur, $jenis_kelamin, $alamat, $tgl_pemeriksaan , $tgl_perawatan);
 header('location:pasien.php');
}
if (isset($_GET['id'])) {
 $id_pasien = $_GET['id'];
 $model = new Model();
 $model->delete_pasien($id_pasien);
 header('location:pasien.php');
}
//perawatan
if (isset($_POST['submit_simpan_perawatan'])) {
 $id_perawatan = $_POST['id_perawatan']; 
 $id_pasien = $_POST['id_pasien'];
 $nama_pasien = $_POST['nama_pasien'];
 $tgl_pemeriksaan = $_POST['tgl_pemeriksaan'];
 $keluhan = $_POST['keluhan'];
 $tgl_perawatan = $_POST['tgl_perawatan'];
 $jenis_perawatan = $_POST['jenis_perawatan'];
 $biaya = $_POST['biaya'];
 $model = new Model();
 $model->insert_perawatan($id_perawatan, $id_pasien, $nama_pasien, $tgl_pemeriksaan, $keluhan, $tgl_perawatan, $jenis_perawatan, $biaya);
 header('location:perawatan.php');
}
if (isset($_POST['submit_edit_perawatan'])) {
 $id_perawatan = $_POST['id_perawatan']; 
 $id_pasien = $_POST['id_pasien'];
 $nama_pasien = $_POST['nama_pasien'];
 $tgl_pemeriksaan = $_POST['tgl_pemeriksaan'];
 $keluhan = $_POST['keluhan'];
 $tgl_perawatan = $_POST['tgl_perawatan'];
 $jenis_perawatan = $_POST['jenis_perawatan'];
 $biaya = $_POST['biaya'];
 $model = new Model();
 $model->insert_perawatan($id_perawatan, $id_pasien, $nama_pasien, $tgl_pemeriksaan, $keluhan, $tgl_perawatan, $jenis_perawatan, $biaya);
 header('location:perawatan.php');
}
if (isset($_GET['id'])) {
 $id_perawatan = $_GET['id'];
 $model = new Model();
 $model->delete_perawatan($id_perawatan);
 header('location:perawatan.php');
}
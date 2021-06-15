<?php
include 'connection.php';
class Model extends Connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }
    //pasien
    public function insert_pasien($id_pasien, $nama_pasien, $umur, $jenis_kelamin, $alamat, $tgl_pemeriksaan, $tgl_perawatan)
    {
        $sql = "INSERT INTO tbl_pasien (id_pasien, nama_pasien, umur, jenis_kelamin, alamat, tgl_pemeriksaan, tgl_perawatan) 
        VALUES ('$id_pasien', '$nama_pasien', '$umur', '$jenis_kelamin', '$alamat', '$tgl_pemeriksaan', '$tgl_perawatan')";
        $this->conn->query($sql);
    }
    public function tampil_data_pasien()
    {
        $sql = "SELECT * FROM tbl_pasien";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
    public function edit_pasien($id)
    {
        $sql = "SELECT * FROM tbl_pasien WHERE id_pasien='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }
    public function update_pasien($id_pasien, $nama_pasien, $umur, $jenis_kelamin, $alamat, $tgl_pemeriksaan, $tgl_perawatan)
    {
        $sql = "UPDATE tbl_pasien SET nama_pasien='$nama_pasien', umur='$umur', jenis_kelamin='$jenis_kelamin', alamat='$alamat', tgl_pemeriksaan='$tgl_pemeriksaan', tgl_perawatan='$tgl_perawatan' WHERE id_pasien='$id_pasien'";
        $this->conn->query($sql);
    }
    public function delete_pasien($pasien_id)
    {
        $sql = "DELETE FROM tbl_pasien WHERE id_pasien='$pasien_id'";
        $this->conn->query($sql);
    }
    //perawatan
    public function insert_perawatan($id_perawatan, $id_pasien, $nama_pasien, $tgl_pemeriksaan, $keluhan, $tgl_perawatan, $jenis_perawatan, $biaya)
    {
        $sql = "INSERT INTO tbl_perawatan (id_perawatan, id_pasien, nama_pasien, tgl_pemeriksaan, keluhan, tgl_perawatan, jenis_perawatan, biaya) 
        VALUES ('$id_perawatan', '$id_pasien', '$nama_pasien', '$tgl_pemeriksaan', '$keluhan', '$tgl_perawatan', '$jenis_perawatan', '$biaya')";
        $this->conn->query($sql);
    }
    public function tampil_data_perawatan()
    {
        $sql = "SELECT * FROM tbl_perawatan";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
    public function edit_perawatan($no)
    {
        $sql = "SELECT * FROM tbl_perawatan WHERE id_perawatan='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
    }
    public function update_perawatan($id_perawatan, $id_pasien, $nama_pasien, $tgl_pemeriksaan, $keluhan, $tgl_perawatan, $jenis_perawatan, $biaya)
    {
        $sql = "UPDATE tbl_perawatan SET tgl_pemeriksaan='$tgl_pemeriksaan', id_pasien='$id_pasien', nama_pasien='$nama_pasien', keluhan='$keluhan', tgl_perawatan='$tgl_perawatan', jenis_perawatan='$jenis_perawatan' biaya='$biaya' WHERE no_pemeriksaan='$no_pemeriksaan'";
        $this->conn->query($sql);
    }
    public function delete_perawatan($perawatan_id)
    {
        $sql = "DELETE FROM tbl_perawatan WHERE id_perawatan='$perawatan_id'";
        $this->conn->query($sql);
    }

    //data klinik 
    public function tampil_data()
    {
        $sql = "SELECT tbl_pasien.*, tgl_pemeriksaan, keluhan FROM tbl_pasien INNER JOIN tbl_perawatan ON tbl_pasien.id_pasien = tbl_perawatan.id_pasien"; 
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
    }
        if (!empty($baris)) {
            return $baris;
        }
    }
}
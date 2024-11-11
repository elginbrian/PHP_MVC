<?php

class daftarBarang {
    private $daftar = [];

    public function __construct() {
        $this->db = new DB();
        $this->db->connect('mysql', 'localhost', 'root', 'IDF.Defender2004kotamalang', 'mvcapp');
    }

    public function getDataAll() {
        $stmt = "select * from daftarbarang";
        $query = $this->db->query($stmt);
        $data = [];
        while ($result = $this->db->fetch_array($query)) {
            $data[] = $result;
        }
        return $data;
    }

    public function getDataById($id) {
        $data = [];
        $stmt = "select * from daftarbarang where id = $id";
        $query = $this->db->query($stmt);
        $data = $this->db->fetch_array($query);

        return $data;
    }

    public function tambahBarang($param) {
        $stmt = "insert into daftarbarang (nama,kuantitas) values (:nama,:kuantitas)";
        $query = $this->db->query($stmt,$param);
        if ($this->db->last_id()>0){
            return true;
        }
        else {
            return false;
        }
    }

    public function updateBarang($param) {
        $stmt = "update daftarbarang set nama = :nama, kuantitas =:kuantitas where id = :id";
        $query = $this->db->query($stmt,$param);
        if ($query->rowCount()>0) {
            return true;
        }
        else {
            return false;
        }
    }

    public function hapusBarang($id) {
        $stmt = "delete from daftarbarang where id = $id";
        $query = $this->db->query($stmt,$param);
        if ($query->rowCount()>0) {
            return true;
        }
        else {
            return false;
        }
    }
} 
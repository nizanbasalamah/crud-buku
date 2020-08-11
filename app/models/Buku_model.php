<?php

class Buku_model extends Controller
{

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getBuku()
    {

        $query = "SELECT * FROM barang";

        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function getBukuById($id)
    {
        $query = "SELECT * FROM barang WHERE id=:id";
        $this->db->query($query);
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function addBuku($data)
    {
        $query = "INSERT INTO barang VALUES(null,:judul,:penerbit,:pengarang,:harga)";

        $this->db->query($query);
        $this->db->bind("judul", $data["judul"]);
        $this->db->bind("penerbit", $data["penerbit"]);
        $this->db->bind("pengarang", $data["pengarang"]);
        $this->db->bind("harga", $data["harga"]);

        $this->db->execute();
        return $this->db->rowCount();
    }
}

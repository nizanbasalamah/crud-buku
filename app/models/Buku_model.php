<?php

class Buku_model extends Controller{

    public function __construct(){
        $this->db = new Database;
    }
    public function getBuku(){
        
        $query = "SELECT * FROM barang";

        $this->db->query($query);
        return $this->db->resultSet();
    }
    public function getBukuById($id){
        $query = "SELECT * FROM barang WHERE id=:id";
        $this->db->query($query);
        $this->db->bind("id",$id);
        return $this->db->single();
    }
}
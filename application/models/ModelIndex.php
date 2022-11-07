<?php

class ModelIndex extends CI_Model
{
    var $table = "informasi; agenda; renungan; galeri; jadwal; kontak; tentang; pendeta; renungan; tema; social_media";
    var $primaryKey = "id_informasi; kode_warta; id_renungan; id; id_jadwal; id_kontak; id_tentang; id_pendeta; id_renungan; id_tema; id_sc";

    // function untuk get all data barang
    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    // function untuk get data by primary_key
    public function getByPrimaryKey($id)
    {
        $this->db->where($this->primaryKey, $id);
        return $this->db->get($this->table)->row();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function insertGetId($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function update($id, $data)
    {
        $this->db->where($this->primaryKey, $id);
        return $this->db->update($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->where($this->primaryKey, $id)->delete($this->table);
    }
}

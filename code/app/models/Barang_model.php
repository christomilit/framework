<?php 

class Barang_model {
    private $table = 'barang';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBarang()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getBarangById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataBarang($data)
    {
        $query = "INSERT INTO barang
                    VALUES
                  ('', :nama, :serialnumber, :merk, :jenis)";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('serialnumber', $data['serialnumber']);
        $this->db->bind('merk', $data['merk']);
        $this->db->bind('jenis', $data['jenis']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataBarang($id)
    {
        $query = "DELETE FROM barang WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function ubahDataBarang($data)
    {
        $query = "UPDATE barang SET
                    nama = :nama,
                    serialnumber = :serialnumber,
                    merk = :merk,
                    jenis = :jenis
                  WHERE id = :id";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('serialnumber', $data['serialnumber']);
        $this->db->bind('merk', $data['merk']);
        $this->db->bind('jenis', $data['jenis']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }


    public function cariDataBarang()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM barang WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

}
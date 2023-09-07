<?php

class comicModel
{

    private $table = 'comics';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getComics()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
    public function getComicsById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function insertDataComics($data)
    {
        $query = "INSERT INTO comics (judul, kategori, sinopsis, penulis, penerbit, sampul) VALUES (:judul, :kategori, :sinopsis, :penulis, :penerbit, :sampul)";

        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('kategori', $data['kategori']);
        $this->db->bind('sinopsis', $data['sinopsis']);
        $this->db->bind('penulis', $data['penulis']);
        $this->db->bind('penerbit', $data['penerbit']);
        $this->db->bind('sampul', $data['images']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteDataComics($id)
    {
        $query = "DELETE FROM comics WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function searchDataComics()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM comics WHERE judul LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

    public function updateDataComics($data)
    {
        $query = "UPDATE comics SET judul = :newjudul, kategori = :newkategori, sinopsis = :newsinopsis, penulis= :newpenulis, penerbit = :newpenerbit WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('newjudul', $data['newjudul']);
        $this->db->bind('newkategori', $data['newkategori']);
        $this->db->bind('newsinopsis', $data['newsinopsis']);
        $this->db->bind('newpenulis', $data['newpenulis']);
        $this->db->bind('newpenerbit', $data['newpenerbit']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}

<?php

class contactModel
{

    private $table = 'contact';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function contactMe($data)
    {
        $query = "INSERT INTO contact VALUES ('', :nama, :email, :pesan)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('pesan', $data['pesan']);


        $this->db->execute();

        return $this->db->rowCount();
    }
}

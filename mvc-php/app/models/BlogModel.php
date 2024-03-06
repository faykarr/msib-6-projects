<?php
class BlogModel 
{
    private $table = 'blog';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // getAllBlogs
    public function getAllBlogs()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultAll();
    }

    // getBlogById
    public function getBlogById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind(':id', $id);
        return $this->db->resultSingle();
    }

    // tambahDataBlog
    public function tambahDataBlog($data)
    {
        $query = "INSERT INTO blog VALUES ('', :judul, :penulis, :tulisan)";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('penulis', $data['penulis']);
        $this->db->bind('tulisan', $data['tulisan']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // hapusDataBlog
    public function hapusDataBlog($id)
    {
        $query = "DELETE FROM blog WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

}

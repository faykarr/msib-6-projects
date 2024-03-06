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
        $query = "INSERT INTO blog VALUES ('', :judul, :tulisan, :penulis)";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('tulisan', $data['tulisan']);
        $this->db->bind('penulis', $data['penulis']);
        $this->db->execute();
        return $this->db->rowCount();
    }

}

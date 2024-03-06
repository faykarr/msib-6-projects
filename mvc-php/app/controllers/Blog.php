<?php
class Blog extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Blog | MVC PHP',
            'blog' => $this->model('BlogModel')->getAllBlogs()
        ];
        $this->view('templates/header', $data);
        $this->view('blog/index', $data);
        $this->view('templates/footer', $data);
    }

    // detail
    public function detail($id)
    {
        $data = [
            'title' => 'Detail Blog | MVC PHP',
            'blog' => $this->model('BlogModel')->getBlogById($id)
        ];
        $this->view('templates/header', $data);
        $this->view('blog/detail', $data);
        $this->view('templates/footer', $data);
    }

    // insert
    public function tambah()
    {
        $flash = new Flash();
        if ($this->model('BlogModel')->tambahDataBlog($_POST) > 0) {
            $flash->setFlashMessage('sukses', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . 'blog');
            exit;
        } else {
            $flash->setFlashMessage('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . 'blog');
            exit;
        }
    }

    // delete
    public function delete($id)
    {
        $flash = new Flash();
        if ($this->model('BlogModel')->hapusDataBlog($id) > 0) {
            $flash->setFlashMessage('sukses', 'dihapus', 'success');
            header('Location: ' . BASE_URL . 'blog');
            exit;
        } else {
            $flash->setFlashMessage('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . 'blog');
            exit;
        }
    }
}

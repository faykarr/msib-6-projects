<?php
class Blog extends Controller
{
    public function index() {
        $data = [
            'title' => 'Blog | MVC PHP',
            'blog' => $this->model('BlogModel')->getAllBlogs()
        ];
        $this->view('templates/header', $data);
        $this->view('blog/index', $data);
        $this->view('templates/footer', $data);
    }

    // detail
    public function detail($id) {
        $data = [
            'title' => 'Detail Blog | MVC PHP',
            'blog' => $this->model('BlogModel')->getBlogById($id)
        ];
        $this->view('templates/header', $data);
        $this->view('blog/detail', $data);
        $this->view('templates/footer', $data);
    }
}

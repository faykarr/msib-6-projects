<?php
class Blog extends Controller
{
    public function index() {
        $data = [
            'title' => 'Blog | MVC PHP',
            'blog' => $this->model('BlogModel')->getAllBlog()
        ];
        $this->view('templates/header', $data);
        $this->view('blog/index', $data);
        $this->view('templates/footer', $data);
    }
}

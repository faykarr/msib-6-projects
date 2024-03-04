<?php
class User extends Controller
{
    public function index()
    {
        $data['title'] = 'User';
        $this->view('templates/header', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer', $data);
    }

    public function profile($nama = 'Rizky', $pekerjaan = 'Programmer')
    {
        $data = [
            'title' => 'Profile',
            'nama' => $nama,
            'pekerjaan' => $pekerjaan
        ];
        $this->view('templates/header', $data);
        $this->view('user/profile', $data);
        $this->view('templates/footer', $data);
    }
}

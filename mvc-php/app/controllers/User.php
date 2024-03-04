<?php
class User extends Controller
{
    public function index()
    {
        echo 'user/index';
    }
    public function profile($nama = 'Faykar', $pekerjaan = 'Teknisi Jaringan & Server Kampus STMIK Widya Pratama Pekalongan')
    {
        echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
    }
}

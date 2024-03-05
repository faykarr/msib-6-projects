<?php
class UserModel {
    private $nama = 'PT Otak Kanan';
    public function getUser()
    {
        return $this->nama;
    }
}
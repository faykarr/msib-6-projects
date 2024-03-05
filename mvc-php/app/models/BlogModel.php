<?php
class BlogModel 
{
    private $blog = [
        [
            'penulis' => "Faykar",
            'judul' => 'Belajar PHP MVC',
            'tulisan' => 'Belajar PHP MVC itu menyenangkan, apalagi setelah paham!'
        ],
        [
            'penulis' => "J.K Rowling",
            'judul' => 'Harry Potter dan Batu Bertuah',
            'tulisan' => 'Sebuah novel tentang seorang penyihir muda yang bernama Harry Potter.'
        ],
        [
            'penulis' => "Tere Liye",
            'judul' => 'Bumi',
            'tulisan' => 'Sebuah novel tentang seorang anak yang bernama Bumi.'
        ],
    ];

    public function getAllBlog()
    {
        return $this->blog;
    }
}

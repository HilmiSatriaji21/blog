<?php 
class Database
{
    public $host = "localhost", $user = "root", $pass = 123, $db = "blog-hilmi";
    public $koneksi;
    public function __construct()
    {
        $this->koneksi = mysqli_connect(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );
        if ($this->koneksi){
            // echo "berhasil";
        }else {
            echo "Koneksi Database Gagal";
        }
    }
}

$db = new Database();
// Kategori
include 'kategori.php';
// Artikel
include 'artikel.php';
?>
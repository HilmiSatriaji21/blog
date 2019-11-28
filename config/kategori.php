<?php
class Kategori extends Database
{
    // Menampilkan Semua Data
    public function index()
    {
        $datakategori = mysqli_query(
            $this->koneksi,
            "select * from kategori"
        );
        // var_dump($datakategori);
        return $datakategori;
    }
    // Menambah Data
    public function create($nama, $slug)
    {
        mysqli_query(
            $this->koneksi,
            "select * from kategori where id='$id'"
        );
        return $datakategori;
    }
    // Menampilkan Data Berdasarkan Id
    public function edit($id)
    {
        $datakategori = mysqli_query(
            $this->koneksi,
            "select * from kategori where id='$id'"
        );
        return $datakategori;
    }
    // Mengupdate Data Berdasarkan Id
    public function update($id, $nama, $slug)
    {
        mysqli_query(
            $this->koneksi,
            "update kategori set nama='$nama',slug='$slug' where id='$id'"
        );
    }
    // Menghapus Data Berdasarkan Id
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from kategori where id='$id'");
    }
}
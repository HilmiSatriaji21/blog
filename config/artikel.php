<?php
class Artikel extends Database
{
    // Menampilkan Semua Data
    public function index()
    {
        $data_artikel = mysqli_query(
            $this->koneksi,
            "SELECT artikel.id, artikel.judul, artikel.foto,
            artikel.tgl, artikel.slug, kategori.nama as nama_kategori,
            users,nama FROM ((artikel JOIN kategori ON kategori.id =
            artikel.id_kategori)
            JOIN users ON users.id = artikel.id_user)"
        );
        // var_dump($data_artikel);
        return $data_artikel;
    }
    public function get_kategori()
    {
        $kategori = mysqli_query($this->koneksi, "SELECT * FROM kategori");
        // var_dump($kategori);
        return $kategori;
    }
    // Menambah Data
    public function create(
        $judul,
        $slug,
        $konten,
        $foto,
        $tgl,
        $id_user,
        $id_kategori
    ){
        mysqli_query(
            $this->koneksi,
            "insert into artikel values(null,'$judul','$slug', '$konten',
            '$foto', '$tgl','$id_user', '$id_kategori')"
        );
    }
    // Menampilkan Data Berdasarkan ID
    public function show($id)
    {
        $data_artikel = mysqli_query(
            $this->koneksi,
            "select * from artikel where id='$id'"
        );
        return $data_artikel;
    }
    // Menampilkan Data Berdasarkan Id
    public function edit($id)
    {
        $data_artikel = mysqli_query(
            $this->koneksi,
            "select * from artikel where id='$id'"
        );
        return $data_artikel;
    }
    // Meng-Update Data Berdasarkan Id
    public function update($id,$judul,$slug,$konten,$foto,$tgl,$id_user)
    {
        mysqli_query(
            $this->koneksi,
            "update artikel set judul='$judul', slug='$slug',
            konten='$konten', foto='$foto',tgl='$tgl', id_user='$id_user',
            id_kategori='$id_kategori' where id='$id'"
        );
    }
    // Menghapus Data Berdasarkan ID
    public function delete($id)
    {
        mysqli_query($this->koneksi, "delete from artikel where id='$id'");
    }
}
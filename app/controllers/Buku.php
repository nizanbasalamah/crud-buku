<?php


class Buku extends Controller
{

    public function index()
    {
        $data["judul"] = "Halaman Buku";
        $data["buku"] = $this->model('Buku_model')->getBuku();
        $this->view('templates/header', $data);
        $this->view('buku/index', $data);
        $this->view('templates/header');
    }
    public function detail($id)
    {
        $data["judul"] = "Detail Buku";
        $data["buku"] = $this->model('Buku_model')->getBukuById($id);
        $this->view('templates/header', $data);
        $this->view('buku/detail', $data);
        $this->view('templates/header');
    }

    public function tambah()
    {
        $data["judul"] = "Tambah Buku";
        $this->view('templates/header', $data);
        $this->view('buku/tambah');
        $this->view('templates/header');
    }

    public function menambahkan()
    {
        if ($this->model("Buku_model")->addBuku($_POST) > 0) {
            Flasher::setFlash('buku', 'berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . 'buku');
            exit;
        } else {
            Flasher::setFlash('buku', 'gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . 'buku');
            exit;
        }
    }
}

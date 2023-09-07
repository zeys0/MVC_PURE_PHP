<?php

class Comics extends Controller
{
    public function index()
    {
        session_start();
        if (!isset($_SESSION['login'])) {
            header("Location: " . BASEURL . '/Login');
            exit;
        }
        $data['title'] = 'Data Comics';
        $data['comics'] = $this->model('comicModel')->getComics();
        $this->view('template/header', $data);
        $this->view('comics/index', $data);
        $this->view('template/footer');
    }
    public function detail($id)
    {
        session_start();
        if (!isset($_SESSION['login'])) {
            header("Location: " . BASEURL . '/Login');
            exit;
        }
        $data['title'] = 'Detail Comics';
        $data['comics'] = $this->model('comicModel')->getComicsById($id);
        $this->view('detail/navbar', $data);
        $this->view('comics/detail', $data);
        $this->view('detail/footer');
    }

    public function formInsert()
    {
        session_start();
        if (!isset($_SESSION['login'])) {
            header("Location: " . BASEURL . '/Login');
            exit;
        }
        $data['title'] = 'Insert Data Comics';
        $this->view('detail/navbar', $data);
        $this->view('comics/formInsert');
        $this->view('detail/footer');
    }

    public function insert()
    {
        session_start();

        if ($this->model('comicModel')->insertDataComics($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'bg-green-500');
            header('Location:' . BASEURL . '/Comics');
            exit;
        } else
            Flasher::setFlash('Gagal', 'ditambahkan', 'bg-red-500');
        header('Location:' . BASEURL . '/Comics');
        exit;
    }
    public function delete($id)
    {
        session_start();

        if ($this->model('comicModel')->deleteDataComics($id) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'bg-green-500');
            header('Location:' . BASEURL . '/Comics');
            exit;
        } else
            Flasher::setFlash('Gagal', 'dihapus', 'bg-red-500');
        header('Location:' . BASEURL . '/Comics');
        exit;
    }

    public function search()
    {
        $data['title'] = 'Data Comics';
        $data['comics'] = $this->model('comicModel')->searchDataComics();
        $this->view('template/header', $data);
        $this->view('comics/index', $data);
        $this->view('template/footer');
    }

    // public function formUpdate($data)
    // {
    //     $data['title'] = 'Update Data';
    //     $data['comics'] = $this->model('comicModel')->updateDataComics($data);
    //     $this->view('detail/navbar', $data);
    //     $this->view('comics/update', $data);
    //     $this->view('detail/footer');
    // }
    // public function update()
    // {
    //     session_start();

    //     if ($this->model('comicModel')->insertDataComics($_POST) > 0) {
    //         Flasher::setFlash('Berhasil', 'ditambahkan', 'bg-green-500');
    //         header('Location:' . BASEURL . '/Comics');
    //         exit;
    //     } else
    //         Flasher::setFlash('Gagal', 'ditambahkan', 'bg-red-500');
    //     header('Location:' . BASEURL . '/Comics');
    //     exit;
    // }
}

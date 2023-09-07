<?php

class Home  extends Controller
{
    public function index()
    {
        session_start();
        if (!isset($_SESSION['login'])) {
            header("Location: " . BASEURL . '/Login');
            exit;
        }
        $data['title'] = 'Home';
        $this->view('template/header', $data);
        $this->view('home/index');
        $this->view('template/contact');
        $this->view('template/footer');
    }
}

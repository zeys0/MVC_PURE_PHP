<?php
class Login extends Controller
{
    public function index()
    {
        session_start();
        if (isset($_SESSION['login'])) {
            header("Location: " . BASEURL . '/Home');
            exit;
        }
        $this->view('login/login');
    }

    public function registrasi()
    {
        if (isset($_SESSION['login'])) {
            header("Location: " . BASEURL . '/Home');
            exit;
        }
        $this->view('login/registrasi');
    }
}

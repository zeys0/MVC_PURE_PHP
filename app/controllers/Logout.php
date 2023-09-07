<?php
class Logout extends Controller
{

    public function index()
    {
        session_start();
        $_SESSION = [];
        session_unset();
        // Hapus semua data session
        session_destroy();

        // Arahkan pengguna kembali ke halaman login setelah logout
        header("Location: " . BASEURL . '/Login');
        exit;
    }
}

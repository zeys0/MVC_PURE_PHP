<?php

class Contact extends Controller
{

    public function pesan()
    {
        session_start();

        if ($this->model('contactModel')->contactMe($_POST) > 0) {
            FlasherContact::setFlash('Messagge', 'Pesan anda berhasil dikirim', 'border-green-500');
            header('Location:' . BASEURL . '/Home');
            exit;
        } else
            FlasherContact::setFlash('Message', 'Pesan anda gagal dikirim', 'border-red-500');
        header('Location:' . BASEURL . '/Home');
        exit;
    }
}

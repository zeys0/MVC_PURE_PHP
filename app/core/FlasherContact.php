<?php
class FlasherContact
{
    // INI SESSION SAYA
    public static function setFlash($pesan, $aksi, $type)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'type' => $type
        ];
    }
    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '
            <div class="bg-blue-100 border-t border-b rounded-md ' . $_SESSION['flash']['type'] . ' text-green-700 px-4 py-3" role="alert">
                <p class="font-bold">' . $_SESSION['flash']['pesan'] . '</p>
                <p class="text-sm">' . $_SESSION['flash']['aksi'] . '</p>
            </div>';

            unset($_SESSION['flash']);
        }
    }
}

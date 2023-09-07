<?php
class Flasher
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
            echo '<div class=" border border-slate-800 ' . $_SESSION['flash']['type'] . ' bg-opacity-80 px-4 py-3 rounded-md relative" role="alert">
            Data Comics <strong class="font-bold">' . $_SESSION['flash']['pesan'] . '</strong>
            <span class="block sm:inline">' . $_SESSION['flash']['aksi'] . '</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3 alert-close">
              <svg class="fill-current h-6 w-6 text-slate-800" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </span>
          </div>';

            unset($_SESSION['flash']);
        }
    }
}

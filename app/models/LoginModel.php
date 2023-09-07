<?php

class LoginModel
{

    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function registrasi($data)
    {
        $username = strtolower($data['username']);
        $email = $data['email'];
        $password = $data['password'];
        $password2 = $data['password2'];

        // Lakukan validasi data, misalnya:
        if ($password !== $password2) {
            echo "<script>
        alert('Konfirmasi password tidak sesuai!');
        </script>";
            return false;
        }

        // Lakukan pengecekan apakah username sudah ada di database
        $this->db->query("SELECT * FROM $this->table WHERE username = :username");
        $this->db->bind(':username', $username);
        $this->db->execute();

        // Jika username sudah ada di database, berikan pesan kesalahan
        if ($this->db->rowCount() > 0) {
            echo "<script>
        alert('Username sudah digunakan. Silahkan pilih username lain.');
        </script>";
            return false;
        }

        // Jika data telah divalidasi dengan benar dan username belum ada di database, Anda bisa menyimpannya ke database
        // Misalnya, untuk menyimpan password, gunakan password_hash() untuk mengenkripsi password sebelum disimpan.
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $this->db->query("INSERT INTO $this->table (username, email, password) VALUES (:username, :email, :password)");
        $this->db->bind(':username', $username);
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $hashedPassword);

        $this->db->execute();

        // Jika registrasi berhasil, berikan pesan berhasil

        return 1;
    }

    public function login($data)
    {
        session_start();

        $username = strtolower($data['username']);
        $password = $data['password'];

        // Cari data pengguna berdasarkan username
        $this->db->query("SELECT * FROM $this->table WHERE username = :username");
        $this->db->bind(':username', $username);
        $this->db->execute();

        // Ambil hasil query sebagai array asosiatif
        $user = $this->db->single();

        // Periksa apakah data pengguna ditemukan
        if ($this->db->rowCount() > 0) {
            // Data pengguna ditemukan, lakukan pengecekan password
            $hashedPassword = $user['password'];
            if (password_verify($password, $hashedPassword)) {

                // set Session
                $_SESSION['login'] = true;

                // Password cocok, berikan akses ke halaman berikutnya (misalnya halaman utama)
                // Misalnya, Anda bisa redirect ke halaman berikutnya dengan kode seperti berikut:
                header("Location:" . BASEURL . '/Loading');
                exit;
            } else {

                // Password tidak cocok, tampilkan pesan error atau notifikasi
                echo "<script>
              elert('Password salah');
                  
            </script>";
            }
        } else {
            // Data pengguna tidak ditemukan, tampilkan pesan error atau notifikas
            echo "<script>
           alert('data pengguna tidak ditemukan');
        </script>";
        }
    }
}

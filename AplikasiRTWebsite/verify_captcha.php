<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $captcha_input = $_POST['captcha'];

  // Verifikasi CAPTCHA
  if ($captcha_input == $_SESSION['captcha_answer']) {
    // CAPTCHA benar, lanjutkan ke proses login
    if ($username === 'warga' && $password === 'rt04') {
      echo 'Login berhasil!';
      // Proses login
    } else {
      echo 'Username atau Password salah!';
    }
  } else {
    // CAPTCHA salah
    echo 'Jawaban CAPTCHA salah, silakan coba lagi!';
  }

  // Hapus sesi CAPTCHA setelah verifikasi
  unset($_SESSION['captcha_answer']);
}
?>

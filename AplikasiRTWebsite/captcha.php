<?php
session_start();

// Menghasilkan dua angka acak untuk soal matematika
$angka1 = rand(1, 10);
$angka2 = rand(1, 10);

// Membuat soal matematika (penjumlahan)
$question = "$angka1 + $angka2";
$answer = $angka1 + $angka2;

// Menyimpan jawaban yang benar di sesi
$_SESSION['captcha_answer'] = $answer;

// Mengirimkan soal dalam format JSON ke klien
echo json_encode(['question' => $question]);
?>

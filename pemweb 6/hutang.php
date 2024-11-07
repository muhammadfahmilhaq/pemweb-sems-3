<?php
// Diberikan
$pemasukan = 50000000; // Pemasukan
$hutang_a = 16500000;  // Hutang a
$bunga_hutang_a = 0.05; // Bunga Hutang a (5%)
$hutang_b = 9500000;   // Hutang b
$bunga_hutang_b = 0.045; // Bunga Hutang b (4.5%)

// Langkah 1: Hitung total bunga hutang
$total_bunga_hutang = ($hutang_a * $bunga_hutang_a) + ($hutang_b * $bunga_hutang_b);

// Langkah 2: Hitung total hutang
$total_hutang = $hutang_a + $hutang_b;

// Langkah 3: Hitung sisa uang
$sisa_uang = $pemasukan - ($total_hutang + $total_bunga_hutang);

// Tampilkan hasil
echo "Sisa uang: " . number_format($sisa_uang, 2, ',', '.') . "\n";
echo "Jumlah total bunga hutang: " . number_format($total_bunga_hutang, 2, ',', '.') . "\n";
echo "Jumlah total hutang: " . number_format($total_hutang, 2, ',', '.') . "\n";
?>
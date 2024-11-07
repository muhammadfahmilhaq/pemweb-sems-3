<?php
$pemasukan = 50000000; 
$hutang_a = 16500000;  
$bunga_hutang_a = 0.05; 
$hutang_b = 9500000;
$bunga_hutang_b = 0.045;
$total_bunga_hutang = ($hutang_a * $bunga_hutang_a) + ($hutang_b * $bunga_hutang_b);
$total_hutang = $hutang_a + $hutang_b;
$sisa_uang = $pemasukan - ($total_hutang + $total_bunga_hutang);
echo "Sisa uang: " . number_format($sisa_uang, 2, ',', '.') . "\n";
echo "Jumlah total bunga hutang: " . number_format($total_bunga_hutang, 2, ',', '.') . "\n";
echo "Jumlah total hutang: " . number_format($total_hutang, 2, ',', '.') . "\n";
?>